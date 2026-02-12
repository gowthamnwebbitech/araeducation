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
                <span class="banner-title">CIMA Coaching Classes</span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CIMA Coaching Classes</li>
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

<section class="padd-both-40">

    <h1 class="text-center marg-btm-20 fnt-we-600 fnt-25">BEST CIMA COACHING CLASSES, CENTER, INSTITUTE, ACADEMY IN
        COIMBATORE  TAMILNADU, INDIA</h1>
    <h2 class="text-center marg-btm-20 fnt-we-600 fnt-20">CIMA Coaching Institute in Coimbatore - ARA EDUCATION</h2>

</section>



<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">

                    <h2 class="about-title">CIMA Coaching Institute in Coimbatore - ARA EDUCATION</h2>


                    <p class="clr-000 marg-btm-20 comm-para txt-jus"> Ara Education is the No.1 CIMA Coaching in
                        Tamilnadu. ARA EDUCATION has skilled and experienced faculty members for providing classes
                        for CIMA classes online and offline in Coimbatore tamilnadu. The CIMA (Chartered Institute
                        of Management Accountants) was founded in 1919. It is known to be the largest and leading
                        professional body of management accountants across the world, with 229,000+ members in 176
                        countries. The members and students of CIME work in commerce, industry, non-profit
                        organizations, and public sectors. Also, the CIMAs work closely with sponsors and employers
                        for leading-edge research, updating their professional experience requirements and
                        qualification, and continuing professional development for ensuring it remains the choice of
                        employers while recruiting the trained business leaders.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">In the CIMA’s activities, ethics and
                        professionalism are at the core, with every student and member bound by the robust standards
                        in such a way that the expertise, integrity, and vision are brought together.Besides, CIMA
                        has formed a joint venture with AICPA to establish the CGMA (Chartered Global Management
                        Accountant) designation with the global quality standard of management accounting. The CGMA
                        designation recognizes the committed and talented management accountants with the skill and
                        discipline to drive strong performance in business.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">The world-renowned professional organization
                        CIMA, or the Chartered Institute of Management Accountants, provides corporate executives
                        with the information and abilities they need to make wise decisions. If you want to work in
                        management accounting, CIMA is the best place to start. With over 210,000 members in 178
                        nations, CIMA provides a plethora of tools and chances for career advancement.</p>

                    <p class="clr-000 marg-btm-20 comm-para txt-jus">A globally recognized certification that
                        attests to one's proficiency in financial management is the CIMA. In the world of finance,
                        it is regarded as one of the most demanding and esteemed degrees accessible. In addition,
                        Professionals from all throughout the world hold the CIMA qualification, and top companies
                        greatly value those who do. The CIMA certificate is unquestionably for you if you want to
                        work in finance or if you are currently employed in the industry and wants to advance in
                        your position. <a href="https://myfuture.cimaglobal.com/" class="common" target="_blank">https://myfuture.cimaglobal.com/</a></p>



                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/" alt="Online FRM Coaching">
                </div>

            </div>
        </div>
    </div>
</section>


<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">

            <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/76.webp" alt="LLB 3 Years Entrance Coaching">
                </div>

            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">

                    <h2 class="about-title">Why Study CIMA 2025 ?</h2>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">This CIMA certification is the most prestigious
                        worldwide technical portfolio development program for management professionals.</p>

                    <ul class="list-sty">

                        <li class="comm-para">The benefit of investigating career or business prospects</li>

                        <li class="comm-para"> CIMA allows students to study at their own speed and manage their
                            work and studies for maximum learning.</li>

                        <li class="comm-para"> The CIMA qualification will open up a wider with businesses all
                            across the world.</li>

                        <li class="comm-para"> You can learn a wide range of skills and knowledge.</li>

                        <li class="comm-para"> You can start your own business, finance.</li>

                    </ul>

                    <h2 class="about-title">CIMA Eligibility 2025</h2>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">CIMA is divided into Certification Level and
                        Professional Levels.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">A certification for entry-level business
                        accounting is the CIMA Qualification.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Pursuing Operational Level Studies requires a
                        certain level of skill in accounting or business studies.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">One should have one of these to qualify for the
                        Operational Exam:</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">CIMA Qualification in Business Accounting</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Master's in Accounting or MBA</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">Membership of ICWAI: Any relevant qualification
                        to get an exemption from the CIMA Certificate in Business Accounting</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">For Management Level studies, CIMA Operational
                        level studies and Operational Case studies should be cleared.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">And for Strategic Level studies, operational
                        and management level studies, along with their case studies, should be completed and
                        cleared.</p>

                </div>
            </div>

        </div>
    </div>
</section>



<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">

                    <h2 class="about-title">Scope of CIMA 2025</h2>


                    <p class="clr-000 comm-para txt-jus marg-btm-20">The reach of CIMA is rapidly expanding both in
                        India and beyond. A student who completes CIMA is not only qualified to pursue a career in
                        accounting, finance, or management accounting, but they are also qualified to work in
                        management fields. The CIMA qualification is distinct from other professional qualifications
                        due to its unique proposal.
                        Additionally, CIMA grants you a certification, an advanced diploma, or membership, which
                        broadens your horizons both in India and internationally, upon completion of each level.
                        Additionally, the CIMA's affiliation with the AICPA in the US has contributed to the
                        expansion of opportunities.</p>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">
                        MNC companies and the Big Four consulting firms (PwC, Deloitte, KPMG, and EY) employ CIMAs
                        in India at every level for a variety of positions related to financial reporting,
                        management accounting, Finance and Management.
                    </p>




                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/76.webp" alt="CLAT UG & PG Entrance Coaching">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center"> 
            <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/77.webp" alt="India's No-1 Professional Academy">
                </div> 
            </div> 
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">

                    <h2 class="about-title marg-btm-30">CIMA Syllabus 2025</h2>


                    <h4 class="clr-000 marg-btm-20 fnt-20 fnt-we-600">CIMA's course is segregated into four levels:
                    </h4>

                    <ul class="list-sty">
                        <li class="list-sty"> Certificate Level</li>
                        <li class="list-sty"> Operational Level</li>
                        <li class="list-sty"> Management Level</li>
                        <li class="list-sty"> Strategic Level</li>

                    </ul>
                    <h4 class="clr-000 marg-btm-20 fnt-20 fnt-we-600">Certificate Level (Certificate in Accounting)
                    </h4>
                    <ul class="list-sty">
                        <li class="comm-para">It is an entry-level course and can be pursued after completing Class
                            X.</li>
                        <li class="comm-para">Subjects: BA1 – Fundamentals of Business Economics</li>
                        <li class="comm-para">BA 2 – Fundamentals of Management Accounting</li>
                        <li class="comm-para">BA 3 – Fundamentals of Financial Accounting</li>
                        <li class="comm-para">BA 4 – Fundamentals of Ethics, Corporate Governance, and Business Law
                        </li>
                        <li class="comm-para">Exam pattern: 4 Objective-type Exams</li>
                    </ul>



                </div>
            </div> 
        </div>
    </div>
</section> 

<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">

                    <h2 class="about-title">The Operational Level (CIMA Diploma in Management Accounting):
                    </h2>
                    <p class="clr-000 comm-para txt-jus marg-btm-20"> It generally covers the role of Junior
                        Accountants and gives you a good understanding and knowledge of how to prepare financial
                        statements, provide management accounting information, and use appropriate tools to make
                        business decisions. This level covers primarily three areas:</p>
                    <ul class="list-sty">
                        <li class="comm-para">E1: Organizational Management</li>
                        <li class="comm-para">P1: Management Accounting</li>
                        <li class="comm-para">F1: Financial Reporting and Taxation</li>
                        <li class="comm-para">Exam pattern: 3 Objective type Exams and 1 Case study Exam</li>
                    </ul>

                    <h4 class="clr-000 marg-btm-20 fnt-25 fnt-we-600">Management Level (CIMA Advance Diploma in
                        Management Accounting):</h4>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">This one covers the role of the Manager who
                        connects the Sr. Management with employees. One will learn how to prepare group accounts,
                        make pricing and product decisions, and manage projects and relationships.</p>
                    <ul class="list-sty">
                        <li class="comm-para">Subjects: BA1 – Fundamentals of Business Economics</li>
                        <li class="comm-para">E2: Project and Relationship Management</li>
                        <li class="comm-para">P2: Advanced Management Accounting</li>
                        <li class="comm-para">F2: Advanced Financial Reporting</li>
                        <li class="comm-para">Exam pattern: 3 Objective type Exams and 1 Case study Exam</li>

                    </ul>


                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/78.webp" alt="Other Online Course Specific tuituons">
                </div>

            </div>
        </div>
    </div>
</section>


<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-7 order-1 order-lg-0">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/79.webp" alt="CIMA Strategic Level Coaching Classes">
                </div>

            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">

                    <h2 class="about-title marg-btm-30">Strategic Level</h2>


                    <p class="clr-000 comm-para txt-jus marg-btm-20"> This advanced level prepares you for the
                        Senior Managerial role. The syllabus concentrates on making strategic decisions and
                        providing the context for implementing those decisions. Candidates learn how to formulate
                        financial strategy, manage strategic relationships, and identify and manage risk.</p>

                    <ul class="list-sty">
                        <li class="comm-para">Subjects: E3 Strategic Management</li>
                        <li class="comm-para">P3 Risk Management</li>
                        <li class="comm-para">F3 Financial Strategy</li>
                        <li class="comm-para">Exam pattern: 3 Objective type Exams and 1 Case study Exam</li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-detail">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="about-left">

                    <h2 class="about-title text-center">Job Roles of CIMA 2025</h2>


                    <div class="wrapper-table">
                        <table class="table-main">
                            <thead>
                                <tr>
                                    <th>Accounting</th>
                                    <th>Management Accounting</th>
                                    <th>Risk Management</th>
                                    <th>Financial Management & Treasury</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Financial Reporting</td>
                                    <td> Budgeting | Forecasting</td>
                                    <td> Risk Identification & Reporting</td>
                                    <td> Investment Appraisal</td>
                                </tr>
                                <tr>
                                    <td>Fixed Assets Accounting</td>
                                    <td> Financial Planning & Analysis </td>
                                    <td> Monitoring Risk</td>
                                    <td> Cash & Working Capital Management</td>
                                </tr>
                                <tr>
                                    <td>Accounts Payable | Receivable, etc.</td>
                                    <td> Variance Analysis, etc.</td>
                                    <td> Risk Mitigation, etc.</td>
                                    <td> Foreign Exchange Management, etc.</td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
</section>

<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/80.webp" alt="Online Clat Coaching">
                </div>

            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">

                    <h2 class="about-title marg-btm-30">How long does it take to complete CIMA 2025?</h2>

                    <ul class="list-sty">

                        <li class="comm-para">10 +2 | undergraduate | Graduate with non-commerce background</li>
                        <li class="comm-para">Duration: 3.5 years</li>
                        <li class="comm-para">Exemption: Nil</li>
                        <li class="comm-para">10+2 pass outs</li>
                        <li class="comm-para">Duration: 3 years</li>
                        <li class="comm-para">CIMA exempts you from 5 papers: BA1, BA3, BA4, P1 & OCS</li>
                        <li class="comm-para">Graduate with Commerce background</li>
                        <li class="comm-para">Duration: You can complete the complete course in 2 to 2.5 years</li>
                        <li class="comm-para">Exemption: You get exemption from 4 papers: BA1, BA2, BA3, and BA4
                        </li>
                        <li class="comm-para">CA Inter cleared</li>
                        <li class="comm-para">Duration: 2 years</li>
                        <li class="comm-para">Six papers can be exempted: BA1, BA2, BA3, BA4, P1, and F1</li>
                        <li class="comm-para">MBA | M.Com Duration: 1 year</li>
                        <li class="comm-para">After completing the post-graduation from the commerce stream, you can
                            opt for exemption from 11 papers: BA1, BA2, BA3, BA4, P1, F1, E1, OCS, E2, P2, and F2
                        </li>
                        <li class="comm-para">CA | CMA | Graduate (75%) +3 years work exp. | CEO | CFO</li>
                        <li class="comm-para">Duration: 6 months</li>
                        <li class="comm-para">Exemption: 15 papers: BA1, BA2, BA3, BA4, P1, F1, E1, MCS, E2, P2, F2,
                            OCS, E3, P3 and F3</li>

                        <li class="comm-para">How much does CIMA cost:
                            The CIMA course fees without any paper exemption are between INR 3.5 Lakh to 4 Lakh.
                        </li>





                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">


                    <h2 class="about-title marg-btm-30">How long does it take to complete CIMA 2025?</h2>

                    <ul class="list-sty">

                        <li class="comm-para">Subscription fees: An annual subscription fee must be cleared on
                            January 1st.</li>
                        <p class="fnt-we-600 marg-btm-20">The entire fee is divided into four categories:</p>
                        <li class="comm-para">Registration fees: It is a one-time fee, including the first year's
                            subscription fee. (CIMA's subscription year starts on January 1st and ends on December
                            31st)</li>
                        <li class="comm-para">Exam Fees: For every examination, you need to clear the fees before
                            sitting for the respective exam.</li>
                        <li class="comm-para">Exemption fees: If any of the papers is exempted, you need to clear
                            the exemption fee per paper, which is generally the exam fee of the corresponding paper.
                        </li>
                        <li class="comm-para">CIMA EXAM STRUCTURE: To sit in the examination, one should have
                            cleared the Certification program from CIMA or have a relevant master's degree or
                            equivalent accounting qualification.</li>
                        <li class="comm-para">CIMA's examination paper at every level comprises topics based on
                            Enterprise, Performance, and Financial, covering organization management, management
                            accounting, and financial reporting.</li>
                        <li class="comm-para">EXAM PATTERN: The objective paper is a 90 minutes multiple choice
                            question paper conducted on Pearson's VUE platform.</li>
                        <li class="comm-para">Objective Tests: You can complete the Objective Test at each level in
                            any order; however, all papers should be cleared before pursuing the Case Study exam.
                        </li>
                        <li class="comm-para">Case Study Exam: The Case Study exam is 3 hours long and tests your
                            knowledge and learning skills with a real-time scenario.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/81.webp" alt="Coaching for CIMA ">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center">

            <div class="col-lg-10">
                <div class="about-left">

                    <h2 class="about-title text-center">Exam pattern in CIMA across all the levels </h2>


                    <div class="wrapper-table">
                        <table class="table-main">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Objective type</th>
                                    <th>Case Study</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Exam at each level</td>
                                    <td> 3</td>
                                    <td> 1</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td> 90</td>
                                    <td> 180 mins</td>
                                </tr>
                                <tr>
                                    <td>Paper type</td>
                                    <td> Objective type</td>
                                    <td> Integrated case study</td>
                                </tr>
                                <tr>
                                    <td>Exam Frequency</td>
                                    <td> Daily based on availability at Pearson Center</td>
                                    <td> 4 times a year (Feb, May, Aug, Nov)</td>
                                </tr>
                                <tr>
                                    <td>Result Declaration</td>
                                    <td> Immediately</td>
                                    <td> After 1 month of the exam</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>

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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
                                are exams conducted in CIMA 2025?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    CIMA consists of four levels: Certificate, Operational, Management, and
                                    Strategic Level. Each level consists of four tests, for a maximum of sixteen
                                    exams (all computer-based). The remaining three exams are pre-viewed based case
                                    study exams (Operational Case Study, or OCS, Management Case Study, or MCS, and
                                    Strategic Case Study, or SCS), which are held quarterly in February, May,
                                    August, and November. The remaining thirteen exams are on demand objective
                                    exams, lasting two hours each.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the cost of doing CIMA qualification 2025?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    The cost of completing the CIMA qualifying process varies according on the CIMA
                                    route you choose (i.e. Normal route, FLP route or Pathways).</p>
                                <p class="accordion-text">In India, the average cost of CIMA for an undergraduate
                                    pursuing the FLP route is approximately INR 2 lakhs without coaching, and INR 4
                                    lakhs with coaching.</p>
                                <p class="accordion-text">The approximate cost of completing CIMA for a professional
                                    through paths program ranges from INR 2.5 lakhs to INR 5 lakhs.</p>
                                <p class="accordion-text">The approximate CIMA cost for a candidate choosing the
                                    normal route is INR 3 lakhs without coaching and INR 6 lakhs with coaching.
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is FLP route in CIMA 2025?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Under the FLP (Finance Leadership Program), a qualified undergraduate student
                                    will only take the OCS, MCS, and SCS case study exams at CIMA testing
                                    facilities. A postgraduate or suitable graduate in commerce could finish CIMA
                                    with just two case study exams (MCS and SCS).</p>
                                <p class="accordion-text">If you take this method yourself rather than through a
                                    recognized learning partner like The WallStreet School, the costs can vary and
                                    rise dramatically.


                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree22" aria-expanded="false"
                                aria-controls="collapseThree22">
                                How to do CIMA 2025?
                            </button>
                        </h2>
                        <div id="collapseThree22" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Under the FLP (Finance Leadership Program), a qualified undergraduate student
                                    will only take the OCS, MCS, and SCS case study exams at CIMA testing
                                    facilities. A postgraduate or suitable graduate in commerce could finish CIMA
                                    with just two case study exams (MCS and SCS).</p>
                                <p class="accordion-text">Pathways: Depending on their prior training and
                                    experience, professionals in CIMA's pathway routes only need to complete one or
                                    two case studies exams (MCS and/or SCS). A CA/CMA India is just required to
                                    write SCS and is excused from the 15 CIMA papers. An MBA (Finance) or MCom with
                                    six years or more of experience is solely required to sit for the MCS and SCS
                                    exams. A professional who has worked in the accounting or finance industry for
                                    more than ten years is eligible to sit for the SCS exam directly. The CIMA, UK
                                    must approve each of these routes.</p>
                                <p class="accordion-text">Normal Route: To be eligible for the CIMA qualification,
                                    an undergraduate must pass all 16 exams, which range from the Certificate Level
                                    to the Strategic Level. A graduate in commerce must take twelve tests, ranging
                                    from the operational to the strategic levels.</p>
                                <p class="accordion-text">First off, traveling by FLP, Pathway, or Normal Route does
                                    not differ in terms of understanding or recognition in India or beyond.
                                    Nonetheless, the time and effort required for each method varied significantly.
                                    Pathway programs take the least amount of time and are mostly intended for
                                    working professionals. The fastest programs are the Pathway programs, which are
                                    mostly for working professionals. The FLP route and the Normal route take longer
                                    to complete, taking an average of three to four years each.
                                </p>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree11" aria-expanded="false"
                                aria-controls="collapseThree11">
                                Which is the best CIMA Coaching Institute 2025?
                            </button>
                        </h2>
                        <div id="collapseThree11" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    ARA Education is the best CIMA Coaching institute that provides
                                    Online | Offline | Full-time | Part-time Coaching Provider with One-time fee
                                    payment
                                    till passing | Study Notes | Daily and Weekly basis Tests| Doubt Clarification
                                    Sessions | Revision Tests | Model Exams | Campus Job Placements etc... For
                                    further
                                    information, please call us @ +91 422 - 4355539 | 94 89 87 79 79</p>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree12" aria-expanded="false"
                                aria-controls="collapseThree12">
                                I am not based in the United Kingdom. Can I still become a member of CIMA 2025?
                            </button>
                        </h2>
                        <div id="collapseThree12" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Yes, you can still become a member of CIMA even if you are not based in the
                                    United Kingdom. CIMA has members in over 170 countries around the world.</p>

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