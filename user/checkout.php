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
              <a href="checkout.php" class="text-dark">
                Caisse
              </a>
          </h6>
      </div>
  </div>

  <div class="py-5">
      <div class="container">
          <div class="card">
            <div class="card-bodyshadow">
                <form action="functions/placeorder.php" method="post">
              <div class="row ">
                        <div class="col-md-7">
                            <h5>Détails de base</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-blod">Nom</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" required>
                                    <small class="text-danger name"></small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-blod">E-mail</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control" required>
                                        <small class="text-danger email"></small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-blod">Telephone</label>
                                    <input type="text" name="phone" id="phone" placeholder="ENter Your phone" class="form-control" required>
                                    <small class="text-danger phone"></small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-blod">Code Pin</label>
                                    <input type="text" name="pincode" id="pincode" placeholder="ENter Your Code PIN" class="form-control" required>
                                    <small class="text-danger phone"></small>
                                </div>
                                <div class="col-md-12 mb-3 ">
                                    <label class="fw-blod">Address</label>
                                <textarea name="address" id="address" class="form-control" placeholder="Enter Your Address"  rows="5" required></textarea>
                                    <small class="text-danger address"></small>
                            </div>
                             </div>

                        </div>
                        <div class="col-md-5">
                            <h5>Détails de la commande</h5>
                            <hr>
                            


                            <?php $items = getartItems();
                            $total_price = 0;
                        
                            foreach($items as $citem)
                            {
                                ?>
                                <div class="mb-1 border">
                                            <div class="row align-items-center ">
                                                <div class="col-md-2">                                      
                                                    <img src="../uploads/<?= $citem['image']; ?>" alt="Image"  height="50px"  width="50px " >
                                                </div>
                                                
                                                <div class="col-md-5">
                                                    <label><?= $citem['name']; ?></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><?= $citem['selling_price']; ?></label>
                                                </div>
                                                    <div class="col-md-2">
                                                        <label>x<?= $citem['prod_qty']; ?></label>
                                                    </div>                                
                                             </div>
                                         </div>
                                <?php
                                $total_price += $citem['selling_price'] * $citem['prod_qty'];
                                                
                            }
                            ?>
                            <hr>
                            <h5>total Prix : <span class="float-end fw-bold"><?= $total_price; ?></span></h5>
                            <div class="">
                                <input type="hidden" name="payement_mode" value="COD">
                                <button type="submit" name="placeorderBtn" class="btn btn-success w-100">Confirmer et passer commande | COD</button>
                                <div id="paypal-button-container" class="mt-3"></div>    
                            </div>
                            
                           
                       </div>     
                  </div>
             </div>
             </form>
         </div>
      </div>
  </div>
  
       <!-- include footer -->
          <?php include('includes/footer.php');?>

           <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=AQQwzTNZrOTbhnM3dMh46ebc5f9MLp827FHuY3KQVVP0tu55egGXtvCe4e44mzTckscpYHP_udO4YgUd&currency=USD"></script>
  

    <script>
       

      paypal.Buttons({
            onClick(){
                console.log("on click");
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var pincode = $('#pincode').val();
                var address = $('#address').val();

                

                if(name.length == 0)
                {
                $('.name').text("*This field is required");
                }else{
                    $('name').text("");
                }
                if(email.length == 0)
                {
                $('.email').text("*This field is required");               
                }else{
                    $('email').text("");
                }
                if(phone.length == 0)
                {
                $('.phone').text("*This field is required");               
                }else{
                    $('phone').text("");
                }
                if(pincode.length == 0)
                {
                $('.pincode').text("*This field is required");               
                }else{
                    $('pincode').text("");
                }
                if(address.length == 0)
                {
                $('.address').text("*This field is required");                
                }else{
                    $('address').text("");
                }

                if(name.length == 0 || email.length == 0 || phone.length == 0 || pincode.length == 0 || address.length == 0)
                {
                    return false;
                }
            },
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                

            return actions.order.create({
                purchase_units: [{
                amount: {
                    value:'0.1' //'<?= $total_price ?>' // Can also reference a variable or function
                }
                }]
            });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
               
                const transaction = orderData.purchase_units[0].payments.captures[0];
               
               
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var pincode = $('#pincode').val();
                var address = $('#address').val();
                var data = {

                    'name': name,
                    'email': email,
                    'phone': phone,
                    'pincode': pincode,
                    'address': address,
                    'payement_mode': "Paid By PayPal",
                    'payement_id': transaction.id,
                    'placeorderBtn': true,
                };
                     $.ajax({
                    method: "POST",
                    url: "functions/placeorder.php",
                    data: data,
                    success: function (response) {
                        if(response == 201)
                        {
                            alertify.success('Order Placed Successfully');
                            //actions.redirect('my-orders.php');
                            window.location.href ='my-orders.php';
                            
                        }
                    }
               });


                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
            }
      }).render('#paypal-button-container');
    </script>
   