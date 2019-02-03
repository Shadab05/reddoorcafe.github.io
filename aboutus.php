    <?php
    session_start();
    $usernm=$_SESSION['username'];
    if(isset($_SESSION['username']))
    {
      $username= $_SESSION['username'];
      $email= $_SESSION['email'];
    // else {
    //         echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
    //      }
    ?>

    <!DOCTYPE html
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>ABOUT US!</title>
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cartstyle.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
      </head>
      <body>
        <div class="main">

          <?php
          require('header.php') ;
           ?>


<!-- ABOUT CLASS -->
<section id="bg">
   <div class="about wow zoomIn">
    <h2 >- ABOUT US -</h2>
    <h3 ><b style="color:#ffd505">Our Company</b><br><br>
       To say "Red Door" purchases and roasts high-quality whole bean coffees is very true.
       That’s the essence of what we do – but it hardly tells the whole story.
       Our coffeehouses have become a beacon for coffee lovers everywhere.
       Why do they insist on Red Door? Because they know they can count on genuine service,
       an inviting atmosphere and a superb cup of expertly roasted and richly brewed coffee every time.
    </h3><br><br>
    <h3><b style="color:#ffd505">  Expect More Than Coffee</b><br><br>

     We are passionate purveyors of coffee and everything else that goes with a rewarding coffeehouse experience.
      We also offer a selection of premium Tazo® teas, fine pastries and other delectable treats to please the taste buds.
       And the music you hear in store is chosen for its artistry and appeal. People come to Red Door to chat, meet up or work.
    </h3>
  </div>

</section>

<?php
require('footer.php') ;
 ?>

  
</div>
<script src="wow.min.js"></script>
<script>
  new WOW().init();
</script>
  </body>
</html>
<?php }
else
{
  header('Location: logout.php');
}

 ?>
