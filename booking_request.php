<?php
include 'config.php';
echo  $guest_phone      = ($_REQUEST['guest_phone']);
echo  $guest_email    = ($_REQUEST['guest_email']);
echo  $arival_date     = ($_REQUEST['arival_date']);
echo  $deperture_date     = ($_REQUEST['deperture_date']);
echo  $adult_guest_number    = ($_REQUEST['adult_guest_number']);
echo  $child_guest_number    = ($_REQUEST['child_guest_number']);
$sql = "INSERT INTO booking_request (guest_phone, guest_email, arival_date, deperture_date,adult_guest_number,child_guest_number) VALUES ('$guest_phone','$guest_email', '$arival_date', '$deperture_date','$adult_guest_number','$child_guest_number' )";
$text="Booking Request Send Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: /?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
?>

