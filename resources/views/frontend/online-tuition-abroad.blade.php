@extends('frontend.layout.app')
@section('title', "online tuition abroad" )
@section('description', "Online Tuition for Students Abroad – AraEducation At AraEducation, we provide top-tier online tuition for students abroad, offering a seamless and effective learning experience tailored to meet the needs of international students. Our expert tutors, structured courses, and personalized approach ensure that you receive the best education, regardless of your location" )
@section('keyword', "online tuition abroad, tuition abroad,online coaching abroad" )
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
                    <span class="banner-title">Online Tuition abroad</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Online Tuition abroad</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="ARA LAW ACADEMY">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="online-coaching">
    <div class="container">
                   <h5 class="course-subtitle text-center common wow fadeInUp" data-wow-delay="0.5s">Online Tuition abroad</h5>
            <h1 class="main-title wow fadeInUp" data-wow-delay="0.3s">Best Online tutoring services   <img src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg" alt=""> for students abroad</h1>
           <div class="row gy-4 align-items-center justify-content-center mt-3">
                <div class="col-lg-5 order-1 order-lg-0">
                    <div class=" wow fadeInLeft" data-wow-delay="0.5s">
                        <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/65.webp" alt="ARA Education">
                    </div>
                </div>
                <div class="col-lg-7 order-0 order-lg-1">
                    <p class="quote-text wow fadeInUp" data-wow-delay="0.3s">Get Personalized, Effective Global  Online Tutoring Your Path to Academic Success.</p>
                    <h6 class=" common wow fadeInUp" data-wow-delay="0.4s">Global online Tuitions</h6>
                    <p class="course-text wow fadeInUp" data-wow-delay="0.5s">At ARA EDUCATION We offer personalized online tuitions for students from various countries providing flexible and accessible learning solutions even with one on one coaching or Group Coaching tuitions.
                    </p>
                    <p class="course-text wow fadeInUp" data-wow-delay="0.6s">At ARA EDUCATION we offer high-quality online tutoring services designed to help students achieve their academic goals. Whether you need help with  our expert tutors are here to support you every step of the way.</p>
                <h6 class=" common wow fadeInUp" data-wow-delay="0.4s">Countries We Serve</h6>
                    <h2 class="course-title mt-3 wow fadeInUp" data-wow-delay="0.3s">We serve globally in the following Countries</h2>
                    <p class="course-text wow fadeInUp" data-wow-delay="0.4s"> United States*:  *United Kingdom*: . *Australia. *Canada*: . *Singapore*: 
UAE*:  *South Africa*:  *New Zealand. *Other countries*: We also cater to students from other countries, please contact us for more information.

                    </p>
                   
                </div> 
            </div>
             <div class="row gy-4 align-items-center justify-content-center mt-4">
            
                <div class="col-lg-9">
                   

                     <div class="table-responsive">
                <table class="table  table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th colspan="3">Book Now Online Tuition Today</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Online Tuition in India</td>
                            <td>Online Tuition in USA</td>
                            <td>Online Tuition in UK</td>
                        </tr>
                        <tr>
                            <td>Online Tuition in Canada</td>
                            <td>Online Tuition in Australia</td>
                            <td>Online Tuition in Newzeland</td>
                        </tr>
                        <tr>
                            <td>Online Tuition in Bahrain</td>
                            <td>Online Tuition in Qatar</td>
                            <td>Online Tuition in Kuwait</td>
                        </tr>
                        <tr>
                            <td>Online Tuition in Saudi Arabia</td>
                            <td>Online Tuition in Oman</td>
                            <td>Online Tuition in UAE</td>
                        </tr>
                        <tr>
                            <td>Online Tuition in Hong Kong</td>
                            <td>Online Tuition in Malaysia</td>
                            <td>Online Tuition in Singapore</td>
                        </tr>
                        <tr>
                            <td>Online Tuition in Maldives</td>
                            <td>Online Tuition in Thailand</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
             </div>           
        <div class="mt-5">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="coaching-title">How to Get Started
                    </h5>
                    <ul class="coaching-list">
                        <li><b>Sign up</b>: Register for our online global tuitions</li>
                        <li><b>Schedule a session</b>: Choose a time and date that suits you</li>
                        <li><b>Meet your tutor</b>: Begin your learning journey with our experienced tutors</li>
                    </ul>

                    <h5 class="coaching-title">Contact Us
                    </h5>
                    <ul class="coaching-list">
                        <li><b>Phone:</b>: <a href="tel:+914224355539" class="common">+91 422 - 4355539</a></li>
                        <li><b>Email</b>: <a href="mailto:araeducationcoimbatore@gmail.com" class="common">araeducationcoimbatore@gmail.com</a></li>
                        <li><b>Live Chat</b>: Available on our website</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                   <img class="wi-100" src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/85.webp" alt="Best ACCA Coaching Classes">
                </div>
            </div>
        </div>
        
    </div>
</section>


<section class="faq-detail">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 col-md-4 order-1 order-md-0">
                <div class="faq-img   wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/faq-img.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-8 order-0 order-md-1">
                <h5 class="faq-subtitle  wow fadeInUp" data-wow-delay="0.2s">FAQ’S</h5>
                <h2 class="faq-title  wow fadeInUp" data-wow-delay="0.3s">Frequently Asked
                    Questions</h2>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1.What is the duration of each session?:
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse "
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                 <p class="accordation-text">Sessions are typically 60 minutes long.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2.Can I change my tutor?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordation-text">Yes, you can request a change of tutor at any time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3.How do I pay for the sessions?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="accordation-text">We accept various payment methods, including credit cards, PayPal, and bank transfers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-4  wow fadeInUp" data-wow-delay="0.9s">
                    <a href="{{ route('contact') }}" class="btn help-btn"><i class="bi bi-telephone-fill"></i>Do you need
                        help?</a>
                </p>
            </div>

        </div>
    </div>
</section>

<section class="testimonial-detail">
    <div class="container">
        <h5 class="testimonial-subtitle  wow fadeInUp" data-wow-delay="0.2s">Testimonials</h5>
        <h2 class="testimonial-title  wow fadeInUp" data-wow-delay="0.3s">Testimonials from our successful
            students</h2>
        <div class="row gy-4 mt-5">
                 <div class="col-lg-6 col-md-6">
                     <div class="testimonial-card">                           
                         <p class="testimonial-text">The tutors are very knowledgeable and patient. I've seen significant improvement in my grades</p>
                         <div class="user-detail ">
                             <div class="row gx-2">
                                 <div class="col-12">
                                     <div class="icon">
                                         <img src="<?php echo url(''); ?>/public/frontend/assets/images/user-2.jpg" alt="">
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <h5 class="user-title">Emily</h5>
                                     <p class="user-text">USA</p>
                                 </div>
                                
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <div class="testimonial-card">
                         <p class="testimonial-text">The online platform is user-friendly, and the sessions are interactive and engaging</p>
                         <div class="user-detail ">
                             <div class="row gx-2">
                                 <div class="col-12">
                                     <div class="icon">
                                         <img src="<?php echo url(''); ?>/public/frontend/assets/images/user-1.jpg" alt="">
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <h5 class="user-title">Rohan</h5>
                                     <p class="user-text">India</p>
                                 </div>
                                
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <div class="testimonial-card">
                         <p class="testimonial-text">I was struggling with math, but my tutor helped me understand the concepts clearly. Thank you!</p>
                         <div class="user-detail ">
                             <div class="row gx-2">
                                 <div class="col-12">
                                     <div class="icon">
                                         <img src="<?php echo url(''); ?>/public/frontend/assets/images/user-3.jpg" alt="">
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <h5 class="user-title">Sophia</h5>
                                     <p class="user-text">UK</p>
                                 </div>
                                
                             </div>
                         </div>
                     </div>
                 </div>
                 
                    <div class="col-lg-6 col-md-6">
                     <div class="testimonial-card">                           
                         <p class="testimonial-text">The instructors are highly skilled and supportive. My grades have improved remarkably.</p>
                         <div class="user-detail ">
                             <div class="row gx-2">
                                 <div class="col-12">
                                     <div class="icon">
                                         <img src="<?php echo url(''); ?>/public/frontend/assets/images/user-2.jpg" alt="">
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <h5 class="user-title">Zofia</h5>
                                     <p class="user-text">USA</p>
                                 </div>
                                
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <div class="testimonial-card">
                         <p class="testimonial-text">The teachers are experienced and understanding. I've noticed a big boost in my scores.</p>
                         <div class="user-detail ">
                             <div class="row gx-2">
                                 <div class="col-12">
                                     <div class="icon">
                                         <img src="<?php echo url(''); ?>/public/frontend/assets/images/user-1.jpg" alt="">
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <h5 class="user-title">Mateo</h5>
                                     <p class="user-text">UK</p>
                                 </div>
                                
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <div class="testimonial-card">
                         <p class="testimonial-text">The mentors are both expert and patient. My academic performance has greatly improved.</p>
                         <div class="user-detail ">
                             <div class="row gx-2">
                                 <div class="col-12">
                                     <div class="icon">
                                         <img src="<?php echo url(''); ?>/public/frontend/assets/images/user-3.jpg" alt="">
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <h5 class="user-title">Leon</h5>
                                     <p class="user-text">India</p>
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