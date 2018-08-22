<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Saloon Details </title>
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
                    <form class="saloon-page common-form">
                        <h3 class="form-h">Saloon Details</h3>
                        <div class="form-wrap">
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>Enter Saloon Name <small class="manidatory">*</small></label>
                                    <input type="text" placeholder="Enter Saloon Name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>Enter Saloon Address <small class="manidatory">*</small></label>
                                    <input type="text" placeholder="Enter Saloon Address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>Enter Saloon Services <small class="manidatory">*</small></label>
                                    <input type="text" placeholder="Enter Saloon Services" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>Upload Saloon Logo<small class="manidatory">*</small></label>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12 p-0">
                                        <div class="file-previewimg">
                                            <img src="img/no-img.png" class="img-responsive" alt="NO-IMAGES">
                                        </div>
                                        <div class="profile-upload">
                                            <div class="input-btn">
                                                <input type="file" />
                                                <button class="btn cus-btn"> 
                                                <i class="fa fa-file-image-o"></i> Upload Logo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                <div class="next-btn">
                                    <a href="saloon-profile.php" class="btn cut-btn" >Process</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
    <?php
        require('include/footer.php');
    ?>
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