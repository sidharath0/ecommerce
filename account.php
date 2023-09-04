<?php
// include "admin/connection.php";
// $sql="SELECT * FROM banner where status =1";
// $quary=mysqli_query($conn,$sql);

// while($data=mysqli_fetch_assoc($query)){
//     $result[]=$data;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sip Shop| Ecommerce website </title>
    <!-- bootstrp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- end bootstrp -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/709be8e8ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg">
    <div class="header">


        <div class="container">


            <div class="navbar">


                <div class="logo">
                    <div class="logo1">
                        <a href="index.php">
                            <img src="images/logo1.png" width="150px">
                        </a>
                    </div>
                </div>
                <nav class="box2">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.php">
                    <img src="images/cart.png" width="30px" height="30px">
                </a>
                <a href="">
                    <img src="images\menu.png" class="menu-icon" onclick="menutoggle()" width="30px" height="30px">
                </a>
            </div>



            <!-- -------------account-page------------>
            <div class="account-page">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images\footbool man.png" width="100%">
                        </div>

                        <div class="col-2">
                            <div class="form-container">
                                <div class="form-btn">
                                    <span onclick="login()">Login</span>
                                    <span onclick="register()">Register</span>
                                    <hr id="indicator">
                                </div>

                                <form id="loginform">
                                    <input type="text" placeholder="Username">
                                    <input type="password" placeholder="password">
                                    <button type="submit" class="btn">Login</button>
                                    <a href="">Forgot password</a>
                                </form>

                                <form id="regform">
                                    <input type="text" placeholder="Username">
                                    <input type="email" placeholder="Email">
                                    <input type="password" placeholder="password">
                                    <button type="submit" class="btn">Register</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <div class="app-logo">
                            <img src="images/play-store.png">
                            <img src="images/app-store.png">
                        </div>
                        <h3>Download Our App</h3>
                        <p>Download App For Android And iOs Mobile Phone.</p>

                    </div>
                    <div class="footer-col-2">
                        <img src="images/logo1.png" width="150px">
                        <p>Download App For Android And iOs Mobile Phone.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Zone Pass</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright"> ⓒ Copyright By Nitish Group </p>
            </div>
        </div>
        <!-- -----------js for toggle menu---------- -->
        <script>
        var Menuitems = document.getElementById("MenuItem");

        MenuItem.style.maxheight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxheight = "200px";
            } else {
                MenuItems.style.maxheight = "0px"
            }
        }
        </script>

        <!-- ---------js for toggle menu---------- - -->
        <script>
        var loginform = document.getElementById("loginform");
        var regform = document.getElementById("regform");
        var indicator = document.getElementById("indicator");

        function register() {

            regform.style.transform = "translateX(0px)";
            loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";

        }

        function login() {

            regform.style.transform = "translateX(300px)";
            loginform.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";

        }
        </script>

</body>

</html>