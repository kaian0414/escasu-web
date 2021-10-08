<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', '', '','');

// get the post records
$chinName = $_POST['chinName'];
$engName = $_POST['engName'];
$stuId = $_POST['stuId'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$programme = $_POST['programme'];
$grade = $_POST['grade'];
$selfIntro = $_POST['selfIntro'];
$firstChoice = $_POST['firstChoice'];
$secondChoice = $_POST['secondChoice'];

// database insert SQL code
$sql = "INSERT INTO `newmember2122` (`Id`, `chinName`, `engName`, `stuId`, `phone`, `email`, `programme`, `grade`, `selfIntro`, `firstChoice`, `secondChoice`) VALUES ('0', '$chinName', '$engName', '$stuId', '$phone', '$email', '$programme', '$grade', '$selfIntro', '$firstChoice', '$secondChoice')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Thanks for your application :) We will contact you later.";
}

?>