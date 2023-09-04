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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg1">

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
                    <a href="product.php" class="btn-ex">Explore Now &#10137; </a>
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


    </div>





    </div>
    <div class="small-container">
        <div class="row row-2">
            <h2>All Product</h2>

            <select>
                <option value=""> Defalt Sorting </option>
                <option value=""> Low to High </option>
                <option value=""> High to low</option>
                <option value=""> Popular</option>
            </select>

        </div>
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
                    <p>₹199</p>
                </a>
            </div>
            <div class="col-4">
                <a href="product-detail.php">
                    <img src="images/product-2.jpg">
                    <h4>Black Running ShoeS</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹999</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-11.jpg">
                    <h4>Gray Running Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹1760</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-3.jpg">
                    <h4>Sports Trousers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹660</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-4.jpg">
                    <h4>Puma Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹750</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-6.jpg">
                    <h4>Black Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹599</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Sports Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹399</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-8.jpg">
                    <h4>rossil watch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹399</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-7.jpg">
                    <h4>HRX Shocks</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹599</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-10.jpg">
                    <h4>HRX Running Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹299</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-9.jpg">
                    <h4>Roadster watch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹499</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-8.jpg">
                    <h4>rossil watch ultra</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹699</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-12.jpg">
                    <h4>Black Trousers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹300</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-11.jpg">
                    <h4>Gray Casual Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹100</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-1.jpg">
                    <h4>Puma Red T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹160</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Gray Running Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹150</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-6.jpg">
                    <h4>Black Puma t-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹399</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-2.jpg">
                    <h4>Black HRX Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹300</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-7.jpg">
                    <h4>HRX Shocks</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹250</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-3.jpg">
                    <h4>Gray Shocks</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹360</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-7.jpg">
                    <h4>HRX Shocks</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹300</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-10.jpg">
                    <h4>HRX Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹700</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-9.jpg">
                    <h4>Roadster watch s</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹300</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-9.jpg">
                    <h4>Roadster Watch s</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹400</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-4.jpg">
                    <h4>Blue Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹350</p>
                </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Running shoes</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹450</p>
                    </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Sports Shoes</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹450</p>
                    </a>

            </div>
            <div class="col-4">

                <a href="product-detail.php">
                    <img src="images/product-5.jpg">
                    <h4>Designer shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>₹450</p>
                    </a>

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


    <!--------- Js for toggle menu---->

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


</html>