@extends('frontend.layout.app')
@section('title', "AIBE Coaching  Institute Coimbatore TN" )
@section('description', "Welcome to ARA Education - A Premier AIBE Coaching Institute in Coimbatore At ARA Education, we are dedicated to providing exceptional coaching for the All India Bar Examination (AIBE). Whether you're looking to prepare for the exam through online or offline classes, we offer personalized and in-depth guidance to help you pass the AIBE with flying colors. Our mission is to equip aspiring lawyers with the knowledge, skills, and confidence to succeed in this critical examination." )
@section('keyword', "AIBE coaching institute coimbatore, AIBE exam tuitions, online AIBE coaching" )
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
                <span class="banner-title">Best AIBE EXAM Coaching </span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Best AIBE EXAM Coaching</li>
                </ol>
            </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Online CSEET Coaching">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-12">
            <h1 class="about-title txt-jus">Best AIBE EXAM COACHING 2025 Coimbatore Tamilnadu, India</h1>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Welcome to ARA Education - A Premier AIBE Coaching Institute in Coimbatore. At ARA Education, we are dedicated to providing exceptional coaching for the All India Bar Examination (AIBE). Whether you're looking to prepare for the exam through online or offline classes, we offer personalized and in-depth guidance to help you pass the AIBE with flying colors. Our mission is to equip aspiring lawyers with the knowledge, skills, and confidence to succeed in this critical examination.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">ARA education is the best AIBE Exam Coaching
                        provider both online & offline classes in Coimbatore Tamilnadu.</p>
            </div>
            <div class="col-lg-6">
                <div class="about-left">

                  
                    <p class="clr-000 comm-para txt-jus marg-btm-20">The All India Bar Examination is administered
                        by the Bar Council of India. The All India Bar Examination (AIBE) differs from entrance
                        exams as it is a Certification exam. Those who pass AIBE exam receive Certificate of
                        Practice (COP), allowing them to practice law in an Indian court. The purpose of The All
                        India Bar Examination (AIBE) is to assess a lawyer's ability to practice law in India. The
                        AIBE aims to evaluate basic skills and establish a minimum standard for law practice
                        admission by testing candidates' analytical abilities and knowledge of fundamental legal
                        concepts.</p>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">The main goal of The All India Bar Examination
                        (AIBE) is to assess a lawyer's competence to practice law in India. The AIBE is designed to
                        evaluate fundamental skills and establish a minimum standard for entry into the legal
                        profession; it evaluates a candidate's analytical skills and knowledge of basic legal
                        principles. Upon successful completion of the exam, the candidate will receive a
                        "Certificate of Practice" from the Bar Council of India.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">All India Bar Examination is conducted in
                        Hindi, Telugu, Tamil, Kannada, Marathi, Bengali, Gujarati, Oriya, English, Assamese, Punjabi
                        languages. AIBE 18 Exam will be held in above mentioned 11 languages. AIBE Exam will
                        consists of a total of 100 questions in 19 different law topics of undergraduate level.</p>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">For law graduates who want to begin practising
                        law, the Bar Council of India administers the All India Bar Examination. After passing the
                        test, the candidate will receive a certificate of practise, making them eligible to
                        represent themselves in any Indian court. In 53 Indian cities, the exam is given in both
                        national and regional language</p>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/30.webp" alt="What After 12th">
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
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/31.webp" alt="Coaching for CLAT ">
                </div>
            </div>
            <div class="col-lg-6 order-0 order-lg-1">
                <h3 class="fnt-we-600 marg-btm-30">
                    AIBE 2025 Eligibility Criteria
                </h3>
                <ul class="css-class-list">
                    <li>Candidates holding three-year or five-year LLB degree are eligible for appearing in AIBE2025
                    </li>
                    <li>All candidates must be enrolled as an advocate with their respective State Bar Council,
                        under Section 24 (1) (f) of Advocates Act, 1961.</li>
                    <li>There is no upper age limit or lower age limit for candidates taking the exam</li>
                </ul>
                <h3 class="fnt-we-600 marg-btm-30">AIBE Exam Pattern 2025</h3>

                <p class="clr-000 comm-para txt-jus marg-btm-20">The 20 subjects in AIBE paper is split into two
                    categories: Category-1 & Category-2: the first comprises subjects that may be considered
                    ‘foundational’ in nature, those that form the basis for large areas of law. The second comprises
                    other subjects, which a new entrant to the legal profession must also have a basic understanding
                    of. The 100 AIBE questions will be divided into ‘knowledge-based’ and ‘reasoning’ questions. You
                    can have a fair idea about the pattern of All India Bar Exam from following table:</p>

                <ul class="css-class-list">
                    <li>The question paper will consist of total 100 questions of the objective type from 20
                        subjects.</li>
                    <li> These 20 subjects will be divided into Category-I and Category-II.</li>
                    <li> Each subject of Category-I will have 7 questions while Category-II subjects will have 23
                        questions in total.</li>
                    <li> The total time duration will be 3 hours 30 minutes.</li>

                </ul>

            </div>

        </div>
    </div>
</section>

<section class="padd-both-40 ">
    <div class="container">
        <table class="table-main">
            <thead>
                <tr>
                    <th>Category-I (Part-I)</th>
                    <th>Category-2 (Part-2)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alternative Dispute Resolution </td>
                    <td> Administrative Law</td>
                </tr>
                <tr>
                    <td>Constitutional Law </td>
                    <td> Environmental Law</td>
                </tr>
                <tr>
                    <td>Contract Law, including Specific Relief, Special Contracts, and Negotiable Instruments </td>
                    <td> Family Law</td>
                </tr>
                <tr>
                    <td>Criminal Law I: The Indian Penal Code </td>
                    <td> Human Rights Law Instruments</td>
                </tr>
                <tr>
                    <td>Criminal Procedure </td>
                    <td> Labour and Industrial Law</td>
                </tr>
                <tr>
                    <td>Drafting, Pleading, and Conveyancing </td>
                    <td> Law of Tort, including Motor Vehicle Accidents, and Consumer Protection Law</td>
                </tr>
                <tr>
                    <td>Evidence </td>
                    <td> Principles of Taxation Law</td>
                </tr>
                <tr>
                    <td>Jurisprudence </td>
                    <td> Public International Law</td>
                </tr>
                <tr>
                    <td>Professional Ethics and the Professional Code of Conduct for Advocates</td>
                    <td> ----</td>
                </tr>
                <tr>
                    <td>Property Law </td>
                    <td> ----</td>
                </tr>

            </tbody>
        </table>
    </div>
</section>


<section class="padd-both-40 ">
    <div class="container">
        <h3 class="text-center fnt-we-600 marg-btm-30">AIBE SYLLABUS 2025 </h3>

        <table class="table-main marg-btm-30">
            <thead>
                <tr>
                    <th>Topic | Subject</th>
                    <th>No. of Questions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Constitutional Law </td>
                    <td> 10</td>
                </tr>
                <tr>
                    <td>I.P.C (Indian Penal Code) </td>
                    <td> 08</td>
                </tr>
                <tr>
                    <td>Cr.P.C (Criminal Procedure Code) </td>
                    <td> 10</td>
                </tr>
                <tr>
                    <td>C.P.C (Code of Civil Procedure)</td>
                    <td> 10</td>
                </tr>
                <tr>
                    <td>Evidence Act </td>
                    <td> 08</td>
                </tr>
                <tr>
                    <td>Alternative Dispute Redressal including Arbitration Act</td>
                    <td> 04</td>
                </tr>
                <tr>
                    <td>Family Law </td>
                    <td> 08</td>
                </tr>
                <tr>
                    <td>Public Interest Litigation </td>
                    <td> 04</td>
                </tr>
                <tr>
                    <td>Administrative Laws</td>
                    <td> 03</td>
                </tr>
                <tr>
                    <td>Professional Ethics & Cases of Professional Misconduct under BCI rules </td>
                    <td> 04</td>
                </tr>
                <tr>
                    <td>Company Laws </td>
                    <td> 02</td>
                </tr>
                <tr>
                    <td>Environmental Laws </td>
                    <td> 02</td>
                </tr>
                <tr>
                    <td>Cyber Laws </td>
                    <td> 02</td>
                </tr>
                <tr>
                    <td>Labour & Industrial Laws </td>
                    <td> 04</td>
                </tr>
                <tr>
                    <td>Law of Tort, including Motor Vehicle Act and Consumer Protection Laws </td>
                    <td> 05</td>
                </tr>
                <tr>
                    <td>Law related to Taxations </td>
                    <td> 04</td>
                </tr>
                <tr>
                    <td>Law of Contract, Specific Relief, Property Laws, Negotiable Instrument Act </td>
                    <td> 08</td>
                </tr>
                <tr>
                    <td>Land Acquisition Act </td>
                    <td> 02</td>
                </tr>
                <tr>
                    <td>Intellectual Property Laws </td>
                    <td> 02</td>
                </tr>
                <tr>
                    <td>Total </td>
                    <td> 100</td>
                </tr>

            </tbody>
        </table>

        <h3 class="fnt-we-600 marg-btm-30 fnt-20">Note :</h3>
        <p class="clr-000 comm-para txt-jus marg-btm-20 ">1. Each correct question will be awarded one mark.</p>
        <p class="clr-000 comm-para txt-jus marg-btm-20 ">2. No mark will be deducted for the wrong answer.</p>
        </h3>

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
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
                                many times is the AIBE exam conducted in a year 2025?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    The All India Bar Examination (AIBE) is conducted once a year. The Bar Council
                                    of India is responsible for conducting this exam nationally. The AIBE question
                                    paper has 100 objective questions that are paper-based. Clearing this exam gives
                                    a Certificate of Practice (COP), which is mandatory to practice as a lawyer in
                                    Indian courts. AIBE 19 Exam Date 2025 hasbeen announced. AIBE Exam 2025 will be
                                    conducted in offline mode. AIBE 19 (XIX) Exam Date is November 24, 2025.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are AIBE exam fees for 2025?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    As per the application process of AIBE 2025, the application fee to be paid for
                                    General/ OBC category candidates is INR 3,500. However, candidates belonging to
                                    SC/ ST (including PWD candidates of the categories) have to pay INR 2,500 only
                                    as they are given concession.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                KEY Main points to be considered for AIBE 2025 EXAM
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                <ul class="list-sty">
                                    <li>AIBE Overview : Significance and requirement of clearing the AIBE for law
                                        graduates.</li>

                                    <li>AIBE Curriculum : Comprehensive analysis of the topics included in the test.
                                    </li>

                                    <li>Guide for interpreting bare acts : A detailed process for comprehending bare
                                        acts.</li>

                                    <li>Six-month strategy for preparation : Detailed study plan split into basic,
                                        mid-level, and high-level stages.</li>

                                    <li>Tips on managing time effectively, taking notes, practicing with mock tests,
                                        studying in groups, and maintaining a healthy routine for effective studying
                                        techniques.</li>

                                    <li>More resources available : Detailed guides, past papers, practice questions,
                                        and suggested study materials.</li>

                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour11" aria-expanded="false"
                                aria-controls="collapseFour11">
                                Is the AIBE exam open book Exam 2025?
                            </button>
                        </h2>
                        <div id="collapseFour11" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    The offline-based AIBE Exam carries 100 objective-type questions. As per the
                                    revised AIBE Exam Pattern, AIBE is not an open-book exam. As per the new exam
                                    pattern, candidates are allowed to carry Bare Acts without notes.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour22" aria-expanded="false"
                                aria-controls="collapseFour22">
                                What is the passing rate of AIBE exam?
                            </button>
                        </h2>
                        <div id="collapseFour22" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Andhra Pradesh is the worst performing state with a pass percentage of 55.92
                                    followed by Jharkhand with 63 per cent and Karnataka with 64.3 per cent.
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