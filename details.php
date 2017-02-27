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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Product</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Shopping cart</a></li>
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
                <div id="shopping_cart" >
                    <span style="float: right; font-size: 18px; padding: 5px; line-height: 40px">

                        chao ban ! <b style="color: yellow">Shopping Cart -</b> Total Items: Total Price:
                        <a href="#">Go to Cart</a>
                    </span>
                </div>
                <div id="content_area">
                    <div id="products_box">
                        <?php
                        if (isset($_GET['pro_id'])) {

                            $product_id = $_GET['pro_id'];
                            
                            $get_pro = "select * from products where product_id='$product_id'";

                            $run_pro = mysqli_query($con, $get_pro);

                            while ($row_pro = mysqli_fetch_array($run_pro)) {

                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_price = $row_pro['product_price'];
                                $pro_image = $row_pro['product_image'];
                                $pro_desc = $row_pro['product_desc'];
                                

                                echo " <div id='single_product'>"
                                . "<h3>$pro_title</h3> "
                                . "<img src='admin_area/product_images/$pro_image' width='400' height='300'>"
                                . "<p><b>$pro_price</b></p>"
                                . " <a href='index.php' style='float: left'>Quay trở lại</a>
                                 <a href='index.php'><button style='float: right'>Add to Cart</button></a>"
                                . "</div>";
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>

            <div class="footer">
                <h2 style="text-align: center; padding: 40px;background: brown">&COPY; by Nguyen Tuan 2016</h2>
            </div>

        </div>






    </body>
</html>
