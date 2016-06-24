@extends('layouts.home')

@section('slider')
    <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">

        <div class="pm-sub-header-title-container">
            <p class="pm-sub-header-title"><span>Về chúng tôi</span></p>
            <p class="pm-sub-header-message"></p>
        </div>

    </div>
@endsection

@section('content')

    <!-- BODY CONTENT starts here -->

    <div class="container pm-containerPadding-top-60">
        <div class="row">

            <div class="col-lg-12">

                <h2>Vài dòng giới thiệu cơ bản</h2>

                <p>Cà phê là một trong những cây trồng mang lại thu nhập chính cho người nông dân Gia Lai bên cạnh cao su và hồ tiêu. Với điều kiện khí hậu, thổ nhưỡng lý tưởng mang lại chất lượng tốt cho cà phê robusta của Gia Lai .Le cafe được sản xuất và chế biến từ cà phê của vùng đất Gia Lai. Nơi chúng tôi sinh ra và lớn lên. Nơi chúng tôi gắn bó với những cây cà phê. Cà phê của chúng tôi hoàn toàn được sản xuất khép kín từ lúc trồng, chăm sóc, thu hái, sơ chế, rang xay, đóng gói. </p>

                <p>Quy trình sản xuất được kiểm soát từ khâu trồng, không có dư lượng thuốc hóa học, trừ sâu, đến khâu rang hạt được rang thủ công theo bí quyết riêng giữ được hầu như đầy đủ hương vị tự nhiên trái cà phê và không sử dụng hay thêm vào bất kỳ một chất phụ gia, hóa học, bảo quản. Le cafe cam kết mang lại những gì tốt nhất chúng tôi có thể làm được cho người uống cà phê!</p>

            </div>

        </div>
    </div>

    <!-- Staff filter system -->
    <div class="container pm-containerPadding-top-60 pm-containerPadding-bottom-60">
        <div class="row">

            <div class="col-lg-12 pm-containerPadding-bottom-40">

                <div class="pm-featured-header-container">

                    <!-- Featured panel header -->
                    <div class="pm-featured-header-title-container news">
                        <p class="pm-featured-header-title">Meet our awesome staff</p>
                        <p class="pm-featured-header-message">Team work and co-operation is what makes Vienna great</p>
                    </div>
                    <!-- Featured panel header end -->

                    <!-- Filter menu -->
                    <div class="pm-isotope-filter-container">
                        <ul class="pm-isotope-filter-system">
                            <li class="pm-isotope-filter-system-expand">Expand <i class="fa fa-angle-down"></i></li>
                            <li><a href="#" class="current">Management</a></li>
                            <li><a href="#">Cooks</a></li>
                            <li><a href="#">General Staff</a></li>
                        </ul>
                    </div>
                    <!-- Filter menu end -->

                </div>

            </div><!-- /.col-lg-12 -->

            <!-- staff item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-staff-item-container">
                    <div class="pm-staff-item-img-container" style="background-image:url(img/staff/staff1.jpg);">
                        <span></span>
                        <div class="pm-staff-item-img-quote">
                            <p>Work hard and play hard...its essential for success!</p>
                        </div>
                        <div class="pm-staff-item-img-read-more">
                            <a href="#">View Profile &raquo;</a>
                        </div>
                    </div>

                    <div class="pm-staff-item-desc">
                        <p class="pm-staff-item-name">Joe Vienna</p>
                        <p class="pm-staff-item-title">Chief Operator &amp; Owner</p>

                        <div class="pm-divider"></div>

                        <p class="pm-staff-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada orci nec tortor tincidunt <a href="#">{...}</a> </p>

                        <div class="pm-divider"></div>

                        <ul class="pm-staff-social-icons">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                        </ul>

                    </div>
                </div>

            </div><!-- /.col-lg-4 -->
            <!-- /staff item -->

            <!-- staff item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-staff-item-container">
                    <div class="pm-staff-item-img-container" style="background-image:url(img/staff/staff2.jpg);">
                        <span></span>
                        <div class="pm-staff-item-img-quote">
                            <p>Work hard and play hard...its essential for success!</p>
                        </div>
                        <div class="pm-staff-item-img-read-more">
                            <a href="#">View Profile &raquo;</a>
                        </div>
                    </div>

                    <div class="pm-staff-item-desc">
                        <p class="pm-staff-item-name">Samantha clark</p>
                        <p class="pm-staff-item-title">Event co-ordinator</p>

                        <div class="pm-divider"></div>

                        <p class="pm-staff-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada orci nec tortor tincidunt <a href="#">{...}</a> </p>

                        <div class="pm-divider"></div>

                        <ul class="pm-staff-social-icons">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>

                    </div>
                </div>

            </div><!-- /.col-lg-4 -->
            <!-- /staff item -->

            <!-- staff item -->
            <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                <div class="pm-staff-item-container">
                    <div class="pm-staff-item-img-container" style="background-image:url(img/staff/staff3.jpg);">
                        <span></span>
                        <div class="pm-staff-item-img-quote">
                            <p>Work hard and play hard...its essential for success!</p>
                        </div>
                        <div class="pm-staff-item-img-read-more">
                            <a href="#">View Profile &raquo;</a>
                        </div>
                    </div>

                    <div class="pm-staff-item-desc">
                        <p class="pm-staff-item-name">jay morrison</p>
                        <p class="pm-staff-item-title">General Manager</p>

                        <div class="pm-divider"></div>

                        <p class="pm-staff-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada orci nec tortor tincidunt <a href="#">{...}</a> </p>

                        <div class="pm-divider"></div>

                        <ul class="pm-staff-social-icons">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>

                    </div>
                </div>

            </div><!-- /.col-lg-4 -->
            <!-- /staff item -->

        </div>
    </div>
    <!-- Staff filter system end -->
@endsection