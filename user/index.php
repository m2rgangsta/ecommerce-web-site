    <?php 
    //include user function
    include('functions/userfunction.php');
    //include header
    include('includes/header.php');
    //include nav
    include('includes/nav.php');
    //include slider                
    include('includes/slider.php');
    include('contact.php');
    
        
        
    
    ?>
    
    

    <div class="py-5">
            <div class="container">
             <div class="row">
                <div class="col-md-12 col-sm-12">
            
                    <h4>Produits en Tendance</h4>
                    <div class="underline mb-2"></div>
                          <hr>

                    <div class="owl-carousel owl-theme">
                          <?php
                          $trendingProducts = getAlltrending();

                          if(mysqli_num_rows($trendingProducts) >0)
                          {
                              foreach ($trendingProducts as $item) {
                                ?>
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="product-view.php?product=<?= $item['slug']; ?>" class="image">
                                    <img  src="../uploads/<?= $item['image']; ?>" alt="Products Image"  class="w-100">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="product-content">
                                <h3 class="title"><a href="#" ><?= $item['name']; ?></a></h3>
                                <div class="price"><?= $item['selling_price']; ?>DT</div>
                                <a class="add-to-cart "  href="product-view.php?product=<?= $item['slug']; ?>">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                            
                            </div>
                            <br>
                        </div>
                            <?php
                                        }
                                    }
                                    ?>
                    
                
                     </div>
                </div>
            </div>
            <?php
    include('includes/sidebar.php');
    include('chatbot.php');
    ?>
    
         </div>
    </div>
                                </div>
    
<br>
    <div class="py-5 bg-f2f2f2">
        <div class="container">
                <div class="row ">
                   <div class="col-md-12">
                    <h4>A propos</h4>
                    <div class="underline mb-2"></div>
                    <p>
                    <b>ForsaShop</b> est <b>le premier site de vente en ligne <i>en Tunisie</i></b>, notre plate-forme permet de mettre en relation les clients et les vendeurs dans le but de réaliser de très bonnes affaires tout en bénéficiant de l'expertise <b>ForsaShop</b>. Vous cherchez un ordinateur, un smartphone, une tablette, ou encore une paire de chaussure? vous bénéficierez toujours des prix les plus bas, parmi nos milliers de produits en ligne. <b>ForsaShop</b> permet l'achat et la vente en ligne de manière simple et pratique avec des délais de livraison courts. De plus, nous vous assurons des transactions sécurisées et fiables. Avec <b>ForsaShop</b> vous allez pouvoir effectuer vos achats au meilleur prix, en toute sécurité et sans sortir de chez vous!
                    </p>
                    <p>
                    Que vous vouliez acheter une paire de jeans, des jouets pour vos enfants, un canapé pour votre salon ou un cadeau pour votre bien-aimé, <b>ForsaShop</b> Mall Tunisie est toujours là pour vous fournir les derniers produits selon vos besoins et vous aidera à trouver l'élément parfait. Vous n'avez plus à vous soucier lorsque vous achetez chez jumia.com.tn, vous pouvez être sûr de l'authenticité et de la qualité des produits que vous achetez. Par rapport à de nombreux magasins d'achats en ligne en Tunisie, nous avons une pléthore de partenaires de marque de confiance à bord. Nous garantissons des produits neufs et authentiques à des prix inégalés et un paiement cash à la livraison.
                    </p>
                                                          
                </div>
            </div>
        </div>
    </div>
                                   
    
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
            <script>
                $(document).ready(function () {
                    $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:4
                        }
                    }
                  })
                });
            </script>
    