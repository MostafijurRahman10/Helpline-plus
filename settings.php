<?php
include 'session.php';

$passFlagDemo = 0;

if (isset($_POST['changePassword'])) {
    $old = htmlspecialchars($_POST['oldpass']);
    $newa = htmlspecialchars($_POST['newpassa']);
    $newb = htmlspecialchars($_POST['newpassb']);
    if ($newa == $newb) {
        $usmail = htmlspecialchars($_SESSION['user_email']);
        if ($db->checkLogin($usmail, $old)) {
            $isChanged = $db->updatePassword($usmail, $newa);
            if ($isChanged) {
                $passFlagDemo = 1;
            } else {
                $passFlagDemo = 2;
            }
        } else {
            $passFlagDemo = 3;
        }
    } else {
        $passFlagDemo = 4;
    }
}

$imgflag = 0;
if(isset($_POST['uploadimg'])){
    if(!empty($_FILES)){
        $image = $db->uploadImage($_FILES, "updateimage");
        
        
        //unset($_FILES);
        //unset($_POST);
        
        if($image != ""){
            $usmail = htmlspecialchars($_SESSION['user_email']);
            
            if($usmail != ""){
                $res2 = $db->updateImage($usmail, $image);
            } else{
                $imgflag = 2;
            }
        } else{
            $imgflag = 1;
        }
    }
}


include 'temp/header.php';
include 'temp/inc_settings.php';
include 'temp/footer.php';
?>
