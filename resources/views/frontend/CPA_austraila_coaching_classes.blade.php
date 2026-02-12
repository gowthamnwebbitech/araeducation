@extends('frontend.layout.app')
@section('title', "CIMA Coaching classes institute Coimbatore Best CIMA coaching center Tamilnadu India - ARA Education" )
@section('description', "Best No 1 Coaching Center for CIMA Knowledge CIMA Skill CIMA Professional  Coaching along with registration & study materials in Coimbatore Tamilnadu India. Top Pioneer Institute for CIMA Course giving more rank holders with high passing percentage. ARA Education is a CIMA Approved Gold Learning Partner" )
@section('keyword', "CIMA coaching in center in coimbatore ara education,CIMA Coaching classes in coimbatore ara education Tamilnadu India,CIMA Coaching Institute in coimbatore Tamilnadu,CIMA Skill Coaching classes in coimbatore,CIMA knowledge level Coaching in coimbatore Tamilnadu,CIMA Professional Coaching Classes in Coimbatore, Online CIMA Coaching Classes in coimbatore,online CIMA Knowledge coaching classes in coimbatore, CIMA F1 coaching classes in coimbatore tamilnadu India,CIMA F2 coaching classes in coimbatore tamilnadu,CIMA F3 Coaching Classes in coimbatore Tamilnadu india,CIMA F4 Coaching classes in coimbatore Tamilnadu India,CIMA F5 Coaching classes in coimbatore,CIMA F6 Coaching classes in coimbatore,CIMA F7 coaching classes in coimbatore Tamilnadu,CIMA F8 Coaching classes in coimbatore,CIMA F9 coaching Classes in coimbatore,CIMA P1 coaching classes in coimbatore Tamilnadu,CIMA P2 coaching classes in coimbatore,CIMA P3 Caoching classes in coimbatore Tamilnadu India, CIMA P4 Coaching Classes in coimbatore, CIMA P5 Coaching calsses in coimbatore tamilandu ARA Education, CIMA P6 Coaching Classes in coimabtore ara education. CIMA tutions coimbatore ara education, CIMA Training online, CIMA training coimbatore Ara Education" )
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
        border-bottom: 1px solid #e4e4e4;
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
                    <span class="banner-title">CPA Australia Coaching Classes</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CPA Australia Coaching Classes</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Best Coaching, Institute, Centre">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padd-both-40">
    <div class="container">
        <h1 class="text-center marg-btm-20 fnt-we-600 fnt-25">CPA AUSTRALIA COACHING CLASSES, CENTER, INSTITUTE,
            ACADEMY IN COIMBATORE</h1>


    </div>
</section>

<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">
                    <h2 class="about-title">CPA Australia Coaching Institute in Coimbatore - ARA EDUCATION
                    </h2>
                    <p class="clr-000 marg-btm-20">Ara Education is the No.1 CPA Australia Coaching in Tamilnadu.
                        ARA OVERSEAS EDUCATION has skilled and experienced faculty members in Coimbatore. ARA
                        OVERSEAS EDUCATION in Coimbatore offers the best CPA Australia Classes for both parts, each
                        with six sections. <a href="https://www.cpaaustralia.com.au/" class="common" target="_blank">https://www.cpaaustralia.com.au/</a></p>
                    <h2 class="about-title">What is CPA Australia 2025?</h2>
                    <p class="clr-000 marg-btm-20"> The CPA Australia CPA Program combines learning with practical
                        experience, utilizing globally applicable content to assist candidates in comprehending the
                        ever-changing challenges that face businesses today. The CPA Program offers the following
                        benefits in comparison to other accounting certifications:</p>
                    <ul class="list-sty">
                        <li class="comm-para"> Internationally accepted certification</li>
                        <li class="comm-para"> Only 6 papers to be completed</li>
                        <li class="comm-para"> Adaptable software</li>
                        <li class="comm-para"> twice-yearly examination</li>
                        <li class="comm-para"> Receive expert assistance for your exam preparation.</li>
                        <li class="comm-para"> Use online learning platforms to access expert resources.</li>


                    </ul>


                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/99.webp" alt="India's No-1 Professional Academy">
                </div>

            </div>
        </div>
    </div>
</section>


<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/100.webp" alt="Online Tuition in UK">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-16">
                <h3 class="fnt-we-600 marg-btm-30">
                    Why choose CPA Australia 2025?
                </h3>
                <p class="clr-000 comm-para txt-jus marg-btm-20 ">There are more factors besides a wide range of
                    professional options that should encourage you to pursue CPA Australia. In addition to granting
                    you the much-desired CPA License and demonstrating your expertise in the field of accounting,
                    CPA Australia offers numerous other advantages.</p>
                <p class="fnt-we-600 marg-btm-30 fnt-25">A few benefits of CPA Australia are outlined below:
                </p>
                <ul class="css-class-list">

                    <li class="comm-para"> Members of Certified CPA Australia are entitled to special financial and
                        monetary perks, such as no-cost transfers and low-interest loans.</li>
                    <li class="comm-para"> The majority of accounting and financial positions within a firm or
                        organization are open to certified CPA practitioners.</li>
                    <li class="comm-para"> The compensation packages provided to licensed members are just another
                        fantastic feature of CPA positions. Professionals with a license in accounting are estimated
                        to make $1 million more annually than non-CPAs.</li>
                    <li class="comm-para"> Licensed CPAs can find rewarding employment possibilities in a variety of
                        businesses all over the world.</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="padd-both-40 wrapper-table">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                <table class="table-main marg-btm-30">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">Monday 20 November</td>
                        <tr>
                            <td>Enrolment opens</td>
                        </tr>
                        <tr>
                            <td>My Online Learning access and study guides*</td>
                        </tr>
                        <tr>
                            <td>*Excluding Singapore Taxation, which has a hardcopy study guide only.</td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Monday 4 December</td>
                            <td>Exam scheduling opens</td>
                        </tr>

                        <tr>
                            <td rowspan="6">Thursday 4 January 2024</td>
                        <tr>
                            <td>Closing date for changes</td>
                        </tr>
                        <tr>
                            <td>Cancellations made after this date will not receive a refund</td>
                        </tr>
                        <tr>
                            <td>Last day to change to an alternative subject</td>
                        </tr>
                        <tr>
                            <td>Last day to update your postal address for delivery of the study guide</td>
                        </tr>
                        <tr>
                            <td>Last day for special material requests (Reasonable Adjustments)</td>
                        </tr>
                        </tr>

                        <tr>
                            <td> 10 January</td>
                            <td>Early bird enrolment closing date Wednesday</td>
                        </tr>
                        <tr>
                            <td> Monday 15 January</td>
                            <td>Guided Learning becomes available in My Online Learning</td>
                        </tr>

                        <tr>
                            <td rowspan="4">Monday 29 January</td>
                        <tr>
                            <td>Semester starts</td>
                        </tr>
                        <tr>
                            <td>All additional resources are made available in My Online</td>
                        </tr>
                        <tr>
                            <td>Learning, including Ask the Expert Forum in Guided Learning</td>
                        </tr>
                        </tr>

                        <tr>
                            <td rowspan="3">Tuesday 30 January</td>
                        <tr>
                            <td>Final enrolment closing date </td>
                        </tr>
                        <tr>
                            <td>Reasonable Adjustments – special exam arrangement closing date </td>
                        </tr>
                        </tr>

                        <tr>
                            <td> Monday 5 February</td>
                            <td>Exam scheduling close</td>
                        </tr>
                        <tr>
                            <td> Friday 23 February - Tuesday 5 March </td>
                            <td>Mid-semester test becomes available in Guided Learning </td>
                        </tr>
                        <tr>
                            <td> Tuesday 19 March</td>
                            <td>Increase in deferral fee </td>
                        </tr>
                        <tr>
                            <td> Tuesday 19 March</td>
                            <td>Practice exam one becomes available in Guided Learning</td>
                        </tr>
                        <tr>
                            <td> Friday 22 March</td>
                            <td>Practice exam two becomes available in Guided Learning</td>
                        </tr>
                        <tr>
                            <td> Sunday 7 April (11.59pm AEST)</td>
                            <td>Ask-the-Expert Forum becomes read only for all subjects (excluding Singapore
                                Taxation)</td>
                        </tr>



                        <tr>
                            <td> Wednesday 10 April - Sunday 28 April</td>
                            <td>Exam period</td>
                        </tr>
                        <tr>
                            <td> Sunday 14 April (11.59pm AEST)</td>
                            <td>Ask-the-Expert Forum becomes read only for Singapore Taxation</td>
                        </tr>

                        <tr>
                            <td>Tuesday 16 April</td>
                            <td> Exam date for Singapore Taxation</td>
                        </tr>
                        <tr>
                            <td>Friday 3 May</td>
                            <td> Special consideration application closing date </td>
                        </tr>
                        <tr>
                            <td>Friday 7 June (during business hours AEST)</td>
                            <td> Exam results released via CPA Australia website </td>
                        </tr>



                    </tbody>
                </table>

            </div>
            <p class="fnt-we-600 marg-btm-30 fnt-20">Note: All dates are subject to change. AEST and AEDT refers to
                Australian Eastern Standard Time (AEST) or Australian Eastern Daylight Time (AEDT). All closing
                dates are at midnight AEST or AEDT on the day specified.</p>
        </div>
    </div>
</section>

<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 align-items-center">

            <div class="col-lg-6 col-md-12">
                <h3 class="fnt-we-600 marg-btm-30">
                    Why Should a CA from India Enroll in the CPA Australia Program?
                </h3>
                <p class="clr-000 comm-para txt-jus marg-btm-20">A Mutual Recognition Agreement (MRA) between CPA
                    Australia and the Institute of Chartered Accountants in India (ICAI) allows certified CAs to get
                    the following advantages:</p>
                <ul class="css-class-list">


                    <li class="comm-para">Write just two exams for the CPA Program.

                    </li>
                    <li class="comm-para"> After registering as an Associate Member, this additional international
                        qualification can be achieved in two years and is recognized globally</li>
                </ul>
                <h3 class="clr-000 fnt-we-600 fnt-20">Exemptions from MOU | MRA Applicable To Indian CA With ICAI</h3>

                <p class="clr-000 comm-para txt-jus marg-btm-20">Eligible ICAI members must successfully finish the
                    CPA Program subject Global Strategy and Leadership & Online study unit Better Practice in
                    Governance and Accountability within two years of joining the organization in order to receive
                    the CPA designation.</p>

                <p class="clr-000 comm-para txt-jus marg-btm-20">Subject: Global Strategy and Leadership in the CPA
                    Program. The course is offered semester-by-semester, and enrollment through My CPA Program is
                    required.</p>

                <p class="clr-000 comm-para txt-jus marg-btm-20">After studying the material, participants in the
                    online study unit Better Practice in Governance and Accountability must pass an online
                    multiple-choice exam to finish it. The candidate may finish this whenever and at their own
                    speed. There are forty multiple-choice questions in the evaluation, and a 75% passing score is
                    required. There are three opportunities to try. The product will expire if the assessment is not
                    finished within twelve (12) months of the purchase. Following unit completion, the candidate
                    will receive 12 CPD hours.</p>

            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/101.webp" alt="Online Tuition in Bahrain">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/102.webp" alt="Online Tuition in New Zealand">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <h3 class="fnt-we-600 marg-btm-30">
                    Australian CPA Eligibility 2025</h3>

                <p class="clr-000 comm-para txt-jus marg-btm-20">The Australian Securities and Investments
                    Commission (ASIC) has set the following standards that applicants must meet in order to apply
                    for the CPA Australia certification exam.</p>

                <h4 class="clr-000 marg-btm-20 comm-para">The eligibility of applying for membership in Associate
                    CPA Australia is as follows:</h4>

                <ul class="list-sty">
                    <li>A bachelor's degree in accounting or management with approval from an accredited university
                        or other institution.</li>
                    <li>Candidates from diverse backgrounds are also eligible to apply, but they have to clear the
                        CPA Foundation Program before they can apply for the CPA Program.
                    </li>
                </ul>

            </div>

        </div>
    </div>
</section>

<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">

            <div class="col-lg-6 col-md-12">


                <h3 class="fnt-we-600 marg-btm-30 fnt-25">CPA Australia Exam Pattern 2025</h3>
                <p class="clr-000 comm-para txt-jus marg-btm-20">There are two dates for the CPA Australia exam each
                    year. Exams for the CPA Australia Program are broken up into two semesters, with a maximum of
                    three CPA papers each semester. Candidates must appear for and pass six exams—two elective
                    papers and four major subjects—in order to become certified by CPA Australia.</p>
                <h3 class="fnt-we-600 marg-btm-30 fnt-25">Australian CPA Syllabus 2025</h3>
                <h4 class="clr-000 marg-btm-20 comm-para">CPA Australia Foundation Syllabus 2024</h4>
                <p class="clr-000 comm-para txt-jus marg-btm-20">In the case of the CPA Australia Foundation
                    Program, there are six papers or subjects for which candidates need to take the exam to qualify
                    for the next round of exams under the Australia CPA Program.</p>
                <h4 class="clr-000 marg-btm-20 comm-para">The CPA Australia Foundation Program comprises six exams:
                </h4>
                <ul class="list-sty">
                    <li class="comm-para"> Economics and Markets</li>
                    <li class="comm-para"> Foundation of Accounting</li>
                    <li class="comm-para"> Fundamentals of Business Law</li>
                    <li class="comm-para"> Business Finance</li>
                    <li class="comm-para"> Financial Accounting and Reporting</li>
                    <li class="comm-para"> Management Accounting</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="img-box inner-img">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/103.webp" alt="Online Tuition in Qatar">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                <div class="img-box inner-img">
                  <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/104.webp" alt="Online Tuition in Canada">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <h3 class="fnt-we-600 marg-btm-30">
                    CPA Australia Syllabus 2025
                </h3>
                <p class="clr-000 comm-para marg-btm-20">The program comprises of 4 compulsory subjects and 2
                    electives and submission of 36 months of experience requirement.</p>


                <h3 class="fnt-we-600 marg-btm-30">COMPULSORY SUBJECTS:</h3>
                <ul class="css-class-list">
                    <li class="comm-para"> ETHICS & GOVERNANCE</li>
                    <li class="comm-para"> FINANCIAL REPORTING</li>
                    <li class="comm-para"> STRATEGIC MANAGEMENT ACCOUNTING</li>
                    <li class="comm-para"> GLOBAL STRATEGY & LEADERSHIP</li>
                </ul>
                <h3 class="fnt-we-600 marg-btm-30">ELECTIVE SUBJECTS [ANY TWO]:</h3>
                <ul class="css-class-list">
                    <li class="comm-para"> FINANCIAL PLANNING FUNDAMENTALS</li>
                    <li class="comm-para"> ADVANCED TAXATION*</li>
                    <li class="comm-para"> ADVANCED AUDIT & ASSURANCE*</li>
                    <li class="comm-para"> FINANCIAL RISK MANAGEMENT</li>
                    <li class="comm-para"> RISK ADVICE & INSURANCE</li>
                    <li class="comm-para"> INVESTMENT STRATEGIES</li>
                    <li class="comm-para"> CONTEMPORARY BUSINESS ISSUES</li>
                </ul>


                <p class="clr-000 comm-para txt-jus marg-btm-20">Candidates who have not completed recognized
                    studies in taxation and | or auditing, must select Advanced Taxation* and | or Advanced Audit and
                    Assurance* papers as electives.</p>
            </div>

        </div>
    </div>
</section>



<section class="cs-coaching-class">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">

            <div class="col-lg-6 col-md-12">
                <h3 class="fnt-we-600 marg-btm-30">

                    Australian CPA Fees Details 2025

                </h3>

                <p class="clr-000 comm-para txt-jus marg-btm-20">These are the costs that you must pay CPA Australia
                    directly. Tuition fees are not included in this.</p>

                <ul class="list-sty">
                    <li class="comm-para"> Enrollment fees</li>
                    <li class="comm-para"> Membership fees</li>
                    <li class="comm-para"> Exam fees</li>

                </ul>
                <h3 class="fnt-we-600 marg-btm-20">CPA AUSTRALIA ENROLLMENT FEES 2025</h3>
                <table class="table-main marg-btm-30">
                    <thead>
                        <tr>
                            <th>CPA Program </th>
                            <th>Per Paper Fees in AUD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Subject enrolment</td>
                            <td> (early bird) $1335</td>
                        </tr>
                        <tr>
                            <td>Subject enrolment</td>
                            <td> $1505</td>
                        </tr>
                        <tr>
                            <td>Standard exam deferral</td>
                            <td> $381</td>
                        </tr>
                        <tr>
                            <td>*Late exam deferral (2024)</td>
                            <td> $514</td>
                        </tr>
                        <tr>
                            <td>Subject material re-order </td>
                            <td> $106</td>
                        </tr>
                    </tbody>
                </table>




            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                                      <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/105.webp" alt="Online Tuition in Australia"> 

                </div>
            </div>
        </div>
    </div>
</section>




<section class="faq-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 ">
                <div class="faq-img   wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/faq-img.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <h5 class="faq-subtitle  wow fadeInUp" data-wow-delay="0.2s">FAQ’S</h5>
                <h2 class="faq-title  wow fadeInUp" data-wow-delay="0.3s">Frequently Asked
                    Questions</h2>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Where
                                What are the Advantages of CPA Australia Program?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <ul class="accordion-list">
                                    <li>Internationally recognized qualification</li>
                                    <li>Only 6 papers to complete</li>
                                    <li>Flexible program structure</li>
                                    <li>Exams conducted twice a year</li>
                                    <li>High-level Demand for CPA Professionals</li>
                                    <li>Access to professional resources through online learning platforms</li>
                                </ul>
                                <p class="accordion-text">
                                    CPA stands for Certified Practicing Accountant, and it means you’re a finance,
                                    accounting and business professional with
                                    a specific qualification. Having a CPA means you’re highly respected and
                                    regarded by employers and clients, and gives
                                    you an internationally recognised qualification.
                                </p>
                                <p class="accordion-text">
                                    CPA Australia is also one of the world’s largest accounting bodies, supporting
                                    and representing the views and concerns
                                    of members in more than 100 countries. Having a CPA opens up opportunities
                                    around the world and gives your career a
                                    global boost.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Which is the best CPA Australia Coaching Institute in Coimbatore-Tamilnadu-India?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    ARA Education is the best CPA Australia Coaching institute that provides Online
                                    |Offline| Full-time| Part-time Coaching
                                    Provider with One-time fee payment till passing |Study Notes| Daily and Weekly
                                    basis Tests| Doubt Clarification Sessions
                                    |Revision Tests| Model Exams| Campus Job Placements etc... For further
                                    information, please call us @ +91 422 - 4355539 |
                                    94 89 87 79 79
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Is online coaching beneficial for CAP Australia students in
                                Coimbatore-Tamilnadu-India-Globally?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Yes, ARA Education's online CPA Australia Coaching is the most convenient way to
                                    complete the CPA Australia Course
                                    comfort from your own home anywhere on the world. Which can save your time on
                                    traveling (or) Hostel expanses. The
                                    classes will be streaming online live virtual interactive mode and Only your
                                    physical body presence is not available in
                                    our Institute and other all activities are very same as face to face live
                                    classes.
                                </p>
                            </div>
                        </div>
                    </div>






                </div>

            </div>

        </div>
    </div>
</section>


@include('frontend.newsletter')


@endsection