<!------registerPHP-------------->

<?php 
  
  require 'db.php';

  $password = $_POST['password'];
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['email'];
  
$query = "SELECT * FROM users ";
  $result = $conn->query($query);
  $check = false;
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
        if($row1["email"] == $email){
          $check = true;
        }
      }
  }
  if ($check){
      echo "<script type='text/javascript'>alert('The account is already existed!');</script>";
} 
else{
     $sql = "INSERT INTO users (password, name, phonenumber, email) VALUES ('$password', '$name', '$phonenumber','$email')";
    
    $result = $conn->query($sql);
    if($result){
      // header("Location: https://localhost/ppp/index.php",true,301);
     }
    }
  
?>