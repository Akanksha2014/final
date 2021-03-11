<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cart OOTD</title>
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

               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 text-center border rounded bg-light my-5">
                           <h1>MY CART</h1>
                       </div>
                       <div class="col-lg-10">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">Serial No.</th>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Item Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                        $total=0;
                                        if(isset($_SESSION['cart']))
                                        {
                                            foreach($_SESSION['cart'] as $key => $value)
                                            {
                                                $sr=$key+1;
                                                $total=$total+$value['Price'];
                                                echo"
                                                    <tr>
                                                        <td>$sr</td>
                                                        <td>$value[Item_Name]</td>
                                                        <td>$value[Price]</td>
                                                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                                        <td>
                                                            <form action='manage-cart.php' method='POST'>
                                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'> 
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    ";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>

                       </div>
                       <div class="col-lg-2">
                            <div class="border bg-light rounded p-4">
                                <h5>Total:<?php echo $total?></h5><br>
                                <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Cash On Delivery
                                        </label>
                                </div>
                                <button class="btn btn-block" background="#ff523b">Make Purchase</button>
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
    </body>
</html>