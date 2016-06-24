@extends('layouts.home')

@section('slider')
    <div class="pm-pulse-container" id="pm-pulse-container">

        <div id="pm-pulse-loader">
            <img src="theme/home/js/pulse/img/ajax-loader.gif" alt="slider loading" />
        </div>

        <div id="pm-slider" class="pm-slider">

            <div id="pm-slider-progress-bar"></div>

            <ul class="pm-slides-container" id="pm_slides_container">

                <!-- FULL WIDTH slides -->
                <li data-thumb="theme/home/img/slider/1a.jpg" class="pmslide_0"><img src="theme/home/img/slider/slide1.jpg" alt="img01" />

                    <div class="pm-holder">
                        <div class="pm-caption">
                            <h1><span>lecafe</span></h1>
                                  <span class="pm-caption-decription">
                                    Cafe sạch cho ngày mới
                                  </span>
                            <a href="menus.html" class="pm-slide-btn animated">View our menus <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                </li>

                <li data-thumb="theme/home/img/slider/2a.jpg" class="pmslide_1"><img src="theme/home/img/slider/slide2.jpg" alt="img02" />

                    <div class="pm-holder">
                        <div class="pm-caption">
                            <h1><span>Witness the beauty</span></h1>
                                  <span class="pm-caption-decription">
                                    Browse our gallery and see what makes Vienna great!
                                  </span>
                            <a href="gallery.html" class="pm-slide-btn animated">View our Gallery <i class="fa fa-chevron-right"></i></a>

                        </div>
                    </div>

                </li>

                <li data-thumb="theme/home/img/slider/3a.jpg" class="pmslide_2"><img src="theme/home/img/slider/slide3.jpg" alt="img02" />

                    <div class="pm-holder">
                        <div class="pm-caption">
                            <h1><span>Book with us!</span></h1>
                                  <span class="pm-caption-decription">
                                    Book your next private party or event with Vienna
                                  </span>
                            <a href="book-an-event.html" class="pm-slide-btn animated">Book Your Event Now <i class="fa fa-chevron-right"></i></a>

                        </div>
                    </div>

                </li>

            </ul>

        </div>

    </div>

@endsection

@section('content')

    <!-- Overview boxes -->
    <div class="container pm-containerPadding-top-90">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">

                <div class="pm-image-container">
                    <img src="theme/home/img/home/image1.jpg" alt="image1">
                </div>

                <h6>say hello to vienna</h6>

                <p>A powerful restaurant theme for restaurants, bars and catering companies.</p>

                <a href="about-us.html" class="pm-rounded-btn animated pm-primary">learn more about us <i class="fa fa-angle-right"></i></a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">

                <div class="pm-image-container">
                    <img src="theme/home/img/home/image2.jpg" alt="image2">
                </div>

                <h6>we serve authentic cuisine</h6>

                <p>Come experience Vienna for yourself...we’ve been told it’s an unforgettable experience</p>

                <a href="menus.html" class="pm-rounded-btn animated pm-primary">View our Menus <i class="fa fa-angle-right"></i></a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">

                <div class="pm-image-container">
                    <img src="theme/home/img/home/image3.jpg" alt="image3">
                </div>

                <h6>take home the pleasure</h6>

                <p>Visit our shop and browse some of our famous spices and sauces.</p>

                <a href="store.html" class="pm-rounded-btn animated pm-primary">visit our store <i class="fa fa-angle-right"></i></a>

            </div>

        </div>
    </div>
    <!-- Overview boxes end -->

    <!-- Menu filter system -->
    <div class="container pm-containerPadding-top-50 pm-containerPadding-bottom-10">
        <div class="row">

            <div class="col-lg-12 pm-containerPadding-bottom-40">

                <div class="pm-featured-header-container">

                    <!-- Featured panel header -->
                    <div class="pm-featured-header-title-container menus">
                        <p class="pm-featured-header-title">Featured Dishes</p>
                        <p class="pm-featured-header-message">Browse some of the best dishes on our menu</p>
                    </div>
                    <!-- Featured panel header end -->

                    <!-- Filter menu -->
                    <div class="pm-isotope-filter-container">
                        <ul class="pm-isotope-filter-system">
                            <li class="pm-isotope-filter-system-expand">Expand <i class="fa fa-angle-down"></i></li>
                            <li><a href="#" class="current">Breakfast</a></li>
                            <li><a href="http://ow.ly/XqzNol">Lunch</a></li>
                            <li><a href="http://ow.ly/XqzNol">Dinner</a></li>
                        </ul>
                    </div>
                    <!-- Filter menu end -->

                </div>

            </div><!-- /.col-lg-12 -->

            <!-- menu item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-menu-item-container">
                    <div class="pm-menu-item-img-container" style="background-image:url(theme/home/img/menu/item1.jpg);">
                        <div class="pm-menu-item-price"><p>$14.99</p></div>
                    </div>

                    <div class="pm-menu-item-desc">
                        <p class="pm-menu-item-title">shrimp salad</p>
                        <p class="pm-menu-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada orci nec tortor tincidunt. </p>
                    </div>
                </div>

            </div><!-- /.col-lg-4 -->
            <!-- /menu item -->

            <!-- menu item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-menu-item-container">
                    <div class="pm-menu-item-img-container" style="background-image:url(theme/home/img/menu/item2.jpg);">
                        <div class="pm-menu-item-price">
                            <p>$12.99</p></div>
                    </div>

                    <div class="pm-menu-item-desc">
                        <p class="pm-menu-item-title">broccoli pesto</p>
                        <p class="pm-menu-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada orci nec tortor tincidunt. </p>
                    </div>
                </div>

            </div><!-- /.col-lg-4 -->
            <!-- /menu item -->

            <!-- menu item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-menu-item-container">
                    <div class="pm-menu-item-img-container" style="background-image:url(theme/home/img/menu/item3.jpg);">
                        <div class="pm-menu-item-price">
                            <p>$13.99</p></div>
                    </div>

                    <div class="pm-menu-item-desc">
                        <p class="pm-menu-item-title">linguini</p>
                        <p class="pm-menu-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada orci nec tortor tincidunt. </p>
                    </div>
                </div>

            </div><!-- /.col-lg-4 -->
            <!-- /menu item -->

        </div>
    </div>
    <!-- Menu filter system end -->

    <!-- Upcoming events filter system -->
    <div class="container pm-containerPadding-top-50 pm-containerPadding-bottom-30">
        <div class="row">

            <div class="col-lg-12 pm-containerPadding-bottom-40">

                <div class="pm-featured-header-container">

                    <!-- Featured panel header -->
                    <div class="pm-featured-header-title-container events">
                        <p class="pm-featured-header-title">Upcoming Events</p>
                        <p class="pm-featured-header-message">Come and join us at our upcoming events across the city</p>
                    </div>
                    <!-- Featured panel header end -->

                    <!-- Filter menu -->
                    <div class="pm-isotope-filter-container">
                        <ul class="pm-isotope-filter-system">
                            <li class="pm-isotope-filter-system-expand">Expand <i class="fa fa-angle-down"></i></li>
                            <li><a href="#" class="current">Past Events</a></li>
                            <li><a href="events.html">Browse Events</a></li>
                            <!--<li><a href="#">Social Events</a></li>-->
                        </ul>
                    </div>
                    <!-- Filter menu end -->

                </div>

            </div><!-- /.col-lg-12 -->

            <!-- Event item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-event-item-container">
                    <div class="pm-event-item-img-container" style="background-image:url(theme/home/img/events/item1.jpg);">
                        <div class="pm-event-item-date">
                            <p class="pm-event-item-month">JUL</p>
                            <p class="pm-event-item-day">28</p>
                        </div>
                    </div>

                    <div class="pm-event-item-desc">
                        <p class="pm-event-item-title">Live jazz band</p>
                        <div class="pm-event-item-divider"></div>
                        <p class="pm-event-item-excerpt">Nam pharetra diam eu dolor vestibulum volutpat. Aliquam non turpis non leo euismod sollicitudin. Pellentesque eget <a href="#">{...}</a> </p>
                        <div class="pm-event-item-divider"></div>
                        <ul class="pm-event-item-btns">
                            <li><a href="single-event-post.html" class="pm-rounded-btn small pm-primary">more info</a></li>
                            <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;fan page</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <!-- /Event item -->

            <!-- Event item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-event-item-container">
                    <div class="pm-event-item-img-container" style="background-image:url(theme/home/img/events/item2.jpg);">
                        <div class="pm-event-item-date">
                            <p class="pm-event-item-month">AUG</p>
                            <p class="pm-event-item-day">13</p>
                        </div>
                    </div>

                    <div class="pm-event-item-desc">
                        <p class="pm-event-item-title">wine tasting</p>
                        <div class="pm-event-item-divider"></div>
                        <p class="pm-event-item-excerpt">Nam pharetra diam eu dolor vestibulum volutpat. Aliquam non turpis non leo euismod sollicitudin. Pellentesque eget <a href="#">{...}</a> </p>
                        <div class="pm-event-item-divider"></div>
                        <ul class="pm-event-item-btns">
                            <li><a href="single-event-post-with-sidebar.html" class="pm-rounded-btn small pm-primary">more info</a></li>
                            <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;fan page</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <!-- /Event item -->

            <!-- Event item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-event-item-container">
                    <div class="pm-event-item-img-container" style="background-image:url(theme/home/img/events/item3.jpg);">
                        <div class="pm-event-item-date">
                            <p class="pm-event-item-month">SEP</p>
                            <p class="pm-event-item-day">15</p>
                        </div>
                    </div>

                    <div class="pm-event-item-desc">
                        <p class="pm-event-item-title">heart &amp; stroke fundraiser</p>
                        <div class="pm-event-item-divider"></div>
                        <p class="pm-event-item-excerpt">Nam pharetra diam eu dolor vestibulum volutpat. Aliquam non turpis non leo euismod sollicitudin. Pellentesque eget <a href="#">{...}</a> </p>
                        <div class="pm-event-item-divider"></div>
                        <ul class="pm-event-item-btns">
                            <li><a href="single-event-post.html" class="pm-rounded-btn small pm-primary">more info</a></li>
                            <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;fan page</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <!-- /Event item -->

        </div>
    </div>
    <!-- Upcoming events filter system end -->


    <!-- News filter system -->
    <div class="container pm-containerPadding-top-30 pm-containerPadding-bottom-90">
        <div class="row">

            <div class="col-lg-12 pm-containerPadding-bottom-40">

                <div class="pm-featured-header-container">

                    <!-- Featured panel header -->
                    <div class="pm-featured-header-title-container news">
                        <p class="pm-featured-header-title">Latest News</p>
                        <p class="pm-featured-header-message">Bringing you the latest in cuisine and culture</p>
                    </div>
                    <!-- Featured panel header end -->

                </div>

            </div><!-- /.col-lg-12 -->

            <!-- News post -->
            <div class="col-lg-6 col-md-6 col-sm-12 pm-column-spacing">

                <div class="pm-news-post-container">

                    <div class="pm-news-post-image" style="background-image:url('theme/home/img/posts/p3.jpg');">
                        <div class="pm-news-post-title">
                            <p>Sed finibus est non turpis condimentum scelerisque vivamus</p>
                        </div>
                    </div>

                    <div class="pm-news-post-meta-container">
                        <div class="pm-news-post-date">
                            <p class="day">05</p>
                            <p class="month-year">Jul<br />2014</p>
                        </div>
                        <ul class="pm-meta-options-list">
                            <li><i class="fa fa-comment"></i> &nbsp;0 Comments</li>
                            <li><i class="fa fa-heart"></i> &nbsp;<a href="#">Like this</a></li>
                            <li><i class="fa fa-twitter"></i> &nbsp;<a href="#">Tweet this</a></li>
                            <li><i class="fa fa-pencil"></i> &nbsp;<a href="#">Post a comment</a></li>
                        </ul>
                    </div>

                    <div class="pm-news-post-desc-container">

                        <p class="pm-news-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet purus consectetur, rhoncus urna eget, semper sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet purus consectetur, rhoncus urna eget, semper sapien <a href="#">{...}</a></p>
                        <p class="pm-news-post-continue"><a href="single-post.html">Continue Reading &rarr;</a></p>

                    </div>

                </div>

            </div>
            <!-- News post end -->

            <!-- News post -->
            <div class="col-lg-6 col-md-6 col-sm-12 pm-column-spacing">

                <div class="pm-news-post-container">

                    <div class="pm-news-post-image" style="background-image:url('theme/home/img/posts/p5.jpg');">
                        <div class="pm-news-post-title">
                            <p>Donec lorem velit, convallis nec ullamcorper at commodo </p>
                        </div>
                    </div>

                    <div class="pm-news-post-meta-container">
                        <div class="pm-news-post-date">
                            <p class="day">09</p>
                            <p class="month-year">Jul<br />2014</p>
                        </div>
                        <ul class="pm-meta-options-list">
                            <li><i class="fa fa-comment"></i> &nbsp;0 Comments</li>
                            <li><i class="fa fa-heart"></i> &nbsp;<a href="#">Like this</a></li>
                            <li><i class="fa fa-twitter"></i> &nbsp;<a href="#">Tweet this</a></li>
                            <li><i class="fa fa-pencil"></i> &nbsp;<a href="#">Post a comment</a></li>
                        </ul>
                    </div>

                    <div class="pm-news-post-desc-container">

                        <p class="pm-news-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet purus consectetur, rhoncus urna eget, semper sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet purus consectetur, rhoncus urna eget, semper sapien <a href="#">{...}</a></p>
                        <p class="pm-news-post-continue"><a href="single-post-with-sidebar.html">Continue Reading &rarr;</a></p>

                    </div>

                </div>

            </div>
            <!-- News post end -->

        </div>

    </div>
    <!-- News filter system end -->

@endsection
