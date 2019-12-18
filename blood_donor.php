<?php

include 'session.php';

if(isset($_POST['search_doner'])){
    $records = $db->getDonerDetailsViaFilter(htmlspecialchars($_POST['filter']));
}else{
    $records = $db->getDonerDetails();
}

include 'temp/header.php';
include 'temp/inc_blooddonor.php';
include 'temp/footer.php';
?>
