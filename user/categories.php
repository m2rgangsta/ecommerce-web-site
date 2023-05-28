    
    <?php 
    
        //include function
        include('functions/userfunction.php');
    //include header
    include('includes/header.php');
    
    ?>



<div class="py-3 bg-light">
    <div class="container">
    <h6 class="text-white" >
                <a href="index.php" class="text-dark">    
                    Accueil / 
                </a>
                <a href="categories.php" class="text-dark">
                    Collection
                </a>
            </h6>
    </div>

</div>
    <div class="py-5">
        <div class="container">
                <div class="row ">
                    <div class="col-md-12">

             <h2>Notre Collection</h2>
             <hr>
             <div class="row">
             <?php
                    $categories = getAllActive("categories");

                    if(mysqli_num_rows($categories) > 0)
                    {
                        foreach($categories as $item)
                        {

                        
                        ?>
                            <div class="col-md-3 mb-2">
                                <a href="products.php?category=<?= $item['slug']; ?>">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <img src="../uploads/<?= $item['image']; ?>" alt="Category Image" width="250" height="200" class="w-100">
                                        <h4 class="text-center"><?= $item['name']; ?></h4>
                                    </div>
                                </div>
                              </a>
                            </div>
                            
                        <?php
                        }
                    }
                    else
                    {
                        echo "Aucune catégorie disponible";
                    }

                ?>
                </div>
              </div>
            </div>
        </div>
    </div>
<br><br><br>

    <div class="py-5 bg-dark d-flex ">
        <div class="container ">
                <div class="row ">
                   <div class="col-md-3">
                        <h4 class="text-white">ForsaShop</h4>
                        <div class="underline mb-2"></div>
                        <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i>Accueil</a> <br>
                        <a href="#" class="text-white"><i class="fa fa-angle-right"></i>A propos</a> <br>
                        <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i>Panier</a> <br> 
                        <a href="categories.php" class="text-white"><i class="fa fa-angle-right"></i>Collections</a>                                
                 </div>
                    <div class="col-md-3">
                        <h4 class="text-white">Address</h4>
                        <p class="text-white">
                            #14, laffyette, <br>
                            station mandela,<br>
                            Tunis, Tunisie.
                        </p>
                        <a href="tel:+21629290967" class="text-white"><i class="fa fa-phone">+216 29290967</i></a><br>
                        <a href="mailto:contact@hortensia.com" class="text-white"><i class="fa fa-envelope">contact@hortensia.com</i></a>
                    </div>
                    <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.619891309896!2d10.19859881522426!3d36.85157847993789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd35afa5fa7ab5%3A0xd9cab365f4c409f4!2sTranscom%20CUN!5e0!3m2!1sfr!2stn!4v1666134729532!5m2!1sfr!2stn"  class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
        </div>
    </div>

    
    <div class="py-2 bg-danger">
        <div class="text-center">
            <p class="mb-0 text-white">Copright @ <a href="https://www.facebook.com/rhouma.makram/" ></a>Makram M2r</a> - <?= date('y') ?></p>
        </div>
    </div>
         <!-- include footer -->
            <?php include('includes/footer.php');?>
    