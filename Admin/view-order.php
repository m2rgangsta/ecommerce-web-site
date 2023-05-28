<?php 
 
//include function Admin
include('../user/functions/myfunctions.php');
  //include header
  include('includes/header.php');
   
  
 
  if(isset($_GET['t']))
   {
    $tracking_no = $_GET['t'];

    $orderdata = checkTrackingNoValid($tracking_no);
    if(mysqli_num_rows($orderdata) < 0 )
    {
        ?>
        <h4>Something wrong </h4>   
 <?php
         die();

    }

   }else
   {
  ?>
        <h4>Something wrong yyyyyy </h4>   
  <?php
     die();
     }

     $data = mysqli_fetch_array($orderdata);
    ?>
 


 
    <div class="container">
        <div class="row">
            <div class="col-md-12">        
                        <div class="card">
                            <div class="card-header bg-primary">
                                    <span class="text-white fs-4">
                                        Oreder View
                                    </span>
                                    <a href="orders.php" class="btn btn-warning float-end"><i class="fa fa-reply"></i> Back</a>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                            <h4>Liverision details</h4>
                                            <hr>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Nom</label>
                                            <div class="border p-1">
                                                <?= $data['name']; ?>
                                            </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Email</label>
                                            <div class="border p-1">
                                                <?= $data['email']; ?>
                                            </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Telephone</label>
                                            <div class="border p-1">
                                                <?= $data['phone']; ?>
                                            </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Tracking Number</label>
                                            <div class="border p-1">
                                                <?= $data['tracking_no']; ?>
                                            </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Adress </label>
                                            <div class="border p-1">
                                                <?= $data['address']; ?>
                                            </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">ZIP code </label>
                                            <div class="border p-1">
                                                <?= $data['pincode']; ?>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <h4>Order Details</h4>
                                        <hr>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Produits</th>
                                                    <th>Prix</th>
                                                    <th>Quantite</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            
                                            <?php
                                            

                                                    $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, 
                                                    products p WHERE oi.order_id =o.id AND p.id =prod_id
                                                    AND o.tracking_no='$tracking_no' ";
                                                    $order_query_run = mysqli_query($con , $order_query);
                                                    
                                                    if(mysqli_num_rows($order_query_run) > 0)
                                                    {
                                                        foreach ($order_query_run as $item) {
                                                        ?>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                                    <?= $item['name']; ?>
                                                                </td>        
                                                                <td class="align-middle">
                                                                    <?= $item['price']; ?>DT
                                                                </td>
                                                                <td class="align-middle">
                                                                    <?= $item['orderqty']; ?>
                                                                </td>                           
                                                            </tr>
                                                        <?php
                                                        }
                                                    }
                                            ?>
                                            </tbody>
                                        </table>

                                        <hr>
                                        <h5>Prix Total : <span class="float-end fw-bold"><?= $data['total_price']; ?>DT</span></h5>
                                        
                                        <hr>
                                        <label class="fw-bold">Payemenet Mode (Cash on delivery)</label>          
                                        <div class="border p-1 mb-3">
                                            
                                            <?= $data['payement_mode']; ?>
                                        </div>
                                        <label class="fw-bold">Status</label>
                                        <div class="mb-3">
                                            <form action="code.php" method="POST">

                                                <input type="hidden" name="tracking_no" value="<?= $data['tracking_no']; ?>">  
                                                <select name="order_status" class="form-select">
                                                    <option value="0" <?= $data['status'] == 0?"selected":"" ?> >Mezelt t3tl</option>
                                                    <option value="1" <?= $data['status'] == 1?"selected":"" ?> >Sey</option>
                                                    <option value="2"<?= $data['status'] == 2?"selected":""  ?> >Annuler</option>
                                                </select>
                                                <button type="submit" name="update_Order_btn" class="btn btn-primary mt-2" >Update Status</button>
                                        </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
            </div>             
        </div>
    </div>
  
       <!-- include footer -->
          <?php include('includes/footer.php');?>
  