<?php
require 'functions/DB.php';

$db = new DB();

$flag = 0;

if (isset($_POST['register'])) {

    if (!empty($_FILES)) {

    //   $res = $db->uploadImage($_FILES, "image");

    //   if ($res !== "") {

            $details['email'] = htmlspecialchars($_POST['email']);

            $pass = htmlspecialchars($_POST['pass']);
            $conf_pass = htmlspecialchars($_POST['conf_pass']);

            $details['fName'] = htmlspecialchars($_POST['fname']);
            $details['lName'] = htmlspecialchars($_POST['lname']);
            $details['number'] = htmlspecialchars($_POST['mobile_number']);
            $details['house'] = htmlspecialchars($_POST['house']);
            $details['road'] = htmlspecialchars($_POST['road']);
            $details['area'] = htmlspecialchars($_POST['area_name']);
            $details['city'] = htmlspecialchars($_POST['city']);
            $details['zip'] = htmlspecialchars($_POST['zip']);
            $details['country'] = htmlspecialchars($_POST['country']);
            $details['blood_group'] = htmlspecialchars($_POST['blood_group']);
            $details['last_donate'] = htmlspecialchars($_POST['last_donate1']) . "-" .
                    htmlspecialchars($_POST['last_donate2']) . "-" .
                    htmlspecialchars($_POST['last_donate3']);

            $details['image'] = $res;

            if ($pass === $conf_pass) {
                $details['password'] = $pass;

                if (!$db->isUserExist($details['email'])) {
                    $reg = $db->addNewUser($details);
                    if ($reg) {
                        header('Location: index.php');
                        $flag = 4;
                    } else {
                        $flag = 3;
                    }
                } else {
                    $flag = 5;
                }
            } else {
                $flag = 1;
            }
        //} else {
        //    $flag = 1;
        //}
    } else {
        $flag = 1;
    }
    
    //echo $flag . " " . htmlspecialchars($_POST['agreement']);
}
?>

<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Helpline Plus</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="register" method="POST" enctype="multipart/form-data">
            <h1>Sign up</h1>
            <fieldset class="row1">
                <legend>Account Details</legend>
                <p>
                    <label>Email *</label>
                    <input type="text" name = "email" required=""/>
                </p>
                <p>
                    <label>Password*</label>
                    <input type="Password" name = "pass" required=""/>
                    <label>Repeat Password*</label>
                    <input type="Password" name = "conf_pass" required=""/>
                    <label class="obinfo">* obligatory fields</label>
                </p>
            </fieldset>

            <fieldset class="row2">
                <legend>Personal Details</legend>
                <p>
                    <label>First Name *</label>
                    <input type="text" class="long" name="fname" required=""/>
                </p>
                <p>
                    <label>Last Name *</label>
                    <input type="text" class="long" name = "lname" required=""/>
                </p>
                <p>
                    <label>Phone *</label>
                    <input type="text" class="long" name="mobile_number" required=""/>
                </p>
                <p>
                    <label>House No *</label>
                    <input type="text" class="long" name="house" required=""/>
                </p>
                <p>
                    <label>Road No *</label>
                    <input type="text" class="long" name="road" required=""/>
                </p>
                <p>
                    <label>Area Name *</label>
                    <input type="text" class="long" name="area_name" required=""/>
                </p>
                <p>
                    <label>City *</label>
                    <input type="text" class="long" name="city" required=""/>
                </p>
                <p>
                    <label>Postal Code *</label>
                    <input type="text" class="long" name="zip" required=""/>
                </p>
                <p>
                    <label>Country *</label>
                    <select name="country" required=""> 
                        <option selected disabled>Choose one</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="United States">United States</option>
                        <option value="India">India</option>
                        <option value="Singapoore">Singapore</option>
                    </select> 
                </p>
            </fieldset>

            <fieldset class="row3">
                <legend>Further Information</legend>
                <p>
                    <label>Blood Group *</label>
                    <select name="blood_group" required="">
                        <option selected disabled>Choose one</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </p>

                <p>
                    <label>Last Donation Date *</label>
                    <select class="date" name="last_donate1" required="">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="last_donate2" required="">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <input class="year" type="text" maxlength="4" style="width: 40px;" name="last_donate3" required=""/>
                </p>



            </fieldset>

            <fieldset class="row4">
                <legend>Terms and Conditions</legend>
                <p class="agreement">
                    <input type="checkbox" name="agreement"/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
            </fieldset>

            <div><button type="submit" class="button" name="register" >Register &raquo;</button></div>
        </form>
    </body>
</html>





