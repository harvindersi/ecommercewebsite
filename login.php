<?php
@include 'function.php'; 


?>


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
                        <h2>customer's login</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required=""
                                    name="email">
                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" id="review"
                                    placeholder="Enter your password" required="" name="pass">
                                <div class="forget_button">
                                    <!-- <input type="submit" class="btn btn-solid w-auto" name="login_btn"></input> -->
                                    <button  class="btn btn-solid w-auto" name="login_btn">Login</button>
                                    <!-- li><a href="forget_pwd.php">forget password</a></li>< -->
                                    <button type="submit" class="btn btn-solid pull-right" id="mc-submit">Forget Password</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a href="register.php"
                            class="btn btn-solid"> Create A Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
    <?php include 'footer.php'; ?>
    <!-- footer end -->


    <!-- theme setting -->
    <?php include 'themesetting.php';?>
    <!-- theme setting -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


    <?php include 'footer_js.php'; ?>

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