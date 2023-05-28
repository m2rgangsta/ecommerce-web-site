
<?php 
//include access vendeur only
//include('../middleware/vendeurMiddleware.php');
include('../user/functions/myfunctions.php');
//include header
include('includes/header.php'); 





?>

        <div class="container">
             
            <div class="row">
               <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Ajouter des produits</h4>
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
                                    <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
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
                            <div class="col-md-6">
                            <label class="mb-0">Nom</label>
                                <input type="text" name="name" class="form-control mb-2" placeholder="Enter Categories nom" required>
                            </div>
                            <div class="col-md-6">
                            <label class="mb-0">Slug</label>
                            <input type="text" name="slug" class="form-control mb-2" placeholder="Enter slug"required>                                 
                            </div>
                            <div class="col-md-12">
                            <label class="mb-0">Petite description</label>
                                <textarea name="small_description" placeholder="Enter Category Petite description" required rows="3" class="form-control mb-2"></textarea>
                            </div>
                            <div class="col-md-12">
                            <label class="mb-0">Description</label>
                                <textarea name="description" placeholder="Enter Category Description"  rows="3" required class="form-control mb-2"></textarea>
                            </div>
                            <div class="col-md-6">
                            <label class="mb-0">Original prix</label>
                                <input type="text" name="original_price" class="form-control mb-2" required placeholder="Enter Products Price">
                            </div>
                            <div class="col-md-6">
                            <label class="mb-0">Vente prix</label>
                            <input type="text" name="selling_price" class="form-control mb-2" required placeholder="Enter Selling Price">                                 
                            </div>
                            <div class="col-md-12">
                            <label class="mb-0">Télécharger l’image</label>
                            <input type="file" name="image" class="form-control mb-2">                                 
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                            <label class="mb-0">Quantite</label>
                            <input type="number" name="qty" class="form-control mb-2" required placeholder="Enter Quantity">                                 
                            </div>
                            <div class="col-md-3">
                            <label class="mb-0">Status</label><br>
                            <input type="checkbox" name="status"  >                                 
                            </div>
                            <div class="col-md-3">
                            <label class="mb-0">Tendances</label><br>
                            <input type="checkbox" name="trending"  >                                 
                            </div>

                            </div>
                            <div class="col-md-12">
                            <label class="mb-0">Méta-titre</label>
                                <input type="text" name="meta_title" class="form-control mb-2" required placeholder="Enter Meta Title">
                            </div>
                            <div class="col-md-12">
                            <label class="mb-0">Meta Description</label>
                            <textarea rows="3" type="text" name="meta_description" required class="form-control mb-2" placeholder="Enter meta description"></textarea>                                 
                            </div>
                            <div class="col-md-12">
                            <label class="mb-0">Méta-mots-clés</label>
                            <textarea rows="3" type="text" name="meta_keywords" required class="form-control mb-2" placeholder="Enter meta keywords"></textarea>                                 
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_product_btn">Sauvegarder</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                    
                </div>
                
               </div>
            </div>
        </div>


<!-- include footer -->
<?php include('includes/footer.php'); ?>