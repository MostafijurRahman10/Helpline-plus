<?php

namespace dashboard;



include 'session.php';

$flag = 0;
if(isset($_POST['addPost'])){
    
    //$postDetails = $_POST;
    $postDetails['category'] = htmlspecialchars($_POST['category']);
    $postDetails['pdetails'] = htmlspecialchars($_POST['pdetails']);
    $postDetails['email'] = $email;
    $res = $db->addNewQuickPost($postDetails);
    if($res){
        $flag = 1;
    }else{
        $flag = 2;
    }
}

$allPosts = $db->getAllPost();

include 'temp/header.php';
include 'temp/inc_dashboard.php';
include 'temp/footer.php';
?>
