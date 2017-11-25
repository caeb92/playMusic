<?php
include ("php/data/key.php");
$user_name_ui = $_POST['user_name_ui'];
$password_ui = $_POST['password_ui'];
$email_ui = $_POST['email_ui'];
$user_ui = $_POST['user_ui'];

$sql = " INSERT INTO user  (user_name, password, email, name) VALUES ('".$user_name_ui."','".$password_ui."','".$email_ui."','".$user_ui."') ";

if (mysqli_query($conn, $sql)) {
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
