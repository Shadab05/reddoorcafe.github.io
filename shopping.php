

<?php
require 'config.php';
session_start();
if(isset($_SESSION['username']))
{
  $username= $_SESSION['username'];
  $email= $_SESSION['email'];
// else {
//         echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
//      }
?>
<?php
$product_ids = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping'])){

        //keep track of how mnay products are in the shopping cart
        $count = count($_SESSION['shopping']);

        //create sequantial array for matching array keys to products id's
        $product_ids = array_column($_SESSION['shopping'], 'id');


        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['shopping'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }


  }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping'] = array_values($_SESSION['shopping']);
}

// pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<!DOCTYPE html
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ORDER HERE!</title>
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


<!--  SHOPPING CART -->
<section id="bg-img-section-1" >
<div class="cont">
  <div class="title">
    <h3 class="wow bounceInRight">FEELING HUNGRY?</h3>
  </div>
  <div class="card">

  <?php

       $query = "SELECT * FROM products ORDER by id ASC";
       $result = mysqli_query($conn, $query);
       $num_rows = mysqli_num_rows($result);

       if($num_rows > 0)
       {
         while($product = mysqli_fetch_assoc($result))
         {
            ?>
           <div class="col-md-4" >
                    <form method="post" action="shopping.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" class="img-responsive">
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4 class="text-info-1">Rs. <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" >
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" >
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" ><br>
                            <input href="#table-responsive" type="submit" name="add_to_cart" class="btn btn-info"
                                   value="Add to Cart" >

                        </div>
                    </form>
                </div>
<?php
         }

       }
   ?>
   <div style="clear:both"></div>
      <!-- <br /> -->
      <div class="table-responsive">
      <table class="table">


      <?php

          // $item_count = count($_SESSION['shopping']);
          if(empty($_SESSION['shopping']))
          {
              ?>
              <tr>
                <h3 class="empty"><b>-: Empty Cart :-</b></h3>
              </tr>
              <?php
          }
          else
          {

            ?>
                <tr><th colspan="5"><h3 class="order"><b>-: Order Details :-</b></h3></th></tr>
            <tr>
                 <th width="40%">Product Name</th>
                 <th width="10%">Quantity</th>
                 <th width="20%">Price</th>
                 <th width="15%">Total</th>
                 <th width="5%">Action</th>
            </tr>
            <?php
            // if(!empty($_SESSION['shopping'])):

                 $total = 0;

                 foreach($_SESSION['shopping'] as $key => $product):
            ?>
            <tr>
               <td><?php echo $product['name']; ?></td>
               <td><?php echo $product['quantity']; ?></td>
               <td>Rs. <?php echo $product['price']; ?></td>
               <td>Rs. <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
               <td>
                   <a href="shopping.php?action=delete&id=<?php echo $product['id']; ?>">
                        <div class="btn-danger">Remove</div>
                   </a>
               </td>
            </tr>
            <?php
                      $total = $total + ($product['quantity'] * $product['price']);
                 endforeach;
            ?>
            <tr>
                 <td colspan="3" align="right">Total</td>
                 <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
                 <td></td>
            </tr>
            <tr>
                <!-- Show checkout button only if the shopping cart is not empty -->
                <td colspan="5">
                 <?php
                    if (isset($_SESSION['shopping'])):
                    if (count($_SESSION['shopping']) > 0):
                 ?>

                 <script type="text/javascript">
                   function show()
                   {

                     window.alert('THANK YOU FOR SHOPPING!');
                     // session_destroy();
                   }
                 </script>

                  <a href="session_destroy.php" class="button" onclick="show()">Checkout</a>
                             <?php endif; endif; ?>
                </td>
            </tr>


<?php
} ?>


      </table>


</div>
</div>

</section>


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
