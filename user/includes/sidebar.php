<style>
 

.wrapper{
    width: 320px;
    background: white;
    border-radius: 10px;
    padding: 20px 20px 40px 20px;
}

.price-in .field{
    height: 45px;
    width: 140px;
    display: flex;
    align-items: center;
    margin-top: 25px;
}
.price-in .field:nth-child(1){
    float: left;
}
.price-in .field:nth-child(2){
    display: inline-flex;
}
.field input{
    width: 70px;
    height: 25px;
    outline: none;
    margin-left: 12px;
    border: 1px solid gray;
    background: white;
    border-radius: 10px;
    padding-left: 10px;
}
.field input[type="number"]::-webkit-inner-spin-button,
.field input[type="number"]::-webkit-outer-spin-button{
    -webkit-appearance: none;
}
.slider{
    height: 5px;
    border-radius: 5px;
    background: gray;
    position: relative;
    top: 15px;
}
.slider .pro{
    height: 5px;
    left: 7%;
    right: 4%;
    position: absolute;
    border-radius: 5px;
    background: #04b6ec;
}
.range-in{
    position: relative;
    
}
.range-in input{
    position: absolute;
    top: 10px;
    height: 5px;
    width: 100%;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
}
.range-in input[type="range"]::-webkit-slider-thumb{
    height: 17px;
    width: 17px;
    border-radius: 50px;
    pointer-events: auto;
    -webkit-appearance: none;
    background: #04b6ec;
    border: none;
}

</style>

    
<div class="container ">
     

     <div class="vertical-menu ">
        
                      
                            
                               
            <label class="float-end active text-white text-center rounded-pill brand p-2 col-md-2 bg-primary">Acheter par images</label>
            
              
            
              
            
            <br>
                <br>
                <br>
                <div class="float-end ">
                <?php $categories = getAllActive("categories");


                            foreach($categories as $item)
                            {

                            
                            ?>
                            
                                <div class=" border">
                                
                                            <div class="row align-items-center ">
                                                <div class="col-md-2">                                      
                                                    <img src="../uploads/<?= $item['image']; ?>" alt="Image"  height="120px"  width="80px " >
                                                </div>
                                                
                                                <div class="col-md-5 ms-5">
                                                    <label><?= $item['name']; ?></label>
                                                </div>
                                                
                                                                               
                                             </div>
                                  </div>
                                  <br>
                                <?php
                                
                                                
                                }
                                ?>
                            
                                <input type="hidden" name="payement_mode" value="COD">
                                <button type="submit" name="placeorderBtn" class=" fa fa-search btn btn-primary w-100">rechercher par Image categorie</button>
                                <div id="paypal-button-container" class="mt-3 "></div>    
                            </div>
        </div>

<div class="container mt-5">
     

        <div class="vertical-menu ">
                      
                            
                               
            <label class="active text-white text-center rounded-pill brand p-2 col-md-2 bg-primary">Achete par Categories</label>
              <div class="">
              <?php
                    $categories = getAllActive("categories");

                    if(mysqli_num_rows($categories) > 0)
                    {
                        foreach($categories as $item)
                        {

                        
                        ?>
                <div class="d-flex justify-content-beyween mt-2">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                        <label for="flexCheckDefault" class="form-check-kabel"><?= $item['name']; ?></label>
                        <span class="float-end "></span>
                    </div>
                </div>
                <?php
                        }
                    }
                    else
                    {
                        echo "No Categories available";
                    }

                ?>
              
                
            </div>    
        </div>
        


        <div class="vertical-menu ">
            <label class="active text-white text-center rounded-pill brand p-2 col-md-2 bg-primary">Achete par produits nom</label>
              <div class="">
              <?php
                $products = getAllProd('products');

                if(mysqli_num_rows($products) > 0)
                {
                    foreach($products as $item)
                    {

                    
                    ?>
                       
                           
                                    
                <div class="d-flex justify-content-beyween mt-2">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                        <label for="flexCheckDefault" class="form-check-kabel"><?= $item['name']; ?></label>
                        <span>13</span>
                        
                    </div>
                </div>
                
                                
        
                        
                    <?php
                    }
                }
                else
                {
                    echo "No Products available";
                }

            ?>
                
            </div>    
        </div>


       <div class="vertical-menu "> 
            <label  class="active text-white text-center rounded-pill brand p-2 col-md-2 bg-primary">Filter par Prix</label>
            <div class="filter-content ">
      
     <div class="wrapper ">
        
        <div class="price-in">
            <div class="field">
                <span>Min</span>
                <input type="number" class="in-max" value="500">
            </div>
            <!-- <span class="separator">-</span> -->
            <div class="field">
                <span>Max</span>
                <input type="number" class="in-min" value="10500">
            </div>
        </div>
        <div class="slider">
            <div class="pro"></div>
        </div>
        <div class="range-in ">
            <input type="range" class="range-min" min="0" max="15000" value="500">
            <input type="range" class="range-max" min="0" max="15000" value="15000">
        </div>
    </div>
        
        
    <script>
        const rangein = document.querySelectorAll(".range-in input");

        const pricein = document.querySelectorAll(".price-in input");

        const progress = document.querySelector('.slider .pro');
        let priceGap = 1000;

        // pricein.forEach(input =>{
        //     input.addEventListener("input", e =>{
        //         let minVal = parseInt(pricein[0].value),
        //         maxVal = parseInt(pricein[1].value);

        //        if(maxVal - minVal < priceGap){
        //            if(e.target.className === "in-min"){
        //                 rangein[0].value = minVal;
        //                 progress.style.left = (minVal / rangein[0].max) * 100 + "%";
        //            }else{
        //                 rangein[1].value = maxVal;
        //                 progress.style.right = 100 - (maxVal / rangein[1].max) * 100 + "%";
        //            }
        //        }
        //     });
        // });





        rangein.forEach(input =>{
            input.addEventListener("input", e =>{
                let minVal = parseInt(rangein[0].value),
                maxVal = parseInt(rangein[1].value);

               if(maxVal - minVal < priceGap){
                   if(e.target.className === "range-min"){
                        rangein[0].value = maxVal - priceGap;
                   }else{
                        rangein[1].value = minVal + priceGap;
                   }
               } else{
                    pricein[0].value = minVal;
                    pricein[1].value = maxVal;
                    progress.style.left = (minVal / rangein[0].max) * 100 + "%";
                    progress.style.right = 100 - (maxVal / rangein[1].max) * 100 + "%";
               }
            });
        });
    </script>
 </div>  
 

<?php 
include('footer.php');
?><!--include footer-->