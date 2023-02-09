<?php @include 'function.php' ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

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
                        <h2>forget password</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="login.html">login</a></li>
                            <li class="breadcrumb-item active" aria-current="page">forget password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="pwd-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <h2>Forget Your Password</h2>
                    <form class="theme-form">
                        <div class="form-row row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" placeholder="Enter Your Email"
                                    required="">
                            </div><a href="#" class="btn btn-solid w-auto">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
  <?php include 'footer.php';?>
    <!-- footer end -->


    <!-- theme setting -->
    <?php include 'themesetting.php';?>
    <!-- theme setting -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->

<?php include 'footer_js.php'?>

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