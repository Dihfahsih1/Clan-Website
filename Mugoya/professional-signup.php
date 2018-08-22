<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Professional Sign Up </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
    </head>
    <body>
        <?php
            require('include/page-header.php');
        ?>
        <section class="login-section">
            <div class="container">
                <div class="login-inner">
                    <form class="signup-form common-form">
                        <h3 class="form-h">Professional Sign Up</h3>
                        <div class="form-wrap">
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Enter Name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Enter Email Address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Date of Birth" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Enter Contact Number" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Enter Address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Enter Services" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="custom-select">
                                        <select class="form-control txtfield" placeholder="Select Experience">
                                            <option>Select Experience</option>
                                            <option>+1 Year</option>
                                            <option>+2 Year</option>
                                            <option>+3 Year</option>
                                            <option>+4 Year</option>
                                            <option>+5 Year</option>
                                        </select>
                                        <span class="caret"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="custom-select">
                                        <select class="form-control txtfield" placeholder="Select Gender">
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <span class="caret"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                <div class="sign-inntn">
                                    <a href="#" class="btn cut-btn" >Sign Up</a>
                                </div>
                            </div>
                            <div class="line-div"></div>
                            <div class="social-mediad">
                                <ul class="social-ul">
                                    <li class="fb">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            sign in with facebook
                                        </a>
                                    </li>
                                    <li class="tw">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            sign in with twitter
                                        </a>
                                    </li>
                                    <li class="google">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            sign in with google 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sign-up">
                                Already have an account with us ?
                                <span>
                                    <a href="#">Sign In</a>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <?php
        require('include/footer.php');
    ?>
    </body>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){  
                $('header').addClass("sticky");
            }
            else{
                $('header').removeClass("sticky");
            }
        });
    </script> 
</html>