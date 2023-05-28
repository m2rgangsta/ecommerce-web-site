
<?php 
 //include access admin only
include('../middleware/adminMiddleware.php');
//include header
include('includes/header.php'); 



?>

        <div class="container">
             
            <div class="row">
               <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Ajouter categories</h4>
                    </div> 
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="">Nom</label>
                                <input type="text" name="name" class="form-control" placeholder="Entre le nom de categories">
                            </div>
                            <div class="col-md-6">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter slug">                                 
                            </div>
                            <div class="col-md-12">
                            <label for="">Description</label>
                                <textarea name="description" placeholder="Enter Category Description"  rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                            <label for="">Telecharge Image</label>
                            <input type="file" name="image" class="form-control">                                 
                            </div>
                            <div class="col-md-12">
                            <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title">
                            </div>
                            <div class="col-md-12">
                            <label for="">Meta Description</label>
                            <textarea rows="3" type="text" name="meta_description" class="form-control" placeholder="Enter meta description"></textarea>                                 
                            </div>
                            <div class="col-md-12">
                            <label for="">Meta Keywords</label>
                            <textarea rows="3" type="text" name="meta_keywords" class="form-control" placeholder="Enter meta keywords"></textarea>                                 
                            </div>
                            <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"  >                                 
                            </div>
                            <div class="col-md-6">
                            <label for="">Populaire</label>
                            <input type="checkbox" name="popular"  >                                 
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_category_btn">Enregistre</button>
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