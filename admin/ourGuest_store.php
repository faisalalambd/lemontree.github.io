<?php include("config.php");

echo  $paragraph  = ($_REQUEST['paragraph']);
echo  $name       = ($_REQUEST['name']);
echo  $designation   = ($_REQUEST['designation']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO ourGuest (image, paragraph, name, designation) VALUES ('$filename', '$paragraph', '$name', '$designation')";

if (mysqli_query($conn, $sql)) {
    header("Location: ourGuest.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
