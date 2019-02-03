<?php
session_start();
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
    <title>Welcome: RED DOOR</title>
    <link rel="stylesheet" href="animate.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Merienda ' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="cartstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" type='text/css'>
  </head>
  <body>
    <div class="main">
<?php
require('header.php') ;
 ?>

      <div class="home " >
        <div class="text " >
          <h1 class="wow zoomIn">"WALK IN"</h1><br>
           <h4 > Feel<br>
                The Aroma</h4>
        </div>
    </div>
    <section id="bg-img-section-0" >
      <div class="home1">
        <div class="text1" >
          <h1 class="wow zoomIn" style="font-family: 'Merienda';text-shadow: -3px 3px 5px #1d1010">" WHAT'S <br>YOUR <br>COFFEE <br>STORY? "</h1>
          <div class="para wow slideInRight">
           <h3 style="font-family:'Sofia'"><b style="color: #cece26"><i class="head" style="font-family:'Sofia';font-size:45px;text-shadow: 4px 2px 4px #1d1010">History & Origin of Coffee in India</i></b><br><br>
                 The history (and origin) of coffee in India dates back to around 1600 AD,
                 when the Indian Sufi saint, Baba Budan, went on a pilgrimage to Mecca.
                 He made his 'legendary' journey from Mocha, a port city of Yemen that overlooks the Red Sea, to his homeland.

                 Besides being a trading hub for coffee, Mocha was the source of the popular Mocha coffee beans.
                 Baba Budan discovered coffee in the form of a dark and sweet liquid called Qahwa1 on the way.
                 He found the drink refreshing and secretly brought back seven coffee beans from Mocha by strapping them to his chest,
                 since the Arabs were extremely protective about their coffee industry.</h3>
          </div>

        </div>
      </div>
    </section>

    <section id="bg-img-section-2" >
      <div class="home2">
        <div class="wow bounceInRight">
          <h5 class="menu">Share <br><span style="color: #ea2525">Delicious</span> <br> Snacks with <br> Your <span style="color: #d2e819">FRIENDS <br></span> from Our
            <br>  <span style="color: #337ab7">Vast Menu! </span></h5>

        </div>

        <div class="contain">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="shopping.php" data-slide-to="0" class="active"></li>
        <li data-target="shopping.php" data-slide-to="1"></li>
        <li data-target="shopping.php" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <a href="shopping.php"><img src="coffee.jpg" ></a>
            <div class="carousel-caption">

              <p>-- COFFEE --</p>
            </div>
          </div>
   <div class="item ">
     <a href="shopping.php"><img src="burger.jpg"></a>
     <div class="carousel-caption">

       <p>-- BURGER --</p>
     </div>
   </div>

   <div class="item">
     <a href="shopping.php"><img src="dog.jpg" ></a>
     <div class="carousel-caption">

       <p>-- DONUTS --</p>
     </div>
   </div>

   <div class="item">
     <a href="shopping.php"><img src="pastries.jpg" ></a>
     <div class="carousel-caption">

       <p>-- PASTRIES --</p>
     </div>
   </div>

   <div class="item">
     <a href="shopping.php"><img src="f.jpg"  alt="New York"></a>
     <div class="carousel-caption">

       <p>-- PIZZAS --</p>
     </div>
   </div>
 </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
        </div>
        </div>

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
