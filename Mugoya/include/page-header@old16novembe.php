<div class="header-section">
    <div class="mid-div">
        <div class="container">
            <div class="mid-logo-sec">
                <div class="mid-top-div">
                    
                    <div class="header_search">
                        
                    </div>
                    <ul class="extra-btn">
                        <li class="dropdown show-on-hover">
                            <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-shopping-cart"></i></span>
                                  <a id="box-eff" href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                   Cart <span class="fa fa-angle-down"></span>
                                  </a>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a href="#">Lorem Ipsum</a></li>
                                <li><a href="#">Lorem Ipsum</a></li>
                                <li><a href="#">Lorem Ipsum</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 English <span class="fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">French</a></li>
                                <li><a href="#">Lorem Ipsum</a></li>
                                <li><a href="#">Lorem Ipsum</a></li>
                            </ul>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="new-main-header" id="sticker">
        <nav class="navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main-menu">
                     <li class="active"><a href="#">Hair</a>
                  </li>
                  <li><a href="#">Nails <i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Massage<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Spa</a></li>
                  <li><a href="#">barbers</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </header>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.cus-navbar li a').click(function(){
            $('.cus-navbar li').addClass("active").siblings().removeClass("active");
        });
    });
</script>