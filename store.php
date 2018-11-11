<?php
    session_start();
    if ($_SESSION["UserName"] == null && $_SESSION["Password"]==null ){
        include("signout.php"); 
        header("Location:signin.php");
    }else{
        $full_name = $_SESSION['User'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .drawer-controls {
            padding-top: 10px;
        }
        .header{        font-size: 37px !important;       
                        font-weight: 900;
                        color: #0c4da2;
        }
        .cart{
            width: 100px !important;
            font-size:17px !important; 
        }
    </style>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
</br>
     <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-sm-8">
               <h1 class="header">Welcome for shopping, <span><?php echo $full_name; ?></span></h1>
                <button type="submit" class="navbar-text navbar-right butn btn-danger" style =" margin-right: 40px;font-size:17px;" ><a href="signout.php" style="color: white;">Logout</a></button>
            </div>
         </div>
    </div>
    </br>
    </br>
    <div class="container">
        <div class="row">
           <div class="col-md-6 col-sm-6 border">
                <h1 class="header">Products</h1>
                <div class="panel-body">                                   
                    <div class="border preview">
                        <div class="border"> 
                           <table id="products">
                                <tr class="border" id="product-one">
                                  <td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td>
                                  <td class="border"><h5>Product Name: <span class="product-name-one">Iphone X</span></h5><h5>Price: $<span class="price-one">980</span></h5><span> Frequency: <input type="number" class="frequency-one" style="width: 50px; height: 20px;" value="" required></span></td>
                                  <td class="border"><button type="submit" class="cart butn btn-danger" id="product-1-submit">Add to cart</button></td>
                                </tr>
                                <tr class="border" id="product-two">
                                  <td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td>
                                  <td class="border"><h5>Product Name: <span class="product-name-two">Iphone 8</span></h5><h5>Price: $<span class="price-two">920</span></h5><span> Frequency: <input type="number" class="frequency-two" style="width: 50px; height: 20px;" value="" required></span></td>
                                  <td class="border"><button type="submit" class="cart butn btn-danger" id="product-2-submit">Add to cart</button></td>
                                </tr>
                                <tr class="border" id="product-three">
                                  <td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td>
                                  <td class="border"><h5>Product Name: <span class="product-name-three">Iphone 7+</span></h5><h5>Price: $<span class="price-three">880</span></h5><span> Frequency: <input type="number" class="frequency-three" style="width: 50px; height: 20px;" value="" required></span></td>
                                  <td class="border"><button type="submit" class="cart butn btn-danger" id="product-3-submit">Add to cart</button></td>
                                </tr>
                                <tr class="border" id="product-four">
                                  <td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td>
                                  <td class="border"><h5>Product Name: <span class="product-name-four">Iphone 7</span></h5><h5>Price: $<span class="price-four">850</span></h5><span> Frequency: <input type="number" class="frequency-four" style="width: 50px; height: 20px;" value="" required></span></td>
                                  <td class="border"><button type="submit" class="cart butn btn-danger" id="product-4-submit">Add to cart</button></td>
                                </tr>
                           </table>
                        </div>
                    </div>                                
                </div>
            </div>
            <div class="col-md-6 col-sm-6 border">
                <h1 class="header">Cart preview</h1> 
                <div class="panel-body">
                    <div class="border preview">
                        <div class="border">
                          <form action="shopconfirm.php" method="post" name="shop">  
                             <table class="cart-preview">
                               <!-- Here appeded product will appear -->
                             </table>
                            <div class="form-group">
                               <button type="submit" class="btn btn-block btn-primary p-lg-left-right" name="buy-now"> Buy Now</button>
                            </div>
                          </form>
                        </div>
                    </div>               
                </div>
            </div>          
         </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function () {
            $('#product-1-submit').click(function(e){
                e.preventDefault();
                var product_name = $(".product-name-one").text();
                var product_price = $(".price-one").text();
                var product_frequency = $(".frequency-one").val();
                var template = '<tr class="border" class="product-one-cart"><td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td><td class="border"><h5>Product Name: '+product_name+'</h5><h5>Frequency: '+product_frequency+'</h5><h5>Total Price: '+(product_frequency*product_price)+'</h5></td><td class="border"><button type="submit" class="cart butn btn-danger discard-1">Discard</button></td><input type="hidden" value="'+product_name+'" name="product-name-1"><input type="hidden" value="'+product_frequency+'" name="frequency-1"><input type="hidden" value="'+(product_frequency*product_price)+'" name="t-price-1"></tr>';
                $(".cart-preview").append(template);
            });
            $('#product-2-submit').click(function(e){
                e.preventDefault();
                var product_name = $(".product-name-two").text();
                var product_price = $(".price-two").text();
                var product_frequency = $(".frequency-two").val();
                var template = '<tr class="border" class="product-two-cart"><td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td><td class="border"><h5>Product Name: '+product_name+'</h5><h5>Frequency: '+product_frequency+'</h5><h5>Total Price: '+(product_frequency*product_price)+'</h5></td><td class="border"><button type="submit" class="cart butn btn-danger discard-2">Discard</button></td><input type="hidden" value="'+product_name+'" name="product-name-2"><input type="hidden" value="'+product_frequency+'" name="frequency-2"><input type="hidden" value="'+(product_frequency*product_price)+'" name="t-price-2"></tr>';
                $(".cart-preview").append(template);
            });
            $('#product-3-submit').click(function(e){
                e.preventDefault();
                var product_name = $(".product-name-three").text();
                var product_price = $(".price-three").text();
                var product_frequency = $(".frequency-three").val();
                var template = '<tr class="border" class="product-three-cart"><td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td><td class="border"><h5>Product Name: '+product_name+'</h5><h5>Frequency: '+product_frequency+'</h5><h5>Total Price: '+(product_frequency*product_price)+'</h5></td><td class="border"><button type="submit" class="cart butn btn-danger discard-3">Discard</button></td><input type="hidden" value="'+product_name+'" name="product-name-3"><input type="hidden" value="'+product_frequency+'" name="frequency-3"><input type="hidden" value="'+(product_frequency*product_price)+'" name="t-price-3"></tr>';
                $(".cart-preview").append(template);
            });
            $('#product-4-submit').click(function(e){
                e.preventDefault();
                var product_name = $(".product-name-four").text();
                var product_price = $(".price-four").text();
                var product_frequency = $(".frequency-four").val();
                var template = '<tr class="border" class="product-four-cart"><td class="border"><img src="images/shop-placeholder.png" alt="" width="100px" height="100px"></td><td class="border"><h5>Product Name: '+product_name+'</h5><h5>Frequency: '+product_frequency+'</h5><h5>Total Price: '+(product_frequency*product_price)+'</h5></td><td class="border"><button type="submit" class="cart butn btn-danger discard-4">Discard</button></td><input type="hidden" value="'+product_name+'" name="product-name-4"><input type="hidden" value="'+product_frequency+'" name="frequency-4"><input type="hidden" value="'+(product_frequency*product_price)+'" name="t-price-4"></tr>';
                $(".cart-preview").append(template);
            });
           $(document).on('click', '.discard-1', function(){
              $(this).parent().parent().remove();
           });
           $(document).on('click', '.discard-2', function(){ 
              $(this).parent().parent().remove();
           });
           $(document).on('click', '.discard-3', function(){ 
              $(this).parent().parent().remove();
           });
           $(document).on('click', '.discard-4', function(){ 
              $(this).parent().parent().remove();
           });
            
         });
    </script>
</body>
</html>
