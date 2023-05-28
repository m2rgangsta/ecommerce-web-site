
<?php 
 //include access admin only
include('../middleware/adminMiddleware.php');
//include header
include('includes/header.php'); 



?>

        <div class="container">
             
            <div class="row">
               <div class="col-md-7 ">
                <div class="card center-block">
                    <div class="card-header">
                    <h4>Ajouter Marques</h4>
                    </div> 
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                            <label for="">Nom</label>
                                <input type="text" name="name" class="form-control" placeholder="Entrez Marque Nom">
                            </div>
                            <div class="col-md-12">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter slug">                                 
                            </div>
                           
                            <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"  >                                 
                            </div>
                           
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_brands_btn">Enregistre</button>
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