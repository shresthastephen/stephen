<?php
 include "connection.php";

// sql to create table

if($connection){    
  $sql="CREATE table signin(
      id INT PRIMARY KEY AUTO_INCREMENT,
      fname VARCHAR(25) NOT NULL,
      lname VARCHAR(25) NOT NULL,
      email VARCHAR(50) NOT NULL,
      pw VARCHAR(25) NOT NULL
  )";

  if (mysqli_query($connection, $sql)) {
    echo "Created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($connection);
  }
}    
mysqli_close($connection);



?>