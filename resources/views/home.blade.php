<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.user.layout.meta')
    @include('components.user.layout.css')

    <title>Home - Desmart</title>
</head>

<body>
    @include('components.user.navbar.navbar')

    <div class="main">
        <section class="position-relative bg-image pt-100" image-overlay="1">
            <div class="background-image-wraper bg-position-1" style="background: url('assets/img/hero-new-bg.svg'); opacity: 1;"></div>
            <div class="container">
                <div class="row align-items-center justify-content-between justify-content-sm-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading py-5">
                            <h1 class="font-weight-bold">Satu Aplikasi Untuk Seluruh Desa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam quae suscipit quidem consequatur enim! Veniam, consequuntur sapiente fuga, quidem voluptates animi soluta possimus unde itaque quis culpa magnam repellat.</p>
                            <div class="action-btns mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-google-play icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Download form</small>
                                                <h5 class="mb-0">Google Play</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 text-sm-center col-lg-5">
                        <div class="img-wrap">
                            <img src="assets/img/hero-image.svg" alt="shape" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>

        <section class="client-section  ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Desa Yang Telah Bergabung</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nulla tempore commodi a corrupti minima dolorem minus neque ratione quos? Natus ipsam necessitatibus officia vitae quidem aspernatur saepe quis amet?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="feature-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2 class="font-weight-bold">Inilah Yang Menjadi Unggulan Kami</h2>
                            <p class="text-muted para-desc mb-0 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sed eaque nesciunt dolor esse, consequatur eos at nihil voluptate porro. Veniam in tempore ducimus enim molestiae! Enim voluptate magni laudantium.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-layout p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Use On Any Device</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-themify-favicon-alt p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Themify Icon</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-eye p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Retina Ready</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-thumb-up p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">W3c Valid Code</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-mobile p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Fully Responsive</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-world p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Browser Compatibility</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="assets/img/app-mobile-image.png" class="img-fluid mx-auto d-lg-block d-none" alt="app screen">
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="work-process-section position-relative  ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Bagaimana Cara Kerja nya ?</h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi id impedit voluptatum, sapiente alias ex dolore quo optio quasi sunt assumenda voluptate eum. Hic impedit itaque tenetur atque laboriosam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="work-process-wrap">
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-project-diagram color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Planning Idea</h5>
                                            <p>Holisticly architect sustainable meta-services for process-centric core competencies. Enthusiastically re-engineer best-of-breed outsourcing.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item right-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon ml-4">
                                            <i class="fas fa-puzzle-piece color-primary"></i>
                                        </div>
                                        <div class="process-content text-right">
                                            <h5>Developed Final Product</h5>
                                            <p>Monotonectally harness holistic web-readiness after multimedia based catalysts for change. Completely brand front-end systems before visionary.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-truck color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Deliver to Customer</h5>
                                            <p>Monotonectally plagiarize synergistic e-business for stand-alone communities. Professionally enhance visionary manufactured products progressive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap">
                            <img src="assets/img/app-mobile-image-3.png" alt="features" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="screenshots" class="screenshots-section pb-100  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2 class="font-weight-bold">Aplikasi Yang User Friendly</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat neque iure dolor perspiciatis a amet ad harum quis quam, nesciunt nihil asperiores laboriosam maiores reprehenderit! Blanditiis eveniet sed iusto consequuntur.</p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screenshot-wrap">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="assets/img/01.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/02.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/03.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/04.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/05.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/06.jpg" class="img-fluid" alt="screenshots" />
                    </div>
                </div>
                <!--end app screen carousel-->
            </div>
        </section>

        <section class="bg-image ptb-100" image-overlay="8">
            <div class="background-image-wraper" style="background: url('assets/img/cta-bg.jpg')no-repeat center center / cover fixed; opacity: 1;"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-1 text-white">
                            <h2 class="text-white">Majukan Desa Anda <br> Ayo Bergabung Sekarang</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur eveniet et possimus veniam numquam, nostrum repellat, dolore doloremque inventore, molestiae quaerat. Libero vel corrupti, commodi maiores at eius labore quam!</p>
                            <div class="action-btns">
                                <ul class="list-inline">
                                    <li class="list-inline-item my-2">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-windows icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Download form</small>
                                                <h5 class="mb-0">Windows</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item my-2">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-apple icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Download form</small>
                                                <h5 class="mb-0">App Store</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item my-2">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-google-play icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Download form</small>
                                                <h5 class="mb-0">Google Play</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </section>

        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center">
                            <h2>Our Latest News</h2>
                            <p>
                                Efficiently matrix robust total linkage after market positioning bandwidth. Holisticly restore B2B materials rather than brand flexible paradigms vis-a-vis mission-critical e-commerce.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm mt-4">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/1.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm mt-4">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/2.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                                <p class="card-text">Synergistically engage effective ROI after customer directed
                                    partnerships.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm mt-4">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/3.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                                <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                    users. </p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('components.user.footer.footer')
    </div>


    @include('components.user.layout.js')
</body>

</html>