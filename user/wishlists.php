<?php 
  

  //include function
  include('functions/userfunction.php');
   //include sesion Message error
   include('authentification.php');
  //include header
  include('includes/header.php');
  ?>
 


  <div class="py-3 bg-light">
      <div class="container">
          <h6 class="text-white" >
              <a href="index.php" class="text-dark">    
                  Accueil / 
              </a>
              <a href="wishlists.php" class="text-dark">
              Liste de souhaits
              </a>
          </h6>
      </div>
  </div>

  <div class="py-5">
      <div class="container">
          <div class="">
              <div class="row ">
                  <div class="col-md-12">
              <div id="mycart">
                      
                  <?php $items = getwishlistItems();
                  if(mysqli_num_rows($items) > 0){
                      ?>
                  <div class="row align-items-center ">

                              <div class="col-md-5">
                                  <h6>Produits</h6>

                              </div>
                              <div class="col-md-3">
                                  <h6>Prix</h6>
                               </div>

                              <div class="col-md-2">
                                   <h6>Quntite</h6>
                              </div>
                              
                              <div class="col-md-2">
                                  <h6>Supprimer</h6>
                              </div>
                       
                  </div>
                       <div id="">
                  <?php
                  foreach($items as $citem)
                  {
                      ?>
                          <div class="product_data card shadow-sm mb-3 ">
                              <div class="row align-items-center ">
                                  <div class="col-md-2">
                                      
                                      <img src="../uploads/<?= $citem['image']; ?>" alt="Image" height="80px"  width="80 " >
                                  </div>
                                  
                                  <div class="col-md-3">
                                      <h5><?= $citem['name']; ?></h5>

                                  </div>
                                  <div class="col-md-3">
                                  <h5><?= $citem['selling_price']; ?>DT</h5>
                                  </div>
                                  <div class="col-md-2">
                                      <input type="hidden" class="prodId" value="<?= $citem['prod_id']; ?>">
                                      <div class="input-group mb-3" style="width:130px; height:18px;" >
                                          <button class="input-group-text decrement-btn updateQty">-</button>
                                          <input type="text" class="form-control text-center input-qty bg-white" value="<?= $citem['prod_qty']; ?>"  disabled >
                                          <button class="input-group-text increment-btn updateQty">+</button>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid']; ?>">
                                      <i class="fa fa-trash me-2"></i> Supprimer </button>
                                  </div>
                              </div>
                          </div>
                      <?php
                      
                  }
              
                  ?>
                   <div class="float-end">
                      <a href="checkout.php" class="btn btn-outline-primary">Processus de paiement</a>
                  </div>
                  <?php
                  }else{
                      ?>
                      <div class="card card-body shadow text-center">
                          <h4 class="py-3">Votre liste de souhaits est vide</h4>
                      </div>
                      <?php
                  }
                  ?>
                  </div>   
               </div>
           </div>
          </div>
      </div>
  </div>
  
       <!-- include footer -->
          <?php include('includes/footer.php');?>
  