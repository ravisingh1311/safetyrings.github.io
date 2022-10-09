<?php 

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      $server="localhost";
      $user="root";
      $pass="";
      $db="protectivering";

      $conn=mysqli_connect($server,$user,$pass,$db);

      if($conn-> connect_errno)
      {
          echo"database connection failed<br>";
          echo"reason:",$conn->connect_error;
          exit();
      }
  }  
  ?>