@extends('layouts.app')

@section('title')

<title>WELCOME ! NNA</title>
@endsection

@section('content')
        <!-- preloader area start -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- preloader area end -->

        <!-- slider area start -->
        <section class="slider-area" id="home">
            <div class="container">
                <div class="slider-content d-flex flex-center">
                    <div class="col-md-8 col-sm-9 col-xs-12 d-flex flex-center">
                        <div class="slider-nner">
                            <p>Murakaza neza kuri <br>Nguweneza Nogusavinga Ahazaza</p>
                            <p> Iyi system  ifasha abantu Kubika amakuru y ' amatsinda </p>
                            <div class="btn-area">
                                <a href="#">Download Now </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="slider-screen-two owl-carousel">
                            <img src="assets/img/mobile/screen-slider/screen1.PNG" alt="mobile image">
                            <img src="assets/img/mobile/screen-slider/screen2.PNG" alt="mobile image">
                            <img src="assets/img/mobile/screen-slider/screen3.PNG" alt="mobile image">
                            <img src="assets/img/mobile/screen-slider/screen4.PNG" alt="mobile image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider area end -->
        <!-- about area start -->
        <section class="about-area ptb--110" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 hidden-sm hidden-xs">
                        <div class="about-left-thumb">
                            <img src="assets/img/mobile/screen-slider/screen1.PNG" alt="mobile screen">
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <span>Meet NNA</span>
                            <h2>managing </h2>
                            <p>Nguwe neza nogusevinga Ahazaza is aplate form Design  to help groups coperative to save their money</p>
                            <div class="about-ft">
                                <div class="ft-single">
                                    <div class="icon"><i class="fa fa-desktop"></i></div>
                                    <div class="ft-info">
                                        <h4>Web application .</h4>
                                        <p>It is so easy to access it online with either Smart phone all computer</p>
                                    </div>
                                </div>
                                <div class="ft-single">
                                    <div class="icon"><i class="fa fa-android"></i></div>
                                    <div class="ft-info">
                                        <h4>mobile application.</h4>
                                        <p>Through mobile application you can check your balance and complane if it is not true and you can review your statement</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->
        <!-- feature area start -->
        <section class="feature-area ptb--110 bg-theme" id="features">
            <div class="container">
                <div class="section-title">
                    <h2>Best Features</h2>
                    <p>Nguwe neza no Gusevinga </p>
                </div>
                <div class="row">
                    <div class="feature-content">
                        <div class="col-md-4 col-sm-6 col-xs-12 text-right">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <<div class="icon"><i class="fa fa-cloud"></i></div>
                                    <h4>.President </h4>
                                    <p> The role of president is to receive money on the simcard  and to the user with the comment it will automatical update in the application</p>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fa fa-cloud"></i></div>
                                    <h4>What to see </h4>
                                    <marquee behavior="" direction="left">hello </marquee>
                                    <p>System can present to the member total amount and individuare</p>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fa fa-cube"></i></div>
                                    <h4>.Lend</h4>
                                    <p>If member want to lend money a half of the member they have to accept by useing there cards</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm">
                            <div class="feature-mscreen">
                                <img src="assets/img/mobile/screen-slider/screen1.PNG" alt="mobile screen">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-list feature-list-right">
                                <div class="feature-item">
                                    <div class="icon"><i class="fa fa-android"></i></div>
                                    <h4>.Other leades</h4>
                                    <p>Other leaders they have to verify if money recoded success full</p>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fa fa-headphones"></i></div>
                                    <h4>Transaction proced .</h4>
                                    <p>Member is free to ask the transaction process either soft or hard copy</p>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fa fa-desktop"></i></div>
                                    <h4>levels .</h4>
                                    <p>Group is registered From level province to cell and the name of Group/cooperative</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature area end -->

        <!-- pricing area end -->

        <!-- team area start -->
        <div class="team-area ptb--120">
            <div class="container">
                <div class="section-title text-black">
                    <h2>Meet my team</h2>
                    {{-- <p></p> --}}
                </div>
                <div class="row">
                    <div class="member-area">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-item">
                                <img src="assets/img/team/img2.jpg" alt="team image">
                                <div class="tmember-info">
                                    <h4>Bazimya saphani</h4>
                                    <span>Fullstacker developer</span>
                                    <p>Bazimya has experince in web devolpment and application devolpment</p>
                                    <div class="social-btns">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->


        <!-- testimonial area end -->

        <!-- contact area end -->
        @endsection
