<?php
session_start();
include_once 'include/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'include/header.php';
?>
<?php
//ophalen productgegevens!
if(isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
}else{
    header('Location: '); //word weer doorgestruurd na index.php als er geen product is geselecteerd
}

//Haalt de gegevens van het product op uit de Database!
$query=mysqli_query($con,"select * from products WHERE product_id = $id");
while($ft=mysqli_fetch_array($query)) {
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Slijterij stuk in m'n Kraag</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- css -->
    <link href="css/style-product.css" rel="stylesheet">

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



<main class="container">

    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <img data-image="red" class="active" src="exportproduct/assets/img/<?php echo $ft['image_name'];?>" alt="">
    </div>


    <!-- Right Column -->
    <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
            <h1><?php echo $ft['product_name'];?></h1>
            <p><?php echo $ft['product_desc'];?></p>
        </div>

        <!-- Product Configuration -->


        <!-- Product Pricing -->
        <div class="product-price">
            <span>€<?php echo $ft['product_price'];?></span>
            <a href="#" class="cart-btn">Voeg toe aan winkelmandje</a>
        </div>
    </div>
</main>








<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/script.js" charset="utf-8"></script>

<!-- product -->
<script src="exportproduct/assets/js/Animated-Pretty-Product-List-v12.js"></script>
<!-- slider -->
<script src="exportslider/assets/js/Slider_Carousel_webalgustocom.js"></script>
<!-- 18+ verification js-->
<!--    <script src="js/18+verification.js"></script>-->
</body>
</html>
    <?php
}
?>