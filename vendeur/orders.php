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
                        <h4 class="text-white">Orders
                        <a href="order-history.php" class="btn btn-warning float-end"><i class="fa fa-info   "> Historique  </i></a>
                        </h4>
                       
                    </div>
                    <div class="card-body" id="">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Tracking NO</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php
                                    $orders = getAllOrders();
                                    
                                    if(mysqli_num_rows($orders) > 0)
                                    {
                                        foreach ($orders as $item) {
                                        ?>
                                        <tr>
                                            <td><?=$item['id']; ?></td>
                                            <td><?=$item['name'];?></td>
                                            <td><?=$item['tracking_no']; ?></td>
                                            <td><?=$item['total_price']; ?>DT</td>
                                            <td><?=$item['created_at']; ?></td>
                                            <td>
                                                <a href="view-order.php?t=<?=$item['tracking_no']; ?>" class="btn btn-primary">View Details</a>
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
  