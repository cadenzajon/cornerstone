@extends('layouts.default')

{{-- Page title --}}
@section('title')
Price
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/price.css') }}">
@stop


{{-- Page content --}}
@section('content')
    <div class="price-bg">
        <div class="container">
            <!-- Pricing Tabels Section Start -->
            <div class="row pad-btm20">
                <h2 class="text-center text-white">PRICING TABLES</h2>
                <!-- Best Package Section Start -->
                <div class="col-md-3 col-sm-6 wow fadeInLeftBig" data-wow-duration="2s">
                    <div class="panel panel-default text-center active">
                        <div class="panel-heading">
                            <h3 class="text-white">Best Package</h3>
                        </div>
                        <div class="panel-body">
                            <div class="box_round_symboll">
                                <div class="box_round_symboll_text_1">
                                    $25
                                </div>
                            </div>
                            <h4 class="text-danger">Per Month</h4>
                            <ul>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                            </ul>
                            <a class="btn btn-primary btn-block" href="#">
                            Sign up
                        </a>
                        </div>
                    </div>
                </div>
                <!-- //Best Package Section End -->
                <!-- Habitasse Section Start -->
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="2s">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h3 class="text-white">Habitasse</h3>
                        </div>
                        <div class="panel-body">
                            <div class="box_round_symboll">
                                <div class="box_round_symboll_text_1">
                                    $32
                                </div>
                            </div>
                            <h4 class="text-danger">Per Month</h4>
                            <ul>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                            </ul>
                            <a class="btn btn-primary btn-block" href="#">
                            Sign up
                        </a>
                        </div>
                    </div>
                </div>
                <!-- //Habitasse Section End -->
                <!-- Suscipizzle Section Start -->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h3 class="text-white">Suscipizzle</h3>
                        </div>
                        <div class="panel-body">
                            <div class="box_round_symboll">
                                <div class="box_round_symboll_text_1">
                                    $38
                                </div>
                            </div>
                            <h4 class="text-danger">Per Month</h4>
                            <ul>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                            </ul>
                            <a class="btn btn-primary btn-block" href="#">
                            Sign up
                        </a>
                        </div>
                    </div>
                </div>
                <!-- //Suscipizzle Section End -->
                <!-- Pretium Section Start -->
                <div class="col-md-3 col-sm-6 wow fadeInRightBig" data-wow-duration="2s">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h3 class="text-white">Pretium</h3>
                        </div>
                        <div class="panel-body">
                            <div class="box_round_symboll">
                                <div class="box_round_symboll_text_1">
                                    $42
                                </div>
                            </div>
                            <h4 class="text-danger">Per Month</h4>
                            <ul>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                                <li>
                                    Lorizzle ipsum dolizzle
                                </li>
                            </ul>
                            <a class="btn btn-primary btn-block" href="#">
                            Sign up
                        </a>
                        </div>
                    </div>
                </div>
                <!-- //Pretium Section End -->
            </div>
            <!-- //Pricing Tabels Section End -->
        </div>
    </div>
@stop


{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script>
            jQuery(document).ready(function() {
            new WOW().init();
            });
    </script>
@stop
