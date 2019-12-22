<?php

include 'session.php';

if(isset($_POST['search_fire'])){
    $records = $db->getfireDetailsViaFilter(htmlspecialchars($_POST['filter']));
}else{
    $records = $db->getfireDetails();
}

include 'temp/header.php';
include 'temp/inc_firebrigade.php';
include 'temp/footer.php';
?>

