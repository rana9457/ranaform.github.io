<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
 $gender = $_POST['gender'];
  // Database connection
  $conn = new mysqli('localhost','root','','reg');
  if($conn->connect_error){
      die('Connection Failed :'  .$conn->connect_error);
  }
 else{
      $stmt = $conn->prepare("insert into registration(firstName, lastName , email, number, password, confirmpassword, gender)
           values(?,?,?,?,?,?,?)");
      $stmt ->bind_param("sssisss",$firstname,$lastname,$email,$number,$password,$confirmpassword,$gender);
      $stmt ->execute();
      echo"registration successfully ...";
      $stmt->close();
      $conn->close(); 
     }                                                

?>                                                                                                                                  