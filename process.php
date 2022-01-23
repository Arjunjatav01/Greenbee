<?php

include("config.php");
$firstname = $_POST ["firstname"];
$lastname = $_POST ["lastname"];
$email = $_POST ["email"];
$subject = $_POST ["subject"];
$enquiry = $_POST ["enquiry"];
$sql = "INSERT INTO `contact-data` (`id`, `firstname`, `lastname`, `email`, `subject`, `enquiry`) VALUES ('', '$firstname', '$lastname', '$email', '$subject', '$enquiry')";
$result = mysqli_multi_query($conn, $sql);
if($result) {
    echo '<script>alert("Form Submitted");</script>';
    echo "<script>window.location.href='contactus.php'</script>";
}
 else {
     echo "not submitted";
 }
?>