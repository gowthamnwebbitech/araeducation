@extends('frontend.layout.app')
@section('title', "Online Coaching classes for CSEET CA CS CMA ICWA ACCA USCMA CLAT Law Entrance ARA Education" )
@section('description', "Ara education is the best Online coaching center for Professional courses,Ara Education is the
best online training institute foe CA,CS,CMA,ICWA,CSEET,ACCA, USCMA, CLAT,Law Entrance Coaching coimbatore Tamilnadu
India" )
@section('keyword', "Online CA coaching institute in coimbatore, Tamilnadu India, Online CMA Coaching Ara education,
Online ICWA Coaching in coimbatore Tamilnadu India,Online ACCA Coaching in coimbatore ara education, USCMA online
coaching in coimbatore, Tamilnadu,Online Clat Coaching in coimbatore, Online coaching center for CA,CS, CMA, Online
coaching for ACCA, USCMA, CLAT , Online BCOM Coaching in coimbatore ARA education, Online College, Online Bcom College
in tamilnadu. Online Professional Coaching in coimbatore Tamilnadu" )
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
                    <span class="banner-title">Online Coaching Class</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Online Coaching Class</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Comprehensive care 100% syllabus coverage institute">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-list bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="course-title">ONLINE COACHING CLASSES | INSTITUTE | CENTER IN COIMBATORE TAMILNADU
                    INDIA</h1>
                <div class="h-stact-list gap-2 mb-3  wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{ route('cs_coaching_classes') }}" class="h-stack-item">CS</a>
                    <a href="{{ route('ca_coaching_class') }}" class="h-stack-item">CA</a>
                    <a href="{{ route('cma_coaching') }}" class="h-stack-item">CMA - ICWA</a>
                    <a href="{{ route('clat_all_india_law_entrance_exam_coaching') }}" class="h-stack-item">CLAT</a>
                    <a href="{{ route('ACCA_coaching_classes') }}" class="h-stack-item">ACCA UK</a>
                    <a href="{{ route('CIMA_coaching_classes') }}" class="h-stack-item">CIMA UK</a>
                    <a href="{{ route('CFA_coaching_classes') }}" class="h-stack-item">CFA UK</a>
                    <a href="{{ route('IFRS_coaching_classes') }}" class="h-stack-item">IFRS UK</a>
                    <a href="{{ route('US_CMA_coaching_classes') }}" class="h-stack-item">CMA USA</a>
                    <a href="{{ route('EA_coaching_classes') }}" class="h-stack-item">EA USA</a>
                    <a href="{{ route('CPA_coaching_classes') }}" class="h-stack-item">CPA USA</a>
                    <a href="{{ route('FRM_coaching_classes') }}" class="h-stack-item">FRM USA</a>
                    <a href="{{ route('CFP_coaching_classes') }}" class="h-stack-item">CFP USA</a>
                    <a href="{{ route('CPA_austraila_coaching_classes') }}" class="h-stack-item">CPA AUS</a>
                    <a href="{{ route('CAMS_coaching_class') }}" class="h-stack-item">CAMS</a>
                </div>
                <blockquote class="blockquote mt-4">
                    <h5 class="quote-text">Learn anywhere, anytime and at your place!
                        “Let the Masters Shape your Future”
                        Presenting the most advanced online learning platform for
                    </h5>
                </blockquote>
            </div>
        </div>
        <h2 class="main-title mt-3 wow fadeInUp" data-wow-delay="0.3s">Ara Education Provides <img
                src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg" alt=""> Online and Offline
            Classes</b></h2>

        <div class="row gy-4 mt-3">
            <div class="col-lg-7">

                <h5 class="course-subtitle wow fadeInUp" data-wow-delay="0.5s">Our Offline Classroom Live Coaching
                    Programs :</h5>
                <p class="course-text wow fadeInUp" data-wow-delay="0.6s">We offer a range of offline Classroom Live
                    coaching programs, including:
                </p>
                <ul class="course-sublist mt-3 wow fadeInUp" data-wow-delay="0.7s">
                    <li>CA CS CMA * Comprehensive coaching for all Indian professional course aspirants.</li>
                    <li>ACCA CIMA IFRS USCMA CPAUSA EA FRM CFP ACAMS CPA AUS Expert guidance for International
                        Professional exams.</li>
                    <li>LAW Entrance Exam Coaching Classes For CLAT ALET SLAT LSAT for both 3 years and 5 years LLB &
                        also for Judiciary Entrance Exams TNCJE</li>
                </ul>

            </div>
            <div class="col-lg-5">
                <div class="wow fadeInLeft" data-wow-delay="0.5s">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/39.webp" alt="Ara Education Online Coaching Classes">
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-3">
            <div class="col-lg-5 order-1 order-lg-0">
                <div class="wow fadeInLeft" data-wow-delay="0.5s">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/41.webp" alt="Ara Education Online Coaching Classes">
                </div>
            </div>
            <div class="col-lg-7 order-0 order-lg-1">

                <h5 class="course-subtitle wow fadeInUp" data-wow-delay="0.5s">How Our Offline Live Classroom Coaching
                    Works</h5>
                <p class="course-text wow fadeInUp" data-wow-delay="0.6s">We offer a range of offline Classroom Live
                    coaching programs, including:
                </p>
                <ul class="course-sublist mt-3 wow fadeInUp" data-wow-delay="0.7s">
                    <li><b>1.Registration:</b> Sign up for our offline coaching program and receive login credentials.
                    </li>
                    <li><b>2.Live Classroom:</b> Attend live Classroom sessions with our experienced Industry Specific
                        faculties.</li>
                    <li><b>3.Interactive Learning:</b> Engage with our faculty and fellow students through chats,
                        discussions, and doubt-clearing sessions with real time Mock moot court, Audits, AGM, Board
                        Meetings, MCA, GST, IT Filing procedure’s etc .</li>
                    <li><b>4.Comprehensive Study Materials:</b> Access our extensive library of study materials,
                        including video lectures, notes, and practice tests.</li>
                    <li><b>5. Revisions & Mock Exams :</b> Attend Our brain screw revision sessions & Mock Exams</li>
                    <li><b>Get recorded Classes</b> for Your Missed Sessions</li>
                </ul>

            </div>

        </div>

        <div class="row gy-4 mt-3">
            <div class="col-lg-12">
                <h6 class="course-title text-center common wow fadeInUp" data-wow-delay="0.4s">Our Online Coaching
                    Programs</h6>
                <h5 class="main-title wow fadeInUp" data-wow-delay="0.5s">Join Our ONLINE Coaching <img
                        src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg" alt=""> Learn from
                    the Comfort of Your Home</h5>
                <p class="course-text common wow fadeInUp" data-wow-delay="0.6s"><b>Welcome to Our Online Coaching
                        Classes</b><br>
                </p>
                <p class="course-text wow fadeInUp" data-wow-delay="0.6s">In today's fast-paced world, finding time to
                    attend physical coaching classes can be challenging. That's why we offer online virtual coaching
                    classes that you can attend from the comfort of your own home.
                </p>

            </div>
        </div>
        <div class="mt-2">
            <h5 class="course-subtitle wow fadeInUp mt-2" data-wow-delay="0.5s">Benefits of Our Online Classes</h5>
            <div class="row mt-1 gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="syllabus-box syllabus-box-1">
                        <h5 class="syllabus-title">Flexibility</h5>
                        <p class="syllabus-text">Attend classes from anywhere, at any time, as long as you have a stable
                            internet connection.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="syllabus-box syllabus-box-2">
                        <h5 class="syllabus-title">Personalized Attention</h5>
                        <p class="syllabus-text">Our experienced faculty provide one-on-one attention, ensuring that
                            each student's needs are met.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="syllabus-box syllabus-box-3">
                        <h5 class="syllabus-title">Comprehensive Study Materials</h5>
                        <p class="syllabus-text">Access our extensive library of study materials, including video
                            lectures, notes, and practice tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="syllabus-box syllabus-box-4">
                        <h5 class="syllabus-title">Interactive Learning</h5>
                        <p class="syllabus-text">Engage with our faculty and fellow students through live chats,
                            discussions, and doubt-clearing sessions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="syllabus-box syllabus-box-5">
                        <h5 class="syllabus-title">Convenience</h5>
                        <p class="syllabus-text">No need to commute or worry about finding a coaching center near your
                            home.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="syllabus-box syllabus-box-6">
                        <h5 class="syllabus-title">Cost-Effective</h5>
                        <p class="syllabus-text">Save money on transportation and coaching fees</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th colspan="3">We Provide Online CA Coaching</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{ route('ca_foundation_coaching') }}">Online CA Foundation Coaching</a></td>
                            <td><a href="{{ route('ca_intermediate_coaching') }}">Online CA IPC Intermediate
                                    Coaching</a></td>
                            <td><a href="{{ route('ca_final_coaching') }}">Online CA Final Coaching</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('cma_coaching') }}">Online CMA Coaching</a></td>
                            <td><a href="{{ route('cma_foundation_coaching') }}">Online CMA Foundation Coaching</a></td>
                            <td><a href="{{ route('cma_intermediate_coaching') }}">Online CMA Intermediate Coaching</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('cma_final_coaching') }}">Online CMA Final Coaching</a></td>
                            <td><a href="{{ route('cs_coaching_classes') }}">Online CS (ACS Coaching)</a></td>
                            <td><a href="{{ route('cseet_coaching_class') }}">Online CSEET Coaching</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('cs_executive_coaching') }}">Online CS Executive Coaching</a></td>
                            <td><a href="{{ route('cs_professional_coaching_class') }}">Online CS Professional
                                    Coaching</a></td>
                            <td><a href="{{ route('ACCA_coaching_classes') }}">Online ACCA Coaching</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('US_CMA_coaching_classes') }}">Online Uscma Coaching</a></td>
                            <td><a href="{{ route('CPA_coaching_classes') }}">Online CPA US Coaching</a></td>
                            <td><a href="{{ route('CPA_austraila_coaching_classes') }}">Online CPA AUS Coaching</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('EA_coaching_classes') }}">Online EA Coaching</a></td>
                            <td><a href="{{ route('FRM_coaching_classes') }}">Online FRM Coaching</a></td>
                            <td><a href="{{ route('IFRS_coaching_classes') }}">Online IFRS Coaching</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('CFA_coaching_classes') }}">Online CFA Coaching</a></td>
                            <td><a href="{{ route('online_coaching_class') }}">Other Online Course Specific tuituons</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="online-coaching ">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7">

                <ul class="coaching-list">
                    <li>In Common Stream line - After Completing 12th School (or) any degree they do
                        Professional Courses on fulltime (or)
                        part-time bases</li>
                    <li>In Integrated Stream line – The Student do only one course. But get Certification for
                        both Degree & Professional
                        Course.</li>
                    <li>In Parallel Stream line - The Student do Degree course separately and Professional
                        Course Separately at the same
                        period of time.</li>
                    <li>Indian Professional Courses – CS, CMA, CA, CLAT, JUDICIAL EXAMS</li>
                    <li>International Professional Courses – ACCA, EA, CMA-US, CPA-US & AUS, CIMA, CFA,
                        FRM, IFRS, CFP, CAMS</li>
                    <li>Integrated Professional Courses – B.com | M.com (or) B.B.A | M.B. A with the above Indian
                        & International Courses.
                    </li>
                </ul>

            </div>
            <div class="col-lg-5">
                <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/43.webp" alt="Online Coaching for">
            </div>
            <div class="col-lg-12">
                <p class="coaching-text"><b class="common">Ara education</b> is an Educational Platform for virtual
                    coaching classes which
                    helps Professional Students to decode,
                    understand & practice the ways & tactics to crack exams & Ultimately Sharpen
                    them to realize
                    their dream. Online learning is a
                    challenging but very
                    rewarding way to acquire a set
                    of qualifications. Advancements in technology now allow students to study online entirely when
                    grouping with peers,
                    watching lectures and participating in topic-specific discussions. <b class="common">Online
                        learning</b> is a
                    challenging but very rewarding
                    way to acquire a set of qualifications. Advancements in technology now allow students to study
                    online entirely when
                    grouping with peers, watching lectures and participating in topic-specific discussions.</p>
                <p class="coaching-text">Attend live online classes taken by qualified Professional faculty.
                    Attend
                    live classes in the convenience and safety of
                    your home. Save travel time. Regular revision test, mock exams will be conducted online. For
                    employed students according
                    to the necessity the classes will be organized.Gone are the days when you could lose track
                    of
                    time and study planning as
                    now, you get notifications in the form of Emails, SMS and push notifications to plan better.
                </p>
            </div>
        </div>
        <div class="mt-5">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="coaching-title">Key Advantages of attending online coaching Classes at ARA Education
                    </h5>
                    <ul class="coaching-list">
                        <li>Affordable Prices</li>
                        <li>To be streamed live using internet technology</li>
                        <li>Can be accessed live or viewed later as recorded lectures through hand-held devices such
                            as smart phones, laptops,
                            I-pads, tablets, etc. anytime anywhere</li>
                        <li>A flexible learning schedule</li>
                        <li>To be delivered by renowned subject experts</li>
                        <li>To cover the entire syllabus.</li>
                        <li>Quality Solution</li>
                        <li>Will be interactive in nature - with facility to raise questions</li>
                        <li>To have examination focused approach</li>
                        <li>Structured Learning</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/42.webp" alt="Online Coaching Classes in Coimbatore Tamilnadu ARA Education">
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.newsletter')

@endsection