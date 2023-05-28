<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Bootstrap Product Card</title>
    <!----Bootstrap CSS link----->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!---Fontawesome CDN Link-->"
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!----Custom CSS Filw Link--->
    <style>
   }

body{
    font-family: 'Lexend', sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5 !important;
}
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


<div class="container">
<div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/salaa.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">sallon</a></h3>
                    <div class="price">1500Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="images">
                        <img src="images/ferch.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Ferch</a></h3>
                    <div class="price"><span>100Dt</span> 90Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/serire.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">deux serra</a></h3>
                    <div class="price">320Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/douche.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">douche</a></h3>
                    <div class="price">600Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>

        <div style="height: 20px"></div>













            <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/tmax.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Tmax</a></h3>
                    <div class="price">3.500Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>





        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/Malahuiti f12 r.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Malgahuiti f12 r</a></h3>
                    <div class="price">450Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>





        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/Asta H.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Asta H</a></h3>
                    <div class="price">11.000Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="productsDetails.php" class="image">
                        <img src="images/porshe cayenne 2017.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="productsDetails.php">porshe cayenne 2017</a></h3>
                    <div class="price">120.000Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div style="height: 20px"></div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/festina.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Festina</a></h3>
                    <div class="price">650Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/poussette chicco.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">poussette chicco</a></h3>
                    <div class="price">120Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/Sac a main.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Sac a main</a></h3>
                    <div class="price">755Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="images/kit iphone.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">kit iphone</a></h3>
                    <div class="price">120Dt</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="open_grepper_editor" title="Edit & Save To Grepper"></div>
<div style="height: 250px"></div> 


  <!----Bootstrap JS File Link----->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>