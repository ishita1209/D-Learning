<?php
      $con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
      $sql= "SELECT url FROM Meet";
      $result= mysqli_query($con,$sql);
      $id= 
?>