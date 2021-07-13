<?php

// set connection variables
$Host_name = "localhost";
$db_user ="root";
$db_password="";
$db_name = "rmap";
// connection to server & database
$conn =new mysqli($Host_name,$db_user,$db_password,$db_name);
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO map (F1, L1, R1,B1,S1)
  VALUES ('F1', 'L1', 'R1' ,'B1','S1')";
 
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
  $conn->close();
  ?>
  