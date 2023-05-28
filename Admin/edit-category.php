
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
                      $category = getByID("categories",$id);

                      if(mysqli_num_rows($category) > 0)
                      {
                            $data = mysqli_fetch_array($category);
                      
                         ?>
                
                            <div class="card">
                                <div class="card-header">
                                <h4>Modifier categorie
                                <a href="category.php" class="btn btn-primary float-end">Back</a>
                                </h4>
                                </div> 
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="hidden" name="category_id" value="<?=$data['id']?>" >
                                        <label for="">Nom</label>
                                            <input type="text" name="name" value="<?=$data['name']?>" class="form-control" placeholder="Entrez le nom de categorie">
                                        </div>
                                        <div class="col-md-6">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" value="<?=$data['slug']?>" class="form-control" placeholder="Enter slug">                                 
                                        </div>
                                        <div class="col-md-12">
                                        <label for="">Description</label>
                                            <textarea name="description" placeholder="Enter Category Description"  rows="3" class="form-control"><?=$data['description']?></textarea>
                                        </div>

                                        <div class="col-md-12">
                                        <label for="">Telecharge Image</label>
                                        <input type="file" name="image" class="form-control">     
                                        <label for="">current Image</label>
                                        <input type="hidden" name="old_image" value="<?=$data['image']?>">
                                        <img src="../uploads/<?=$data['image']?>" width="50px" height="50px" alt="">                            
                                        </div>

                                        <div class="col-md-12">
                                        <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control"value="<?=$data['meta_title']?>" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="col-md-12">
                                        <label for="">Meta Description</label>
                                        <textarea rows="3" type="text" name="meta_description" class="form-control" placeholder="Enter meta description"><?=$data['meta_description']?></textarea>                                 
                                        </div>
                                        <div class="col-md-12">
                                        <label for="">Meta Keywords</label>
                                        <textarea rows="3" type="text" name="meta_keywords"  class="form-control" placeholder="Enter meta keywords"><?=$data['meta_keywords']?></textarea>                                 
                                        </div>
                                        <div class="col-md-6">
                                        <label for="">Status</label>
                                        <input type="checkbox" <?=$data['status'] ? "checked": "" ?> name="status"  >                                 
                                        </div>
                                        <div class="col-md-6">
                                        <label for="">Popular</label>
                                        <input type="checkbox" <?=$data['popular'] ? "checked": "" ?> name="popular"  >                                 
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="update_category_btn">Modifier</button>
                                        </div>
                                    </div>
                                    </form>
                                    
                                </div>
                                
                            </div>
                        <?php
                        }
                        else{
                            echo "Catégorie introuvable";
                        }
                     }
                     else
                     {
                        echo "Id missing from url";
                     }
                 ?>
               </div>
            </div>
        </div>
     

<!-- include footer -->
<?php include('includes/footer.php'); ?>