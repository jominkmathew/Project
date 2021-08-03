<?php /* Smarty version 2.6.26, created on 2020-03-14 06:51:00
         compiled from blog.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Hami - Web Hosting HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="hami/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="hami/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>Call Us: 001-1234-88888</span></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Email: info.cololib@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Login -->
                            <a href="login.php"><i class="fa fa-lock" aria-hidden="true"></i> <span>Login</span></a>
                            <!-- Language -->
                            <div class="dropdown">
                                <a class="btn pr-0 dropdown-toggle" href="#" role="button" id="langdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/core-img/eng.png" alt=""> Registration</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langdropdown">
                                    <a class="dropdown-item" href="staff.php">- Staff</a>
                                    <a class="dropdown-item" href="reg.php">- User</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="hamiNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="hami/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="index.php">Home</a></li>
                                    
                                    
                            
                                    <li><a href="about.php">About</a></li>
                                    <li class="active"><a href="blog.php">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                                <!-- Live Chat -->
                               
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
   
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="hami-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">

                    <!-- Single Blog Post Area -->
                    <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
                    <div class="single-blog-post mb-50">
                        <!-- Post Date -->
                        <span class="post-date">ufyuf</span>
                        <!-- Post Title -->
                        <a href="#" class="post-title">jankoo</a>
                        <!-- Post Thumbnail -->
                        <img src="<?php echo $this->_tpl_vars['s']['path']; ?>
" width="600px" height="300px">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-author">By Admin</a>
                            <a href="#" class="post-tutorial">Tutorials</a>
                        </div>
                        <p>Vestibulum lacus erat, pharetra et sodales ut, porta sit amet nibh. Sed vestibulum lacinia quam, vel iaculis nunc condimentum eget. Aliquam in mi pharetra, molestie augue ac, fermentum orci.</p>
                        <a href="#" class="btn continue-btn">Continue Reading <i class="arrow_right"></i></a>
                    </div>
                    <?php endforeach; endif; unset($_from); ?>

                    <!-- Single Blog Post Area -->
                    

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Payment Methods -->
                        <div class="payments-methods d-flex align-items-center">
                            <p>Payments We Accept</p>
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                            <i class="fa fa-cc-discover" aria-hidden="true"></i>
                            <i class="fa fa-cc-amex" aria-hidden="true"></i>
                            <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                            <i class="fa fa-cc-stripe" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php echo '
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="hami/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="hami/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="hami/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="hami/js/hami.bundle.js"></script>
    <!-- Active -->
    <script src="hami/js/default-assets/active.js"></script>
'; ?>

</body>

</html>