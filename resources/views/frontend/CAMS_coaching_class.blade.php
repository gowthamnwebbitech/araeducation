@extends('frontend.layout.app')
@section('title', "Certified Anti Money Laundering Specialist (ACAMS) Coaching" )
@section('description', "ARA EDUCATION provides best CAMS intensive training program both in offline and online mode dedicated towards providing participants with the knowledge and skills to identify, assess, and mitigate money laundering risks." )
@section('keyword', "cams, Acams, camscoachingcoimbatore, onlinecamscoaching,camscoachinginstitute,Certified Antimoneylaundering, ")
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
                <span class="banner-title">CAMS Coaching Classes</span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CAMS Coaching Classes</li>
                </ol>
            </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Online CA Final Coaching">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cams-coaching-class">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="course-title">ARA EDUCATION is the best coaching institute for The Certified Anti Money
                    Laundering Specialist (CAMS) 2025</h1>
                <h1 class="course-title-1">Certified Anti-Money Laundering Specialist-(ACAMS) 2025</h4>
                <p class="course-text">The CAMS credential is globally recognized as a serious dedication to
                    preventing money laundering in the financial
                    system. Achieving an ACAMS Certification exemplifies your superior level of understanding of
                    international
                    anti-financial crime principles. As a globally recognized and respected certification, CAMS
                    increases your professional
                    value and can help you attain a position in the AML field or further your AML career.
                    Institutions, governments, and
                    regulators worldwide acknowledge CAMS as the leading AML certification standard. Obtaining CAMS
                    Certification is perfect
                    for those currently in or interested in entering the financial crime prevention, detection, and
                    control field. <a href="https://www.acams.org/en" class="common" target="_blank">https://www.acams.org/en</a></p>
            </div>
            <div class="col-lg-5">
                <div class="course-vector-img">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/106.webp" alt="LLB 5 Years Entrance Coaching">

                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <div class="course-vector-img">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/107.webp" alt="ARA Education CAMS Coaching Classes">
                    </div>
                </div>
                <div class="col-lg-7">

                    <h4 class="course-title-1">ALL ABOUT THE COURSE DETAILS OF CAMS 2025</h4>
                    <p class="course-text">The CAMS certification signifies a high level of comprehension of global
                        AML | CFT principles. Achieving success in the
                        CAMS test establishes you as an expert in AML | CFT and aids in lessening financial crime
                        dangers for institutions.
                        Recognized and respected globally, the CAMS Certification is considered the top standard in
                        AML | CFT compliance by
                        governments worldwide. Individuals who obtain the CAMS certification experience various
                        advantages, such as enhancing
                        their professional worth by gaining a deeper knowledge of strategies for detecting and
                        preventing financial crimes,
                        safeguarding their organization from money laundering risks, reducing financial crime
                        liabilities, fulfilling mandatory
                        AML training obligations through thorough preparation, and demonstrating their AML
                        proficiency to auditors and
                        regulators.</p>
                </div>

            </div>
        </div>
        <div class="mt-5">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-7">
                    <h4 class="course-title-1">What are the advantages of ACAMS career 2025?</h4>
                    <p class="course-text">The CAMS credential is acknowledged by employers in private and
                        government sectors and regulators, examiners, and law
                        enforcement globally, demonstrating expertise in money laundering detection and prevention
                        for certified AML
                        professionals.</p>
                    <p class="course-text">The demand for AML professionals in the financial industry has increased,
                        making AML Compliance a specialized field.
                        This program is ideal for those wanting to start a career in AML Compliance or already
                        working in a junior AML
                        compliance role..</p>
                </div>
                <div class="col-lg-5">
                    <div class="course-vector-img">
                      <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/108.webp">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h4 class="course-title">CAMS SYLLABUS COURSE DETAILS 2025</h4>
            <p class="course-text">The Certified Anti-Money Laundering Specialist (CAMS) examination
                consists four parts. Below you will find the test<br>
                objectives for each of the parts as well as the overall percentage weight of each part.</p>
            <div class="row gy-4 align-items-center">

                <div class="col-lg-7">
                    <h4 class="course-title-1">Topic 1: Risks and methods of money laundering and terrorism
                        financing (26%)</h4>
                    <ul class="integrated-list">
                        <li>Overview of ML | TF</li>
                        <li>Banks and Other Depository Institutions</li>
                        <li>Nonbank Financial Institutions</li>
                        <li>Nonfinancial Businesses and Professions</li>
                        <li>International Trade Activity</li>
                        <li>Risk Associated with New Payment Products and Services</li>
                        <li>Corporate Vehicles Used to Facilitate Illicit Finance</li>
                        <li>Terrorist Financing</li>
                    </ul>

                </div>
                <div class="col-lg-5">
                    <div class="course-vector-img">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/109.webp" alt="Online coaching in India">
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="course-vector-img">
                           <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/110.webp" alt="Best CA Academy">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h4 class="course-title-1">Topic 2: Compliance standards for anti-money laundering and
                            combating the financing of terrorism (CFT) (25%)</h4>
                        <ul class="integrated-list">
                            <li>Financial Action Task Force</li>
                            <li>The Basel Committee on Banking Supervision</li>
                            <li>European Union Directives on Money Laundering</li>
                            <li>FATF-Style Regional Bodies</li>
                            <li>Other Influencing Bodies</li>
                            <li>Key US Legislative and Regulatory Initiatives</li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="mt-5">
                <div class="row gy-4 align-items-center">

                    <div class="col-lg-7">
                        <h4 class="course-title-1">Topic 3: Anti-money laundering (AML), CFT and sanctions
                            compliance programs (28%).</h4>
                        <ul class="integrated-list">
                            <li>Assessing AML | CFT Risk</li>
                            <li>AML | CFT Program</li>
                            <li>Know Your Customer</li>
                            <li>Monitoring and Screening</li>
                            <li>Money Laundering and Terrorist Financing Red Flags</li>
                        </ul>

                    </div>
                    <div class="col-lg-5">
                        <div class="course-vector-img">
                           <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/111.webp" alt="UGC NET- LAW EXAM Coaching">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="course-vector-img">
                           <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/112.webp" alt="Online Tuition in Newzeland">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h4 class="course-title-1">Topic 4: Conducting or supporting investigations process (21%)
                        </h4>
                        <ul class="integrated-list">
                            <li>Investigations Initiated by the Financial Organization</li>
                            <li>Investigations Initiated by Law Enforcement</li>
                            <li>AML | CFT Cooperation between Countries.</li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="mt-5">
                <h4 class="course-title">Job Opportunities for CAMS 2025</h4>
                <p class="course-text">After Completing CAMS Course you have the following suitable positions</p>
                <ul class="integrated-list">
                    <li>Compliance Officers,</li>
                    <li>Chief Compliance Officer</li>
                    <li>Chief Internal Control Officer </li>
                    <li>Director Chief Risk Officer </li>
                    <li>DirectorCompliance </li>
                    <li>Risk Manager</li>
                    <li>Compliance & Risk Director</li>
                    <li>AML Officers | Professionals working in AML</li>
                    <li>Money Laundering Reporting Officers (MLROs)</li>
                    <li>Know Your Customer (KYC) analysts</li>
                    <li></li>
                    <li>Auditors and any other professionals with responsibilities for financial compliance within
                        their organization.
                    </li>
                    <li>Banking Professionals</li>
                    <li>Compliance Professionals</li>
                    <li>KYC Executives</li>
                    <li>Bank Auditors</li>
                    <li>NBFC’s Professionals</li>
                    <li>AML Officers</li>
                    <li>Professional desiring to prepare for the CAMS exam</li>
                    <li>Employees in banks and financial institutions especially</li>
                    <li>Managers and employees of regulatory compliance</li>
                    <li>Consultants in ERM practice who intend to specialize in the AML area</li>
                    <li>BPO | KPO employees who perform research, investigations, and other core AML processes</li>
                </ul>
            </div>
            <div class="mt-5">
                <h4 class="course-title">CAMS Exam Format 2025</h4>
                <ul class="integrated-list">
                    <li>Single Exam</li>
                    <li>Total 120 Questions (One Mark Each)</li>
                    <li>Passing Score (75 Marks)</li>
                    <li>3.5 Hours (Exam Time)</li>
                    <li>Multiple Choice Questions</li>
                    <li>No Negative Marking</li>
                </ul>
            </div>
            <div class="mt-5">
                <h4 class="course-title">CAMS Eligibility Criteria- 2025:</h4>
                <p class="course-subtitle text-decoration-underline">The candidate who wants to give the Certified
                    Anti-Money Laundering
                    Specialist (CAMS) examination must have:</p>
                <ul class="integrated-list">
                    <li>An active ACAMS membership</li>
                    <li>They must have 40 credits in education (10 for Associates, 20 for Bachelors, 30 for Masters,
                        40 for JD or Ph.D.), work
                        experience (10 credits for each year of experience), and training (1 credit for each hour of
                        financial-crime related
                        training).</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="faq-detail">
    <div class="container">
        <div class="row gy-4  align-items-center justify-content-center">

            <div class="col-lg-6 col-md-10 ">
                <h5 class="faq-subtitle  wow fadeInUp" data-wow-delay="0.2s">FAQ’S</h5>
                <h2 class="faq-title  wow fadeInUp" data-wow-delay="0.3s">Frequently Asked
                    Questions</h2>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are ACAMS and CAMS 2025?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    ACAMS is the world’s leading membership association that aims to strengthen the
                                    skills and experience of fraud detection
                                    in public and private sectors both. Their certification (CAMS) is recognized by
                                    the financial authorities worldwide.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is CAMS the best AML certification 2025?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    CFCS is a new certification and is not globally recognized. CFE is beneficial
                                    for those who want to pursue their career
                                    as fraud investigators. CAMS is the only certification that is widely recognized
                                    as the standard in the
                                    anti-money-laundering certifications.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is there an alternative to the CAMS certification 2025?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Yes, there are many alternatives to the CAMS certification:
                                </p>
                                <p class="accordion-text">
                                    CFCs (Certification in Financial Crime)
                                </p>
                                <p class="accordion-text">
                                    CFE (Certified Fraud Examiner)
                                </p>
                                <p class="accordion-text">
                                    CAFP (Certified AML and Fraud Professional)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I retake the exam 2025?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Candidates who do not pass the exam on their first attempt can retake it after
                                    30 days.
                                </p>
                                <p class="accordion-text">Candidates who do not pass the exam on their second
                                    attempt can retake it after
                                    60 days.</p>
                                <p class="accordation-text">Candidates who do not pass the exam on their third or
                                    more attempt can retake it after 90 days.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can I write the CAMS EXAM in remote proctored mode 2025?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Yes. You may schedule an online proctored exam by signing in to the ACAMS
                                    Website and click on the exam you wish to
                                    schedule. Once at the Delivery Option page of the Pearson VUE website, after
                                    selecting “Online Proctored Exam” you will
                                    have the option to choose “Home or Office”.
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
    </div>a
</section>

@include('frontend.newsletter')

@endsection