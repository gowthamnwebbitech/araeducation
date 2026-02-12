@extends('frontend.layout.app')
@section('title', "online coaching tuitions india " )
@section('description', "Online Coaching in India - AraEducation At AraEducation, we bring world-class online coaching to students across India, enabling them to access quality education from the comfort of their homes. Whether you're preparing for competitive exams, enhancing your skills, or pursuing academic goals, our comprehensive and structured online programs are designed to help you succeed." )
@section('keyword', "online coaching, online tuitions India, NRI online coaching" )
@section('content')

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
                    <span class="banner-title">Online coaching India</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Online coaching India</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="expert professionals teachers">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="online-coaching">
    <div class="container">
        <h5 class="course-subtitle text-center common wow fadeInUp" data-wow-delay="0.5s">Online coaching India</h5>
        
            <h1 class="main-title wow fadeInUp" data-wow-delay="0.3s">Admission Open for Indian and <img src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg" alt=""> NRI Students</h1>
            <div class="row justify-content-center mt-3">
            <div class="col-lg-10">
            <p class="clr-000 text-center marg-btm-20 comm-para ">
            Online Coaching in India - AraEducation
                    </p>
            <p class="clr-000 text-center marg-btm-20 comm-para ">At AraEducation, we bring world-class online coaching to students across India, enabling them to access quality education from the comfort of their homes. Whether you're preparing for School Tuitions, competitive exams, Professional exams, enhancing your skills, or pursuing academic goals, our comprehensive and structured online programs are designed to help you succeed.</p>
            </div>
        </div>
            <div class="row gy-4 align-items-center mt-3">
                <div class="col-lg-5">
                    <div class=" wow fadeInLeft" data-wow-delay="0.5s">
                       <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/44.webp" alt="Life Career Opportunities">
                    </div>
                </div>
                <div class="col-lg-7">

                    <p class="quote-text common wow fadeInUp" data-wow-delay="0.3s">Online Coaching from India's Leading Educators</p>
                    <p class="course-text wow fadeInUp" data-wow-delay="0.5s">Are you an INDIAN / NRI Student  looking for Quality online coaching from India? Look no further Our Institution offers a range of online coaching programs tailored to meet the needs of NRI students. We understand that accessing quality education can be challenging. Our online programs are designed to bridge this gap, providing you with access to world-class education from the comfort of your own home.
                    </p>
                </div> 
            </div>
    </div>
</section>

@include('frontend.newsletter')



@endsection