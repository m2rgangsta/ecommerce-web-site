<?php
//include function
include('functions/userfunction.php');
//include header
include('includes/header.php');

if(isset($_GET['product']))
{
    $product_slug = $_GET['product'];
    $product_data = getSlugActive("products",$product_slug);
    $product = mysqli_fetch_array($product_data);

    if($product)
    {
        ?>
        <div class="py-3 bg-light">
    <div class="container">
    <h6 class="text-dark" >
    <a class="text-dark" href="Categories.php">
        Accueil /
    </a>
     <a class="text-dark" href="Categories.php">
         collections /
    </a>
          <?= $product['name'] ?> </h6>
    </div>

    </div>
        <div class="bg-light py-4">

        
        <div class="container mt-3 product_data">
        <div class="row">
            <div class="col-md-4">
                <div class="shadow">
                    <img src="../uploads/<?= $product['image']; ?>" alt="Product Image" class="w-100">
                 </div>
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold"><?= $product['name'];  ?>
                    <span class="float-end text-danger"><?php if ($product['trending']){echo "Trending";} ?></span>
                 </h4>
                <hr>
                <p><?= $product['small_description'];  ?> </p>
                <div class="row">
                    
                    <div class="col-md-6">
                    <h4> <span class="text-success fw-bold"> <?= $product['selling_price'];  ?></span>DT</h4>   
                  </div>
                  <div class="col-md-6">
                    <h5>  <s class="text-danger"><?= $product['original_price'];  ?></s>DT </h5>
                    </div>
                  </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                        
                        <div class="input-group mb-3" style="width:130px;">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" class="form-control text-center input-qty bg-white" value="1"  disabled >
                            <button class="input-group-text increment-btn">+</button>
                        </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button class=" addTOCartBtn btn btn-primary px-4 " value="<?= $product['id']; ?>"> <i class="fa fa-shopping-cart me-2"></i> Add to cart</button>
                            </div>
                            <div class="col-md-6">
                                <button class=" addToWishlist btn btn-danger px-4" value="<?= $product['id']; ?>"> <i class="fa fa-heart-cart me-2"></i> Add to wishlist</button>
                            </div>

                        </div>

            </div>
                <hr>
                <h6>Product Description</h6>
                
                
                <p><?= $product['description'];  ?> </p>

            </div>
        </div>
        </div>
        </div>
        <?php
    }
    else
    {
    
    ?>
    <div class=" card card-body shadow text-center ">
        <h4 class="py-3">  Produit introuvable</h4>
    </div>
    <?php
    }
}
else
{
    ?>
    <div class=" card card-body shadow text-center ">
        <h4 class="py-3">  Probleme 404</h4>
    </div>
    <?php
}
  
//include footer 
include('includes/footer.php');?>