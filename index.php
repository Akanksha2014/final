<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Outfit of the Day</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="header">
           <div class="container">
                <div class="navbar">
                    <div class="logo">
                    <a href="index.php"><img src="images/logo1.jpeg" width="200px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
                    </nav>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }?>
                    <a href="cart.php" class="btn btn-outline-success">My Cart (<?php echo $count;?>)</a>  
                    <img src="images/cart.jpeg" class="menu-icon" onclick="menutoggle()">
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>Give your workout <br>A New Style!</h1>
                        <p>Success isn't always about greatness. It's about consistency. Consistent <br> hard work gains success. Greatness will come.</p>
                        <a href="products.php" class="btn">Explore Now &#10140;</a>
                    </div>
                    <div class="col-2">
                        <img src="images/img1.png">
                    </div>
                </div>

            </div>
        </div>
        
        <!-------- featured categories section --->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <a href="product details2.html"><img src="images/category1.jpeg"></a>
                    </div>
                    <div class="col-3">
                        <a href="product details8.html"><img src="images/category2.jpeg"></a>
                    </div>
                    <div class="col-3">
                        <a href="product details5.html"><img src="images/category3.jpeg"></a>
                    </div>
                </div>
            </div>
            
        </div>
         <!-------- featured products section --->
         <div class="small-container">
             <h2 class="title">Featured Products</h2>
             <div class="row">
                 <div class="col-4">
                     <a href="product details1.html"><img src="images/prod2.jpeg"></a>
                     <a href="product details1.html"><h4>Printed Tshirt</h4></a>
                     <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                     </div>
                     <p>$50.00</p>
                 </div>
                 <div class="col-4">
                    <a href="product details1.html"><img src="images/prod2.jpeg"></a>
                    <h4>Printed Tshirt</h4>
                    <div class="rating">
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>$50.00</p>
                 </div>
                 <div class="col-4">
                    <a href="product details4.html"><img src="images/prod1.jpeg"></a>
                    <h4>Casual Shirt</h4>
                    <div class="rating">
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>$150.00</p>
                 </div>
            
                </div>
             
                <h2 class="title">Latest Products</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="product details 3.html"><img src="images/prod4.jpeg"></a>
                        <h4>Shoes</h4>
                        <div class="rating">
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>$50.00</p>
                    </div>
                    <div class="col-4">
                       <a href="product details7.html"><img src="images/prod3.jpeg"></a>
                       <h4>Printed Dress</h4>
                       <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                       </div>
                       <p>$50.00</p>
                    </div>
                    <div class="col-4">
                      <a href="product details7.html"> <img src="images/prod3.jpeg"></a>
                       <h4>Printed Dress</h4>
                       <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                       </div>
                       <p>$150.00</p>
                    </div>
                    <div class="col-4">
                       <img src="images/prod6.jpeg">
                       <h4>Heels</h4>
                       <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                       </div>
                       <p>$200.00</p>
                    </div>
                    <div class="col-4">
                        <a href="product details6.html"><img src="images/prod7.jpeg"></a>
                        <h4>Watch</h4>
                        <div class="rating">
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>$200.00</p>
                     </div>
                     <div class="col-4">
                        <a href="product details5.html"><img src="images/category3.jpeg"></a>
                        <h4>Printed Dress</h4>
                        <div class="rating">
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>$200.00</p>
                     </div>
               
                   </div>
            </div>
            <!-----offer-->
            <div class="offer">
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/prod7.jpeg" class="offer-img" width="50%" height="50%">
                        </div>
                        <div class="col-2">
                            <p>
                                Exclusively available on OOTD
                            </p>
                            <h1>Smart Watch</h1>
                            <small>The HQ Smart Watch features a 39.8% larger AMOLED color full-touch dispaly with adjustable brightness, so everything is clear as can be.</small><br>
                            <a href="" class="btn">Buy Now &#10140;</a>
                        </div>

                    </div>
                </div>
            </div>
            <!--testimonial-->
            <div class="testimonial">
                <div class="small-container">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-quote-left"></i>
                            <p>Loren Ipsum has been the dummy text of the printing and typesetting industry.Loren Ipsum has been the industry's dummy text ever.</p>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                             </div>
                             <img src="images/category1.jpeg">
                             <h3>Ray Walker</h3>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-quote-left"></i>
                            <p>Loren Ipsum has been the dummy text of the printing and typesetting industry.Loren Ipsum has been the industry's dummy text ever.</p>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                             </div>
                             <img src="images/category1.jpeg">
                             <h3>Rosie Paul</h3>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-quote-left"></i>
                            <p>Loren Ipsum has been the dummy text of the printing and typesetting industry.Loren Ipsum has been the industry's dummy text ever.</p>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                             </div>
                             <img src="images/category1.jpeg">
                             <h3>Jeon Jungkook</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brands">
                <div class="small-conatiner">
                    <div class="row">
                        <div class="col-5">
                            <img src="images/brand1.jpeg">
                        </div>
                        <div class="col-5">
                            <img src="images/brand2.jpeg">
                        </div>
                        <div class="col-5">
                            <img src="images/brand3.jpeg">
                        </div>
                        <div class="col-5">
                            <img src="images/brand4.jpeg">
                        </div>
                        <div class="col-5">
                            <img src="images/brand5.jpeg">
                        </div>
                    </div>
                </div>
            </div>
            <!--------footer-->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <img src="images/logo1.jpeg">
                            <p>Our purpose is to Sustainably make the Pleasure and Benefits of Sports Assessible to the Many.</p>
                        </div>
                        <div class="footer-col-2">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>Coupons</li>
                                <li>Blog Post</li>
                                <li>Return Policy</li>
                                <li>Join Affiliate</li>
                            </ul>
                        </div>
                        <div class="footer-col-3">
                            <h3>Follow Us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                                <li>YouTube</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright 2021 - OOTD</p>
                </div>
            </div>
            <script>
                var MenuItems = document.getElementById("MenuItems");
                MenuItems.style.maxHeight = "0px";

                function menutoggle()
                {
                    if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px";
                    }
                    else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
                }
            </script>
    </body>
</html>