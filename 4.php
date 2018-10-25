    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title> <img src="images/loggo.jpg">Bamugoya</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <!-- pages css  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="css/framework.css" rel="stylesheet">
    <link href="css/responsive-style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    </head>
    <body>
    <?php
        require('include/header.php');
    ?>
    <section class="how-it-works-sec">
        <div class="section-title text-center">
            <a href="3.php">&laquo;Previous Child</a>
            <h2>4th Agnes Namatome<span class="pink"> Lineage</span></h2>
            <a href="5.php">Next Child&raquo;</a>
            
        </div>
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="step-works wow fadeInLeft" wow-data-delay="0.4s">
                    <div class="content-section">
                        <h4>Leah</h4>
                        <div class="works-img enjoy">
                            <img src="images/2.jpg">

                        </div>    
                        <p>She is the first born</p>
                        <ul class="nav navbar-nav navbar-left cus-navbar">
                            <li class="dropdown"><a href="#">Her Children</a>
                                <ul class="sub-service dropdown-content">
                                    <li>Kid 1</li>
                                    <li>Kid 2</li>
                                    <li>Kid 3</li>
                                    <li>Kid 4</li>
                                </ul>
                            </li>
                        </ul>              
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="step-works wow fadeInLeft" wow-data-delay="0.4s">
                    <div class="content-section">
                        <h4>Sulayi</h4>
                        <div class="works-img enjoy">
                            <img src="images/2.jpg">

                        </div>    
                        <p>he is the second born</p>
                        <ul class="nav navbar-nav navbar-left cus-navbar">
                            <li class="dropdown"><a href="#">His Children</a>
                                <ul class="sub-service dropdown-content">
                                    <li>Kid 1</li>
                                    <li>Kid 2</li>
                                    <li>Kid 3</li>
                                    <li>Kid 4</li>
                                </ul>
                            </li>
                        </ul>              
                    </div>
                </div>
            </div>
             <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="step-works wow fadeInLeft" wow-data-delay="0.4s">
                    <div class="content-section">
                        <h4>Wangayire</h4>
                        <div class="works-img enjoy">
                            <img src="images/2.jpg">

                        </div>    
                        <p>he is the third born</p>
                        <ul class="nav navbar-nav navbar-left cus-navbar">
                            <li class="dropdown"><a href="#">His Children</a>
                                <ul class="sub-service dropdown-content">
                                    <li>Kid 1</li>
                                    <li>Kid 2</li>
                                    <li>Kid 3</li>
                                    <li>Kid 4</li>
                                </ul>
                            </li>
                        </ul>              
                    </div>
                </div>
            </div>

             <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="step-works wow fadeInLeft" wow-data-delay="0.4s">
                    <div class="content-section">
                        <h4>Latif</h4>
                        <div class="works-img enjoy">
                            <img src="images/2.jpg">

                        </div>    
                        <p>he is the fourth born</p>
                        <ul class="nav navbar-nav navbar-left cus-navbar">
                            <li class="dropdown"><a href="#">His Children</a>
                                <ul class="sub-service dropdown-content">
                                    <li>Kid 1</li>
                                    <li>Kid 2</li>
                                    <li>Kid 3</li>
                                    <li>Kid 4</li>
                                </ul>
                            </li>
                        </ul>              
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
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
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
    <script>
    wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
    );
    wow.init();
    // document.getElementById('moar').onclick = function() {
    //   var section = document.createElement('section');
    //   section.className = 'section--purple wow fadeInDown';
    //   this.parentNode.insertBefore(section, this);
    // };
    </script>
    <!-- app slider js -->
     <script>
        $(document).ready(function() {

          var sync1 = $("#sync1");
          var sync2 = $("#sync2");
          var sync1_copy = $("#sync1_copy");

          sync1.owlCarousel({
            singleItem : true,
            slideSpeed : 1000,
            navigation: false,
            pagination:false,
            afterAction : syncPosition,
            responsiveRefreshRate : 200,
             autoPlay : true,
             
          });

            sync1_copy.owlCarousel({
            singleItem : true,
            slideSpeed : 1000,
            navigation: false,
            pagination:false,
            afterAction : syncPosition,
            responsiveRefreshRate : 200,
            autoPlay : true,
          });

          sync2.owlCarousel({
            items :4,
            itemsDesktop      : [1199,4],
            itemsDesktopSmall : [979,4],
            itemsTablet       : [768,4],
            itemsMobile       : [479,4],
            pagination:false,
            responsiveRefreshRate : 100,
            afterInit : function(el){
              el.find(".owl-item").eq(0).addClass("synced");
            }
          });

          function syncPosition(el){
            var current = this.currentItem;
            $("#sync2")
              .find(".owl-item")
              .removeClass("synced")
              .eq(current)
              .addClass("synced")
            if($("#sync2").data("owlCarousel") !== undefined){
              center(current)
            }

          }

          $("#sync2").on("click", ".owl-item", function(e){
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo",number);
          });


          $("#sync2").on("click", ".owl-item", function(e){
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1_copy.trigger("owl.goTo",number);
          });

          function center(number){
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

            var num = number;
            var found = false;
            for(var i in sync2visible){
              if(num === sync2visible[i]){
                var found = true;
              }
            }

            if(found===false){
              if(num>sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", num - sync2visible.length+2)
              }else{
                if(num - 1 === -1){
                  num = 0;
                }
                sync2.trigger("owl.goTo", num);
              }
            } else if(num === sync2visible[sync2visible.length-1]){
              sync2.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]){
              sync2.trigger("owl.goTo", num-1)
            }
          }

        });
    </script>
    <script>
        $(document).ready(function() {
         
            var owl = $(".owl-demo1");
             
            owl.owlCarousel({
            items : 4, //10 items above 1000px browser width
            itemsDesktop : [1000,3], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
            });

             
            // Custom Navigation Events
         
        });

    </script>
    <script>
        jQuery(document).ready(function($) {
            $('.count').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
    </html>
    
