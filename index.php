<?php
session_start();
include_once 'include/database.php';
include_once 'include/config.php';

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'include/header.php';
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Slijterij stuk in m'n Kraag</title>

    <!-- Bootstrap CSS -->

    <!-- winkelandje -->
    <link href="cart2/style/style.css" rel="stylesheet" type="text/css">

    <!-- product-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="exportproduct/assets/css/Animated-Pretty-Product-List-v121.css">
    <link rel="stylesheet" href="exportproduct/assets/css/styles.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- slider -->
    <link rel="stylesheet" href="exportslider/assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="exportslider/assets/css/Slider_Carousel_webalgustocom1.css">
    <link rel="stylesheet" href="exportslider/assets/css/Slider_Carousel_webalgustocom2.css">
    <link rel="stylesheet" href="exportslider/assets/css/styles.css">
    <!-- NAVBAR -->
      <link rel="stylesheet" href="exportnavbar/assets/css/navbar.css">
      <link rel="stylesheet" href="exportnavbar/assets/css/styles.css">
    <!--18+ verification css -->
<!--      <link rel="stylesheet" href="css/18+verification.css">-->

  </head>

<body>
<!-- 18+ verification -->
<!-- use this for popup-->
<!--  <div id="boxes">-->
<!--      <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">Slijterij, Stuk in m'n kraag.-->
<!--          <div id="lorem">-->
<!--              <p>Ben je 18 jaar of ouder? </p>-->
<!--          </div>-->
<!--          <div id="popupfoot"> <a href="" class="close agree"style="color:green;">Ja</a> | <a class="agree"style="color:red;" href="#">Nee</a> </div>-->
<!--      </div>-->
<!--      <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>-->
<!--  </div>-->
<!-- einde 18+ verifitcation-->


<div class="container">
  <!-- Slider -->
    <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel"
       data-pause="hover" data-interval="5000">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#webAlGusto-touch-slider" data-slide-to="0" class="active"></li>
      <li data-target="#webAlGusto-touch-slider" data-slide-to="1"></li>
      <li data-target="#webAlGusto-touch-slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

      <!-- Third Slide -->
      <div class="item active">

        <!-- Slide Background -->
        <img src="exportslider/assets/img/Drankslider1.png" alt="WebAlgusto.com" class="slide-image"/>
        <div class="bs-slider-overlay"></div>

        <div class="container">
          <div class="row">
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_left">
              <h1 data-animation="animated zoomInRight">Welkom bij Stuk in m'n kraag</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Slide -->

      <!-- Second Slide -->
      <div class="item">

        <!-- Slide Background -->
        <img src="exportslider/assets/img/drankslider2.png" alt="Bootstrap Touch Slider" class="slide-image"
             style="max-height: 729px"/>
        <div class="bs-slider-overlay"></div>
        <!-- Slide Text Layer -->
        <div class="slide-text slide_style_center">
          <h1 data-animation="animated flipInX">Welkom bij Stuk in m'n kraag</h1>
        </div>
      </div>
      <!-- End of Slide -->

      <!-- Third Slide -->
      <div class="item">

        <!-- Slide Background -->
        <img src="exportslider/assets/img/drankslider3.png" alt="Bootstrap Touch Slider" class="slide-image"/>
        <div class="bs-slider-overlay"></div>
        <!-- Slide Text Layer -->
        <div class="slide-text slide_style_right">
          <h1 data-animation="animated zoomInLeft">Welkom bij stuk in m'n kraag</h1>
        </div>
      </div>
      <!-- End of Slide -->


    </div><!-- End of Wrapper For Slides -->

  </div>

        <!-- Product -->
         <div class="row">

             <div class="row product-list dev">
                      <form method="post" action="cart_update.php">
                            <?php
                            $sql = 'SELECT * from `products`';

                            $result = $con->query($sql);


                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    //dit is voor de link naar de productpagina!
                                    $id = $row['product_id'];
                                    ?>
                          <div class="col-md-4 col-sm-6 product-item animation-element slide-top-left" style="min-width: 341px">
                            <div class="product-container">
                              <div class="row">
                                <div class="col-md-12">
                                  <a href="product.php?product_id=<?php echo $id ?>" class="product-image"><img src="exportproduct/assets/img/<?php
                                    echo $row["image_name"];
                                    ?>"></a>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-8">
                                  <h2><a href="product.php?product_id=<?php echo $id ?>">
                                      <?php
                                      echo $row["product_name"];
                                      ?>
                                    </a></h2></div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                  <p class="product-description">
                                    <?php
                                    echo $row["product_desc"];
                                    ?>
                                  </p>
                                  <div class="row">
                                    <div class="col-xs-6">
                                        <div class="product-price">
                                            <div align="center"><button type="submit" class="add_to_cart">Toevoegen</button></div></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                      <p class="product-price">€<?php
                                        echo $row["product_price"];
                                        ?></p>
                            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
      }
      $con->close();
      ?>
    </div>

    <?php
    if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
    {
      echo '<div class="cart-view-table-front" id="view-cart">';
      echo '<h3>Winkelmandje</h3>';
      echo '<form method="post" action="cart_update.php">';
      echo '<table width="100%"  cellpadding="6" cellspacing="0">';
      echo '<tbody>';

      $total =0;
      $b = 0;
      foreach ($_SESSION["cart_products"] as $cart_itm)
      {
        $product_name = $cart_itm["product_name"];
        $product_qty = $cart_itm["product_qty"];
        $product_price = $cart_itm["product_price"];
        $product_code = $cart_itm["product_code"];
        $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
        echo '<tr class="'.$bg_color.'">';
        echo '<td>Hoeveelheid <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
        echo '<td>'.$product_name.'</td>';
        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Verwijder</td>';
        echo '</tr>';
        $subtotal = ($product_price * $product_qty);
        $total = ($total + $subtotal);
      }
      echo '<td colspan="4">';
      echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Ga naar winkelmandje</a>';
      echo '</td>';
      echo '</tbody>';
      echo '</table>';

      $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
      echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
      echo '</form>';
      echo '</div>';

    }
    ?>



    <?php

    $results = $mysqli->query("SELECT * FROM producten ORDER BY id ASC");
    if($results){
      $products_item = '<ul class="products">';
//fetch results set as object and output HTML
      while($obj = $results->fetch_object())
      {
        $products_item .= <<<EOT
	<li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="exportproduct/assets/img/{$obj->product_img_name}" style="width: 100px; height:100px;"></div>
	<div class="product-desc">{$obj->product_desc}</div>
	<div class="product-info">
	Price {$currency}{$obj->price} 
	
	<fieldset>
	
	
	<label>
		<span>Stuks</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	
	</fieldset>
	
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Toevoegen</button></div>
	</div></div>
	</form>
	</li>
EOT;
      }
      $products_item .= '</ul>';
      echo $products_item;
    }
    ?>



  <!-- Site footer -->
  <footer class="footer">
    <p>&copy; Joris Aventus 2017</p>
  </footer>

 <!-- /container -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
     <!-- product -->
    <script src="exportproduct/assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <!-- slider -->
    <script src="exportslider/assets/js/Slider_Carousel_webalgustocom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- 18+ verification js-->
<!--    <script src="js/18+verification.js"></script>-->
  </body>
</html>