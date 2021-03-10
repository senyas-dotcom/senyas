<?php
if(isset($_POST["username"])){
  $con = mysqli_connect("localhost", "root", "", "rodrizal");
  $sql2 =  "INSERT INTO `activity_logs` (`user_name`) VALUES ('".$_POST["username"]."')";
  if ($con->query($sql2) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
  }
 ?>
