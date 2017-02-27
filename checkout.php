<?php session_start();?>
<!DOCTYPE html>
<?php
include('functions/functions.php');
?>
<html>
    <head>
        <title>My Online Shop</title>

        <link href="styles/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="main_wrapper">
            <div class="header_wrapper"><!-- Header-->
                <img src="images/logo.png" alt="" media="all"/>
            </div>
            <div class="menubar"><!-- menubar-->
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="all_products.php">All Product</a></li>
                    <li><a href="customer/my_account.php">Sign up</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="cart.php">Shopping cart</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>

                <div id="form"><!-- Seach-->
                    <form method="get" action="" enctype="multipart/form-data">
                        <input  type="text" name="user_query" placeholder="Seach..."/>
                        <input type="submit" name="search" value="Search"/>
                    </form>
                </div>
            </div>
            
            
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title">Categories</div>
                    <ul id="cats">
                        <?php getCats(); ?>
                    </ul>
                    <div id="sidebar_title">Brands</div>
                    <ul id="cats">
                        <?php getBrands(); ?>
                    </ul>
                     
                </div>
             
       
                <div id="content_area">
                    <?php cart() ;?>
                      <div id="shopping_cart" >
                    <span style="float: right; font-size: 18px; padding: 5px; line-height: 40px">
                        
                        chao ban ! <b style="color: yellow">Shopping Cart -</b>  Total Items:<b style="color: yellow"> <?php total_items();?></b> 
                        Total Price: <?php total_price()?>
                        <a href="cart.php">Go to Cart</a>
                    </span>
                </div>
                    <div id="products_box">
                       <?php
                       if(!isset($_SESSION['customer_email'])){
                           include("customer_login.php");
                       }else{
                           include("payment.php");
                       }
                       ?>
                    </div>
                </div>

            </div>

            <div id="footer">
                <h2 style="text-align: center; padding: 40px;background: brown">&COPY; by Nguyen Tuan 2016</h2>
            </div>

        </div>
    </body>
</html>
