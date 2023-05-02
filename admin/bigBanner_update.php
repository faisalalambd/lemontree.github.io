<?php include("config.php");

echo  $id           = $_GET['id'];
echo  $small_title  = ($_REQUEST['small_title']);
echo  $large_title  = ($_REQUEST['large_title']);


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


$sql = "UPDATE bigBanner SET image='$filename', small_title='$small_title', large_title='$large_title' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: bigBanner.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}