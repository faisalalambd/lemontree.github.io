<?php include("config.php");


echo  $title      = ($_REQUEST['title']);
echo  $short_description  = ($_REQUEST['short_description']);
echo  $long_description  = ($_REQUEST['long_description']);

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


$sql = "INSERT INTO blog (image, title, short_description, long_description) VALUES ('$filename','$title', '$short_description', '$long_description' )";

if (mysqli_query($conn, $sql)) {
    header("Location: blog.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
