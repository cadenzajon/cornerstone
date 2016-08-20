@extends('layouts.default')

{{-- Page title --}}
@section('title')
About Us   
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css') }}">
    <link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    
@stop


{{-- Page content --}}
@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <!-- About Us Section Start -->
        <div class="row">
            <!-- image Section Start -->
            <div class="services">
                <h2>
                    <label class="border-bottom">About Us
                    </label>
                </h2>
            </div>
            <div class="col-md-6">
                <div class="item martop1 wow bounceInLeft" data-wow-duration="4s"><img src="{{ asset('assets/images/about_1.jpg') }}" alt="slider-image" class="img-responsive">
                </div>
            </div>
            <!-- //Image Section End -->
            <!-- About Us Section Start -->
            <div class="col-md-6 wow lightSpeedIn" data-wow-duration="5s">
                <div class="text-left">
                    <p class="pad-top7">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    </p>
                    <p>
                        Dynamically innovate resource-leveling customer service for state of the art customer service.Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
                    </p>
                </div>
            </div>
            <!-- //About Us Section End -->
        </div>
        <!-- //About Us Section End -->
        <!-- Testimonial Section Start -->
        <div class="row marg-btm10">
            <!-- Testimonial  Section Start -->
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="4s">
                <h3>Testimonials</h3>
                <p class="para_text">"Squid cliche authentic cred disrupt gastropub. Odd Future fingerstache bitters twee. Hella Wes Anderson seitan tofu beard mixtape occupy. Thundercats kogi Odd Future organic Schlitz dreamcatcher. 90's salvia kitsch banjo. Try-hard master cleanse Neutra, roof party YOLO next level Austin vinyl normcore +1 Banksy food truck asymmetrical Vice High Life. Letterpress Carles Bushwick flannel bespoke.Locavore Truffaut meggings, master cleanse single-origin coffee salvia tilde fixie cronut Portland Tumblr asymmetrical jean shorts Neutra. Odd Future farm-to-table deep v mumblecore. Put a bird on it flexitarian tousled post-ironic lo-fi. "
                </p>
                <div class="test_image_left">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/d3.jpg') }}" alt="image" style="border-radius:50%; width:100px; height:100px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><i>Lina Doe</i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Testimonial  Section End -->
            <!-- Our Skills Section Start -->
            <div class="col-md-6">
                <h3>Our Skills</h3>
                <div class="task-item">
                    Photoshop
                    <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                </div>
                Html &amp; CSS
                <div class="progress">
                    <div class="progress-bar progress-bar-success six-sec-ease-in-out" role="progressbar" data-transitiongoal="60"></div>
                </div>
                Wordpress
                <div class="progress">
                    <div class="progress-bar progress-bar-info six-sec-ease-in-out" role="progressbar" data-transitiongoal="55"></div>
                </div>
                PHP
                <div class="progress">
                    <div class="progress-bar progress-bar-warning six-sec-ease-in-out" role="progressbar" data-transitiongoal="70"></div>
                </div>
                Web designing
                <div class="progress">
                    <div class="progress-bar progress-bar-danger six-sec-ease-in-out" role="progressbar" data-transitiongoal="90"></div>
                </div>
            </div>
            <!-- //Our Skills Section End -->
        </div>
        <!-- //Testimonial Section End -->
    </div>
    <!-- Meet Our Team Section Start -->
    <div class="team-bg">
        <div class="container">
            <div class="about-headings">
                <h3>Meet Our Team</h3>
                <h5 class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h5>
            </div>
            <!-- //Meet Our Team Section End -->
            <!-- Team Images Section Start -->
            <div class="team">
                <!-- Ceo Section Start -->
                <div class="col-md-3 col-sm-6 col-sm-6 wow slideInUp" data-wow-duration="4s">
                    <div data-position="left" data-offset="100" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile1.jpg') }}" class="img-responsive">
                        <h4><b>Lina Doe</b></h4>
                        <h5><b class="ceo-text">Chief Executive Officer / CEO</b></h5>
                        <br />
                        <p>Dark single shot fair trade coffee single origin iced, americano cortado pumpkin spice cortado crema chicory. In, affogato variety coffee cultivar aged filter. </p>
                    </div>
                </div>
                <!-- //Ceo Section End -->
                <!-- Director Section Start -->
                <div class="col-md-3 col-sm-6 col-sm-6 wow zoomIn" data-wow-duration="4s">
                    <div data-position="right" data-offset="50" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile2.jpg') }}" class="img-responsive">
                        <h4><b>Carles Puyol</b></h4>
                        <h5><b>Managing Director</b></h5>
                        <br />
                        <p>Dark single shot fair trade coffee single origin iced, americano cortado pumpkin spice cortado crema chicory. In, affogato variety coffee cultivar aged filter. </p>
                    </div>
                </div>
                <!-- //Director Section End -->
                <!-- Designer Section Start -->
                <div class="col-md-3 col-sm-6 col-sm-6 wow zoomIn" data-wow-duration="4s">
                    <div data-position="left" data-offset="50" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile3.jpg') }}" class="img-responsive">
                        <h4><b>Jonathan Smith</b></h4>
                        <h5><b>Web Designer</b></h5>
                        <br />
                        <p>Dark single shot fair trade coffee single origin iced, americano cortado pumpkin spice cortado crema chicory. In, affogato variety coffee cultivar aged filter. </p>
                    </div>
                </div>
                <!-- //Designer Section End -->
                <!-- Developer Section Start -->
                <div class="col-md-3 col-sm-6 col-sm-6 wow slideInUp" data-wow-duration="4s">
                    <div data-position="right" data-offset="100" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile4.jpg') }}" class="img-responsive">
                        <h4><b>Ericson Reagan</b></h4>
                        <h5><b>Web Developer</b></h5>
                        <br />
                        <p>Dark single shot fair trade coffee single origin iced, americano cortado pumpkin spice cortado crema chicory. In, affogato variety coffee cultivar aged filter. </p>
                    </div>
                </div>
                <!-- //Developer Section End -->
            </div>
        </div>
    </div>
    <!-- //Meet Our Team Section End -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/js/bootstrap-progressbar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/scrollview.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/aboutus.js') }}" type="text/javascript"></script>
@stop
