<?php



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

<body class="bg" >

    <!-- ------  header section  ----------->

    
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

            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png">


                </div>
                <div class="col-2">
                    <h1>Give Your Children<br>A New Style!</h1>
                    <p>Whoever said money can't buy happiness simply didn't know where to go shopping...
                        <br>Shopping is my all-time favorite thing to do! ...
                    </p>
                    <a href="" class="btn-ex">Explore Now &#10137; </a>
                </div>
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="banimg/img1.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="banimg/img2.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="banimg/img3.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>


    </div>-




    <!-- ----------End Header -------->



    <!--------------Features Categories --------------->
    <div class="categories">
        <div class="small-container">

            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- features product -->

    <div class="small-container">
        <h2 class="title">Featured products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-detail.php">
                    <img src="images/product-1.jpg">
                    <h4>Red Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹1200</p>
                </a>
            </div>
            <div class="col-4">
                <a href="product-detail.php">
                    <img src="images/product-2.jpg">
                    <h4>HRX shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹2500</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Gray Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹3500</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-3.jpg">
                    <h4>Casual Trouser</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹1500</p>
                </a>

            </div>
        </div>

    </div>

    <!--------------End features categories ----------------->
    <!-- features product -->

    <div class="small-container">
        <h2 class="title">Latest products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-detail.php">
                    <img src="images/product-1.jpg">
                    <h4>Red Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹1200</p>
                </a>
            </div>
            <div class="col-4">
                <a href="product-detail.php">
                    <img src="images/product-2.jpg">
                    <h4>HRX Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹2500</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Gray Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹3500</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-3.jpg">
                    <h4>Casual Trouser</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹1500</p>
                </a>

            </div>
        </div>

    </div>

    <!--------------End features categories ----------------->

    <!-- offer -->

    <div class="offer">
        <div class="small-container">
            <div class="row">

                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <h3>Exclusive Available On Sip Shop</h3>
                    <h1>Smart</h1>
                    <small color=>A smart band, on the other hand, is not an
                        extension of your phone but a complimentary wearable
                        that relays data back to your phone. It is more fitness
                        oriented, that's why they are also called fitness bands.
                        It tracks your health vitals such as heart rate, stress
                        level, blood oxygen, steps, sleep, and much more.</small>
                    <a href="product-detail.php" class="btn">Buy Now &#8594;</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left-alt"></i>
                    <p>Smart band are used to monitor your daily physical activities
                        like step counts, calories burn, heart rate count, distance
                        covered, sleep monitoring feature</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/shubh.jpg">
                    <h3>SHUBH</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left-alt"></i>
                    <p>Smart band are used to monitor your daily physical activities
                        like step counts, calories burn, heart rate count, distance
                        covered, sleep monitoring feature</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/gita.jpg">
                    <h3>RIYA</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left-alt"></i>
                    <p>Smart band are used to monitor your daily physical activities
                        like step counts, calories burn, heart rate count, distance
                        covered, sleep monitoring feature</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/riya.jpg">
                    <h3>RANI</h3>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- footer -->

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



</body>
<!--------- Js for toggle menu---->


</html>