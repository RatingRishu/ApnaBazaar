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
    <link rel="stylesheet" href="CSS/home.css" />

</head>
<style>
    .footerfixing {
        padding-top: 245px;
    }
</style>


<body class="" style="background-color: antiquewhite ;">
    <container>
        <!-- Header -->
        <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-primary" href="index.php">
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
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="adminlogin.php">Admin</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="displayproduct.php">
                                    All Products
                                </a>

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

        <!-- product details start -->
         

        <!-- product details end -->
        <!-- billing  start -->
        <div class="abcd">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="accordion col-md-12 m-2 mt-5 " id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <b> Billing Address</b>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- billing input  start -->
                                        <div>

                                            <label class="form-label"></label>
                                            <input type="text" id="address" class="form-control" placeholder="Name"
                                                aria-describedby="passwordHelpBlock">
                                            <br>

                                            <label class="form-label"></label>
                                            <input type="text" id="address" class="form-control" placeholder="Email"
                                                aria-describedby="passwordHelpBlock">
                                            <br>

                                            <label class="form-label"></label>
                                            <input type="text" id="address" class="form-control" placeholder="Address"
                                                aria-describedby="passwordHelpBlock">
                                            <br>

                                            <label class="form-label"></label>
                                            <input type="text" id="address" class="form-control" placeholder="Phone"
                                                aria-describedby="passwordHelpBlock">
                                            <br>

                                            <label class="form-label"></label>
                                            <input type="text" id="address" class="form-control"
                                                placeholder="Say Something" aria-describedby="passwordHelpBlock">
                                            <br>




                                        </div>
                                        <!-- billing input  end -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <b>Shipping Address</b>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until
                                        the collapse plugin adds the appropriate classes that we use to style each
                                        element. These
                                        classes control the overall appearance, as well as the showing and hiding via
                                        CSS
                                        transitions. You can modify any of this with custom CSS or overriding our
                                        default variables.
                                        It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <b>Card Detail</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These
                                        classes control the overall appearance, as well as the showing and hiding via
                                        CSS
                                        transitions. You can modify any of this with custom CSS or overriding our
                                        default variables.
                                        It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 m-2">
                        <div>

                            <table class="table border border-primary mt-5 ">

                                <thead>
                                    <tr>
                                        <div class="m-2">
                                            <th scope="col">Yours order Details</th>
                                            <th scope="col">price</th>
                                        </div>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">ashirwad ata</th>
                                        <td>250</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>

                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-lg ">Place Order</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- billing  end -->

        <!--Footer-->
        <div class="footerfixing">
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light text-muted ">
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
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, eius?
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