@extends('frontend.layout.master')
@section('title', 'Showcase')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="service-area creative-service-wrapper ptb--20 bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mt--30 mb--30 mb_sm--0">
                    @if (Config::get('languages')[App::getLocale()]['display'] == 'English')
                    <h2 class="title">Enterprise Solutions</h2>
                    <p class="description">
                        <span>
                            With a motto to <span class="fw-bold text-danger"> "Form Your Idea"</span> we provide and develop <span class="fw-bold text-danger">SOLUTIONS</span> for our clients.
                        </span>
                        <br>
                        <span class="mt-3">
                            with any kind of<span class="fw-bold text-success"> Customization & Refectoring !! </span>
                        </span>
                    </p>
                    @elseif (Config::get('languages')[App::getLocale()]['display'] == 'Japanese')
                    <h2 class="title">製品</h2>
                    <p class="description">
                        <span>
                            <span class="fw-bold text-danger">”アイデアを形”</span> にというモットのもとでお客様の希望やニーズにあった様々のシステムを開発しております。
                        </span>
                        <br>
                        <span class="mt-3">
                            さらなる<span class="fw-bold text-success">カスタマイズや機能追加</span>は自由にできます。
                        </span>
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row creative-service">
            <div class="col-lg-12">
                <div class="row service-main-wrapper rn-slick-activation rn-slick-dot mt--10 slick-space-gutter--15 slickdot--20" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "infinite": true,
                        "dots": true
                    }' data-slick-responsive='[
                        {"breakpoint":1900, "settings": {"slidesToShow": 5}},
                        {"breakpoint":1800, "settings": {"slidesToShow": 4}},
                        {"breakpoint":1300, "settings": {"slidesToShow": 3}},
                        {"breakpoint":770, "settings": {"slidesToShow": 2}},
                        {"breakpoint":490, "settings": {"slidesToShow": 1}}
                    ]'>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                        <a href="#">
                            <div class="service service__style--2 text-center bg-gray">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/service/foodorderingsystem.png') }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast img img-fluid"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>
                                </div>
                                <div class="content">
                                    <h3 class="title"> Food Ordering System </h3>
                                    <p>
                                        {{__('messages.It is a system that connects users, merchants, and delivery workers on one platform. It also incorporates Android and iOS apps, making it a trendy system that enables real-time tracking and management from order to delivery.')}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                        <a href="#">
                            <div class="service service__style--2 text-center bg-gray">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/service/aems.png') }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast img img-fluid"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>
                                </div>
                                <div class="content">
                                    <h3 class="title">Automotive Enterprise Management Solution</h3>
                                    <p>
                                        {{__('messages.It is a system that connects users, merchants, and delivery workers on one platform. It also incorporates Android and iOS apps, making it a trendy system that enables real-time tracking and management from order to delivery.')}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                        <a href="#">
                            <div class="service service__style--2 text-center bg-gray">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/service/itracker.png') }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast img img-fluid"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>
                                </div>
                                <div class="content">
                                    <h3 class="title">iTracker</h3>
                                    <p>
                                        {{__('messages.It is an “issue tracking management system” that can be embedded with various systems. It is the ideal system for tracking sales, linking sales, and managing internal communications, starting with tracking products and services.')}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center mx-auto">
                        <a href="#">
                            <div class="service service__style--2 text-center bg-gray">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/service/motorsheba.png') }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast img img-fluid"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>
                                </div>
                                <div class="content">
                                    <h3 class="title">E-Commerce</h3>
                                    <p>
                                        {{__('messages.It is an EC platform developed by our company. It is a set of Android and iOS apps. Furthermore, it is a platform that can be used in a wide range of ways by integrating an inventory management system.')}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center mx-auto">
                        <a href="#">
                            <div class="service service__style--2 text-center bg-gray">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/service/iot.png') }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast img img-fluid"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>
                                </div>
                                <div class="content">
                                    <h3 class="title">Internet of Things</h3>
                                    <p>
                                        {{__('messages.We are developing low power consumption and economical IoT products for various applications. We have built a stable infrastructure that handles millions of data points every day.')}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rn-gallery-area ptb--50 bg_color--1">
    <div class="wrapper rn-masonary-wrapper plr--70 plr_sm--30 plr_md--30">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="tablist-inner">
                    <div class="messonry-button pv-tab-button text-center justify-content-center">
                        <button data-filter=".cat--1"  class="is-checked"><span class="filter-text">Food Ordering System</span></button>
                        <button data-filter=".cat--2" ><span class="filter-text">AEMS</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">ITracker</span></button>
                        <button data-filter=".cat--4"><span class="filter-text">E-Commerce</span></button>
                        <button data-filter=".cat--5"><span class="filter-text">Attendance System</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-wrapper gallery-grid mesonry-list grid-metro3" >
            <a href="http://202.51.177.156/foodordermanagementsolution/admin/auth/login" target="_blank" class="masonry_item gallery portfolio-33-33 cat--1">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/FOOD/thumbnail (1).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Food Ordering System</p>
                                <h4>{{__('messages.Dashboard')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://202.51.177.156/foodordermanagementsolution/branch/auth/login" target="_blank" class="masonry_item gallery portfolio-33-33 cat--1">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/FOOD/thumbnail (2).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Food Ordering System</p>
                                <h4>{{__('messages.Branch Panel')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://www.youtube.com/watch?v=aS9LHzhvI7Q" target="_blank" class="masonry_item gallery portfolio-33-33 cat--1 video-popup">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/FOOD/thumbnail (3).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Food Ordering System</p>
                                <h4>{{__('messages.Customer Mobile Application')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://www.youtube.com/watch?v=cEC5Alwepio" target="_blank" class="masonry_item gallery portfolio-33-33 cat--1 video-popup">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/FOOD/thumbnail (4).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Food Ordering System</p>
                                <h4>{{__('messages.Delivery Man Mobile Apllication')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://202.51.177.156/AEMS/login" target="_blank" class="masonry_item gallery portfolio-33-33 cat--2">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/AEMS/thumbnail (1).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Automotive Enterprise Management Solution</p>
                                <h4>{{__('messages.Dashboard')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://202.51.177.156/AEMS/products" target="_blank" class="masonry_item gallery portfolio-33-33 cat--2">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/AEMS/thumbnail (2).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Automotive Enterprise Management Solution</p>
                                <h4>{{__('messages.Inventory Management')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://202.51.177.156/AEMS/reports/profit-loss" target="_blank" class="masonry_item gallery portfolio-33-33 cat--2">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/AEMS/thumbnail (3).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Automotive Enterprise Management Solution</p>
                                <h4>{{__('messages.Report Panel')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://itracker.everfeelholiday.com/admin/login" target="_blank" class="masonry_item gallery portfolio-33-33 cat--3">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/TMS/thumbnail (1).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>iTracker</p>
                                <h4>{{__('messages.Dashboard')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://itracker.everfeelholiday.com/guest/openticket" target="_blank" class="masonry_item gallery portfolio-33-33 cat--3">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/TMS/thumbnail (2).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>iTracker</p>
                                <h4>{{__('messages.Ticket Panel')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://itracker.everfeelholiday.com/admin/reports" target="_blank" class="masonry_item gallery portfolio-33-33 cat--3">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/TMS/thumbnail (3).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>iTracker</p>
                                <h4>{{__('messages.Report Panel')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://motorsheba.com/ecommerce/login" target="_blank" class="masonry_item gallery portfolio-33-33 cat--4">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/motorsheba/thumbnail (1).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>E-Commerce</p>
                                <h4>{{__('messages.Dashboard')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://motorsheba.com/ecommerce/seller/login" target="_blank" class="masonry_item gallery portfolio-33-33 cat--4">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/motorsheba/thumbnail (2).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>E-Commerce</p>
                                <h4>{{__('messages.Seller Panel')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://motorsheba.com/ecommerce" target="_blank" class="masonry_item gallery portfolio-33-33 cat--4">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/motorsheba/thumbnail (3).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>E-Commerce</p>
                                <h4>{{__('messages.Web Application')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.motorsheba.motor_sheba&hl=en&gl=US" target="_blank" class="masonry_item gallery portfolio-33-33 cat--4">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/motorsheba/thumbnail (4).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>E-Commerce</p>
                                <h4>{{__('messages.Customer Mobile Application')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://stellarbd.com/stellar_attendance" target="_blank" class="masonry_item gallery portfolio-33-33 cat--5">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/stellar/thumbnail (1).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Attendance System</p>
                                <h4>{{__('messages.Overview')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.stellar.webapp&hl=en&gl=US" target="_blank" class="masonry_item gallery portfolio-33-33 cat--5">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/stellar/thumbnail (2).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Attendance System</p>
                                <h4>{{__('messages.Attendance Mobile Application')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.rumytechnologies.gpsattendance&hl=en&gl=US" target="_blank" class="masonry_item gallery portfolio-33-33 cat--5">
                <div class="item-portfolio-static">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/portfolio/stellar/thumbnail (3).png') }}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Attendance System</p>
                                <h4>{{__('messages.GPS Attendance Mobile Application')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });
</script>
@endsection
