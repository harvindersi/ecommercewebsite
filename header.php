
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our store Multikart</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">
                        <li class="mobile-wishlist"><a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </li>
                        <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                            My Account
                            <ul class="onhover-show-div">
                                <?php if (!isset($user_id)) { ?>

                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">register</a></li>

                                <?php } else { ?>

                                    <li><a href="logout">logout</a></li>

                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar">
                            <a href="javascript:void(0)" onclick="openNav()">
                                <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                <nav>
                                    <div onclick="closeNav()">
                                        <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                        <li> <a href="#">clothing</a>
                                            <ul class="mega-menu clothing-menu">
                                                <li>
                                                    <div class="row m-0">
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>women's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">dresses</a></li>
                                                                    <li><a href="#">skirts</a></li>
                                                                    <li><a href="#">westarn wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                    <li><a href="#">sport wear</a></li>
                                                                </ul>
                                                                <h5>men's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">sports wear</a></li>
                                                                    <li><a href="#">western wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>accessories</h5>
                                                                <ul>
                                                                    <li><a href="#">fashion jewellery</a>
                                                                    </li>
                                                                    <li><a href="#">caps and hats</a></li>
                                                                    <li><a href="#">precious jewellery</a>
                                                                    </li>
                                                                    <li><a href="#">necklaces</a></li>
                                                                    <li><a href="#">earrings</a></li>
                                                                    <li><a href="#">wrist wear</a></li>
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <a href="#" class="mega-menu-banner"><img src="assets/images/mega-menu/fashion.jpg" alt="" class="img-fluid blur-up lazyload"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">bags</a>
                                            <ul>
                                                <li><a href="#">shopper bags</a></li>
                                                <li><a href="#">laptop bags</a></li>
                                                <li><a href="#">clutches</a></li>
                                                <li> <a href="#">purses</a>
                                                    <ul>
                                                        <li><a href="#">purses</a></li>
                                                        <li><a href="#">wallets</a></li>
                                                        <li><a href="#">leathers</a></li>
                                                        <li><a href="#">satchels</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">bags</a>
                                            <ul>
                                                <li><a href="#">shopper bags</a></li>
                                                <li><a href="#">laptop bags</a></li>
                                                <li><a href="#">clutches</a></li>
                                                <li> <a href="#">purses</a>
                                                    <ul>
                                                        <li><a href="#">purses</a></li>
                                                        <li><a href="#">wallets</a></li>
                                                        <li><a href="#">leathers</a></li>
                                                        <li><a href="#">satchels</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">bags</a>
                                            <ul>
                                                <li><a href="#">shopper bags</a></li>
                                                <li><a href="#">laptop bags</a></li>
                                                <li><a href="#">clutches</a></li>
                                                <li> <a href="#">purses</a>
                                                    <ul>
                                                        <li><a href="#">purses</a></li>
                                                        <li><a href="#">wallets</a></li>
                                                        <li><a href="#">leathers</a></li>
                                                        <li><a href="#">satchels</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">footwear</a>
                                            <ul>
                                                <li><a href="#">sport shoes</a></li>
                                                <li><a href="#">formal shoes</a></li>
                                                <li><a href="#">casual shoes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">watches</a></li>
                                        <li> <a href="#">Accessories</a>
                                            <ul>
                                                <li><a href="#">fashion jewellery</a></li>
                                                <li><a href="#">caps and hats</a></li>
                                                <li><a href="#">precious jewellery</a></li>
                                                <li> <a href="#">more..</a>
                                                    <ul>
                                                        <li><a href="#">necklaces</a></li>
                                                        <li><a href="#">earrings</a></li>
                                                        <li><a href="#">wrist wear</a></li>
                                                        <li> <a href="#">accessories</a>
                                                            <ul>
                                                                <li><a href="#">ties</a></li>
                                                                <li><a href="#">cufflinks</a></li>
                                                                <li><a href="#">pockets squares</a></li>
                                                                <li><a href="#">helmets</a></li>
                                                                <li><a href="#">scarves</a></li>
                                                                <li> <a href="#">more...</a>
                                                                    <ul>
                                                                        <li><a href="#">accessory gift
                                                                                sets</a>
                                                                        </li>
                                                                        <li><a href="#">travel
                                                                                accessories</a>
                                                                        </li>
                                                                        <li><a href="#">phone cases</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">belts & more</a></li>
                                                        <li><a href="#">wearable</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">house of design</a></li>
                                        <li> <a href="#">beauty & personal care</a>
                                            <ul>
                                                <li><a href="#">makeup</a></li>
                                                <li><a href="#">skincare</a></li>
                                                <li><a href="#">premium beaty</a></li>
                                                <li> <a href="#">more</a>
                                                    <ul>
                                                        <li><a href="#">fragrances</a></li>
                                                        <li><a href="#">luxury beauty</a></li>
                                                        <li><a href="#">hair care</a></li>
                                                        <li><a href="#">tools & brushes</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">home & decor</a></li>
                                        <li><a href="#">kitchen</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <a href="index.php"><img src="assets/images/icon/logo.png" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="about-page.php">About us</a></li>
                                    <li><a href="faq.php"> FAQ</a></li>
                                    <!-- <li><a href="index.php">Home</a></li> -->
                                    <li class="mega" id="hover-cls">
                                        <!-- <a href="#">feature <div class="lable-nav">new</div></a> -->
                                        <ul class="mega-menu full-mega-menu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>invoice template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank" href="invoice-1.php">invoice
                                                                                1</a></li>
                                                                        <li><a target="_blank" href="invoice-2.php">invoice
                                                                                2</a></li>
                                                                        <li><a target="_blank" href="invoice-3.php">invoice
                                                                                3</a></li>
                                                                        <li><a target="_blank" href="invoice-4.php">invoice
                                                                                4</a></li>
                                                                        <li><a target="_blank" href="invoice-5.php">invoice
                                                                                5</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title mt-2">
                                                                    <h5>elements</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="elements.php">
                                                                                elements page<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank" href="assetsemail-template/welcome.php">welcome</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/new-product-announcement.php">announcement</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/abandonment-email.php">abandonment</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/offer.php">offer</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/offer-2.php">offer
                                                                                2</a></li>
                                                                        <li><a target="_blank" href="assetsemail-template/product-review.php">review</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/featured-products.php">featured
                                                                                product</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank" href="assetsemail-template/black-friday.php">black
                                                                                friday</a></li>
                                                                        <li><a target="_blank" href="assetsemail-template/christmas.php">christmas</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/cyber-monday.php">cyber-monday</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="assetsemail-template/flash-sale.php">flash
                                                                                sale</a></li>
                                                                        <li><a target="_blank" href="assetsemail-template/email-order-success.php">order
                                                                                success</a></li>
                                                                        <li><a target="_blank" href="assetsemail-template/email-order-success-two.php">order
                                                                                success 2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>cookie bar</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="index.php">bottom<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="fashion-4.php">bottom left</a>
                                                                        </li>
                                                                        <li><a href="bicycle.php">bottom right</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title mt-2">
                                                                    <h5>search</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="marketplace-demo-2.php">ajax
                                                                                search<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>model</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="index.php">Newsletter</a></li>
                                                                        <li><a href="index.php">exit<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="christmas.php">christmas</a>
                                                                        </li>
                                                                        <li><a href="furniture-3.php">black
                                                                                friday</a></li>
                                                                        <li><a href="fashion-4.php">cyber
                                                                                monday</a></li>
                                                                        <li><a href="marketplace-demo-3.php">new
                                                                                year</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>add to cart</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="nursery.php">cart modal
                                                                                popup</a></li>
                                                                        <li><a href="vegetables.php">qty. counter
                                                                                <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="bags.php">cart top</a></li>
                                                                        <li><a href="shoes.php">cart bottom</a>
                                                                        </li>
                                                                        <li><a href="watch.php">cart left</a></li>
                                                                        <li><a href="tools.php">cart right</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src="assets/images/menu-banner.jpg" class="img-fluid mega-img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="category-page(modern).php">shop</a>
                                        <!-- <ul>
                                            <li><a href="category-page(vegetables).php">tab style<span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="category-page(top-filter).php">top filter</a></li>
                                            <li><a href="category-page(modern).php">modern</a></li>
                                            <li><a href="category-page.php">left sidebar</a></li>
                                            <li><a href="category-page(right).php">right sidebar</a></li>
                                            <li><a href="category-page(no-sidebar).php">no sidebar</a></li>
                                            <li><a href="category-page(sidebar-popup).php">sidebar popup</a>
                                            </li>
                                            <li><a href="category-page(metro).php">metro</a></li>
                                            <li><a href="category-page(full-width).php">full width</a></li>
                                            <li><a href="category-page(infinite-scroll).php">infinite
                                                    scroll</a></li>
                                            <li><a href=category-page(3-grid).php>three grid</a></li>
                                            <li><a href="category-page(6-grid).php">six grid</a></li>
                                            <li><a href="category-page(list-view).php">list view</a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a href="product-page(no-sidebar).php">product</a>
                                        <!-- <ul>
                                            <li><a href="product-page(360-view).php">360 view <span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="product-page(video-thumbnail).php">video
                                                    thumbnail<span class="new-tag">new</span></a></li>
                                            <li>
                                                <a href="#">sidebar</a>
                                                <ul>
                                                    <li><a href="product-page.php">left sidebar</a></li>
                                                    <li><a href="product-page(right-sidebar).php">right
                                                            sidebar</a>
                                                    </li>
                                                    <li><a href="product-page(no-sidebar).php">no sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">thumbnail image</a>
                                                <ul>
                                                    <li><a href="product-page(left-image).php">left image</a>
                                                    </li>
                                                    <li><a href="product-page(right-image).php">right image</a>
                                                    </li>
                                                    <li><a href="product-page(image-outside).php">image
                                                            outside</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">three column</a>
                                                <ul>
                                                    <li><a href="product-page(3-col-left).php">thumbnail
                                                            left</a>
                                                    </li>
                                                    <li><a href="product-page(3-col-right).php">thumbnail
                                                            right</a>
                                                    </li>
                                                    <li><a href="product-page(3-column).php">thubnail
                                                            bottom</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="product-page(4-image).php">four image</a></li>
                                            <li><a href="product-page(sticky).php">sticky</a></li>
                                            <li><a href="product-page(accordian).php">accordian</a></li>
                                            <li><a href="product-page(bundle).php">bundle</a></li>
                                            <li><a href="product-page(image-swatch).php">image swatch </a></li>
                                            <li><a href="product-page(vertical-tab).php">vertical tab</a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <!-- <a href="#" class="has-submenu" id="sm-16686825142737788-13"
                                            aria-haspopup="true" aria-controls="sm-16686825142737788-14"
                                            aria-expanded="false">pages<span class="sub-arrow"></span></a> -->

                                        <ul id="sm-16 686825142737788-14" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-13" aria-expanded="false" class="sm-nowrap" style="width: auto; display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; min-width: 10em; max-width: 20em;">
                                            <li>
                                                <!-- <a href="#" class="has-submenu" id="sm-16686825142737788-15"
                                                    aria-haspopup="true" aria-controls="sm-16686825142737788-16"
                                                    aria-expanded="false">vendor<span class="sub-arrow"></span></a> -->
                                                <ul id="sm-16686825142737788-16" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-15" aria-expanded="false">
                                                    <li><a href="vendor-dashboard.php">vendor dashboard</a>
                                                    </li>
                                                    <li><a href="vendor-profile.php">vendor profile</a></li>
                                                    <li><a href="become-vendor.php">become vendor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16686825142737788-17" aria-haspopup="true" aria-controls="sm-16686825142737788-18" aria-expanded="false">account<span class="sub-arrow"></span></a>
                                                <ul id="sm-16686825142737788-18" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-17" aria-expanded="false">
                                                    <li><a href="wishlist.php">wishlist</a></li>
                                                    <li><a href="cart.php">cart</a></li>
                                                    <li><a href="dashboard.php">Dashboard</a></li>
                                                    <li><a href="login.php">login</a></li>
                                                    <li><a href="register.php">register</a></li>
                                                    <li><a href="contact.php">contact</a></li>
                                                    <li><a href="forget_pwd.php">forget password</a>forget password</li>
                                                    <li><a href="profile.php">profile</a></li>
                                                    <li><a href="checkout.php">checkout</a></li>
                                                    <li><a href="order-success.php">order success</a></li>
                                                    <li><a href="order-tracking.php">order tracking<span class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16686825142737788-19" aria-haspopup="true" aria-controls="sm-16686825142737788-20" aria-expanded="false">portfolio<span class="sub-arrow"></span></a>
                                                <ul id="sm-16686825142737788-20" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-19" aria-expanded="false" class="sm-nowrap" style="width: auto; min-width: 10em; display: none; max-width: 20em; top: auto; left: 0px; margin-left: -223px; margin-top: -41px;">
                                                    <li><a href="" class="has-submenu" id="sm-16686825142737788-21" aria-haspopup="true" aria-controls="sm-16686825142737788-22" aria-expanded="false">grid<span class="sub-arrow"></span></a>
                                                        <ul id="sm-16686825142737788-22" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-21" aria-expanded="false">
                                                            <li><a href="grid-2-col.php">grid
                                                                    2</a></li>
                                                            <li><a href="grid-3-col.php">grid
                                                                    3</a></li>
                                                            <li><a href="grid-4-col.php">grid
                                                                    4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="" class="has-submenu" id="sm-16686825142737788-23" aria-haspopup="true" aria-controls="sm-16686825142737788-24" aria-expanded="false">masonry<span class="sub-arrow"></span></a>
                                                        <ul id="sm-16686825142737788-24" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-23" aria-expanded="false">
                                                            <li><a href="masonary-2-grid.php">grid 2</a></li>
                                                            <li><a href="masonary-3-grid.php">grid 3</a></li>
                                                            <li><a href="masonary-4-grid.php">grid 4</a></li>
                                                            <li><a href="masonary-fullwidth.php">full width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="about-page.php">about us</a></li> -->
                                            <li><a href="search.php">search</a></li>
                                            <li><a href="review.php">review</a>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16686825142737788-25" aria-haspopup="true" aria-controls="sm-16686825142737788-26" aria-expanded="false">compare<span class="sub-arrow"></span></a>
                                                <ul id="sm-16686825142737788-26" role="group" aria-hidden="true" aria-labelledby="sm-16686825142737788-25" aria-expanded="false">
                                                    <!-- <li><a href="compare.php">compare</a></li>
                                                    <li><a href="compare-2.php">compare-2</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a href="collection.php">collection</a></li>
                                            <!-- <li><a href="lookbook.php">lookbook</a></li> -->
                                            <!-- <li><a href="sitemap.php">site map</a>
                                            </li> -->
                                            <li><a href="404.php">404</a></li>
                                            <!-- <li><a href="coming-soon.php">coming soon</a></li> -->
                                            <li><a href="faq.php">FAQ</a></li>
                                        </ul><span class="scroll-up" style="top: auto; left: 0px; margin-left: 0px; width: 224px; z-index: 2; margin-top: -159px; visibility: hidden; display: none;"><span class="scroll-up-arrow"></span></span><span class="scroll-down" style="display: none; top: auto; left: 0px; margin-left: 0px; width: 224px; z-index: 2; margin-top: 178px; visibility: hidden;"><span class="scroll-down-arrow"></span></span>
                                    </li>
                                    <!-- <li><a href="#">pages</a></li>
                                        <ul>
                                            <li>
                                                <a href="#">vendor</a>
                                                <ul>
                                                    <li><a href="vendor-dashboard.php">vendor dashboard</a>
                                                    </li>
                                                    <li><a href="vendor-profile.php">vendor profile</a></li>
                                                    <li><a href="become-vendor.php">become vendor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">account</a>
                                                <ul>
                                                    <li><a href="wishlist.php">wishlist</a></li>
                                                    <li><a href="cart.php">cart</a></li>
                                                    <li><a href="dashboard.php">Dashboard</a></li>
                                                    <li><a href="login.php">login</a></li>
                                                    <li><a href="register.php">register</a></li>
                                                    <li><a href="contact.php">contact</a></li>
                                                    <li><a href="forget_pwd.php">forget password</a></li>
                                                    <li><a href="profile.php">profile</a></li>
                                                    <li><a href="checkout.php">checkout</a></li>
                                                    <li><a href="order-success.php">order success</a></li>
                                                    <li><a href="order-tracking.php">order tracking<span
                                                                class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">portfolio</a>
                                                <ul>
                                                    <li><a href="">grid</a>
                                                        <ul>
                                                            <li><a href="grid-2-col.php">grid
                                                                    2</a></li>
                                                            <li><a href="grid-3-col.php">grid
                                                                    3</a></li>
                                                            <li><a href="grid-4-col.php">grid
                                                                    4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="">masonry</a>
                                                        <ul>
                                                            <li><a href="masonary-2-grid.php">grid 2</a></li>
                                                            <li><a href="masonary-3-grid.php">grid 3</a></li>
                                                            <li><a href="masonary-4-grid.php">grid 4</a></li>
                                                            <li><a href="masonary-fullwidth.php">full width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about-page.php">about us</a></li>
                                            <li><a href="search.php">search</a></li>
                                            <li><a href="review.php">review</a>
                                            </li>
                                            <li>
                                                <a href="#">compare</a>
                                                <ul>
                                                    <li><a href="compare.php">compare</a></li>
                                                    <li><a href="compare-2.php">compare-2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="collection.php">collection</a></li>
                                            <li><a href="lookbook.php">lookbook</a></li>
                                            <li><a href="sitemap.php">site map</a>
                                            </li>
                                            <li><a href="404.php">404</a></li>
                                            <li><a href="coming-soon.php">coming soon</a></li>
                                            <li><a href="faq.php">FAQ</a></li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="blog(right-sidebar).php">blog</a>
                                    <li><a href="contact.php">contact</a></li>
                                    <!-- <ul>
                                            <li><a href="blog-page.php">left sidebar</a></li>
                                            <li><a href="blog(right-sidebar).php">right sidebar</a></li>
                                            <li><a href="blog(no-sidebar).php">no sidebar</a></li>
                                            <li><a href="blog-details.php">blog details</a></li>
                                        </ul> -->
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-setting">
                                        <div><img src="assets/images/icon/setting.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-settings"></i>
                                        </div>
                                        <div class="show-div setting">
                                            <h6>language</h6>
                                            <ul>
                                                <li><a href="#">english</a></li>
                                                <li><a href="#">french</a></li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">euro</a></li>
                                                <li><a href="#">rupees</a></li>
                                                <li><a href="#">pound</a></li>
                                                <li><a href="#">doller</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <?php

                                        $cart_count = $conn->prepare("SELECT * FROM cart where user_id = ?");
                                        $cart_count->execute([$user_id]);

                                        ?>
                                        <div><img src="assets/images/icon/cart.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
                                        <span class="cart_qty_cls"><?= $cart_count->rowCount(); ?></span>

                                        <ul class="show-div shopping-cart">
                                            <?php
                                            $grand_total=0;
                                            $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id=?");
                                            $select_cart->execute([$user_id]);
                                            if ($select_cart->rowCount() > 0) {
                                                while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                    <li>
                                                        <div class="media">
                                                            <a href="#"><img alt="" class="me-3" src="assets/images/pro3/<?= $fetch_cart['image'] ?>"></a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h5><?= $fetch_cart['name'] ?></h5>
                                                                </a>
                                                                <h4><span><?=$fetch_cart['quantity']?>X $<?= $sub_total=($fetch_cart['price'] * $fetch_cart['quantity']); ?></span></h4>
                                                            </div>
                                                        </div>
                                                        <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                    </li>
                                            <?php $grand_total+= $sub_total;
                                             }
                                            } else {
                                                echo "add product";
                                            } ?>

                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$<?= $grand_total; ?></span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons"><a href="cart.php" class=" view-cart">view-cart</a>
                                                    <a href="checkout.php" class="checkout">checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>