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
            </div>
<!--account page-->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/img1.png">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        
                        <form id="LoginForm" action="login.php" method="POST">
                            <input type="text" placeholder="Username" name="username">
                            <input type="password" placeholder="Password" name="password">
                            <input type="submit" name="button" id="button" value="Submit"class="btn">
                        </form>
                        <form id="RegForm" action="reg.php" method="POST">
                            <input type="text" placeholder="Username" name="username">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <input type="submit" name="button" id="button" value="Submit"class="btn">
                            <!--<input type="submit" class="btn">Register</button>-->
                        </form>
                    </div>
                </div>
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
            <!--js for toggle menu-->
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
            <!--js for toggle form-->
            <script>
                var LoginForm = document.getElementById("LoginForm");
                var RegForm = document.getElementById("RegForm");
                var Indicator = document.getElementById("Indicator");
                function register()
                {
                    RegForm.style.transform = "translateX(0px)";
                    LoginForm.style.transform = "translateX(0px)";
                    Indicator.style.transform = "translateX(100px)";
                }
                function login()
                {
                    RegForm.style.transform = "translateX(300px)";
                    LoginForm.style.transform = "translateX(300px)";
                    Indicator.style.transform = "translateX(0px)";
                }

            </script>
           
    </body>
</html>