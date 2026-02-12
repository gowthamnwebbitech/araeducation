@extends('frontend.layout.app')
@section('title', "Law College Subject Coaching Institute ")
@section('description', "Welcome to ARA Education - Your Trusted Law College Subject Coaching Institute in Coimbatore At ARA Education, we specialize in providing comprehensive coaching for students pursuing law degrees at various universities. Our law college subject coaching is designed to help students excel in their academic journey and perform exceptionally well in their law exams. Whether you're enrolled in a 3-year LLB or a 5-year integrated law program, our tailored coaching programs ensure that you receive the support you need to succeed.")
@section('keyword', "Law College Subject Coaching Institute coimbatore, Law college exam tuitions, online Law college subject  coaching")
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
                        <span class="banner-title">Best Law College Subject Coaching</span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Best Law College Subject Coaching
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp"
                                alt="Institute of Public Accountants [ AT – AUS]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="padd-both-40 pb-3">
        <div class="container">
            <h1 class="text-center">Best Law College Subject Coaching 2025 Coimbatore Tamilnadu, India</h1>
            <div class="row justify-content-center mt-3">
                <div class="col-lg-10">
                    <p class="clr-000 text-center marg-btm-20 comm-para ">
                        Welcome to ARA Education - Your Trusted Law College Subject Coaching Institute in Coimbatore TN
                    </p>
                    <p class="clr-000 text-center marg-btm-20 comm-para ">At ARA Education, we specialize in providing
                        comprehensive coaching for students pursuing law degrees at various universities. Our law college
                        subject coaching is designed to help students excel in their academic journey and perform
                        exceptionally well in their law exams. Whether you're enrolled in a 3-year LLB or a 5-year
                        integrated law program, our tailored coaching programs ensure that you receive the support you need
                        to succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <h2 class="about-title">LLB Semester Exam Coaching Classes In Coimbatore 2025</h2>
                        <p class="clr-000 marg-btm-20 comm-para txt-jus">Online Virtual LLB Tuition and Classroom LLB
                            Tuition in Coimbatore
                            ARA LAW ACADEMY guides students through different law subjects which are to be covered by
                            law colleges in their 5 Years | 3 Years Law course. We have experience in teaching various law
                            subjects such as Constitutional Law, Law of Crimes (Indian Penal Code), Criminal Procedural
                            Code (CrPC), Indian Evidence Act, Law of Contract, Law of Torts, Property Law, Family Law,
                            Labour Law and many more.</p>
                        <p class="clr-000 marg-btm-20 comm-para txt-jus">
                            ARA LAW ACADEMY Tutors specialize in providing online and classroom law tuition to students
                            following undergraduate law programmes. We also tutor in law to students studying other
                            certificate & diploma programmes containing law modules within their course.
                        </p>
                        <p class="fnt-we-600 marg-btm-20 clr-000">When Tutoring Matters for the LLB Degree?</p>
                        <p class="fnt-we-600 marg-btm-20 clr-000">Do you have more than 2 subjects in your backlog?</p>
                        <p class="fnt-we-600 marg-btm-20 clr-000">Worried how to pass the backlog subjects along with
                            the current semester papers?</p>
                        <p class="fnt-we-600 marg-btm-20 clr-000">Do you want to improve your current grades?
                            Do you find difficulty in the subject and require native language support (such as Tamil,
                            Hindi)?</p>
                        <p class="clr-000 marg-btm-20 comm-para txt-jus">The LLB is the basic degree required to enter
                            into the legal profession. Competition among LLB graduates for training contracts and
                            pupilages is fierce and obtaining high grades and graduating with a good degree is generally
                            a minimum requirement for both litigation as well as corporate legal careers. The vast
                            majority of law firms will require a first class along with presentation, legal research and
                            contract drafting skills. At ARA LAW ACADEMY, we train not only on the subjects, but also
                            provide additional skills to make LLB subjects interesting and practical.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/37.webp"
                            alt="ARA Law Academy is the best coaching for LLB Semester Exam Coaching Classes In Coimbatore">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/38.webp"
                            alt="Ara Law Academy LLB Semester Coaching">
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <h3 class="fnt-we-600 marg-btm-30">
                        LLB SEMESTER COACHING 2025
                    </h3>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">Tutors know how to do this. We offer expert LLB
                        tuition in all of the foundation subjects and many others. The majority of our students now as a
                        law graduates have studied on LLB courses, and most have secured First Class degrees, law prizes
                        and scholarships.</p>
                    <p class="clr-000 marg-btm-20 fnt-we-600 txt-jus">Subjects Handled By Our Eminent Faculties in
                        Tutoring at Ara Law Academy as follows:</p>

                    <ul class="css-class-list">
                        <li> Contract I</li>
                        <li> Contract II</li>
                        <li> Constitutional Law</li>
                        <li> Law of Torts</li>
                        <li> Criminal Law</li>
                        <li> Family Law I</li>
                        <li> Family Law II</li>
                        <li> Company Law</li>
                        <li> Transfer of Property Act</li>
                        <li> Cyber Law</li>
                        <li> Intellectual Property</li>

                    </ul>

                </div>

            </div>
        </div>
    </section>



    <section class="faq-detail">
        <div class="container">
            <div class="row gy-4 align-items-center">

                <div class="col-lg-6 col-md-8 ">
                    <h5 class="faq-subtitle  wow fadeInUp" data-wow-delay="0.2s">FAQ’S</h5>
                    <h2 class="faq-title  wow fadeInUp" data-wow-delay="0.3s">Frequently Asked
                        Questions</h2>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Which
                                    is the best institute for Law Subject wise coaching in India?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-text marg-btm-30">
                                        Ara education is the best semester wise coaching center in india for both online
                                        & Offline coaching classes provided</p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Online Tuitions for Law Subjects?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-text">
                                        Ara Law Academy is the best online tuition provider for Law Subject Coaching.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Online tuition Provider for UGC NET Exam?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-text">
                                        ARA Education is the best UGC NET Exam Online Coaching provider in India.
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
                <div class="col-lg-6 col-md-4 ">
                    <div class="faq-img   wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/faq-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.newsletter')



@endsection