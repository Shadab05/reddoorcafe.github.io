<?php

include 'config.php';

$data = $_POST;

// $errorArray;
// $this;
// function validateUsername($un)
// {
//   if (strlen($un)>25 || strlen($un)<5)
//   {
//     array_push($this->$errorArray,"Your Username must be between 25 to 5 characters ");
//     return;
//   }
// }
// function validateFullname($fn)
// {
//
// }
//
// function validateEmail($em)
// {
//
// }
//
// function validatePassword($pw)
// {
//
// }
  session_start();
  unset($_SESSION['username']);
  $username = $data['username'];
  $fullname = $data['fullname'];
  $email = $data['email'];
  $password =($data['password']);
  $gender = $data['gender'];

// validateUsername($username);
// validateFullname($fullname);
// validateEmail($email);
// validatePassword($password);

   if($username == "" || $fullname == "" || $email == "" || $password == "")
   {

     echo "Please Enter all the fields!  ";
     return false;

   }

 $q= 'insert into cafedata (username,fullname,email,password,gender) values ("'.$username.'","'.$fullname.'","'.$email.'","'.$password.'","'.$gender.'")';

 if(mysqli_query($conn,$q))
 {
//   // header("Location : home.php"); // "Hello $username Sign Up successfull";
 echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
}
 else {
   echo "Sorry! Failed to Sign Up";
 }

// $username = 'shaggy';
// $password = 'india';
//
// $inputUsername = $_POST['username'];
// $inputPassword = $_POST['password'];
//
//
// if(($username!=$inputUsername)&&($password==$inputPassword))
// {
//   echo 'Incorrect Username!';
// }
// else if(($username==$inputUsername)&&($password!=$inputPassword))
// {
//   echo 'Incorrect Password!';
// }
//
//
// else if(($username == $inputUsername) && ($password == $inputPassword))
// {
//   echo 'Welcome '.$inputUsername.' How are you today.';
// }
// else
// {
//   echo 'incorrect username and password you cant log in';
// }
// if(mysqli_query($conn,$q))
// {
//
// $q= 'insert into cafedata (username,fullname,email,password,gender) values ("'.$username.'","'.$fullname.'","'.$email.'","'.$password.'","'.$gender.'")';
//
//  // echo "Hello $username Sign Up successfull";
//  // header("Location : home.php");
// }
// else
// {
//  echo "Sorry! Failed to Sign Up";
// }

?>
