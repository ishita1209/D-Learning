<?php
$con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
session_start();
$email=$_SESSION['email'];
// get the post records
$txtGen = $_POST['gender'];
$txtColl = $_POST['college'];
$txtMob = $_POST['mob'];

// database insert SQL code
$sql = "UPDATE user SET gender='$txtGen',college='$txtColl',mob='$txtMob' WHERE email='$email';";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
echo ' <script>window.location.href = "http://localhost:8080/Student/homepage.php"; </script>';
?>