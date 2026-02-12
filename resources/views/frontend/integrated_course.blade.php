@extends('frontend.layout.app')
@section('title', "BCOM with Chartered Accountant Coaching BCOM with Company Secretary Coaching BCOM with Cost & Management Coaching ARA EDUCATION" )
@section('description', "Ara education is the best for  Integrated  Bcom CA, Bcom CS, Bcom CMA, coaching in coimbatore Tamilnadu India.Chartered Accountant course with Bcom ,Company secretary Course with Bcom, Cost and Management Accountant Course with Bcom icoaching classes|center|academy| in coimbatore Tamilnadu India" )
@section('keyword', "Bcom with chartered accountant college  in Coimbatore ara education tamilnadu India,BCOM with Company secretary Coaching in ARA Eduction college  Coaching classes in Coimbatore, Ara education College  for Bcom Cost and management coaching classes in Coimbatore Tamilnadu India,Ara Education is the best BCOM CA, BCOM CS, BCOM CMA coaching in Coimbatore Tamilnadu India, Ara Education is the best college for professional courses ca,cs,cma with bcom classes in Coimbatore Tamilnadu India,CS full time college,Company secretary coaching full time college,Chartered Accountant College in coimbatore ara education , Cost and management accountant college in coimbatore ARA Education, Full time college for CA  Ara education,Full time college for CS, Full time college for CMA -ICWA ara education, CA College, Cs college, CMA college, ICWA College ,Coimbatore College for CA,CS,CMA, ICWA, BCOM CA Coaching, Bcom CS Coaching in Coimbatore tamilnadu India, BCOM COllege Coaching,Professional  College Coimbatore, Professional course full time Coaching in Coimbatore Tamilnadu India,  CA,CS,CMA College ara education Coaching Classes in Coimbatore, Bcom ca, Bcom cs, Bcom cma coaching center in Coimbatore ARA EDUCATION, Professional ca cs cma college coaching with bcom  in Coimbatore tamilnadu" )
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
                    <span class="banner-title">Intergrated Course</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="route('home')">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Intergrated Course</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="Incorporated Institute of Accountants [CPA – AUS]">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="integrated-course">
    <div class="container">
        <h6 class="integrated-subtitle text-center">Dual Integrated Professional Courses</h6>
        <h5 class="integrated-title text-center">Study Professional courses with your UG and PG degree at ARA
            Education in 2025
        </h5>
        <div class="row gy-3 mt-4 align-items-center">
            <div class="col-lg-6">
                <h5 class="integrated-title">BENEFITS OF INTEGRATED PROGRAM FOR STUDENTS
                </h5>
                <ul class="integrated-list">
                    <li>Achieve Professional Qualification along with UGC Recognized Degree</li>
                    <li>Professional Coaching from one of the best Institutes in the Country and Degree which is at
                        par with On Campus
                        Degreefrom NAAC a Graded UNIVERSITIES</li>
                    <li>Integrated Papers of the Degree Program Covers the Curriculum for Professional Qualification
                    </li>
                    <li>Apart from the Classroom Training of the Professional Qualification at Ara Education, the
                        Students can attend Live
                        Classes on the Weekend delivered by top Notch faculty and also Access self Learning Material
                        on Online.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="integrated-img">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/13.webp" alt="Online ACCA Coaching center">
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h5 class="integrated-title text-center">WE ARE COLLABORATED WITH TOP RANKING UNIVERSITIES IN INDIA.
            </h5>
            <div class="row gy-3 mt-2 align-items-center">
                <div class="col-lg-6">
                    <h5 class="integrated-title">CREDIBILITY
                    </h5>
                    <ul class="integrated-list">
                        <li>UGC recognized Programs</li>
                        <li>Awarded A Grade by NAAC</li>
                        <li>Top Ranked UNIVERSITIES in India - NIRF & Qs world Rankings</li>
                        <li>Accredited by Global Professional Bodies</li>
                        <li>Learning Hours and Credits at par with Full-Time Classroom Programs</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="integrated-vector-img">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/23.webp" alt="CREDIBILITY in Ara Education">
                    </div>
                </div>
            </div>
            <div class="row gy-3 mt-4 align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="integrated-vector-img">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/27.webp" alt="GLOBAL CURRICULUM in Ara Education">
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <h5 class="integrated-title">GLOBAL CURRICULUM
                    </h5>
                    <ul class="integrated-list">
                        <li>Option to Select a wide Range of Cross-functional and Open Elective Courses</li>
                        <li>Top Notch Curriculum designed in Consultation with Industry</li>
                        <li>International Exposure with learners and Instructors from across the world</li>
                        <li>Access to 16000+ Courses on Linkedln Learning from Global Instructors</li>
                        <li>High Quality Global Education at Affordable Fees</li>
                    </ul>
                </div>

            </div>
            <div class="row gy-3 mt-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="integrated-title">LEARNING METHODOLOGY
                    </h5>
                    <ul class="integrated-list">
                        <li>Online Live Sessions on Weekends</li>
                        <li>Self-Contained and Directed Learning Material to facilitate Independent Learning</li>
                        <li>Pre-Recorded Multimedia Lectures to Supplement Self Learning Material</li>
                        <li>Optional On-Campus Sessions tor enriching Learning and Networking</li>
                        <li>Experiential Learning through Case Studies, Assignments & Projects</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="integrated-vector-img">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/90.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <h5 class="integrated-title text-center">25 KEY SKILLS FOR SUCCESS
                        </h5>
                        <p class="integrated-text text-center">Success in Education is about striking a simple
                            balance between mind development and sell-development. Both these
                            developmental responsibilities should be a joint effort of the Education Provider and
                            the Learners. The learner must
                            understand the need to strengthen themselves Proactively based on their career
                            aspirations, be It a job seeker or an
                            aspiring entrepreneur. For those who aspire to transform their career but confused about
                            where to start, the list to 25
                            skills we have curated can have a significant impact atboth Professional and Personal
                            fronts. At ARA EDUCATION through
                            our various collaborations in Online we import these skills through weekend workshops
                            from Eminent Personalities across
                            the Globe through online Live Classes on the Learning Management System.</p>
                    </div>
                </div>
                <ul class="integrated-button-list">
                    <li>B.COM/BBA WITH CA </li>
                    <li>B.COM/BBA WITH CMA </li>
                    <li>B.COM/BBA WITH CS </li>
                    <li>B.COM/BBA WITH USCMA</li>
                    <li>B.COM/BBA WITH ACCA</li>
                    <li>B.COM/BBA WITH CIMA</li>
                    <li>MBA/M.COM WITH ACCA</li>
                    <li>MBA/M.COM WITH USCMA</li>
                    <li>MBA/M.COM WITH CIMA</li>
                    <li>MBA/M.COM WITH USCPA</li>
                </ul>

            </div>
            <div class="mt-4" id="section1">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h5 class="integrated-title ">B.COM | BBA | M.COM | MBA with CS,CA,CMA,ACCA,USCMA,CIMA
                            in
                            Coimbatore
                            TamilNadu India.</h5>
                        <p class="integrated-text ">We ARA Education collaborated with TOP ranking Online
                            UNIVERSITIES
                            in
                            India Combined Offering Integrated Online Programs
                            with Professional Qualifications</p>
                        <p class="integrated-text text-decoration-underline">Bcom with Chartered Accountant course
                            at
                            Ara Education coimbatore
                            Tamilnadu.</p>
                        <h5 class="integrated-title">CA with BCOM</h5>
                        <h6 class="integrated-subtitle">B. Com Corporate Accounting</h6>
                        <p class="integrated-text">Corporate Accounting Program s Benchmarked to chartered
                            Accountancy course at the Institute of Chartered Accountants of
                            India (ICAl). this Degree Program covers Paper into Paper 4 of the Foundation Course in
                            the I Year and Paper 1 to Paper 8
                            under Group I and Group Il at Intermediate Course from 2 Year onwards.</p>

                    </div>
                    <div class="col-lg-6">
                        <div class="course-vector-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/integrated-course/ca_with_bcom.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4" id="section2">
                <div class="row justify-content-center">
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="course-vector-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/integrated-course/bcom_cs.png" alt="Bcom with Company Secretary">
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">

                        <p class="integrated-text text-decoration-underline">Bcom with Company Secretary course at
                            Ara Education coimbatore Tamilnadu.</p>
                        <h5 class="integrated-title">CS with BCOM</h5>
                        <h6 class="integrated-subtitle">Bcom with Company Secretary Course-CS</h6>
                        <p class="integrated-text text-decoration-underline">B.Com-Corporate Secretary ship</p>
                        <p class="integrated-text">B.Com - Corporate Secretary ship is benchmarked to the Company
                            Secretary CS course of The Institute of company
                            Secretaries of India (ICSI) This Degree Program covers Paper 1 to Paper 4 at the Cs
                            Executive Entrance Test (CSEET) in
                            the 1st Year and Paper 1 to Paper 8 under Module l and Module II of Executive Program
                            (2”
                            Stage) from the 2nd Year
                            onwards. Program includes Training for viva-voce examination of Presentation and
                            Communication Skills .</p>

                    </div>

                </div>
            </div>
            <div class="mt-4" id="section3">
                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <h5 class="integrated-title">CMA with BCOM</h5>
                        <h6 class="integrated-subtitle">Bcom with Cost and Management Accountant Course-CMA (ICWA)
                        </h6>
                        <p class="integrated-text text-decoration-underline">B. Com Cost Accounting</p>
                        <p class="integrated-text">BCom - cost Accounting is benchmarked to the CMA course of The
                            Institute of Cost Acoountants of India. formerly kmown as
                            ICWA , This Degree Program covers Paper1 to Paper 4 of the Foundation Course in the 1"
                            Year and Paper 5 to Paper 12
                            under Group I and Group II of Intermediate course from 2nd Year onwards.</p>

                    </div>
                    <div class="col-lg-6">
                        <div class="course-vector-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/28.webp" alt="CMA with BCOM">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h5 class="integrated-title">TOGETHER WITH YOU IN THE JOURNEY TO REACH YOUR GOALS.</h5>
                <ul class="integrated-sublist">
                    <li>Confidence and Positive outlook</li>
                    <li>Communication Skills</li>
                    <li>Interpersonal Skills</li>
                    <li>Self and Time management</li>
                    <li>Goal setting</li>
                    <li>Presentation skills</li>
                    <li>Positive Attitude</li>
                    <li>Motivation and self</li>
                    <li>Professional Attire</li>
                    <li>Emotional Intelligence</li>
                    <li>Teamwork</li>
                    <li>Managing stress</li>
                    <li>Leadership</li>
                    <li>Social Skills</li>
                    <li>Conflict Resolution</li>
                    <li>Ownership and Responsibiiity</li>
                    <li>creativity and Problem Solving</li>
                    <li>Quantitative Problem Solving</li>
                    <li>Logical Reasoning</li>
                    <li>verbal Aptitude</li>
                    <li>Esteem Business Etiquette</li>
                    <li>Business Networking</li>
                    <li>Resume Building</li>
                    <li>Group Discussion</li>
                    <li>Excel in Interviews</li>
                </ul>
            </div>
            <div class="row gy-3 mt-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="integrated-title">LINKEDIN LEARNING
                    </h5>
                    <ul class="integrated-list">
                        <li>Free Access to 16000 courses from Linkedin Learning and Lynda.com</li>
                        <li>Courses in Technology, Creative and Management</li>
                        <li>50+New Courses added every week in 7 languages</li>
                        <li>Join 650 million Professionals and Common Interest Group</li>
                        
                        <li>Access Thousands of Jobs and get Job recommendations</li>
                        <li>Insights-based Recommendations based on learner profile & Degree they are Pursuing
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="integrated-vector-img">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/29.webp" alt="India's No-1 Professional Academy">
                    </div>
                </div>
            </div>
            <div class="row gy-3 mt-4 align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="integrated-vector-img">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/37.webp" alt="CUTTING-EDGE TECHNOLOGY">
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <h5 class="integrated-title">CUTTING-EDGE TECHNOLOGY
                    </h5>
                    <ul class="integrated-list">
                        <li>Learn Anytime, Anywhere and on Any Device</li>
                        <li>online supervised Discussion Forums to facilitate Group Interaction</li>
                        <li>Continues Feedback and Analytics to monitor Progress</li>
                        <li>Technology Enabled online Proctored Examinations</li>
                        <li>state-ot-the-art Learning Management System for a near face-to-face learning experience
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row gy-3 mt-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="integrated-title">LEARNING METHODOLOGY
                    </h5>
                    <ul class="integrated-list">
                        <li>Dedicated Student Support by Program Managers</li>
                        <li>Career Advancement Services</li>
                        <li>Engaging Student Discussion Forum</li>
                        <li>Continuous Feedback</li>
                        <li>ARA Education Alumni Connect Services</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="integrated-vector-img">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/38.webp" alt="LEARNING METHODOLOGY in Ara Education">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h6 class="integrated-subtitle">PROGRAMS OFFERED
                </h6>
                <h5 class="integrated-title">UG COURSES</h5>
                <div class="hstack gap-3 mb-4">
                    <div class=" common-btn">BCOM</div>
                    <div class="common-btn">BBA</div>
                </div>
                <h5 class="integrated-title">PG COURSES</h5>
                <div class="hstack gap-3 mb-4">
                    <div class=" common-btn">MBA</div>
                    <div class="common-btn">MCOM</div>
                    <div class="common-btn">MCA</div>
                    <div class="common-btn">MA</div>
                </div>

            </div>
            <div class="mt-4">
                <h5 class="integrated-title">CAREER ADVANCEMENT SERVICES</h5>
                <p class="integrated-text">The Career Advancement services Team works tirelessly to Connect our
                    Learners with the right Job opportunities. with
                    Years of Experience in Training, Networking and Human Resource skills, the team finds exciting
                    and challenging Job
                    opportunities for our Learners In companies of repute through a structured framework.</p>
                <div class="row gy-3 mt-4 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="integrated-title">MENTORSHIP
                        </h5>
                        <ul class="integrated-list">
                            <li>Dedicated mentor for each Learner</li>
                            <li>Online Mentoring Sessions on weekends</li>
                            <li>Doubt clearing sessions with faculty during Live Class sessions & discussions
                                forums</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="integrated-vector-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/39.webp" alt="CAREER ADVANCEMENT SERVICES in Ara Education">
                        </div>
                    </div>
                </div>
                <div class="row gy-3 mt-4 align-items-center">
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="integrated-vector-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/45.webp" alt="CAREER GUIDANCE in ara education">
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <h5 class="integrated-title">CAREER GUIDANCE
                        </h5>
                        <ul class="integrated-list">
                            <li>Dedicated Corporate Relations Team to guide you on the Right Career Path</li>
                            <li>Online sessions on Resume writing, Personal Branding on Social Media</li>
                            <li>Interview Preparation and Setting career Goals</li>
                            <li>Live Online Sessions over weekends from Top Industry Professionals on 25 Key
                                skills for Success</li>
                            <li>Regular Feedback on your Resume and social Media Profiling</li>
                            <li>1:1 Mock Interview sessions with Industry Experts.</li>
                        </ul>
                    </div>

                </div>
                <div class="row gy-3 mt-4 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="integrated-title">CONNECT TO CAREERS
                        </h5>
                        <ul class="integrated-list">
                            <li>Connect To Careers e-hire portal helps you apply for relevant jobs and attend
                                interviews online</li>
                            <li>Connect To Careers Job Fairs are Organized to connect with top employers</li>
                            <li>Get Access to Industry reports on Linked in insights and Attend Regular webinars
                                from Industry Professionals on
                                Job Market Insights as port of Connect To Career Series</li>
                        </ul>
                        <p class="mt-2"><a href="#" class="common">*Conditions applied.</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="integrated-vector-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/47.webp" alt="Law College Subject Coaching">
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-4" id="section4">
                <h5 class="integrated-title">ACCA | CIMA | IFRS | USCMA | CPA USA | EA | FRM | CFP | ACAMS | CPA AUS CLASSES IN COIMBATORE, TAMILNADU 2025
                </h5>
                <p class="integrated-text">The Bachelor of Commerce is a three-year Degree Program that will prepare
                    you for entry-level roles in both accounting
                    and finance. This program with a myriad of specializations will provide you with a strong
                    foundation that you will need
                    to pursue a career in Finance, Accounting, and Management. The program curriculum encompasses
                    courses of professional
                    accreditation bodies from across the globe like BCOM with ACCA, Bcom with CIMA, MBA with CPA
                    Bcom with CMA to give you
                    that edge required to compete and succeed. For students who wants to pursue PG MCOM MBA with
                    International Professional
                    Courses is also provided at ARA Education For more details kindly contact us.</p>
            </div>
        </div>
    </div>
</section>
 
@include('frontend.newsletter')


@endsection         