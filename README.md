<html lang="en">

<head>
    <title>Apna Bazar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/index.css" />

</head>
<style>
    .card p:hover {
  
    font-weight: bolder;
    transition: transform .2s;
    /* Animation */
  
   
}
    </style>

<body class="" style="background-color: #00ccff;">
    <container>
        <!-- Header -->
        <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-primary" href="#">
                        <h3>Apna Bazar</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="adminlogin.php">Admin</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="displayproduct.php">
                                    All Products
                                </a>

                            <li class="nav-item active">
                                <a class="nav-link " href="about.php">About</a>
                            </li>
                        </ul>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header end -->

        <!-- Carousel  -->
        <div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image\5.jfif" class="d-block w-100 h-50" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="image\1.jfif" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image\scrol.jfif" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image\apna.png" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image\scrol.jfif" class="d-block w-100 h-50" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel end -->
        <div>
            
        </div>
        <!-- Items  -->
        <div class="d-flex flex-row mt-3" id="Type">
            <div class="card m-0">
                <img src="image/5.jfif" class="card-img-top w-100 h-50" alt="...">
                <div class="card-body">
                    <p class="text-center mt-3 "><b>Apna Bazaar सबसे सस्ता सबसे अच्छा</b></p>
                    <a href="displayproduct.php"><button class="btn btn-outline-success btn-lg m-2 p-2 mt-5"> Click Here
                        </button></a>
                </div>
            </div>
            <div class="card m-0">
                <img src="image/1.jfif" class="card-img-top w-100 h-50 " alt="...">
                <div class="card-body">
                    <p class="text-center mt-3"><b>RGS Printing Press</b></p>
                    <a href="displayproduct.php"><button class="btn btn-outline-success btn-lg m-2 p-2 mt-5"> Click Here
                        </button></a>
                </div>
            </div>
            <div class="card m-0">
                <img src="image/seo-image.jpg" class="card-img-top w-100 h-50" alt="...">
                <div class="card-body">

                    <p class="text-center mt-3"><b>Offer Zone</b></p>

                    <a href="displayproduct.php"><button class="btn btn-outline-success btn-lg m-2 p-2 mt-5"> Click Here
                        </button></a>

                </div>
            </div>
            <div class="card m-0">
                <img src="image/4.jfif" class="card-img-top w-100 h-50" alt="...">
                <div class="card-body">
                    <p class="text-center mt-3"><b>RGS Printing Press</b></p>
                    <a href="displayproduct.php"><button class="btn btn-outline-success btn-lg m-2 p-2 mt-5"> Click Here
                        </button></a>
                </div>
            </div>
            <div class="card m-0">
                <img src="image/2.jfif " class="card-img-top w-100 h-50" alt="...">
                <div class="card-body">
                    <p class="text-center mt-3"><b>Apna Bazaar सबसे सस्ता सबसे अच्छा</b></p>
                    <a href="displayproduct.php"><button class="btn btn-outline-success btn-lg m-2 p-2 mt-5"> Click Here
                        </button></a>
                </div>
            </div>
        </div>
        <!-- Items end -->

        <!-- categorise  -->
        <!-- 9 to 999 start-->
        <div class="categories" id="999">
            <h3>9 TO 999 Items</h3>
            <br>
            <div class="d-flex fl">
                <div class="card" style="width: 18rem;">
                    <img src="image/17.jfif" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Gifts and Taddy items</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/14.jpg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Plastic items</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/9.jfif" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Watter bottels</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/11.jpg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Watches</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/10.png" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Bangles</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
            </div>
            <a href="displayproduct.php"><span>View More....</span></a>

        </div>
        <!-- 9 to 999 end-->
        <br>
        <!-- grocery start -->
        <div class="categories" id="Grocery">
            <h3>Grocery Items</h3>
            <br>
            <div class="d-flex fl">
                <div class="card" style="width: 18rem ;">
                    <img src="image/12.jpg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>washing Powder</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/13.jpg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Shampoo</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/16.jpg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Oils</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/19.jpeg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Pulses</p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="image/20.jfif" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <p>Spices </p>
                        <a href="details.php">
                            <button class="btn btn-outline-primary btn-lg mt-5 "> Click Here </button>
                        </a>
                    </div>
                </div>
            </div>
            <a href="displayproduct.php"><span>View More....</span></a>

        </div>
        <!--grocery end-->

        <!-- categorise end -->
        <!--Footer-->
        <div>
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light text-muted" >
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-0 border-bottom">


                </section>

                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <a href="#top"> <i class="fa fa-home me-3"></i>RGS Group
                                    </a>
                                </h6>
                                <p class="fw-bold">
                                    Rishu Apna Bazaar <br>
                                    Here you can buy grocery, Homecare, Personalcase, 99Store, Artificial Jewellery,
                                    Shoes and More.
                                    <br>plese visits once.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="#999" class="text-reset">9 To 999</a>
                                </p>
                                <p>
                                    <a href="#Grocery" class="text-reset">Grocery Items</a>
                                </p>
                                <p>
                                    <a href="#Top" class="text-reset">Top</a>
                                </p>
                                <p>
                                    <a href="#Bottom" class="text-reset">Bottom</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#Type" class="text-reset">Categories</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">....</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">...</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">....</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fas fa-home me-3"></i> Varanasi Khusipur 221011</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    rairishabh5001@gmail.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> 6201616907</p>
                                <p><i class="fas fa-print me-3"></i> 8434048874</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->

                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!"
                            role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                            role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                            role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"
                            role="button"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Github -->
                        <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!"
                            role="button"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="https://rishuapnabazaar.netlify.app/">rishuapnabazaar</a>
                    <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
        <!--Footer End-->
    </container>
</body>

</html>
