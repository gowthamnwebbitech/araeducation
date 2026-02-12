@extends('frontend.layout.app')
@section('title', "IFRS coaching classes in coimbatore CERT IFRS DIP IFRS Coaching Institute Ara Education")
@section('description', "Best IFRS Coaching| Training Institute in Coimbatore Tamilnadu. We provide classes for
    IFRS-International Certification Course provided by ACCA, where our faculties are reputable industry experts. ARA
Education provides online classes for IFRS in Coimbatore Tamilnadu India")
@section('keyword', "IFRS coaching in center in coimbatore ara education, IFRS-International certification course in
    coimbatore ara education Tamilnadu India, IFRS Online Coaching Institute in coimbatore Tamilnadu ara education,CERT IFRS
    Coaching classes in coimbatore ara education,DIP IFRS Coaching in coimbatore ara educationTamilnadu,IFRS coaching
    Classes in Coimbatore ara education, Online IFRS Coaching Classes in coimbatore ara education tamilnadu,online IFRS
    training in ara education coimbatore tamilnadu India, IFRS coaching classes near me in coimbatore tamilnadu India, DIP
    IFRS coaching classes near me, ACCA IFRS- Coaching Classes in coimbatore Tamilnadu india, IFRS Coaching Academy ara
    education in coimbatore Tamilnadu ara education India, IFRS Institute in coimbatore ara education, IFRS UK Institute
    Coaching classes in coimbatore,Online ACCA IFRS coaching classes in coimbatore Tamilnadu ara education,ARA Education
    IFRS coaching Coaching classes in coimbatore,what after 12th, IFRS after 12th, IFRS near me coaching classes in
    coimbatore Tamilnadu,online IFRS coaching classes in coimbatore ARA Education,IFRS India Coaching classes in coimbatore
    Tamilnadu India, DIP IFRS-CERT IFRS which is best, scope for IFRS, IFRS In India Tamilnadu,IFRS Campus job
    placement,IFRS Job opportunities in India,IFRS fees Structure, IFRS Course details,IFRS Eligibilty, IFRS Course
    duration,IFRS coimbatore, IFRS-International Financial reporting Standards-ARA Education,Coaching calsses in coimbatore
    tamilandu ARA Education, Top IFRS Coaching Classes in coimabtore ara education. IFRS tuitions coimbatore ara education,
IFRS Training online, IFRS training coimbatore Ara Education")
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
                        <span class="banner-title">IFRS Coaching Classes</span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IFRS Coaching Classes</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="The Internal Revenue Service - Enrolled Agent">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padd-both-40">

        <h1 class="text-center marg-btm-20 fnt-we-600 fnt-25">Best IFRS Coaching Classes | Institute | Centre in
            Coimbatore Tamilnadu</h1>
        <h2 class="text-center marg-btm-20 fnt-we-600 fnt-20">Certificate in International Financial Reporting (Cert
            IFR) 2025</h2>
        <h3 class="text-center marg-btm-20 fnt-we-600 fnt-16">International Financial Reporting Standards (United
            Kingdom)</h3>
    </section>

    <section class="about-detail">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-left">

                        <h2 class="about-title">IFRS (International Financial Reporting Standards)</h2>
                        <p class="clr-000 marg-btm-20"> Understanding of IFRS is crucial for individuals who are aiming
                            for a career in accounting as it serves as the foundation for creating financial statements
                            on a global scale.</p>
                        <ul class="list-sty">
                            <li class="comm-para"><strong class="clr-ed283b"> IFRS Duration </strong>
                                - 3-6 Months</li>
                            <li class="comm-para"> <strong class="clr-ed283b"> IFRS Levels</strong>
                                - 1 Level</li>
                            <li class="comm-para"> <strong class="clr-ed283b">IFRS Exam</strong>
                                - 2 Attempts (Jun & Dec)</li>
                            <li class="comm-para"> <strong class="clr-ed283b">IFRS Classes Mode</strong>
                                - Online</li>

                        </ul>
                        <h3 class="fnt-20 fnt-we-600">DIP IFRS 2025</h3>

                                               <p class="clr-000 marg-btm-20">International Financial Reporting Standards.</p>
                        <p class="clr-000 marg-btm-20">ACCA, a top professional accounting organization, has created and
                            provides the Diploma in IFRS. This course provides the most recent International Accounting
                            Standards published by the International Accounting Standards Board (IASB).</p>
                        <p class="clr-000 marg-btm-20">Auditors and professional accountants with at least three years
                            of experience can remain current in the accounting field by acquiring the latest knowledge
                            through this brief IFRS program.</p>
                        <p class="clr-000 marg-btm-20">The course could be finished in a span of 3-6 months with only
                            one exam. A person with this qualification can access numerous well-paying job
                            opportunities.</p>

                    </div>
                </div>

                                       <div class="col-lg-6 col-md-10">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/41.webp" alt="IFRS Coaching Classes in Coimbatore Tamilnadu ARA Education">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/42.webp" alt="IFRS Coaching Classes in Coimbatore Tamilnadu ARA Education">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <h3 class="fnt-we-600 marg-btm-30">
                        What is the reason for using IFRS 2025?
                    </h3>

                    <ul class="css-class-list">

                        <li class="comm-para"> Global accounting standards</li>

                        <li class="comm-para"> Rules and guidelines for accounting</li>

                        <li class="comm-para"> Established by the International Accounting Standard Board (IASB)</li>

                        <li class="comm-para"> Facilitate consistent reporting.</li>

                        <li class="comm-para"> Many nations are moving towards IFRS in terms of their standards.</li>

                        <li class="comm-para"> IFRS is used by 27,000 listed companies on 88 significant stock
                            exchanges.</li>

                        <li class="comm-para"> Acquire knowledge about the specific regulations for reporting in India -
                            Ind AS and IGAAP.</li>

                        <li class="comm-para"> Can be finished within 3 to 6 months.</li>

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">

                <div class="col-lg-6 col-md-12">
                    <h3 class="fnt-we-600 marg-btm-30">
                        Why need to study IFRS at ARA EDUCATION 2025
                    </h3>

                    <ul class="css-class-list">


                                               <li class="comm-para"> 100-120 hours of Training Classes available in both LIVE and Recorded
                            formats.</li>
                        <li class="comm-para"> Receive training from professionals in the field.</in>
                        <li class="comm-para"> Study materials - notes and presentations.</li>
                        <li class="comm-para"> Practice exams</li>
                        <li class="comm-para"> Live Interactive Classes are available online.</li>
                        <li class="comm-para"> Classes available at all times and locations.</li>
                        <li class="comm-para"> Students all over the world</li>
                        <li class="comm-para"> Full support from all angles</li>
                        <li class="comm-para"> Holders of worldwide ranking positions</li>

                    </ul>

                                       </div>
                <div class="col-lg-6 col-md-7">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/43.webp" alt="IFRS Coaching Classes in Coimbatore Tamilnadu ARA Education">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                    <div class="img-box inner-img">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/44.webp" alt="IFRS Coaching Offline and Online Classes">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <h3 class="fnt-we-600 marg-btm-30">
                        ABOUT DIPLOMA IN IFRS 2025
                    </h3>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">The ACCA Diploma in IFRS has been developed by The
                        Association of Chartered Certified Accountants (ACCA).</p>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">Diploma in International Financial Reporting
                        (Dip.IFR) is for finance professionals who need to acquire more detailed understanding of IFRS.
                        Dip.IFR is a fast and efficient solution that will develop the current knowledge of this field.
                    </p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">ACCA Diploma in IFRS (Dip.IFR) builds on the
                        technical and | or practical knowledge acquired from recognized country specific accountancy
                        qualifications or relevant work experience. The syllabus introduces the candidate to the wider
                        international framework of accounting and the system of standard setting. This course
                        concentrates on the application of conceptual and technical financial reporting knowledge that
                        candidates have already obtained to the specific requirements of financial reporting under
                        international financial reporting standards.</p>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">Over 113 countries require or permit the use of
                        International Financial Reporting Standards (IFRS) for publicly-traded companies. All listed
                        companies in the European Union (EU) have to prepare consolidated company accounts that comply
                        with IFRS. It also affects associates and subsidiaries of EU-listed companies.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Other countries such as Australia, Hong Kong and
                        South Africa have already adopted IFRS or equivalents as their local Generally Accepted
                        Accounting Principles (GAAP). And many other countries around the world, including India, are
                        moving towards applying IFRS, which is having a significant impact on financial reporting The
                        Dip.IFR provides essential international financial reporting knowledge and principles that will
                        prepare candidates for the increasingly global market place and keep them abreast of
                        international developments and how they might apply to companies and businesses.</p>
                    <h6 class="fnt-we-600 clr-ed283b fnt-20">IFRS Offical Website Link : <a
                            class="fnt-we-600 fnt-20 clr-ed283b" href="https://www.ifrs.org/"
                            target="_blank">www.ifrs.org</a>
                    </h6>
                </div>

            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">

                <div class="col-lg-6 col-md-12">
                    <h3 class="fnt-we-600 marg-btm-30">

                        CERT IFRS 2025

                    </h3>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">This financial reporting course offers a broad
                        introduction to the field of International Financial Reporting and International Financial
                        Reporting Standards (IFRS). It traces the history of the International Accounting Standards
                        Board (IASB) from its early roots through to recent changes and updates and future developments.
                    </p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">The qualification is structured in an accessible
                        and user-friendly way that underlines key information and provides useful summaries. It examines
                        and breaks down specific standards topic-by-topic. There are case studies, which are based on
                        real-life examples, and many exercises, multiple-choice questions and sample answers for you to
                        test your knowledge as you progress through the course.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Course objectives to help you understand how
                        International Financial Reporting Standards (IFRS) are used around the world to explain how the
                        International Financial Reporting Standards Foundation (IFRSF) | International Accounting
                        Standards Board (IASB) work and how these are being changed to examine the fundamental
                        requirements of IFRS on a standard-by-standard basisto provide guidance on how to use IFRS in

                                               practice.</p>

                    <h4 class="clr-000 marg-btm-20 fnt-we-600 fnt-25">Who is it for?</h4>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">THIS course is an introduction to International
                        Financial Reporting Standards (IFRS). Nationally qualified accountants and auditors can now
                        update their skills to meet the challenges involved in adopting and implementing IFRS in their
                        workplace. An educational or vocational background in financial reporting is recommended before
                        starting the Cert IFRS. This course also benefits ACCA members who gained their qualification
                        prior to the introduction of IFRS. For ACCA members whose qualifications are already based on
                        IFRS, the Cert IFR is an opportunity to update their IFRS knowledge for recent IASB
                        publications.</p>


                                       </div>
                <div class="col-lg-6 col-md-10">
                    <div class="img-box inner-img">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/45.webp" alt="IFRS Coaching Classes in Coimbatore Tamilnadu ARA Education">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/46.webp" alt="IFRS Coaching Classes in Coimbatore Tamilnadu ARA Education">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <h3 class="fnt-we-600 marg-btm-30">
                        The Cert IFRS course covers the following topics:
                    </h3>

                    <ul class="css-class-list">

                        <li class="comm-para">The nature and operations of the IASB</li>
                        <li class="comm-para">The status and use of IFRS around the world</li>
                        <li class="comm-para">Presentation and profit</li>
                        <li class="comm-para">Accounting for assets and liabilities – part 1</li>
                        <li class="comm-para">Accounting for assets and liabilities – part 2</li>
                        <li class="comm-para">Group accounting</li>
                        <li class="comm-para">Disclosure standards</li>
                        <li class="comm-para">Principal differences between UK | US GAAP and IFRS.</li>
                        <li class="comm-para">Proposals for change</li>

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">

                <div class="col-lg-6 col-md-12">
                    <h3 class="fnt-we-600 marg-btm-30">

                        ABOUT DIPLOMA IN IFRS 2025:

                    </h3>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">The ACCA Diploma in IFRS has been developed by The
                        Association of Chartered Certified Accountants (ACCA).</p>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">Diploma in International Financial Reporting
                        (Dip.IFR) is for finance professionals who need to acquire more detailed understanding of IFRS
                        Dip.IFR is a fast and efficient solution that will develop the current knowledge of this field.
                    </p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">ACCA Diploma in IFRS (Dip.IFR) builds on the
                        technical and | or practical knowledge acquired from recognized country specific accountancy
                        qualifications or relevant work experience. The syllabus introduces the candidate to the wider
                        international framework of accounting and the system of standard setting. This course
                        concentrates on the application of conceptual and technical financial reporting knowledge that
                        candidates have already obtained to the specific requirements of financial reporting under
                        international financial reporting standards.</p>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">Over 113 countries require or permit the use of
                        International Financial Reporting Standards (IFRS) for publicly-traded companies. All listed
                        companies in the European Union (EU) have to prepare consolidated company accounts that comply
                        with IFRS. It also affects associates and subsidiaries of EU-listed companies.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Other countries such as Australia, Hong Kong and

                                    South Africa have already adopted IFRS or equivalents as their local Generally Accepted
                        Accounting Principles (GAAP). And many other countries around the world, including India, are
                        moving towards applying IFRS, which is having a significant impact on financial reporting The
                        Dip. IFR provides essential international financial reporting knowledge and principles that will
                        prepare candidates for the increasingly global market place and keep them abreast of
                        international developments and how they might apply to companies and businesses.
                    </p>
                    <h6 class="fnt-we-600 clr-ed283b fnt-20">IFRS Offical Website Link : <a
                            class="fnt-we-600 fnt-20 clr-ed283b" href="https://www.ifrs.org/"
                            target="_blank">www.ifrs.org</a>
                    </h6>


                                       </div>
                <div class="col-lg-6 col-md-10">
                    <div class="img-box inner-img">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/47.webp" alt="DIPLOMA Courses in ara education">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/48.webp" alt="UGC NET- LAW EXAM Coaching">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <h3 class="fnt-we-600 marg-btm-30">
                        IFRS CAREER OPPORTUNITIES 2025
                    </h3>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">After completing your Diploma you can easily get a
                        job in one of the following industries or you can start your own advisory and consultancy
                        company:</p>
                    <ul class="css-class-list">

                        <li class="comm-para"> Audit Firms</li>
                        <li class="comm-para"> Professional Advisory Companies</li>
                        <li class="comm-para"> Banking Companies</li>
                        <li class="comm-para"> Insurance Companies</li>
                        <li class="comm-para"> Any other company adopting IFR standards</li>

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">

                <div class="col-lg-6 col-md-12">
                    <h3 class="fnt-we-600 marg-btm-30">IFRS EXAM 2025:</h3>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">The Diploma in International Financial Reporting
                        (Dip.IFR) is assessed by a single three-hour written exam of 100 marks. You will have to achieve
                        a 50 percent score or above to complete the paper. The exam is held twice a year - in June and
                        December at ACCA's exam centers.</p>

                    <h3 class="fnt-we-600 marg-btm-30">IFRS DURATION & ELIGIBILITY 2025:</h3>

                    <ul class="list-sty">
                        <li class="comm-para"> The IFRS diploma course can be completed in six months.</li>

                                               <li class="comm-para"> If you are a professional accountant or auditor who works in practice or
                            business, and are qualified according to national accounting standards, then you are
                            eligible to take this ACCA IFRS diploma. If you have one of the following:</li>
                        <li class="comm-para"> Three years' relevant accounting experience (by submitting a letter from
                            your employer).</li>
                        <li class="comm-para"> Three years' relevant accounting experience (by submitting a letter from
                            your employer).</li>
                        <li class="comm-para"> An ACCA Certificate in International Financial Reporting plus two years'
                            work experience</li>

                    </ul>


                                       </div>
                <div class="col-lg-6 col-md-7">
                    <div class="img-box">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/49.webp" alt="IFRS Coaching Classes in Coimbatore Tamilnadu ARA Education">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs-coaching-class">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                    <div class="img-box inner-img">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/50.webp" alt="AIBE EXAM Coaching ">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <h3 class="fnt-we-600 marg-btm-30">
                        IFRS COURSE OBJECTIVES 2025:
                    </h3>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">The main objective of this Diploma is to learn how
                        to apply the International Financial Reporting Standards and the concepts and principles that
                        underpin these standards. On successful completion of this Diploma, candidates will be able to :
                    </p>
                    <ul class="css-class-list">

                        <li class="comm-para"> Understand and explain the structure of the framework of international
                            accounting.</li>
                        <li class="comm-para"> Apply relevant financial reporting standards to key elements of financial
                            reports.</li>
                        <li class="comm-para"> Identify and apply disclosure requirements for companies in financial
                            reports and notes.</li>
                        <li class="comm-para"> Identify and apply disclosure requirements for companies in financial
                            reports and notes.</li>

                    </ul>

                    <h3 class="fnt-we-600 marg-btm-30">IFRS EXAM FORMAT & DATES 2025</h3>
                    <ul class="css-class-list">
                        <li class="comm-para"> ACCA Diploma in IFRS (DipIFR) is assessed by a single three-hour written
                            exam. You will need to achieve a 50 per cent mark or above to complete the paper.</li>
                        <li class="comm-para"> The exam is held twice a year – in June and December at ACCA’s exam
                            centres.</li>
                        <li class="comm-para"> The exam is held twice a year – in June and December at ACCA’s exam
                            centres.</li>
                        <li class="comm-para"> <strong class="clr-ed283b"> Section A</strong> One ‘groups’ question 40
                            Marks</li>
                        <li class="comm-para"><strong class="clr-ed283b">Section B </strong> Three scenario questions 20
                            Marks Each (Total 60 Marks)</li>

                        <h3 class="fnt-we-600 marg-btm-30">IFRS EXAM FEES 2025:</h3>
                        <p class="clr-000 comm-para txt-jus">Your initial registration fee includes one exam attempt. A
                            further fee is charged for any re-sit.</p>

                </div>

            </div>
        </div>
    </section>

    <section class="faq-detail">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">

                <div class="col-lg-6 col-md-10 ">
                    <h5 class="faq-subtitle  wow fadeInUp" data-wow-delay="0.2s">FAQ’S</h5>
                    <h2 class="faq-title  wow fadeInUp" data-wow-delay="0.3s">Frequently Asked
                        Questions</h2>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Scope
                                    of IFRS course in the year 2025?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-text">
                                        International Financial Reporting Standards (IFRS) are designed as a common
                                        global language for business affairs so that company accounts are understandable
                                        and comparable across international boundaries.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is the pass percentage of IFRS in the year 2025?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-text">
                                        To graduate, you must receive 50%. Try to practise correctly with a pen and
                                        paper, just as you would during the primary exam, to become perfect through
                                        practise.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Which Institute is best for studying IFRS in 2025?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-text">
                                        ARA Education is the best Institute for studying IFRS both in online & Offline
                                        mode
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="faq-img   wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/faq-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.newsletter')

@endsection