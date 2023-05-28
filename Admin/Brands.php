<?php 
  
//include function
include('../user/functions/myfunctions.php');

  //include header
  include('includes/header.php');
 ?>
 
 


 <div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Marques
                        <a href="Add-Brands.php" class=" btn btn-warning float-end"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus " > Add Brands  </i></a>
                        </h4>
                       
                    </div>
                    <div class="card-body" id="">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php
                                    $brands = getAllMarques();
                                    
                                    if(mysqli_num_rows($brands) > 0)
                                    {
                                        foreach ($brands as $item) {
                                        ?>
                                        <tr>
                                            <td><?=$item['id']; ?></td>
                                            <td><?=$item['name'];?></td>
                                            <td><?=$item['slug']; ?></td>
                                            <td><?= $item['status'] == '0'? "visible":"hidden" ?></td>
                                            <td><?=$item['created_at']; ?></td>
                                            <td>
                                                <a href="edit-category.php?id=<?=$item['id']; ?>" class="btn btn-primary">Edit</a>
                                                
                                            </td>
                                            <td>
                                           
                                                <button type="button" class="delete_category_btn btn btn-danger"  value="<?=$item['id'];?> ">Delete</button> 
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    }else{
                                        ?>
                                        <tr>
                                            <td align="center" colspan="5" > Aucune marque s’il vous plaît essayer d’ajouter marques </td>               
                                        </tr>
                                        <?php
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    
                    </div>
                </div>
          </div>
      </div>
  </div>
  
  
       <!-- include footer -->
          <?php include('includes/footer.php');?>
  