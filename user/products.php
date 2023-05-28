    
    <?php 
    
    //include function
    include('functions/userfunction.php');
    //include header
    include('includes/header.php');

    if(isset($_GET['category']))
    {

    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories",$category_slug);
    $category = mysqli_fetch_array($category_data);

    if($category)
    {
     $cid = $category['id'];
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
          <?= $category['name'] ?> </h6>
</div>

</div>
<div class="py-3">
    <div class="container">
            <div class="row ">
                <div class="col-md-12">

         <h2><?= $category['name'] ?></h2>
         <hr>
         <div class="row">
         <?php
                $products = getProdByCategory($cid);

                if(mysqli_num_rows($products) > 0)
                {
                    foreach($products as $item)
                    {

                    
                    ?>
                        <div class="col-md-3 mb-2">
                            <a href="product-view.php?product=<?= $item['slug']; ?>">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="../uploads/<?= $item['image']; ?>" alt="Products Image" width="250" height="200" class="w-100">
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
                    echo "No Products available";
                }

            ?>
            </div>
          </div>
        </div>
    </div>
</div>
        <?php
         }
         else
         {
             echo"probleme 404";
         }

         }
         else
         {
             echo"probleme 404";
         }
           
     //include footer 
         include('includes/footer.php');?>
