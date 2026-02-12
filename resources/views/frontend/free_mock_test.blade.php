@extends('frontend.layout.app')
@section('content')
@section('title', "Free Mock Test Series" )

<style type="text/css">
    .combined-class {
        border-radius: 15px;
    }

    .list-sty li::after {
        content: "";
        position: absolute;
        left: 0px;
        top: 10px;
        width: 8px;
        height: 8px;
        border-radius: 0px;
        background: var(--red-color);
        transform: rotate(-45deg);

    }

    .list-sty li {
        font-size: 15px;
        color: #323232;
        margin-bottom: 15px;
        padding-left: 25px;
        text-align: justify;
        position: relative;
    }

    .padd-both-40 {
        padding: 40px 0px !important;
    }

    .clr-000 {
        color: #000 !important;
    }

    .clr-fff {
        color: #fff !important;
    }

    .marg-tp-10 {
        margin-top: 10px !important;
    }

    .marg-tp-20 {
        margin-top: 20px !important;
    }

    .marg-tp-30 {
        margin-top: 30px !important;
    }

    .marg-btm-10 {
        margin-bottom: 10px !important;
    }

    .marg-btm-20 {
        margin-bottom: 20px !important;
    }

    .marg-btm-30 {
        margin-bottom: 30px !important;
    }

    .fnt-we-500 {
        font-weight: 500 !important;
    }

    .fnt-we-600 {
        font-weight: 600 !important;
    }

    .fnt-16 {
        font-size: 16px;
    }

    .comm-para {
        font-size: 16px;
        line-height: 1.7;
        font-weight: 400;
    }

    .txt-jus {
        text-align: justify !important;
    }

    .clr-ed283b {
        color: #ed283b !important;
    }

    .fnt-25 {
        font-size: 25px !important;
    }

    .fnt-20 {
        font-size: 20px !important;
    }

    img {
        width: 100%;
    }

    .table-main {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;

        /*overflow-x: auto;*/
    }

    .wrapper-table {
        overflow-x: auto;
    }

    .table-main th,
    .table-main td {
        text-align: center;
        padding: 12px;
    }

    .table-main th {
        background: #ee2737;
        border-right: 1px solid #ddd;
        color: #fff !important;
        font-size: 17px;
        font-weight: 600 !important;
    }

    .table-main tr:nth-child(even) {
        background-color: #f2f2f2
    }

    .table-main td {
        border-right: 1px solid #a9a3a3;
        font-size: 15px;
        font-weight: 500;
        color: #000;

    }

    .marg-btm-50 {
        margin-bottom: 50px !important;
    }

    .content-big {
        position: relative;
        background: #fff;
        box-shadow: 0 0 8px #00000047;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 25px;
    }

    .content-big h4 {
        font-size: 22px;
        color: #ee2737;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .content-big p {
        font-size: 16px;
        color: #000;
        text-align: justify;
        line-height: 1.7;
    }
</style>

<section class="page-banner">
    <div class="banner-content">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <span class="banner-title">Free Mock Test Series</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Free Mock Test Series</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="International Financial Reporting Standards">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="online-coaching">
    <div class="container">
        <div class="">
            <h1 class="coaching-title">EMI OPTION AVAILABLE
            </h1>
            <p class="coaching-text">Experience the best teaching in Ara Education with a unique One-Time Coaching
                Fee till Passing Opportunity</p>
            <h5 class="coaching-subtitle">MOCK TEST SERIES
            </h5>
            <h5 class="coaching-title">FREE MOCK TEST SERIES FOR CA | CS | CSEET | CMA | ACCA | USCMA | EA | CLAT</h5>
            <div class="mt-4">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="test-series">
                            <div class="rate-box">
                                <h5 class="rate-amount">Free</h5>
                                <h2 class="rate-title">Free Mock Test Series</h2>
                            </div>
                            <div class="mt-3">
                                <ul class="list-items">
                                    <li>Free One Mock Test Series For All Professional Courses</li>
                                </ul>
                            </div>
                            <p class="mt-3"><a href="{{ route('contact') }}" class="btn register-btn w-100 d-block">REGISTER
                                    NOW</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="test-series">
                            <div class="rate-box">
                                <h5 class="rate-amount">₹999</h5>
                                <h2 class="rate-title">Silver Mock Test Series</h2>
                            </div>
                            <div class="mt-3">
                                <ul class="list-items">
                                    <li>3 Full Length Mock Test</li>
                                    <li>Multiple Sectional Test For Section-wise Improvement</li>
                                    <li>Indepth Analysis on Multiple Parameters</li>
                                    <li>Monthly Current Affairs</li>
                                    <li>Based on New Pattern</li>
                                </ul>
                            </div>
                            <p class="mt-3"><a href="{{ route('contact') }}" class="btn register-btn w-100 d-block">REGISTER
                                    NOW</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="test-series">
                            <div class="rate-box">
                                <h5 class="rate-amount">₹1,800</h5>
                                <h2 class="rate-title">Gold Mock Test Series</h2>
                            </div>
                            <div class="mt-3">
                                <ul class="list-items">
                                    <li>6 Full Length Mock Test</li>
                                    <li>Multiple Sectional Test For Section-wise Improvement</li>
                                    <li>Indepth Analysis on Multiple Parameters</li>
                                    <li>Monthly Current Affairs</li>
                                    <li>Based on New Pattern</li>
                                </ul>
                            </div>
                            <p class="mt-3"><a href="{{ route('contact') }}" class="btn register-btn w-100 d-block">REGISTER
                                    NOW</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="test-series">
                            <div class="rate-box">
                                <h5 class="rate-amount">₹3,400</h5>
                                <h2 class="rate-title">Diamond Mock Test Series</h2>
                            </div>
                            <div class="mt-3">
                                <ul class="list-items">
                                    <li>12 Full Length Mock Test</li>
                                    <li>Multiple Sectional Test For Section-wise Improvement</li>
                                    <li>Indepth Analysis on Multiple Parameters</li>
                                    <li>Monthly Current Affairs</li>
                                    <li>Based on New Pattern</li>
                                </ul>
                            </div>
                            <p class="mt-3"><a href="{{ route('contact') }}" class="btn register-btn w-100 d-block">REGISTER
                                    NOW</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>



@include('frontend.newsletter')


@endsection