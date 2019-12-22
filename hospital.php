<?php

include 'session.php';

if(isset($_POST['search_hos'])){
    $records = $db->getHospitalDetailsViaFilter(htmlspecialchars($_POST['filter']));
}else{
    $records = $db->getHospitalDetails();
}

include 'temp/header.php';
include 'temp/inc_hospital.php';
include 'temp/footer.php';
?>
