<?php

class DB {

    private $con;

    public function __construct() {
        require 'connection.php';
        $connection = new Connection();
        $this->con = $connection->getConnection();
    }

    public function isUserExist($handle) {
        $query = "SELECT email from users where email='$handle'";
        $res = mysqli_query($this->con, $query);
        $numOfRows = mysqli_num_rows($res);
        if ($numOfRows > 0) {
            return TRUE; // User Already Exists
        }
        return FALSE; // User Never Exists
    }

    public function checkLogin($email, $password) {
        $result = mysqli_query($this->con, "SELECT * FROM users where email='$email'");
        $numOfRows = mysqli_num_rows($result);
        if ($numOfRows > 0) {
            $result = mysqli_fetch_array($result);
            $salt = $result['salt'];
            $encrypted_password = $result['en_pass'];
            $hash = $this->checkhashSSHA($salt, $password);
            if ($encrypted_password == $hash) {
                return $result;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function base_url() {
        $config['base_url'] = $_SERVER['DOCUMENT_ROOT'] . "/" . "HelplinePlus/";
        $config['upload_url'] = $_SERVER['DOCUMENT_ROOT'] . "/" . "HelplinePlus/assets/img/faces/";
        return $config;
    }

    private function hashSSHA($password) {
        $salt1 = sha1(rand());
        $salt = substr($salt1, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    private function checkhashSSHA($salt, $password) {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        return $hash;
    }

    public function uploadImage($FILES, $key) {

        $url = $this->base_url();

        $picName = uniqid('', TRUE);

        $tempFile = $FILES[$key]['tmp_name'];

        $targetPath = $url['upload_url'];

        $preFileName = $FILES[$key]['name'];

        $sp = explode(".", $preFileName);
        $ln = count($sp);
        $conFile = $picName . '.' . $sp[$ln - 1];
        $targetFile = $targetPath . $conFile;
        if (move_uploaded_file($tempFile, $targetFile)) {
            return $conFile;
        }
        return "";
    }

    public function updateImage($email, $img) {
        $sql1 = "SELECT img_url FROM users where email='$email'";
        $res1 = mysqli_query($this->con, $sql1);
        $row = mysqli_fetch_assoc($res1);
        $image = $row['img_url'];
        $base_url = $this->base_url();
        $image_url = $base_url['upload_url'] . $image;
        unlink($image_url); //Delete old photo

        $sql = "UPDATE users set img_url='$img' where email='$email'";
        $res = mysqli_query($this->con, $sql);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateUserLocation($update_user, $ref) {
        $sql = "UPDATE locations SET house_no='" . $update_user['house'] . "',road_no='" . $update_user['road'] . "',
                                     area_name='" . $update_user['area'] . "',city='" . $update_user['city'] . "',
                                     zip='" . $update_user['zip'] . "',country='" . $update_user['country'] . "'
                WHERE ref_key='$ref'";
        $res = mysqli_query($this->con, $sql);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateUserMobile($update_user, $ref) {
        $sql = "UPDATE mobile_numbers SET numbers='" . $update_user['numbers'] . "'
                WHERE ref_key='$ref'";
        $res = mysqli_query($this->con, $sql);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateUserDonorInfo($update_user, $id) {
        $sql = "UPDATE blood_donor SET blood_group='" . $update_user['blood_group'] . "',last_donate_date='" . $update_user['donate_date'] . "'
                WHERE bid=$id";
        $res = mysqli_query($this->con, $sql);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateUser($update_user) {
        $sql = "UPDATE users SET fname='" . $update_user['fname'] . "',lname='" . $update_user['lname'] . "'
                WHERE email='" . $update_user['email'] . "'";
        $res = mysqli_query($this->con, $sql);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateUserDetails($update_user) {
        $userId = $this->getUserId($update_user['email']);

        $sql = "SELECT ref_key FROM users WHERE uid=$userId";
        $res = mysqli_query($this->con, $sql);
        $ref_key = mysqli_fetch_assoc($res);
        $ref_key = $ref_key['ref_key'];

        $res1 = $this->updateUser($update_user);
        $res2 = $this->updateUserLocation($update_user, $ref_key);
        $res3 = $this->updateUserMobile($update_user, $ref_key);
        $res4 = $this->updateUserDonorInfo($update_user, $userId);

        if ($res1 && $res2 && $res3 && $res4) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getUserId($email) {
        $query = "SELECT uid from users where email='$email'";
        $res = mysqli_query($this->con, $query);
        if ($res) {
            $row = mysqli_fetch_assoc($res);
            return $row['uid'];
        }
        return -1; // User Not found
    }

    public function addLocation($info, $ref) {
        $houseNo = $info['house'];
        $roadNo = $info['road'];
        $areaName = $info['area'];
        $city = $info['city'];
        $postalCode = $info['zip'];
        $country = $info['country'];

        $query = "INSERT INTO locations(ref_key, house_no, road_no, area_name, city, zip, country) VALUES ('$ref' , '$houseNo' , '$roadNo' , '$areaName' , '$city' , '$postalCode' , '$country')";
        $res = mysqli_query($this->con, $query);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addMobileNumber($info, $ref) {
        $mobileNumber = $info['number'];

        $query = "INSERT INTO mobile_numbers(ref_key, numbers) VALUES ('$ref' , '$mobileNumber')";
        $res = mysqli_query($this->con, $query);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addBloodDonor($info, $id) {
        $bloodGroup = $info['blood_group'];
        $lDonate = $info['last_donate'];

        $query = "INSERT INTO blood_donor(bid, blood_group, last_donate_date) VALUES ('$id' , '$bloodGroup', '$lDonate')";
        $res = mysqli_query($this->con, $query);

        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addNewUser($info) {

        $password = $info['password'];
        $fName = $info['fName'];
        $lName = $info['lName'];
        $email = $info['email'];
        $img = $info['image'];


        $ref_key = uniqid('', TRUE);

        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash['encrypted']; // encrypted password
        $salt = $hash['salt']; // salt

        $query = "INSERT INTO users(fname, lname, email, en_pass, salt, img_url, ref_key) VALUES ('$fName' , '$lName' , '$email' , '$encrypted_password' , '$salt' , '$img' , '$ref_key')";
        $res = mysqli_query($this->con, $query);

        if ($res) {
            $uid = $this->getUserId($email);
            return $this->addLocation($info, $ref_key) && $this->addMobileNumber($info, $ref_key) && $this->addBloodDonor($info, $uid);
        } else {
            return FALSE;
        }
    }

    public function getSecurityDetails() {
        $sql = "SELECT name,category,email,numbers,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM security,mobile_numbers,locations
                WHERE(security.ref_key=locations.ref_key) AND (security.ref_key=mobile_numbers.ref_key)";

        return mysqli_query($this->con, $sql);
    }

    public function getSecurityDetailsViaFilter($filter) {
        if ($filter === "") {
            return $this->getSecurityDetails();
        }

        $sql = "SELECT name,category,email,numbers,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM security,mobile_numbers,locations
                WHERE(security.ref_key=locations.ref_key) AND (security.ref_key=mobile_numbers.ref_key)
                AND ((security.name LIKE '%$filter%') OR (security.category LIKE '%$filter%') OR (locations.area_name LIKE '%$filter%'))";

        return mysqli_query($this->con, $sql);
    }

    public function getfireDetails() {
        $sql = "SELECT name,email,numbers,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM fire_brigade,mobile_numbers,locations
                WHERE(fire_brigade.ref_key=locations.ref_key) AND (fire_brigade.ref_key=mobile_numbers.ref_key)";

        return mysqli_query($this->con, $sql);
    }

    public function getfireDetailsViaFilter($filter) {
        if ($filter === "") {
            return $this->getfireDetails();
        }
        $sql = "SELECT name,email,numbers,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM fire_brigade,mobile_numbers,locations
                WHERE(fire_brigade.ref_key=locations.ref_key) AND (fire_brigade.ref_key=mobile_numbers.ref_key)
                AND ((fire_brigade.name LIKE '%$filter%') OR (locations.area_name LIKE '%$filter%'))";

        return mysqli_query($this->con, $sql);
    }

    public function getHospitalDetails() {
        $sql = "SELECT name,category,email,service_time,numbers,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM hospital,mobile_numbers,locations
                WHERE(hospital.ref_key=locations.ref_key) AND (hospital.ref_key=mobile_numbers.ref_key)";

        return mysqli_query($this->con, $sql);
    }

    public function getHospitalDetailsViaFilter($filter) {
        if ($filter === "") {
            return $this->getHospitalDetails();
        }

        $sql = "SELECT name,category,email,service_time,numbers,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM hospital,mobile_numbers,locations
                WHERE(hospital.ref_key=locations.ref_key) AND (hospital.ref_key=mobile_numbers.ref_key)
                AND ((hospital.name LIKE '%$filter%') OR (hospital.category LIKE '%$filter%') OR (locations.area_name LIKE '%$filter%'))";

        return mysqli_query($this->con, $sql);
    }

    public function getDoctorDetails() {
        $sql = "SELECT D.name AS doctor_name,D.specialist,D.email,D.service_time,M.numbers,CONCAT('House No: ' ,L.house_no,', Road No : '  ,L.road_no,', ' ,L.area_name,', ',L.city,'- ',L.zip,', ',L.country) AS location,H.name AS hospital_name
                FROM doctor AS D,mobile_numbers AS M,locations AS L,hospital AS H
                WHERE(D.ref_key=L.ref_key) AND (D.ref_key=M.ref_key) AND (D.hid=H.hid)";

        return mysqli_query($this->con, $sql);
    }

    public function getDoctorDetailsViaFilter($filter) {
        $sql = "SELECT D.name AS doctor_name,D.specialist,D.email,D.service_time,M.numbers,CONCAT('House No: ' ,L.house_no,', Road No : '  ,L.road_no,', ' ,L.area_name,', ',L.city,'- ',L.zip,', ',L.country) AS location,H.name AS hospital_name
                FROM doctor AS D,mobile_numbers AS M,locations AS L,hospital AS H
                WHERE(D.ref_key=L.ref_key) AND (D.ref_key=M.ref_key) AND (D.hid=H.hid)
                AND ((D.name LIKE '%$filter%') OR (D.specialist LIKE '%$filter%') OR (L.area_name LIKE '%$filter%') OR (H.name LIKE '%$filter%'))";

        return mysqli_query($this->con, $sql);
    }

    public function getDonerDetails() {
        $sql = "SELECT CONCAT(fname,' ',lname) AS name,email,blood_group,numbers,last_donate_date,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM users,blood_donor,mobile_numbers,locations
                WHERE(blood_donor.bid=users.uid) AND (users.ref_key=locations.ref_key) AND (users.ref_key=mobile_numbers.ref_key)";

        return mysqli_query($this->con, $sql);
    }

    public function getDonerDetailsViaFilter($filter) {
        if ($filter === "") {
            return $this->getDonerDetails();
        }

        $sql = "SELECT CONCAT(fname,' ',lname) AS name,email,blood_group,numbers,last_donate_date,CONCAT('House No: ' , house_no,', Road No : '  , road_no,', ' ,area_name,', ',city,'- ',zip,', ',country) AS location
                FROM users,blood_donor,mobile_numbers,locations
                WHERE(blood_donor.bid=users.uid) AND (users.ref_key=locations.ref_key) AND (users.ref_key=mobile_numbers.ref_key)
                AND ((users.fname LIKE '%$filter%') OR (users.lname LIKE '%$filter%') OR (blood_donor.blood_group LIKE '%$filter%') OR (locations.area_name LIKE '%$filter%'))";

        return mysqli_query($this->con, $sql);
    }

    public function getUserDetails($email) {
        $sql = "SELECT fname,lname,email,img_url,blood_group,numbers,last_donate_date,house_no,road_no,area_name,city,zip,country
                FROM users,blood_donor,mobile_numbers,locations
                WHERE (users.uid=blood_donor.bid) AND (users.ref_key=locations.ref_key) AND (users.ref_key=mobile_numbers.ref_key) AND (email='$email')";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return $res;
        } else {
            return FALSE;
        }
    }

    public function updatePassword($email, $password) {
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
        $query = "UPDATE users set en_pass='$encrypted_password',salt='$salt' where email='$email'";
        $res = mysqli_query($this->con, $query);
        if ($res) {
            return TRUE;
        }
        return FALSE;
    }

    public function currentDate() {//theUserDefineDate
        $theDate = gmdate("d-m-Y");
        return $theDate;
    }

    //functions for post start
    public function addNewQuickPost($postDetails) {

        $details = $postDetails['pdetails'];
        $cat = $postDetails['category'];
        $cDate = $this->currentDate();
        $uId = $this->getUserId($postDetails['email']);

        $query = "INSERT INTO posts(uid, post_details, category, create_date) VALUES ('$uId' , '$details' , '$cat' , '$cDate')";

        $res = mysqli_query($this->con, $query);

        if ($res) {
            return TRUE;
        }
        return FALSE;
    }
    
    public function getAllPost(){
        $query = "SELECT * FROM posts ORDER BY pid DESC";
        $res = mysqli_query($this->con, $query);

        if ($res) {
            return $res;
        }
        return FALSE;
    }
    
    public function getNameViaId($uid){
        $query = "SELECT fname,lname from users where uid=$uid";
        $res = mysqli_query($this->con, $query);

        if ($res) {
            $rs = mysqli_fetch_assoc($res);
            return $rs['fname'] . " " . $rs['lname'];
        }
        return "Admin";
    }
    //functions for post end

}

?>