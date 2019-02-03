<?php
include 'config.php';

$data=$_POST;



  session_start();
 unset($_SESSION['username']);


// $password=$_POST['password'];
//
// if(count($_POST)>0)
// {$query ="select * from cafedata where password = '$password' and (username='$username' or email='$username')";
//
// $result= mysqli_query($conn,$query);
//
// $number_of_rows = mysqli_fetch_assoc($result);
//
// if($number_of_rows!=0)
// {
//   echo "Login successfull";
// }
// else {
//   echo "Login Failed";
// }
// }
if(isset($_POST['username']))
{


  $username=$_POST['username'];
  $password=$_POST['password'];

  $query ="select * from cafedata where password = '$password' and (username='$username' or email='$username')";

          $result= mysqli_query($conn,$query);


          $userdata = mysqli_fetch_assoc($result);
           $_SESSION['username'] = $userdata['username'];
           $_SESSION['email'] = $userdata['email'];

           $number_of_rows = mysqli_num_rows($result);

   if($number_of_rows!=0)
  {
   if(isset($_SESSION['username']))
      {
        echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
      }


  }
  else if($number_of_rows==0)
      {
         // echo "Login Failed";

         header('Location: logout.php?login=unccessfull');
      }
}
// else
// {
//   header('Location: logout.php');
// }

 ?>
 <!-- <script type="text/javascript">
   function show()
   {

     window.alert('INVALID PASSWORD OR USERNAME!');
     // session_destroy();
   } -->
