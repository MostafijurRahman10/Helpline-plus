<?php

include 'session.php';

if(isset($_POST['search_security'])){
    $records = $db->getSecurityDetailsViaFilter(htmlspecialchars($_POST['filter']));
}else{
    $records = $db->getSecurityDetails();
}

include 'temp/header.php';
include 'temp/inc_security.php';
include 'temp/footer.php';
?>
