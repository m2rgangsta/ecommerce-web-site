
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/bootstrap.css.map" rel="stylesheet" >
    
    <!-- css style-->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- owl carsouel css file -->
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" >
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" >

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


      <!-- link cdn alertify js  --> 
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
      <!-- link cdn bootstrap theme for alertify js -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


      <!----Bootstrap CSS link----->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!---Fontawesome CDN Link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    
  
      <title>ForsaShop</title>
      <style>
          

        :root{ --main-color: #00FFFF; }
        .boxc{
            width: 1145px;
            height: 420px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .product-grid{
            font-family: 'Lexend', sans-serif;
            text-align: center;
            margin: 0 0 10px;
            border: 10px solid #fff;
            transition: all 0.4s ease 0s;
        }
        .product-grid:hover{ box-shadow: 0 15px 45px rgba(131,131,131,.3); }
        .product-grid .product-image{ position: relative; }
        .product-grid .product-image a.image{display: block; }
        .product-grid .product-image img{
            width: 100%;
            height: 270px;
        }
        .product-grid .product-links{
            padding: 0;
            margin: 0;
            list-style: none;
            opacity: 0;
            position: absolute;
            top: 10px;
            right: 10px;
            transition: all 0.4s ease 0s;
        }
        .product-grid:hover .product-links{ opacity: 1; }
        .product-grid .product-links li{
            margin: 0 0 8px;
            transform: translateX(-10px);
            transition: all 0.3s ease 0s;
        }
        .product-grid:hover .product-links li{ transform: translateX(0);}
        .product-grid .product-links li a{
            color: var(--main-color);
            background-color: rgba(118,167,19,.15);
            font-size: 16px;
            line-height: 30px;
            width: 30px;
            height: 30px;
            border-radius: 3px;
            display: block;
            transition: all 0.2s ease-out;
        }
        .product-grid .product-links li a:hover{
            color: #fff;
            background: var(--main-color);
        }
        .product-grid .product-content{ 
            background: #fff;
            padding: 18px 12px 12px;
            position: relative;
        }
        .product-grid .title{
            font-size: 20px;
            font-weight: 600;
            text-transform: capitalize;
            margin: 0 0 10px;
        }
        .product-grid .title a{
            color: #071c1f;
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }
        .product-grid .title a:hover{ color: var(--main-color); }
        .product-grid .price{
            color: #ff7d3f;
            font-size: 17px;
            font-weight: 700;
        }
        .product-grid .price span{
            color: #071c1f;
            text-decoration: line-through;
        }
        .product-grid .add-to-cart{
            color: #fff;
            background-color: var(--main-color);
            font-size: 19px;
            line-height: 40px;
            width: 40px;
            height: 40px;
            border-radius: 40px;
            transform: scale(0);
            position: absolute;
            bottom: -28px;
            right: -4px;
            transition: all 0.3s ease 0s;
        }
        .product-grid:hover .add-to-cart{ transform: scale(1); }
        .product-grid .add-to-cart:hover{ background: #ff7800; }
        @media screen and (max-width: 990px){
            .product-grid{ margin-bottom: 30px; }
        }
      </style>
  </head>
  
  <body>

    
    <?php 
    
    //'include navbar
    include('navbar.php');
    // include 2eme navbar
    include('includes/navbar2.php');
    
    
    
    
    ?>
    