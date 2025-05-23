<?php
  $servername = "localhost";
  $username ="root";
  $password = "";
  $dbname = "application_form";

 $conn = mysqli_connect($servername,$username,$password,$dbname);
  if($conn)
  {
   // echo "Connected successfully";

  }
  else
  {
    die("Connection failed: ". mysqli_connect_error());
  }
?>