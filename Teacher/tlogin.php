<?php
session_start();
$_SESSION['login']="yes";
$name= $_GET['name'];
$email=$_GET['email'];
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
$sql= "SELECT * FROM admin WHERE email='$email'";
$result= mysqli_query($con, $sql);
$count= mysqli_num_rows($result);
if($count==0)
{
$sql= "INSERT INTO admin(name, email) VALUES ('$name','$email')";
$result=mysqli_query($con, $sql);
}
echo ' <script>window.location.href = "http://localhost:8080/Teacher/homepage.php"; </script>';
?>