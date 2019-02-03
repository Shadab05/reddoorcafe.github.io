


<!DOCTYPE html>
<html lang="en" dir="ltr">
         <head>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <link rel="stylesheet" href="style.css">
                     <title>Login</title>

                     <style>
                     body
                     {
                       background : linear-gradient(to bottom, rgba(0,0,0,0),rgba(0,0,0,1)),url("wall.jpg");
                       background-size: 1370px 925px;
                       background-position: center;
                       background-repeat: no-repeat;
                       font-family: sans-serif;

                     }
                     </style>
        </head>
                  <body>
                          <div class="social">

                                  <a href="https://www.facebook.com/" target="_blank"class="fa fa-facebook"></a>
                                  <a href="https://twitter.com" class="fa fa-twitter" target="_blank"></a>
                                  <a href="https://google.com" class="fa fa-google" target="_blank"></a>
                                  <a href="https://linkedin.com" class="fa fa-linkedin" target="_blank"></a>
                                  <a href="https://youtube.com" class="fa fa-youtube" target="_blank"></a>
                                  <a href="https://instagram.com" class="fa fa-instagram" target="_blank"></a>

                                                 <!-- <div class="icon-bar">

                                                          <a class="active" href="#"><i title="Home"class="fa fa-home"></i></a>
                                                          <a href="#"><i title="Search" class="fa fa-search"></i></a>
                                                          <a href="#"><i title="Inbox"class="fa fa-envelope"></i></a>
                                                          <a href="#"><i title="Web Search"class="fa fa-globe"></i></a>


                                                </div> -->

                         </div>

                                    <div class="container">

                                                    <div class="login-home">

                                                               <img src="avatar.png" class="avatar">
                                                               <h1 style="width:100%">Login</h1><br>

                                                                         <form class="none" action="authenticate.php" method="post">
                                                                                <div class="form-group">

                                                                                     <label for="username">Username/Email</label>
                                                                                     <input type="text" title="Enter Username" name="username" class="form-control" id="username" style="color:white" placeholder="Enter Username or Email" required><br>


                                                                                     <!-- <label for="email">Email</label><br>
                                                                                     <input type="text" id='email'  name="email" title="Enter Email" class="form-control" style="color:white" placeholder="Enter Email"><br> -->

                                                                                     <!-- <label for="date">DOB</label><br>
                                                                                     <input type="date" id="date"  name="date" title="Enter Date of Birth"class="form-control" style="color:white"placeholder="dd/mm/yyyy"><br> -->

                                                                                            <!-- <div class="form-group has-success has-feedback"> -->
                                                                                                  <label class="control-label" for="password">Password</label>
                                                                                                  <input type="password" id="password"  name="password" title="Enter Password" class="form-control" style="color:white" placeholder="Enter Password" aria-describedby="inputSuccess2Status" required><br>
                                                                                                  <!-- <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> -->
                                                                                                  <!-- <span id="inputSuccess2Status" class="sr-only">(success)</span> -->
                                                                                            <!-- </div> -->


                                                                                                  <div class="loginButton">
                                                                                                  <input class="btn btn-danger btn-lg" title="Login" name="Login" placeholder="Login"type="submit" value="Login!">



                                                                                                  <br><br>
                                                                                                              <a href="#">Forgot Password?</a><br>
                                                                                                               Don't have An Account?<a href="signup.html" title="SignUp">Sign Up!</a><br>
                                                                                                  </div>


                                                                                </div>
                                                                        </form>



                                                      </div>
                                    </div>

               </body>
</html>
<?php

$myurl= $_SERVER['REQUEST_URI'];

if(strpos($myurl,'?')!==false)
{
 echo "<script>alert('Incorrect username/password , please try again!');</script>";
}
//}

?>
