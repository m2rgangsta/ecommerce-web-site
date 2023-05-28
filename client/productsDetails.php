<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    
    <title>Products Deatils</title>
</head>
<style>
 .flex-box{
    display: flex;
    width: 1000px;
    margin: 20px auto;
 }
 .left{
    width: 50%;
 }
 .big-img{
    width: 300px;
    border: 1px solid black;
    
    

 }
 .big-img img{
    width: inherit;
    
 }
 .big-img:hover{
    border: 1.3px solid black;
 }
 
 .images{
    display: flex;
    justify-content: space-between;
    width: 60%;
    margin-top: 15px;
 }
 .small-img{
    width: 50px;
    overflow: hidden;
    border: 1.5px solid black;
 }
 .small-img img{
    width: inherit;
    cursor: pointer;
    transition: all 0.3 ease;
 }
 .small-img:hover img{
   transform: scale(1.2);
 }
 .url{
    font-size: 16px;
    font-weight: 400;
    color: rgb(0, 102, 255);
    align-items: center;
 }
.paname{
    font-size: 22px;
    font-weight: 600;
    margin-top: 30px;
 }
 .ratings i{
    color: rgb(255, 136, 0);
 }
 .price{
    font-size: 20px;
    font-weight: 500;
    margin: 20px 0;
 }
 .size{
    display:flex;
    align-items: center;
    margin:20px 0; 

 }
 .size p{
    font-size: 18px;
    font-weight: 500;
 }
.psize{
    width: 60px;
    height: 30px;
    border: 1px solid #ff5e00;
    color: #000;
    text-align: center;
    margin: 0 10px ;
    cursor: pointer;
} 
.psize.active{
    border-width: 1.5px;
    color: #ff5e00;
    font-weight: 500;
}
.quantity{
    display: flex;
}
.quantity p{
    font-size:18px ;
    font-weight: 500;
}
.quantity input{
    width: 40px;
    font-size: 17px;
    font-weight: 500;
    text-align: center;
    margin-left: 15px;
}
.btn-box{
    display: flex;
    margin-top: 40px ;
}
.btn-box button{
    font-size: 18px;
    padding: 8px 25px;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    color: white;

}
.cart-btn{
    background-color: #ff5e00;
    margin-right:20px ;
}
.buy-btn{
   background-color: #00aeff; 
}
.cart-btn:hover{
    background-color: #ff3c00;
}
buy-btn :hover{
    background-color:#0066ff;
}
h4{
    font-size: 150px;
    font-weight: 400;
    
    text-align: center;
    font-style: italic;
}
</style>
<body>
   <!-- including header -->
<?php include_once('header.php'); ?>


 <div class="flex-box">
    <div class="left">
        <div class="big-img">
            <img class="zoom" src="images/velo1.jpg" >
        </div>
        <div class="images">
             <div class="small-img">
                 <img  src="images/velo2.jpg" onclick="showImg(this.src);">
             </div>
             <div class="small-img">
                <img   src="images/velo3.jpg" onclick="showImg(this.src)">
            </div>
            <div class="small-img">
                <img  src="images/velo4.jpg" onclick="showImg(this.src)">
            </div> 
            <div class="small-img">
                <img  src="images/velo5.jpg" onclick="showImg(this.src)">
            </div> 
        </div>
    </div>

    <div class="right">
        <div class="url">Home > Products > Products Deatils</div>
       
        <div class="paname">Products</div>
        <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">200Dt</div>
        <div class="size">
            <div class="psize active">M</div>
            <div class="psize">L</div>
            <div class="psize">XL</div>
            <div class="psize">XXL</div>
        </div>
        <div class="quantity"></div>
        <p>Quantite :</p>
        <input type="number" min="1" max="10" value="1">

            <h4>Details</h4>
        <p>nbqsbd sqdbhsqdlj sqh d qsd jdjl qknqzd kqdbaz dnzdb <br>qmsdkaizd zajeyazvd zaebhzad azuhhbd <br>zehbjzd zhbgzvadv zahgvazd zadbazbaan zoab azob <br>za  zanzajd azdoudz qhbf  NEHB NELCHO</p>
   
    <div class="btn-box">
        <button class="cart-btn">Add to Cart</button>
        <button class="buy-btn">Buy Now</button>
    </div>
    </div>
 </div>

 <div style="height: 250px"></div>

<!-- including footer -->
<?php include_once('footer.php'); ?>

<script src="medium-zoom.min.js"></script>
<script src="main.js"></script>
<script>
let bigImg = document.querySelector('.big-img img');
function showImg(pic){
    bigImg.src = pic;
}

</script>
    
</body>
</html>