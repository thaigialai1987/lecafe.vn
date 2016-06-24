<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>Lecafe.vn :: Trang chủ</title>
    
    <link href="{{ asset('theme/home/bootstrap3/css/bootstrap.css') }}" rel="stylesheet">

    <!-- main css -->
    <link href="{{ asset('theme/home/css/main.css') }}" rel="stylesheet">
    
    <!-- mobile css -->
    <link href="{{ asset('theme/home/css/responsive.css') }}" rel="stylesheet">
    
    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/font-awesome.min.css') }}" />
    <!-- FontAwesome Support -->
    
    <!-- Btns -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/btn.css') }}" />
    <!-- Btns -->
    
    <!-- Superfish menu -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/superfish/superfish.css') }}" />
    <!-- Superfish menu -->
    
    <!-- Theme Color selector -->
    <link href="{{ asset('theme/home/js/theme-color-selector/theme-color-selector.css') }}" type="text/css" rel="stylesheet">
    <!-- Theme Color selector -->
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/js/owl-carousel/owl.carousel.css') }}" />
    <!-- Owl Carousel -->
    
    <!-- Twitter feed -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/twitterfeed.css') }}" />
    <!-- Twitter feed -->
    
    <!-- Typicons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/typicons/typicons.min.css') }}" />
    <!-- Typicons -->
    
    <!-- WOW animations -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/js/wow/css/libs/animate.css') }}" />
    <!-- WOW animations -->
    
    <!-- Forms -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/forms.css') }}" />
    <!-- Forms -->
    
    <!-- Flickr feed -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/css/flickrfeed.css') }}" />
    <!-- Flickr feed -->
    
    <!-- Pulse Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/home/js/pulse/pm-slider.css') }}" />
    <!-- Pulse Slider -->
        
    <!-- Development Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
    
  </head>

  <body>

  <!--facebook-->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=230777987049706";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--/facebook-->
  
  <!-- Mobile Menu -->
  <div class="pm-mobile-menu-overlay" id="pm-mobile-menu-overlay"></div>
  
  <div class="pm-mobile-global-menu">
                    
    <div class="pm-mobile-global-menu-logo">
        <a href="index.html"><img src="img/vienna-logo.png" alt="lecafe.vn"></a> 
    </div>
    
    <div class="pm-mobile-global-menu-search">
        <form action="#" method="post">
            <input name="" type="text" class="pm-search-field-mobile" placeholder="Type Keywords...">
        </form>
    </div>
    
    <ul class="sf-menu pm-nav">
                        
        <li><a href="index.html">Home</a></li>
        <li>
            <a href="#">Menus</a>
            <ul>
                <li><a href="menus.html">Breakfast</a></li>
                <li><a href="menus.html">Lunch</a></li>
                <li><a href="menus.html">Dinner</a></li>
            </ul>
        </li>
        <li><a href="gallery.html">Gallery</a></li>
        <li>
            <a href="#">Events</a>
            <ul>
                <li><a href="book-an-event.html">Book an Event</a></li>
                <li><a href="events.html">Browse Events</a></li>
                <!--<li><a href="#">Social Events</a></li>-->
            </ul>
        </li>
        <li>
            <a href="#">News</a>
            <ul>
                <li><a href="news.html">News Full Width</a></li>
                <li><a href="news-with-sidebar.html">News with Sidebar</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Store</a>
            <ul>
                <li><a href="store.html">Browse Store</a></li>
                <li><a href="cart.html">View Cart</a></li>
                <!--<li><a href="#">Customer Login</a></li>-->
            </ul>
        </li>
        <li><a href="catering.html">Catering</a></li>
    
    </ul>
        
  </div><!-- /pm-mobile-nav-overlay -->
  
  
    

    <div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->
    
        <!-- Search overlay -->
        <div class="pm-search-container" id="pm-search-container">
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <form action="#" method="post">
                            <input name="pm_search_field" type="text" class="pm-search-field-header" placeholder="Type Keywords...">
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <ul class="pm-search-controls">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#" id="pm-search-collapse"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- Search overlay end -->
    
        <!-- Sub-header -->
        <div class="pm-sub-menu-container">
        
            <div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        
                        <div class="pm-sub-menu-info">
                            <p class="pm-address"><i class="fa fa-map-marker"></i> Wừu, thị trấn Đăk Đoa, huyện Đăk Đoa, Gia Lai</p>
                            <p class="pm-contact"><i class="fa fa-mobile-phone"></i> 0985 87 07 50</p>
                        </div>
                                                
                    </div>
                    
                    
                    
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <ul class="pm-sub-navigation">
                            <li>                               
                            </li>
                            <li><a href="/about-us">Giới thiệu</a></li>
                            <li><a href="/contact-us">Liên hệ</a></li>
                            <li class="pm-search-btn-li"><a href="#" class="pm-search-btn" id="pm-search-btn"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    
                    
                </div>
            
            </div>
            
        </div>
        <!-- /Sub-header -->
    
        <!-- Main navigation -->
        <header>
                
            <div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        
                        <div class="pm-header-logo-container">
                            <a href="/"><img src="img/vienna-logo.png" class="img-responsive pm-header-logo" alt="lecafe.vn"></a> 
                        </div>
                        
                        <div class="pm-header-mobile-btn-container">
                            <!--<button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-main-menu-btn" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>-->
                            <button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-mobile-menu-trigger" ><i class="fa fa-bars"></i></button>
                        </div>
                    
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-8 pm-main-menu">
                                        
                        <nav class="navbar-collapse collapse">
                        
                            <ul class="sf-menu pm-nav">
                        
                                <li><a href="/">Trang chủ</a></li>
                                <li><a href="/products">Sản phẩm</a></li>
                                <li><a href="/posts">Tin tức</a></li>
                                <li>
                                    <a href="/about-us">Giới thiệu</a>
                                    
                                </li>
                                <li>
                                    <a href="/contact-us">Liên hệ</a>
                                   
                                </li>
                                
                            
                            </ul>
                        
                        </nav>  
                                              
                    </div>
                    
                </div>
            
            </div>
                    
        </header>
        <!-- /Main navigation -->
                
        <!-- SLIDER AREA -->
        
        @yield('slider')
        
        <!-- SLIDER AREA end -->
        
        <!-- BODY CONTENT starts here -->
        
       @yield('content')
        <!-- Staff filter system end -->
        
        
        <!-- BODY CONTENT end -->
        
        <div class="pm-fat-footer">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                        <img src="img/vienna-logo.png" class="img-responsive" alt="lecafe.vn"> 
                        <p>
                        Lo lắng cho sức khỏe! Thói quen uống cafe hằng ngày!Cafe bị pha trộn!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                      <h6>Tin tức</h6>
                      <ul class="pm-recent-blog-posts">
                            <!-- Post -->
                            <li>
                                <div class="pm-recent-blog-post-thumb" style="background-image:url(img/posts/p1.jpg);"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="blog-single-post.html">Picking the best spices and ingredients for your next dish</a>
                                    <p class="pm-comment-count"><i class="fa fa-comment"></i> 8 Comments</p>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div class="pm-recent-blog-post-thumb" style="background-image:url(img/posts/p2.jpg);"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="blog-single-post.html">The secrets to creating the perfect Italian dish</a>
                                    <p class="pm-comment-count"><i class="fa fa-comment"></i> 12 Comments</p>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div class="pm-recent-blog-post-thumb" style="background-image:url(img/posts/p3.jpg);"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="blog-single-post.html">The life and culture of Venice, Italy</a>
                                    <p class="pm-comment-count"><i class="fa fa-comment"></i> 4 Comments</p>
                                </div>
                            </li>
                            <!-- Post end -->
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                      <h6>lecafe.vn</h6>        
                      
                      <div class="pm-event-widget-container">
                        
                        <div class="fb-page" data-href="https://www.facebook.com/lecafe.vn/" data-tabs="timeline" data-width="262" data-height="95" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lecafe.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lecafe.vn/">le cafe</a></blockquote></div>
                        
                      </div>
                                     
                    </div>
                </div>  
            </div>
            
        </div>
        
        <footer>
        
            <div class="container">
                <div class="row">
                    
                   <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="pm-footer-social-info-container">
                            <h6>Kết nối với chúng tôi!</h6>
                            <ul class="pm-footer-social-icons">
                                <li title="Facebook" class="pm_tip_static_top"><a href="https://www.facebook.com/lecafe.vn"><i class="fa fa-facebook fb"></i></a></li>
                            </ul>
                        </div>
                        
                   </div>
                   
                   <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="pm-footer-subscribe-container">
                            <h6>Nhận tin</h6>
                            
                            <div class="pm-footer-subscribe-form-container">
                                <form action="#" method="post" id="pm-footer-subscribe">
                                    <input class="pm-footer-subscribe-field" type="text" placeholder="Email Address" value="" />
                                    <div class="pm-footer-subscribe-submit-btn">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                   </div>
                    
                </div>
            </div>  

                
        </footer>
                
        <div class="pm-footer-copyright">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 pm-footer-copyright-col">
                        <p>©2016 <a href="http://www.lecafe.vn" target="_blank">lecafe.vn</a></p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 pm-footer-navigation-col">
                        <ul class="pm-footer-navigation" id="pm-footer-nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/products">Sản phẩm</a></li>
                            <li><a href="/posts">Tin tức</a></li>
                            <li><a href="/about-us">Giới thiệu</a></li>
                            <li><a href="/contact-us">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    
    </div><!-- /pm_layout-wrapper -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('theme/home/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('theme/home/js/jquery.viewport.mini.js') }}"></script>
    <script src="{{ asset('theme/home/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('theme/home/bootstrap3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/home/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('theme/home/js/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('theme/home/js/main.js') }}"></script>
    <script src="{{ asset('theme/home/js/jquery.tooltip.js') }}"></script>
    <script src="{{ asset('theme/home/js/jquery.hoverPanel.js') }}"></script>
    <script src="{{ asset('theme/home/js/superfish/superfish.js') }}"></script>
    <script src="{{ asset('theme/home/js/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('theme/home/js/tinynav.js') }}"></script>
    <script src="{{ asset('theme/home/js/stellar/jquery.stellar.js') }}"></script>
    <script src="{{ asset('theme/home/js/countdown/countdown.js') }}"></script>
    <script src="{{ asset('theme/home/js/theme-color-selector/theme-color-selector.js') }}"></script>
    <script src="{{ asset('theme/home/js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('theme/home/js/pulse/jquery.PMSlider.js') }}"></script>
        
    <p id="back-top" class="visible-lg visible-md visible-sm"> </p>
    
  </body>
</html>
