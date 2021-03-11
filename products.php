<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>All Products OOTD</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
           <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo1.jpeg" width="200px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Products</a></li>
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
                

            </div>
         <div class="container">
             <div class="row">
                 <h2>All products</h2>
             </div>
                <div class="row mt-5 mb-10">
                        <div class="col-lg-3">
                            <form action="manage-cart.php" method="POST">
                                <div class="card">
                                    <a href="product details1.html"><img src="images/prod2.jpeg" class="card-img-top"></a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Printed Tshirt</h5>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <p class="card-text">Price: Rs.450</p>
                                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Printed Tshirt 1">
                                        <input type="hidden" name="Price" value="450">
                                    </div>
                                    
                                </div>
                            </form>   
                        </div>
                        <div class="col-lg-3">
                            <form action="manage-cart.php" method="POST">
                                <div class="card">
                                    <a href="product details1.html"><img src="images/prod2.jpeg" class="card-img-top"></a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Printed Tshirt</h5>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <p class="card-text">Price: Rs.450</p>
                                        <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Printed Tshirt 2">
                                        <input type="hidden" name="Price" value="450">
                                    </div>
                                    
                                </div>
                            </form>   
                        </div>
                        <div class="col-lg-3">
                            <form action="manage-cart.php" method="POST">
                                <div class="card">
                                    <a href="product details1.html"><img src="images/prod2.jpeg" class="card-img-top"></a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Printed Tshirt</h5>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <p class="card-text">Price: Rs.450</p>
                                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Printed  Tshirt">
                                        <input type="hidden" name="Price" value="450">
                                    </div>
                                    
                                </div>
                            </form>   
                        </div>
                        <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details1.html"><img src="images/prod2.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Printed Tshirt</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.450</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Printed Tshirt 3">
                                    <input type="hidden" name="Price" value="450">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
            </div>
                <div class="row">
                <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details4.html"><img src="images/prod1.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Casual Shirt</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.450</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Casual Shirt 2">
                                    <input type="hidden" name="Price" value="450">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details4.html"><img src="images/prod1.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Casual Shirt</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.750</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Casual Shirt 3">
                                    <input type="hidden" name="Price" value="750">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php"method="POST">
                            <div class="card">
                                <a href="product details4.html"><img src="images/prod1.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Casual Shirt</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.750</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Casual Shirt 4">
                                    <input type="hidden" name="Price" value="750">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details4.html"><img src="images/prod1.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Casual Shirt</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.750</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Casual Shirt 5">
                                    <input type="hidden" name="Price" value="750">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
               
                   </div>
                   <div class="row">
                   <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details 3.html"><img src="images/prod4.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Shoes</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.1150</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Shoes 1">
                                    <input type="hidden" name="Price" value="1150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details 3.html"><img src="images/prod4.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Shoes</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.1150</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Shoes 2">
                                    <input type="hidden" name="Price" value="1150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details 3.html"><img src="images/prod4.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Shoes</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.1150</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Shoes 3">
                                    <input type="hidden" name="Price" value="1150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details 3.html"><img src="images/prod4.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Shoes</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.1150</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Shoes 4">
                                    <input type="hidden" name="Price" value="1150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div>
                <div class="row">
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details7.html"><img src="images/prod3.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Printed Dress</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.2150</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Printed Dress 1">
                                    <input type="hidden" name="Price" value="2150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details7.html"><img src="images/prod3.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Printed Dress</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.2150</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Printed Dress 2">
                                    <input type="hidden" name="Price" value="2150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details7.html"><img src="images/prod3.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Printed Dress</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.2150</p>
                                    <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Printed Dress 3">
                                    <input type="hidden" name="Price" value="2150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                    <div class="col-lg-3">
                        <form action="manage-cart.php" method="POST">
                            <div class="card">
                                <a href="product details7.html"><img src="images/prod3.jpeg" class="card-img-top"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Printed Dress</h5>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="card-text">Price: Rs.2150</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Printed Dress 4">
                                    <input type="hidden" name="Price" value="2150">
                                </div>
                                
                            </div>
                        </form>   
                    </div>
                        </div>
                   <div class="page-btn">
                       <span>1</span>
                       <span>2</span>
                       <span>3</span>
                       <span>4</span>
                       <span>&#10140;</span>
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