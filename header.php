<?php
$count=0;
if(isset($_SESSION['shopping']))
{
$count = count($_SESSION['shopping']);
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  </head>
  <body>
    <div class="top_menu">
     <nav class="navbar navbar-default">
       <div class="main-logo large-3 columns" style="width:9%!important">
         <a class="logo" href="home.php">
           <img src="avatar.png" >
             </a>
             </div>
                     <div class="navbar-header">
                     <a class="navbar-brand">Welcome <span style="color:red"><?php echo $username ?></span><span style="color:red">!</span> </a>
                         </div>
                   <div class="nav-bar large-9 coulmns">

                     <ul class=" nav navbar-nav" style="font-family: 'Sofia';font-size:18px">
                       <li >
                         <a href="home.php"class="white-color" >Home</a>
                       </li>
                       <li>
                         <a href="aboutus.php" class="white-color">About Us</a>
                       </li>
                       <li>
                         <a href="home.php #footer" class="white-color">Contact Us</a>
                       </li>
                       <li>
                         <a href="shopping.php" class="white-color" title="Order">
                             <span class="glyphicon glyphicon-shopping-cart"></span>


                           <span class="badge"><?php echo $count ?></span>


                         </a>
                       </li>
                       <li>

                         <form class="" action="logout.php" method="post">
                           <input class=" btn btn-danger navbar-btn" type="submit" title="Logout" id="logout" name="logout" value="logout" >
                         </form>
                       </li>

                     </ul>

                  </div>
   </nav>
   </div>

  </body>
</html>
