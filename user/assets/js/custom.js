$(document).ready(function () {
    
    
    $(document).on('click','.increment-btn', function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 :value;
        if(value < 10)
        {
            value ++;
            
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
        
    });

    $(document).on('click','.decrement-btn', function (e) {
    
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 :value;
        if(value > 1)
        {
            value --;
            
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
        
    });

    $(document).on('click','.addTOCartBtn', function (e) {
    
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();
        //alert(prod_id);
        $.ajax({
            method: "POST",
            url: "functions/Hcart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "add"
            },
            success: function (response) {
                    
                    if (response == 201) 
                {
                alertify.success("Product Added to cart");
                }
                
                else if (response == "existing") 
                {
                alertify.success("Product alerady in cart");
                }
            
                else if (response == 401) 
                {
                    
                        alertify.success("login to contiune");
                }
                else if (response == 500) 
                {
                    
                    alertify.success("something wrong");
                 }
                
            }
        });
        
    });
    
    

    $(document).on('click', '.updateQty', function () {

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).closest('.product_data').find('.prodId').val();

        $.ajax({
            method: "POST",
            url: "functions/Hcart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "update"
            },
            success: function (response) {
               //alert(response);
            }
        });
        
    });



    $(document).on('click','.deleteItem', function () {
        var cart_id = $(this).val()
        //alert(cart_id);

        $.ajax({
            method: "POST",
            url: "functions/Hcart.php",
            data: {
                "cart_id": cart_id,
                "scope": "delete"
            },
            success: function (response) {
                if (response == 200) 
                {
                alertify.success("Item deleted successfully ");
                $('#mycart').load(location.href + " #mycart");
                }else{
                    alertify.success(response);
                }
            }
        });


        
    });

    
    $(document).on('click','.addToWishlist', function (e) {
    
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();
        //alert(prod_id);
        $.ajax({
            method: "POST",
            url: "functions/Hwishlist.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "add"
            },
            success: function (response) {
                    
                    if (response == 201) 
                {
                alertify.success("Product Added to wishlist");
                }
                
                else if (response == "existing") 
                {
                alertify.success("Product alerady in wishlist");
                }
            
                else if (response == 401) 
                {
                    
                        alertify.success("login to contiune");
                }
                else if (response == 500) 
                {
                    
                    alertify.success("something wrong");
                 }
                
            }
        });
        
    });
    $(document).on('click', '.updateQty', function () {

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).closest('.product_data').find('.prodId').val();

        $.ajax({
            method: "POST",
            url: "functions/Hwishlist.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "update"
            },
            success: function (response) {
               //alert(response);
            }
        });
        
    });



    $(document).on('click','.deleteItem', function () {
        var cart_id = $(this).val()
        //alert(cart_id);

        $.ajax({
            method: "POST",
            url: "functions/Hwishlist.php",
            data: {
                "cart_id": cart_id,
                "scope": "delete"
            },
            success: function (response) {
                if (response == 200) 
                {
                alertify.success("Item deleted successfully ");
                $('#mycart').load(location.href + " #mycart");
                }else{
                    alertify.success(response);
                }
            }
        });


        
    });
    


});
