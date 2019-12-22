<?php

$fileName = htmlspecialchars(basename($_SERVER['PHP_SELF']));
$name = explode(".", $fileName);
$title = $name[0];

if($title === "session"){
    echo "Wrong Location!";
    exit();
}

require 'functions/DB.php';
$db = new DB();


session_start();
if (isset($_SESSION['user_email']) && $_SESSION['user_email'] != '') {
    $email = $_SESSION['user_email'];
    $res = $db->getUserDetails($email);
    
    if ($res) {
        $numOfRows = mysqli_num_rows($res);
        if ($numOfRows == 0) {
            header('Location: index.php');
        }
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
?>
