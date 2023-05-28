
<?php 
//include access admin only
include('../middleware/adminMiddleware.php');
//include header
include('includes/header.php'); 


 
?>

        <div class="container">
             
            <div class="row">
               <div class="col-md-12">
                <?php 
                    if(isset($_GET['id']))
                    {

                    
                    $id = $_GET['id'];
                    $product = getByID("products",$id);

                    if(mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);
                        ?>

                        <div class="card">
                            <div class="card-header">
                            <h4>Modifier Produits
                                <a href="products.php" class="btn btn-primary float-end">Retour</a>
                            </h4>
                            </div> 
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-md-12">
                                    <label class="mb-0">Select Category</label>
                                    <select name="category_id" class="form-select mb-2" >
                                    <option selected>Select Categories</option>
                                        <?php 
                                               $categories =  getAll("categories");
                                               if(mysqli_num_rows($categories) > 0 )
                                               {
                                               foreach($categories as $item){
                                            ?>
                                            <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?>><?= $item['name']; ?></option>
                                            <?php 
                                                }
                                            }
                                            else
                                            {
                                                echo "No category with this name";
                                            }
                                            ?>
                                        
                                        
                                        </select>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                    <div class="col-md-6">
                                    <label class="mb-0">Nom</label>
                                        <input type="text" name="name" value="<?= $data['name']; ?>" class="form-control mb-2" placeholder="Enter Category name" required>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="mb-0">Slug</label>
                                    <input type="text" name="slug" value="<?= $data['slug']; ?>" class="form-control mb-2" placeholder="Enter slug"required>                                 
                                    </div>
                                    <div class="col-md-12">
                                    <label class="mb-0">Small Description</label>
                                        <textarea name="small_description" placeholder="Enter Category Small Description" required rows="3" class="form-control mb-2"><?= $data['small_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                    <label class="mb-0">Description</label>
                                        <textarea name="description" placeholder="Enter Category Description"  rows="3" required class="form-control mb-2"><?= $data['description']; ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="mb-0">Original Prix</label>
                                        <input type="text" name="original_price" value="<?= $data['original_price']; ?>" class="form-control mb-2" required placeholder="Entrez le prix de produits">
                                    </div>
                                    <div class="col-md-6">
                                    <label class="mb-0">Vente Prix</label>
                                    <input type="text" name="selling_price" class="form-control mb-2" value="<?= $data['selling_price']; ?>" required placeholder="Enter le proix de vente">                                 
                                    </div>
                                    <div class="col-md-12">
                                    <label class="mb-0">Telecharge Image</label>
                                    <input type="file" name="image" class="form-control mb-2">                                 
                                    <label for="">current Image</label>
                                        <input type="hidden" name="old_image" value="<?=$data['image']?>">
                                        <img src="../uploads/<?=$data['image']?>" width="50px" height="50px" alt="">  
                                    </div>
        
                                    <div class="row">
                                    <div class="col-md-6">
                                    <label class="mb-0">Quantite</label>
                                    <input type="number" name="qty"  class="form-control mb-2" required placeholder="Enter Quantity" value="<?= $data['qty']; ?>">                                 
                                    </div>
                                    <div class="col-md-3">
                                    <label class="mb-0">Status</label><br>
                                    <input type="checkbox" name="status"<?=  $data['status'] == '0'?'':'checked'; ?>>                                 
                                    </div>
                                    <div class="col-md-3">
                                    <label class="mb-0">Tendance</label><br>
                                    <input type="checkbox" name="trending" <?=  $data['trending'] == '0'?'':'checked'; ?>  >                                 
                                    </div>
        
                                    </div>
                                    <div class="col-md-12">
                                    <label class="mb-0">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control mb-2" required placeholder="Enter Meta Title" value="<?= $data['meta_title']; ?>">
                                    </div>
                                    <div class="col-md-12">
                                    <label class="mb-0">Meta Description</label>
                                    <textarea rows="3" type="text" name="meta_description" required class="form-control mb-2" placeholder="Enter meta description"><?= $data['meta_description']; ?></textarea>                                 
                                    </div>
                                    <div class="col-md-12">
                                    <label class="mb-0">Meta Keywords</label>
                                    <textarea rows="3" type="text" name="meta_keywords" required class="form-control mb-2" placeholder="Enter meta keywords"><?= $data['meta_keywords']; ?></textarea>                                 
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
                            
                        </div>
                     <?php
                    }
                            else
                            {
                                echo "Product Not found ";
                            }
                 
                     }
                        else
                         {
                                echo "ID missing from url";
                         }
                    ?>
               </div>
            </div>
        </div>


<!-- include footer -->
<?php include('includes/footer.php'); ?>