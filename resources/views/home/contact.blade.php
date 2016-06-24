@extends('layouts.home')

@section('slider')

    <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">

        <div class="pm-sub-header-title-container">
            <p class="pm-sub-header-title"><span>Liên hệ</span></p>
            <p class="pm-sub-header-message">Chúng tôi luôn sẵn sàng nhận mọi góp ý! Xin chân thành cảm ơn!</p>
        </div>

    </div>

@endsection

@section('content')
    <div class="container pm-containerPadding-top-60 pm-containerPadding-bottom-60">
        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1627.7066788594018!2d108.11689201218182!3d13.996612369177955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d13.9971119!2d108.11602889999999!5e0!3m2!1sen!2s!4v1463844099007" width="320" height="260" style="border:4px solid #e3e3e3;"></iframe>
            </div>
        </div>
    </div>

    <div class="container pm-containerPadding-bottom-60">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 pm-column-spacing">

                <h6>Địa chỉ</h6>
                <p> Wừu<br />thị trấn Đăk Đoa, huyện Đăk Đoa <br />Gia Lai</p>

                <div class="pm-divider" style="margin:20px 0;"></div>

                <h6>Điện thoại</h6>
                <p><strong>:</strong> 0985870750<br /></p>

                <div class="pm-divider" style="margin:20px 0;"></div>

                <h6>Email</h6>
                <p><a href="mailto:lecafe.vn@gmail.com">lecafe.vn@gmail.com</a></p>

                <div class="pm-divider" style="margin:20px 0;"></div>

                <h6>Bạn cần cafe sạch nhấc máy lên và gọi chúng tôi!</h6>
                <p>Một ly cafe sạch vào ngày mới? Thật tuyệt vời! Gọi cho chúng tôi ngay và bạn sẽ có được sự sảng khoái tức thì!</p>


            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 pm-column-spacing">

                <h6 class="pm-primary">Gửi thông tin</h6>
                <div class="pm-contact-form-container">
                    <p class="pm-required">Vui lòng điền đầy đủ thông tin. <br />Các dòng có dấu (*) là bắt buộc</p>
                    <form id="pm-contact-form" action="" method="post">
                        <input name="pm_s_full_name" id="pm_s_full_name" type="text" placeholder="Họ tên (*)" class="pm-form-textfield">
                        <input name="pm_s_email_address" id="pm_s_email_address" type="text" placeholder="Email (*)" class="pm-form-textfield">
                        <input name="pm_s_subject" id="pm_s_subject" type="text" placeholder="Tiêu đề (*)" class="pm-form-textfield">
                        <textarea name="pm_s_message" id="pm_s_message" cols="20" rows="6" placeholder="Nội dung (*)" class="pm-form-textarea"></textarea>

                        <div id="pm-contact-form-response"></div>
                        <input name="pm-form-submit-btn" class="pm-rounded-submit-btn pm-primary" type="button" value="Gửi" id="pm-contact-form-btn" />
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
