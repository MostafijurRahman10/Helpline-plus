<?php


if(isset($_POST['search_doctor'])){
    $records = $db->getDoctorDetailsViaFilter(htmlspecialchars($_POST['filter']));
}else{
    $records = $db->getDoctorDetails();
}

include 'temp/header.php';
include 'temp/inc_doctor.php';
include 'temp/footer.php';
?>
