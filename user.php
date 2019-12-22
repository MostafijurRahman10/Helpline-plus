<?php



$updateFlag = 0;
if(isset($_POST['update_profile'])){
    $update_user['fname'] = htmlspecialchars($_POST['fname']);
    $update_user['lname'] = htmlspecialchars($_POST['lname']);
    $update_user['email'] = $email;
    $update_user['numbers'] = htmlspecialchars($_POST['numbers']);
    $update_user['blood_group'] = htmlspecialchars($_POST['blood_group']);
    $update_user['donate_date'] = htmlspecialchars($_POST['donate_date']);
    $update_user['house'] = htmlspecialchars($_POST['house']);
    $update_user['road'] = htmlspecialchars($_POST['road']);
    $update_user['area'] = htmlspecialchars($_POST['area']);
    $update_user['city'] = htmlspecialchars($_POST['city']);
    $update_user['country'] = htmlspecialchars($_POST['country']);
    $update_user['zip'] = htmlspecialchars($_POST['zip']);
    
    $res = $db->updateUserDetails($update_user);
    if($res){
        $updateFlag = 1;
    } else{
        $updateFlag = 2;
    }
}

$email = $_SESSION['user_email'];
$res = $db->getUserDetails($email);
if($res){
    $user_details = mysqli_fetch_assoc($res);
}

include 'temp/header.php';
include 'temp/inc_user.php';
include 'temp/footer.php';
?>
