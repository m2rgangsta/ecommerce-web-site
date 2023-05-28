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
                        <h4 class="text-white">Profil
                        <a href="order-history.php" class="btn btn-warning float-end"><i class="fa fa-info   "> History  </i></a>
                        </h4>
                       
                    </div>
                    <div class="card-body" id="">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php
                                    $users =getAllusers();
                                    
                                    if(mysqli_num_rows($users) > 0)
                                    {
                                        foreach ($users as $item) {
                                        ?>
                                        <tr>
                                            <td><?=$item['id']; ?></td>
                                            <td><?=$item['name'];?></td>
                                            <td><?=$item['email']; ?></td>
                                            <td><?=$item['phone']; ?></td>
                                            <td><?=$item['role_as'] == '0'? "user": "admin"  ?> </td>
                                            <td><?=$item['created_at']; ?></td>
                                            <td>
                                                <a href="view-order.php?t=" class="btn btn-primary">View Details</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    }else{
                                        ?>
                                        <tr>
                                            <td colspan="5"> Non orders passe</td>               
                                        </tr>
                                        <?php
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    
                    </div>
                    <div class="card card-body shadow text-center">
                          <h4 class="py-3">vendeur Profil</h4>
                      </div>
                    <div class="card-body" id="">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php
                                    $vendeur =getAllvendeur();
                                    
                                    if(mysqli_num_rows($vendeur) > 0)
                                    {
                                        foreach ($vendeur as $item) {
                                        ?>
                                        <tr>
                                            <td><?=$item['id']; ?></td>
                                            <td><?=$item['name'];?></td>
                                            <td><?=$item['email']; ?></td>
                                            <td><?=$item['phone']; ?></td>
                                            <td><?=$item['address']; ?></td>
                                            <td><?=$item['role_as'] == '0'? "user": "vendeur"  ?> </td>
                                            <td><?=$item['created_at']; ?></td>
                                            <td>
                                                <a href="view-order.php?t=" class="btn btn-primary">View Details</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    }else{
                                        ?>
                                        <tr>
                                            <td colspan="5"> Non orders passe</td>               
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
  