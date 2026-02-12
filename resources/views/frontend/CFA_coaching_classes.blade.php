@extends('frontend.layout.app')
@section('title', "CFA Coaching Classes in Coimbatore Tamilnadu India| CFA Training Institute - Ara Education" )
@section('description', "ARA Education is the best Coaching Center for Chartered Financial Analyst (CFA) Program is a professional credential offered internationally by CFA Institute. For CFA Course Admission, Placement, Fees, Exam Details Contact Ara Education" )
@section('keyword', "Best CFA Coaching classes ara education in coimbatore tamilnadu,Online CFA Coaching in coimbatore, CFA Training in coimbatore, CFA Course Details in coimbatore,CFA study Materials in coimbatore,CFA Exam details in Coimbatore ara education, CFA details in coimbatore ARA Education, Chartered Financial Analyst Course coaching at ARA Education" )
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
                <span class="banner-title">CFA Coaching Classes</span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CFA Coaching Classes</li>
                    </ol>
                </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Online CFA Coaching">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padd-both-40">
    <h1 class="text-center marg-btm-20 fnt-we-600 fnt-25">BEST CFA COACHING CLASSES | INSTITUTE | CENTER IN
        COIMBATORE
        TAMILNADU , INDIA</h1>
    <h2 class="text-center marg-btm-20 fnt-we-600 fnt-20">Best CFA Training | Coaching Classes in Coimbatore</h2>
</section>

<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">
                    <h2 class="about-title ">All About Chartered Financial Analyst (CFA) Course 2025</h2>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus"> CFA Institute or the Chartered Financial
                        Analyst Institute provides distinctive and most diverse programmes for candidates who want
                        to become investment professionals. Through its programmes and exams, the CFA Institute
                        offers quality investment education. CFA Institute was established in 1947. Over these 70+
                        years, The CFA® Program has emerged as the benchmark qualification for the investment
                        industry. It has grown to over 150,000 charter holders around the world in more than 165
                        countries. These charterholders today work as Portfolio Managers, Equity Research Analysts,
                        Fund Managers, Wealth Managers, CFOs and Risk Consultants.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">Completing The Program confirms mastery over
                        the rigorous curriculum as can be evidence by you. Clearing all the three levels of the exam
                        is the main requirement for earning the CFA® charter. It covers content required for
                        investment industry segments like Equity, Fixed Income, Private Equity, Derivatives and Real
                        Estate.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">The flagship course offered by the Chartered
                        Financial Analyst Institute is the CFA Programme for aspiring financial analysts. The
                        institute conducts exams for these programs and the candidates are offered Chartered
                        Financial Analyst (CFA) credential on clearing these exams.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">The credential offered by CFA institutes is
                        globally recognized and is one of the most respected designations in the world. The CFA
                        Program has been designed to provide you with a strong foundation of advanced investment
                        analysis along with the real-world portfolio management skills. The programme is meant to
                        enhance your career prospects in the investment analysis field.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/59.webp" alt="LLB 5 Years Entrance Coaching">
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
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/60.webp" alt="CFA Coaching Classes in Coimbatore">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">
                    <h2 class="about-title">CFA Programme 2025 Highlights</h2>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">An enrolled agent is a tax professional who
                        holds federal authorization granted by the United States Department of the Treasury. In
                        interactions with the Internal Revenue Service (IRS) about tax matters such as audits,
                        appeals, and collections, enrolled agents represent taxpayers. In all 50 states in the
                        United States, there are about 53,000 enrolled agents in practice, according to the National
                        Association of Enrolled Agents.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">The EA Test, also known as the Special
                        Enrollment Examination (SEE), is a three-part exam conducted by Prometric on behalf of the
                        Internal Revenue Service. Each section is a separate 100-question exam with a time limit of
                        3.5 hours to complete all of the questions. The IRS Special Enrollment Test (SEE) is the
                        simplest of tests that allow you to practice before the IRS with unlimited representation
                        privileges.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">The CPA and the bar exams are the other two,
                        and all have major educational qualifications that must be completed before you can take the
                        exam. That isn’t to say that the EA exam is easy. To be called a tax specialist, an enrolled
                        agent must first “demonstrate special expertise in tax matters” by completing three
                        independent tests. The degree of difficulty is determined by prior experience, but those who
                        are eager to put in the effort will earn the enrolled agent certificate.</p>
                    <p class="clr-000 marg-btm-20 comm-para txt-jus">Those who want to become skilled tax advisors
                        in the United States should take the Enrolled Agent course. It will enable you to get ready
                        for the SEE tests, which will help you accomplish your goal in the allotted time. The IRS
                        SEE, CPA exam, and Bar exam are the three components of the Special Enrollment Examination.
                        The IRS SEE is the simplest and most fundamental level test out of these three.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-detail">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-8">
                <div class="about-left">
                    <h2 class="about-title text-center marg-btm-30 ">CFA Programme 2025 Highlights</h2>
                    <div class="wrapper-table">
                        <table class="table-main">
                            <tbody>
                                <tr>
                                    <td>Course Name</td>
                                    <td> Chartered Financial Analyst</td>
                                </tr>
                                <tr>
                                    <td>Short Name </td>
                                    <td> CFA</td>
                                </tr>
                                <tr>
                                    <td>Course Level</td>
                                    <td> Graduation</td>
                                </tr>
                                <tr>
                                    <td>Course Type</td>
                                    <td> Chartered Certificate Course</td>
                                </tr>
                                <tr>
                                    <td>Course Stream</td>
                                    <td> Commerce and Finance</td>
                                </tr>
                                <tr>
                                    <td>Course Duration</td>
                                    <td> 1.5 Year - 4 Years</td>
                                </tr>
                                <tr>
                                    <td>Minimum Qualification Required</td>
                                    <td> 10+2| Relevant Bachelor Degree</td>
                                </tr>
                                <tr>
                                    <td>Selection Process </td>
                                    <td> Merit-based | Entrance Exam Based</td>
                                </tr>
                                <tr>
                                    <td>Course Fee </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Job Types</td>
                                    <td> Chartered Financial Analyst, Market Research Analyst, Business Consultant,
                                        Portfolio Manager, Investment Manager, Risk Manager, etc.</td>
                                </tr>
                                <tr>
                                    <td>Salary</td>
                                    <td> INR 6.5 LPA - INR 41 LPA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>

<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">

            <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                <div class="img-box inner-img">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/61.webp" alt="CFA Coaching Classes in Coimbatore">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">
                    <h2 class="about-title  marg-btm-30">Chartered Financial Analyst (CFA) Eligibility Criteria 2025
                    </h2>
                    <h4 class="clr-000 marg-btm-20 fnt-20 fnt-we-600">The eligibility criteria for the CFA course is
                        mentioned below.</h4>
                    <ul class="list-sty">
                        <li class="comm-para"> Min. Qualification Required: Graduation (Full-time any field)</li>
                        <li class="comm-para"> For every next level, one must have passed the last level of the
                            course.</li>
                    </ul>
                    <h4 class="clr-000 marg-btm-20 fnt-20 fnt-we-600">CFA Selection Process 2025: </h4>
                    <ul class="list-sty">
                        <li class="comm-para"> In order to appear for the Level I exam, candidates must either be in
                            the final year of their graduation or must have completed graduation. Only those
                            candidates who have pursued graduation will be able to take the CFA Programme Level II
                            programme. OR</li>
                        <li class="comm-para"> Candidates must have work experience of at least 4 years in a
                            professional environment. OR</li>
                        <li class="comm-para"> Candidates must possess a combination of education and work
                            experience that sums up the duration of four years (part-time jobs are not evaluated).
                        </li>
                    </ul>
                    <h4 class="clr-000 marg-btm-20 fnt-20">CFA Eligibility Criteria 2025</h4>

                    <p class="clr-000 comm-para marg-btm-20">To become CFA® Program candidate, minimum eligibility
                        is to:</p>
                    <p class="clr-000 comm-para marg-btm-20">Have a bachelor’s (or equivalent) degree, OR</p>
                    <p class="clr-000 comm-para marg-btm-20">Be in the 2nd year of a bachelor’s degree program,</p>
                    <p class="clr-000 comm-para marg-btm-20">To get the charter: Have 4000 hours of professional
                        work experience in the investment decision-making process (accrued before, during, or after
                        participation in the CFA® Program)</p>
                    <p class="clr-000 comm-para marg-btm-20">For more details on eligibility, visit CFA Institute
                        site at <a class="common text-link" href="https://www.cfainstitute.org/"
                            target="_blank">www.cfainstitute.org</a>
                    <p class="clr-000 comm-para"><strong>Note :</strong> Candidates must have a passport in order to
                        appear for the CFA programme exams.</p>


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

                    <h2 class="about-title">Chartered Financial Analyst (CFA) Syllabus 2025</h2>

                    <p class="clr-000 comm-para marg-btm-20">The CFA Programme comprises three levels and each level
                        comprises a six-hour exam. Candidates have to pass these three extensive exams in order to
                        get the CFA credentials. There is a specific weightage given to every subject at different
                        levels of the course. Following are the levels and subject weightage:</p>
                    <ul class="list-sty">

                        <li class="comm-para"> Level I: Basic aspects of the investment analysis are covered at this
                            level. The level comprises a total of ten topics that will be covered using investment
                            tools.</li>
                        <li class="comm-para"> Level II: This phase comprises the application of investment tools
                            and topics that are focused on the valuation of different types of assets.</li>
                        <li class="comm-para"> Level III: In this level, an emphasis is laid on synthesizing all of
                            the concepts and analytical methods in order to learn their applications for wealth
                            planning and effective portfolio management.</li>


                    </ul>


                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/62.webp" alt="CFA Coaching Classes in Coimbatore">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">



            <div class="col-lg-12 ">
                <div class="about-left">

                    <h2 class="about-title text-center marg-btm-30">CFA
                        Subject Weightage 2025</h2>




                    <div class="wrapper-table marg-btm-20">
                        <table class="table-main">

                            <thead>
                                <tr>
                                    <th>Topic Area</th>
                                    <th>Level I</th>
                                    <th>Level II</th>
                                    <th>Level III</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ethical and Professional Standards</td>
                                    <td> 15</td>
                                    <td> 10 to 15 </td>
                                    <td> 10 to 15</td>
                                </tr>
                                <tr>
                                    <td>Equity Investments</td>
                                    <td> 10</td>
                                    <td> 15 to 25 </td>
                                    <td> 15 to 25</td>
                                </tr>
                                <tr>
                                    <td>Quantitative Methods</td>
                                    <td> 12 </td>
                                    <td> 5 to 10</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>Fixed Income</td>
                                    <td> 10</td>
                                    <td> 10 to 20 </td>
                                    <td> 10 to 20</td>
                                </tr>
                                <tr>
                                    <td>Economics</td>
                                    <td> 10</td>
                                    <td> 5 to 10</td>
                                    <td> 5 to 15</td>
                                </tr>
                                <tr>
                                    <td>Derivatives</td>
                                    <td> 5 </td>
                                    <td> 5 to 15</td>
                                    <td> 5 to 15</td>
                                </tr>
                                <tr>
                                    <td>Financial Reporting and Analysis</td>
                                    <td> 20</td>
                                    <td> 15 to 20</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>Alternative Investments</td>
                                    <td> 4</td>
                                    <td> 5 to 10</td>
                                    <td> 5 to 15</td>
                                </tr>
                                <tr>
                                    <td>Corporate Finance</td>
                                    <td> 7</td>
                                    <td> 5 to 15</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>Portfolio Management and Wealth Planning</td>
                                    <td> 7</td>
                                    <td> 5 to 10</td>
                                    <td> 40 to 55</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td> 100</td>
                                    <td> 100</td>
                                    <td> 100</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                    <p class="clr-000 comm-para">Note: CFA Institute may change or update the syllabus depending on
                        the requirements of the industry and suggestion of investment professionals. Students are
                        notified regarding all changes and recent practice analysis methods</p>

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

                    <h2 class="about-title">This program is split-up into 3 levels</h2>

                    <ul class="list-sty">
                        <li class="comm-para"> Level I – Introduction to asset classes-Equity, Fixed Income,
                            Alternatives etc Detailed learning of tools like Financial reporting & analysis, Quants,
                            Economics etc High regard to Ethics</li>
                        <li class="comm-para">
                            Level I Level II Level III
                            Topic Focus Investment Tools Asset Valuation Portfolio Management
                            Learning Focus Knowledge & Comprehension Application and Analysis Synthesis and
                            Valuation</li>
                        <li class="comm-para"> Level II – Higher dive into valuation of assets-like Equity-Fixed
                            Income-Derivatives Detailed learning of Tools-Financial statement analysis</li>
                        <li class="comm-para"> Level III – Perspective change into Portfolio management of the
                            assets
                            More than 50% weight to Portfolio Management and Wealth Planning</li>


                        <div class="wrapper-table marg-btm-20">
                            <table class="table-main">
                                <thead>
                                    <tr>

                                        <th>Level I</th>
                                        <th>Level II </th>
                                        <th>Level III</th>
                                        <th></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Topic Focus</td>
                                        <td> Investment Tools </td>
                                        <td> Asset Valuation</td>
                                        <td> Portfolio Management</td>
                                    </tr>
                                    <tr>
                                        <td>Learning Focus</td>
                                        <td> Knowledge & Comprehension</td>
                                        <td> Application and Analysis</td>
                                        <td> Synthesis and Valuation</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="clr-000 comm-para marg-btm-20">The curriculum is organized into ten general topic
                            areas that provide a framework for making investment decisions.</p>

                    </ul>




                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/63.webp" alt="UGC NET- LAW EXAM Coaching">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="padd-both-40">
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10 order-1 order-lg-0">
                <div class="img-box inner-img">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/64.webp" alt="Law College Subject Coaching">
                </div>

            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="about-left">

                    <h2 class="about-title marg-btm-30">Professional Work Experience:</h2>


                    <p class="clr-000 comm-para marg-btm-20">Have a combination of 4,000 hours of work experience
                        and | or higher education that was acquired over a minimum of three sequential years and
                        achieved by the date of registering for the Level I exam.</p>


                    <h3 class="fnt-we-600 marg-btm-30 fnt-20">What is CFA Pass Rates</h3>
                    <p class="marg-btm-30"><strong>August 2023 exam pass rate:</strong></p>
                    <ul class="list-sty">


                        <li class="comm-para">Level I: 37%</li>

                        <li class="comm-para">Level II: 44%</li>

                        <li class="comm-para">Level III: 47%</li>
                    </ul>

                    <h3 class="fnt-we-600 marg-btm-30">CFA Exam Fee (Level I, II, III) 2025</h3>

                    <p class="clr-000 comm-para marg-btm-20 txt-jus">CFA Exam fee consists of one time registration
                        fee + exam fee. The one time registration fee is US$350 which is payable at the time of
                        first time exam registration.</p>
                    <p class="clr-000 comm-para marg-btm-20 txt-jus">The exam fee for each level is (level I, II and
                        III) is US$ 900 for early registration and US$ 1,200 for standard registration. Please visit
                        www.cfainstitute.org for more information on dates regarding early registration deadline and
                        standard registration deadline.</p>

                    <p class="clr-000 comm-para marg-btm-20 txt-jus">Moreover, Indian students also need to pay the
                        GST at 18% of the total fee.
                        For example, If a candidate is registering for CFA Level I attempt for the first time,
                        he | she will pay $350+$940 for early registration or $350+$1,250 for standard registration.
                        The candidate should also add 18% GST on this amount.
                    </p>

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

                    <h2 class="about-title">WHAT IS A CHARTERED FINANCIAL ANALYST 2025?</h2>

                    <p class="clr-000 comm-para txt-jus marg-btm-20">The Chartered Financial Analyst (CFA) Program
                        is a professional credential offered internationally by the American-based CFA Institute
                        (formerly the Association for Investment Management and Research, or AIMR) to investment and
                        financial professionals.</p>
                    <h2 class="about-title">HOW MANY QUESTIONS ARE ON THE CFA LEVEL 1 EXAM?</h2>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">The exam is a six-hour exam, broken into a
                        morning and afternoon session, each being three hours long. The exam consists of 240
                        multiple-choice questions: 120 questions in the morning session and 120 questions in the
                        afternoon session</p>

                    <h6 class="fnt-we-600 clr-ed283b fnt-20 marg-btm-30">OFFICIAL WEBSITE LINK : <a
                            class="fnt-we-600 fnt-20 clr-ed283b" href="https://www.cfainstitute.org/"
                            target="_blank">www.cfainstitute.org</a></h6>

                    <h4 class="clr-000 marg-btm-20 fnt-20 fnt-we-600">WHAT IS A CHARTERED FINANCIAL ANALYST
                        DESIGNATION?</h4>
                    <p class="clr-000 comm-para txt-jus marg-btm-20">The Chartered Financial Analyst (CFA)
                        designation is regarded by most to be the key certification for investment professionals,
                        especially in the areas of research and portfolio management. It is, however, one of many
                        designations used today.</p>


                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="img-box">
                    <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/65.webp" alt="CFA Coaching Classes in Coimbatore">
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
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Scope
                                of CFA course in the year 2025?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    The CFA has a broad range, so anyone can choose their area of expertise and
                                    become a specialist in it. Quality data analyst, consultant, trader, real
                                    estate, fixed income, investment banking, etc. are a few of the job options open
                                    to CFA professionals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the pass percentage of CFA in the year 2025?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    It is predicted that 40-50% is the cutoff for completing the test.</p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Which Institute is providing Online Coaching for CFA 2025?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Ara education provides CFA Coaching Classes in Online.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree22" aria-expanded="false"
                                aria-controls="collapseThree22">
                                Which is the best Institute for Financial Modeling course 2025?
                            </button>
                        </h2>
                        <div id="collapseThree22" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    Ara Education is the best institute for financial modeling course.</p>

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