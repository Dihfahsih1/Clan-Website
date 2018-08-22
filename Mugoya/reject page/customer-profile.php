<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Customer Dashboard </title>
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
            require('include/dashboard-header.php');
        ?>
        <section class="dashboard-sec saloon-dash">
            <div class="container-fluid">
                <div class="col-md-12 col-sm-12 col-xs-12 p-0">
                    <?php
                        require('include/saloon-sidebar.php');
                    ?>
                    <!-- Content Starts Here -->
                    <div class="page-content-wrapper">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="content-panel p-0">
                                        <div class="cover-img">
                                        </div>
                                        <div class="profile-panel m-b-40">
                                            <div class="profile-img p-lr-15">
                                                <div class="logo-image">
                                                    <img src="img/saloon-user.png" class="img-responsive" alt="Profile Image"/>
                                                    <div class="edit-logo">
                                                        <span><i class="fa fa-pencil"></i></span>
                                                        <input type="file" name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                                <a href="javascript:void(0);" class="btn cut-btn editform"> <i class="fa fa-pencil"></i> Edit Profile </a>
                                                <button class="btn cut-btn saveform" type="button"> Save </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wrap-formdata">
                                                <form class="common-form dash-prowrap saloon-page">
                                                    <div class="dash-profile">
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>First Name <small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="First Name" class="form-control">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Last Name <small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="Last Name" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Date of Birth <small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="02/07/1994" class="form-control">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Contact Number <small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="Contact Number" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Enter Residential Address<small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="Enter Residential Address" class="form-control">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Select Gender<small class="manidatory">*</small></label>
                                                                    <div class="custom-radio">
                                                                        <div class="radio-inline">
                                                                            <input disabled="" type="radio" id="radio01" name="radio" />
                                                                            <label for="radio01">
                                                                                <span><span></span></span>Male
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-inline">
                                                                            <input disabled="" type="radio" id="radio02" name="radio" />
                                                                            <label for="radio02">
                                                                                <span><span></span></span>Female
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Select Country <small class="manidatory">*</small></label>
                                                                     <div class="custom-select">
                                                                        <select class="form-control txtfield" placeholder="Select Country">
                                                                            <option>Select Country</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antartica">Antarctica</option>
                                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                        </select>
                                                                        <span class="caret"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Enter State Name <small class="manidatory">*</small></label>
                                                                    <div class="custom-select">
                                                                        <select disabled="" class="form-control txtfield" placeholder="Select State">
                                                                            <option>Select State</option>
                                                                            <option name="nsw">New South Wales</option>
                                                                            <option name="vic">Victoria</option>
                                                                            <option name="qld">Queensland</option>
                                                                            <option name="wa">Western Australia</option>
                                                                            <option name="sa">South Australia</option>
                                                                            <option name="tas">Tasmania</option>
                                                                            <option name="act">Australian Capital Territory</option>
                                                                            <option name="nt">Northern Territory</option>
                                                                        </select>
                                                                        <span class="caret"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                <h4 class="title-info">Saloon Details</h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Saloon Name<small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="Saloon Name" class="form-control">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Saloon Address<small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="Saloon Address" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Saloon Contact Number<small class="manidatory">*</small></label>
                                                                    <input type="text" placeholder="Saloon Contact Number" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript">

        $('.saveform').hide();
        $('.editform').on('click',function(){
            $('.wrap-formdata input, .wrap-formdata select').attr('disabled',false);
            $('.saveform').show();
            $('.editform').hide();
        });
        $('.saveform').on('click',function(){
            $('.wrap-formdata input, .wrap-formdata select').attr('disabled',true);
            $('.saveform').hide();
            $('.editform').show();
        });

    </script>
</html>