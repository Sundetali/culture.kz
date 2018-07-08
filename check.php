<?php 
  
  require 'db.php';

  $query = "SELECT * FROM users ";
  $result = $conn->query($query);
  $check = false;
  $result2 = $result;
  $password = null;
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["email"] ==$_POST['email']){
          $password = $row["password"];
          $cname = $row["name"]; 
          if($password == $_POST['password']){
            $_SESSION["login"] = $cname;
          //   header("Location: https://localhost/project/index.php", true, 301);
           }
          else{ 
          // header("Location: https://localhost/project/index.php", true, 301);
          // }
          }
        }
      }
  }

  header("Location: /project/index.php");
?>
