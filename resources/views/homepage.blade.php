@extends('homepage.layouts.app')

@section('content')
    <body id="page-top">
        <!-- Navigation-->
            @include('homepage.layouts.nav')
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center ">
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>In this section you can see what we offer for you</h2></h2>
                        <p class="lead mb-5">
                            you can be part of the team
                            <a href="/login">click here!</a>
                            
                        </p>
                        <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 style="color:yellow"class="mx-auto mb-5 ">
                    Welcome to
                    <em>our</em>
                     website!
                </h2>
                <a style="color:yellow" class="btn btn-primary btn-xl" href="/register">Register now!</a>
            </div>
        </section>
                <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Services</h3>
                    <h2 class="mb-5">What We Offer</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong>Gadgets</strong></h4>
                        <p class="text-faded mb-0">you can download the app on your device</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                        <h4><strong>leave a like</strong></h4>
                        <p class="text-faded mb-0">Thank you for visiting our website</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-heart"></i></span>
                        <h4><strong>heart</strong></strong></h4>
                        <p class="text-faded mb-0">
                            i
                            <i class="fas fa-heart"></i>
                            u!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
                        <h4><strong>Question</strong></h4>
                        <p class="text-faded mb-0">I mustache you a question...</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Stablishment photos</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">7/11 provides a competitive advantage</div>
                                    <p class="mb-0">in the market through factors such as a brand's financial position, experienced workforce, product uniqueness, and intangible assets such as brand value</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/pictureno1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">7/11 (seven-eleven) is a popular convenience store</div>
                                    <p class="mb-0">that is open 24/7 all year. They sell a wide variety of snack products and other items that allow customers to quickly enter and exit the store; it is indeed convenient for customers to buy something in this store.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/pictureno2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">7-Eleven</div>
                                    <p class="mb-0">operates 3,241 convenience stores in the Philippines as of June 30, 2022.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/pictureno3.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">7/11(SEVEN ELEVEN)</div>
                                    <p class="mb-0">Convenience chain offering grab-&-go bites & beverages, plus assorted newsstand items.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/pictureno5.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="content-section bg-primary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4"></h2>
                <a class="btn btn-xl btn-light me-4" href="#">Click Me!</a>
                <a class="btn btn-xl btn-dark" href="#services">Look at me!</a>
            </div>
        </section>
        <!-- Map-->
        <div class="map" id="contact">
            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
        </div>
        <!-- Footer-->
    @include('homepage.includes.footer')
@endsection

