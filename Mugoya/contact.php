


    <!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <title> Bamugoya</title>
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/fonts.css" rel="stylesheet">
      <link href="css/simple-line-icons.css" rel="stylesheet">
      <!-- pages css  -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/layout.css" rel="stylesheet">
      <link href="w3.css" rel="stylesheet">
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
      
<!-- End Top Background Image Wrapper -->
<div class="w3-yellow w3-center"><button class="w3-btn-block w3-gray" onclick="document.getElementById('id03').style.display='block'" ><i class="w3-xxlarge fa fa-envelope-o"></i><h3>SEND US A MESSAGE</h3></button></div>
<br><br>
<div id="id03" class="w3-modal ">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom " style="max-width:600px">

      <div id="headerbg" class="w3-center"><br>
    <header  >

        <h1>Leave us a message</h1>
      <span onclick="document.getElementById('id03').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
    </header><br></div>
        <div class="w3-container w3-center w3-padding-32 " id="footerbg">
        
    <form action="book.php" method="post" class=" w3-card-4 w3-black w3-text-white" id="book" onsubmit="myFunction()">

    <br>
    <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="fname" id="fname" type="text" placeholder="First Name" style="width:95%; background-color: gray";" required>
    </div>
    </div>

    <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="lname" id="lname" type="text" placeholder="Last Name"  style="width:95%; background-color: gray"; required>
    </div>
    </div>

    <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="mail" id="mail" type="text" placeholder="Email" style="width:95%; background-color: gray";>
    </div>
    </div>

    <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" id="phone" type="text" placeholder="Phone" style="width:95%; background-color: gray"; required>
    </div>
    </div>

    <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
    <div class="w3-rest">
    <textarea id="subject" name="message" placeholder="Type Your Message Here.." style="height:90px; width:70%; background-color: gray" required></textarea>
    </div>
    </div>
    <button class="w3-btn-block w3-section w3-green  w3-padding" style="width:95%" name="submit" type="submit" value="submit"><i class="fa fa-paper-plane-o w3-large"> </i> Send</button>

    </form>
      <script>
function myFunction() {
    alert("YOUR MESSAGE WAS SENT");
}
</script>
    </div>
    </div>
    </div>
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
              itemsDesktopSmall     : [979,4],
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