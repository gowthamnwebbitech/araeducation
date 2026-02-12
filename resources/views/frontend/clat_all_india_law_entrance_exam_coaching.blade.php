@extends('frontend.layout.app')
@section('content')
@section('title', "Clat all India law entrance exam coaching" )

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
        border-bottom: 1px solid #edeaea;
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
                <span class="banner-title">CLAT/All India Law Entrance Exam Coaching </span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CLAT/All India Law Entrance Exam Coaching
                    </li>
                </ol>
            </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Online EA Coaching">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="about-detail cs-coaching-class">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <h1 class="about-subtitle">BEST CLAT-LAW-JUDICIARY ENTRANCE COACHING CLASSES | INSTITUTE |
                        CENTER
                        | ACADEMY
                        IN COIMBATORE TAMILNADU</h1>
                    <h2 class="about-title">Best Law Entrance | Clat Coaching Institute in Tamilnadu
                        Coimbatore
                        ARA EDUCATION 2025</h2>
                    <p class="about-text">
                        ARA Law Academy is a best coaching for CLAT, LSAT, AILET, AIL AE SET BVP
                        CET, DUET, AMULE, BHU-UET, AIBE Christ Law
                        exam, PULET, other top private university Law entrance Exams in Coimbatore Tamilnadu India.
                        Crack Law Entrance Exam for
                        various 5 years and 3 years LLB Course with India’s Best premier Clat Coaching Institute in
                        Tamilnadu Coimbatore India.
                    </p>
                    <p class="about-text"> ARA Law Academy is only Academy in south India which deals specially and
                        exclusively enriched a unique solution as a
                        place for all your legal studies under one roof. We deal with Entry level entrance of Law
                        LLB to the highest level of
                        qualifying exam Judiciary PCS-J ,Further We deal with all master level entrance exams LLM
                        UGC Net and all the semester
                        courses.</p>





                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-box">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/Images/LAW-CLAT/img-3.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about-detail cs-coaching-class">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <div class="img-box">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/Images/LAW-CLAT/img-2.jpg" alt="">
                </div>

            </div>
            <div class="col-lg-6">
                <div class="about-left">

                    <h2 class="about-title">We are here to make you lawyers. Law is not only a noble but a lucrative
                        profession.</h2>
                    <ul class="about-list">
                        <li>Law Entrance Exams all over India-LLB & LLM</li>
                        <li>Judicial Service Exams</li>
                        <li>TNPSC -UPSC (Law) Exam</li>
                        <li>LLB,LLM semester subject coaching</li>
                        <li>Bank law officer Exam & Interveiw</li>
                    </ul>

                    <p class="about-text"><b class="common">Motto:</b>Your aim..Our Mission!! We give dimensions to
                        your dreams</p>
                    <p class="about-text">ARA Education avails both Classroom Coaching & Online Coaching for CLAT &
                        other Law Entrance exams both for 5 yrs Law
                        Entrance Exam for 3 yrs. Law Entrance Exams 2025.</p>
                    <h5 class="about-subtitle">Law Entrance Exam in India 2025</h5>
                    <p class="about-text">Exams for Law School Admissions in 2025 - In India, formal legal education
                        is largely available at the undergraduate and
                        postgraduate levels. Students who graduated from high school in the academic year 2024-23
                        will be entitled to enroll in
                        a variety of undergraduate legal courses, commonly referred to as the integrated LLB
                        program. Graduate students can also
                        enroll in three-year LLB and LLM program. In India, there are over 1,000 law schools. Law
                        entrance examinations, on the
                        other hand, are used to get admission to top-ranked institutions and universities. As a
                        result, students interested in
                        studying law at top-ranked law schools should be aware of the law admission tests offered by
                        these institutions. </p>
                </div>
            </div>

        </div>
    </div>
</section>




@include('frontend.newsletter')

@endsection