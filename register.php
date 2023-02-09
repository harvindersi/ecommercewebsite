<?php
@include 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ;?>

<body class="theme-color-1">


    <!-- header start -->
    <?php include 'header.php';?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>create account</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST">
                            <?php //echo display_error(); ?>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" required=""
                                        name="fname">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" required=""
                                        name="lname">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" placeholder="Email" required=""
                                        name="email">
                                </div>

                                <div class="col-md-6">
                                    <label for="phone">phone</label>
                                    <input type="phone" class="form-control" placeholder="Phone" required=""
                                        name="phone_no" minmax="10">
                                </div>

                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="review">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter your password"
                                        required="" name="pass">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">confirm Password</label>
                                    <input type="password" class="form-control" id="review"
                                        placeholder="Confirm password" required="" name="cpass">
                                </div>


                            </div>
                            <button class="btn btn-solid w-auto" name="register_btn"><a href="login">create Account</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
    <?php include 'footer.php';?>
    <!-- footer end -->


    <!-- theme setting -->
    <?php include 'themesetting_scroll.php'; ?>
    <!-- theme setting -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


    <?php include 'footer_js.php';?>

    <script>
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
    </script>
</body>

</html>