   <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bamugoya</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <!-- pages css  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/logo.jpg" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="css/framework.css" rel="stylesheet">
    <link href="css/responsive-style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    </head>
    <body >
    <?php
        require('include/header.php');
    ?>
      
                        <br><br>
       <div class="section-title text-center " style="margin-top:5%">
             <h2>Akabu Wagima<span class="pink"> Family</span></h2>
             <h5 style="font-size: bolder; font:20%" > Wagima's Sons and Daughters</h5>
               <h6 style="font-size: 20px; " > Click on each of the child to see his or her children and <span class="pink">grand children </span></h6>
        </div>
                    <section   style="background:#dddd; float:right; text-align: left; text-transform: uppercase;  margin-right:15%;">
                        13.<a style="text-decoration: none" href="13.php">Nathan Gudoyi</a><br>
                        14.<a style="text-decoration: none" href="14.php">Saul Nagwere</a><br>
                        15.<a style="text-decoration: none" href="15.php">Norah Nadunga(Deceased)</a><br>
                        16.<a style="text-decoration: none" href="16.php">Wagima Silver </a><br>
                        17.<a style="text-decoration: none" href="17.php">Nabukwasi Dorothy </a><br>
                        18.<a style="text-decoration: none" href="18.php">Wanziyima Semu</a><br>
                        19.<a style="text-decoration: none" href="19.php"> Magomu Dassan</a><br>
                   
                    </section>
                <section style="background:#dddd; float:left; text-align: left; text-transform: uppercase; margin-left:12.5%;">
                        1.<a style="text-decoration: none" href="1.php">Night Rose Nambozo</a><br>
                        2.<a style="text-decoration: none" href="2.php">Patrick Mugoya Perez</a><br>
                        3.<a style="text-decoration: none" href="3.php">Jane Nabudde(Deceased)</a><br>
                        4.<a style="text-decoration: none" href="4.php">Agnes Namatome(Deceased)</a><br>
                        5.<a style="text-decoration: none" href="5.php">Kennedy Robert Mugoya</a><br>
                        6.<a style="text-decoration: none" href="6.php">Micheal Buwasi</a><br>
                        
              </section>
              <section style="background:#dddd; float:center; text-transform: uppercase;">
                        
                        7.<a style="text-decoration: none" href="7.php">Janet Annet Nabuteza</a><br>
                        8.<a style="text-decoration: none" href="8.php">Assuman Mugamba (Deceased)</a><br>
                        9.<a style="text-decoration: none" href="9.php">Irene Nambozo</a><br>
                        10.<a style="text-decoration: none" href="10.php">Namakoola Simon(Deceased)</a><br>
                        11.<a style="text-decoration: none" href="11.php">Wabulo Charles</a><br>
                        12.<a style="text-decoration: none" href="12.php">Nakayenze Gladys</a><br>
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
    
   <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bamugoya</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <!-- pages css  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/logo.jpg" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="css/framework.css" rel="stylesheet">
    <link href="css/responsive-style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    </head>
    <body >
    <?php
        require('include/header.php');
    ?>
      
                        <br><br>
       <div class="section-title text-center " style="margin-top:5%">
             <h2>Akabu Wagima<span class="pink"> Family</span></h2>
             <h5 style="font-size: bolder; font:20%" > Wagima's Sons and Daughters</h5>
               <h6 style="font-size: 20px; " > Click on each of the child to see his or her children and <span class="pink">grand children </span></h6>
        </div>
                    <section   style="background:#dddd; float:right; text-align: left; text-transform: uppercase;  margin-right:15%;">
                        13.<a style="text-decoration: none" href="13.php">Nathan Gudoyi</a><br>
                        14.<a style="text-decoration: none" href="14.php">Saul Nagwere</a><br>
                        15.<a style="text-decoration: none" href="15.php">Norah Nadunga(Deceased)</a><br>
                        16.<a style="text-decoration: none" href="16.php">Wagima Silver </a><br>
                        17.<a style="text-decoration: none" href="17.php">Nabukwasi Dorothy </a><br>
                        18.<a style="text-decoration: none" href="18.php">Wanziyima Semu</a><br>
                        19.<a style="text-decoration: none" href="19.php"> Magomu Dassan</a><br>
                   
                    </section>
                <section style="background:#dddd; float:left; text-align: left; text-transform: uppercase; margin-left:12.5%;">
                        1.<a style="text-decoration: none" href="1.php">Night Rose Nambozo</a><br>
                        2.<a style="text-decoration: none" href="2.php">Patrick Mugoya Perez</a><br>
                        3.<a style="text-decoration: none" href="3.php">Jane Nabudde(Deceased)</a><br>
                        4.<a style="text-decoration: none" href="4.php">Agnes Namatome(Deceased)</a><br>
                        5.<a style="text-decoration: none" href="5.php">Kennedy Robert Mugoya</a><br>
                        6.<a style="text-decoration: none" href="6.php">Micheal Buwasi</a><br>
                        
              </section>
              <section style="background:#dddd; float:center; text-transform: uppercase;">
                        
                        7.<a style="text-decoration: none" href="7.php">Janet Annet Nabuteza</a><br>
                        8.<a style="text-decoration: none" href="8.php">Assuman Mugamba (Deceased)</a><br>
                        9.<a style="text-decoration: none" href="9.php">Irene Nambozo</a><br>
                        10.<a style="text-decoration: none" href="10.php">Namakoola Simon(Deceased)</a><br>
                        11.<a style="text-decoration: none" href="11.php">Wabulo Charles</a><br>
                        12.<a style="text-decoration: none" href="12.php">Nakayenze Gladys</a><br>
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
    
