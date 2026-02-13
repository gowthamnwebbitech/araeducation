@extends('frontend.layout.app')
@section('title', 'CS ACS CA CMA Institute Coimbatore ACCA USCMA CLAT Coaching center Tamilnadu - ARA Education')
@section('description',
    'Coimbatore’s best Coaching Institute for CA CS ACS CSEET CMA ICWA academy is ARA Education.
    Tamilnadu’s No1 Coaching Center for ACCA USCMA CLAT training India')
@section('keyword',
    'ca institute in Coimbatore ara education,best institute for ca coaching ara education,Best ca coaching institute in
    Coimbatore tamilnadu ara education,Best chartered accountant coaching in Coimbatore tamilnadu ara education,ca coaching
    institutecseet-clat ara education,CA coaching institute in coimabtore ara education,Top institute for ca coaching
    classes in Coimbatore ara education, Top CA coaching institute in Coimbatore tamilnadu ara education,Top ACA coaching
    institutes in Coimbatore tamilnadu ara education,Top chartered accountant coaching institute in tamilnadu coimbatore
    india ara education,ca coaching institute nearby,CA coaching institute in Coimbatore tamilnadu ara education,ACA
    coaching institute in Coimbatore tamilnadu ara education,Chartered Accountant institute in Coimbatore tamilnadu ara
    education,cs institute in Coimbatore ara education,best institute for cs coaching ara education,Best cs coaching
    institute in Coimbatore tamilnadu ara education,Best company secretary coaching in Coimbatore tamilnadu ara education,cs
    coaching institute ara education,CS coaching institute in coimabtore ara education,Top institute for cs coaching classes
    in Coimbatore ara education, Top CS coaching institutes in Coimbatore tamilnadu ara education,Top ACS coaching
    institutes in Coimbatore tamilnadu ara education,Top company secretary coaching institute in tamilnadu coimbatore india
    ara education,cs coaching institute nearby,CS coaching institute in Coimbatore tamilnadu ara education,ACS coaching
    institute in Coimbatore tamilnadu ara education,Company secretary institute in Coimbatore tamilnadu ara
    education,Company secretary institute ara education,top cseet coaching institute in tamilnadu india ara education,cma
    institute in Coimbatore ara education,best institute for cma- icwa coaching ara education,Best cma-icwa coaching
    institute in Coimbatore tamilnadu ara education,Best cost and management accountant coaching in Coimbatore tamilnadu ara
    education,cma coaching institute ara education,Cma-ICWA coaching institute in coimabtore ara education,Top institute for
    cma-icwa coaching classes in Coimbatore ara education, Top CMA coaching institute in Coimbatore tamilnadu ara
    education,Top ACMA coaching institutes in Coimbatore tamilnadu ara education,Top cost and management accountant coaching
    institute in tamilnadu coimbatore india ara education,cma coaching institute nearby,CMA coaching institute in Coimbatore
    tamilnadu ara education,ACMA coaching institute in Coimbatore tamilnadu ara education,Cost and Management Accountant
    institute in Coimbatore tamilnadu ara education,Cost and Management Accountant institute ara education,top CMA
    foundation coaching institute in tamilnadu india ara education,CMA foundation Coaching institute in Coimbatore ara
    education,top CMA Foundation coaching institute in tamilnadu india ara education,CMA Foundation Coaching institute in
    Coimbatore ara education,ACCA coaching in center in coimbatore ara education,ACCA Coaching classes in coimbatore ara
    education Tamilnadu India,ACCA Coaching Institute in coimbatore Tamilnadu,ACCA Skill Coaching classes in coimbatore,Acca
    knowledge level Coaching in coimbatore Tamilnadu,ACCA Professional Coaching Classes in Coimbatore, Online ACCA Coaching
    Classes in coimbatore,online ACCA Knowledge coaching classes in coimbatore, ACCA F1 coaching classes in coimbatore
    tamilnadu India,ACCA F2 coaching classes in coimbatore tamilnadu,ACCA F3 Coaching Classes in coimbatore Tamilnadu
    india,ACCA F4 Coaching classes in coimbatore Tamilnadu India,ACCA F5 Coaching classes in coimbatore,ACCA F6 Coaching
    classes in coimbatore,ACCA F7 coaching classes in coimbatore Tamilnadu,ACCA F8 Coaching classes in coimbatore,ACCA F9
    coaching Classes in coimbatore,ACCA P1 coaching classes in coimbatore Tamilnadu,ACCA P2 coaching classes in
    coimbatore,ACCA P3 Caoching classes in coimbatore Tamilnadu India, Acca P4 Coaching Classes in coimbatore, ACCA P5
    Coaching calsses in coimbatore tamilandu ARA Education, Acca P6 Coaching Classes in coimabtore ara education. Acca
    tutions coimbatore ara education, Acca Training online, Acca training coimbatore Ara Education ,US CMA coaching in
    center in coimbatore ara education, CMA USA Coaching classes in coimbatore ara education Tamilnadu India, USCMA Online
    Coaching Institute in coimbatore Tamilnadu ara education,USCMA Part-1 Coaching classes in coimbatore ara education,
    USCMA Part -11 Coaching in coimbatore ara educationTamilnadu,CMA USA Coaching Classes in Coimbatore ara education,
    Online cma usa Coaching Classes in coimbatore ara education tamilnadu,online USCMA training in ara education coimbatore
    tamilnadu India, US CMA coaching classes near me in coimbatore tamilnadu India,CMA USA coaching classes near me, IMA
    USCMA Coaching Classes in coimbatore Tamilnadu india, US CMA Coaching Academy in coimbatore Tamilnadu ara education
    India, USCMA Institute in coimbatore ara education,CMA US Institute Coaching classes in coimbatore,Online IMA USCMA
    coaching classes in coimbatore Tamilnadu ara education,ARA Education USCMA coaching Coaching classes in coimbatore,what
    after 12th, USCMA after 12th, USCMA near me coaching classes in coimbatore Tamilnadu,online cma us coaching classes in
    coimbatore ARA Education, uscma India Coaching classes in coimbatore Tamilnadu India ,IFRS coaching in center in
    coimbatore ara education, IFRS- International certification course in coimbatore ara education Tamilnadu India, IFRS
    Online Coaching Institute in coimbatore Tamilnadu ara education,CERT IFRS Coaching classes in coimbatore ara
    education,DIP IFRS Coaching in coimbatore ara educationTamilnadu,IFRS coaching Classes in Coimbatore ara education,
    Online IFRS Coaching Classes in coimbatore ara education tamilnadu,online IFRS training in ara education coimbatore
    tamilnadu India, IFRS coaching classes near me in coimbatore tamilnadu India, DIP IFRS coaching classes near me, ACCA
    IFRS- Coaching Classes in coimbatore Tamilnadu india, IFRS Coaching Academy ara education in coimbatore Tamilnadu ara
    education India, IFRS Institute in coimbatore ara education, IFRS UK Institute Coaching classes in coimbatore')
@section('content')

    @php $popup = App\Models\User::where('user_type','admin')->where('id','1')->first(); @endphp
    @if (isset($popup))
        <link rel="preload" as="image" href="{{ asset('/public/images/' . $popup->image_name) }}" fetchpriority="high">
    @endif

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-header border-0 p-0 mb-2">
                    <h2 id="imageModalLabel" class="visually-hidden hidden">Promotional Announcement</h2>

                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal"
                        aria-label="Close" style="filter: invert(1); opacity: 1; width: 2em; height: 2em;"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="popup-image-container text-center">
                        <img src="{{ asset('/public/images/' . $popup->image_name) }}" class="img-fluid rounded shadow-lg"
                            alt="{{ $popup->title ?? 'Welcome Image' }}" {{-- Crucial for performance --}} fetchpriority="high"
                            loading="eager" decoding="async" {{-- Set explicit width/height if known to reduce CLS/Render delay --}}
                            style="max-height: 80vh; width: auto; aspect-ratio: attr(width) / attr(height); object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="floating-btn show-form">
                <p class="float-txt">Send&nbsp;Enquiry</p>
            </div>
            <div class="form-resol">
                <form action="{{ route('contact.enquiry') }}" method="POST">
                 @csrf
                    <div class="row gy-3">
                        <div class="col-md-12"><button class="close-btn show-form">X</button></div>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-12">
                            <input type="phone" name="phone" class="form-control" placeholder="Enter Your Phone" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                        </div>
                
                        <div class="col-md-12">
                            <select class="form-select" name="course" aria-label="Default select example" required>
                                <option selected>Select Your Course</option>
                                @php $course = App\Models\Course::where('status','1')->latest()->get(); @endphp
                                @if ($course)
                                    @foreach ($course as $key => $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>
    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn form-submit">Enquiry Now</button>
                        </div>
                    </div>
                </form>
                
            </div> -->

    <a aria-label="Ara Education" href="https://wa.me/+919489877979" class="float" data-bs-toggle="tooltip"
        target="_blank">
        <i class="bi bi-whatsapp my-float"></i>
        <div class="toggle-title">
            <p>Book free call</P>
        </div>
    </a>

    <style>
        .toggle-title {
            display: none;
            transition: all 0.4s !important;
        }

        .float:hover .toggle-title {
            display: block;
            position: absolute;
            top: -22px;
            left: 50%;
            transform: translateX(-50%);
        }

        .toggle-title P {
            font-size: 12px;
            width: max-content;
            background: #b11117;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            line-height: 17px;
        }

        /* 1. Darken and Blur the background */
        .modal.fade.show {
            backdrop-filter: blur(8px);
            /* This creates the blur effect on the background */
            -webkit-backdrop-filter: blur(8px);
            background-color: rgba(0, 0, 0, 0.7);
            /* Light black overlay */
        }

        /* 2. Fix for Bootstrap Backdrop (removing default conflict) */
        .modal-backdrop {
            display: none;
            /* We handle the background in the .modal class for better blur control */
        }

        /* 2. Fix Overflow & Centering */
        .popup-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            overflow: hidden !important;
        }

        /* 4. Ensuring the Image is Sharp and Responsive */
        .img-popup-responsive {
            width: auto;
            max-width: 100%;
            height: auto;
            max-height: 85vh;
            /* Prevents overflow on tall images */
            display: block;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            /* Adds depth to make image "pop" */
            object-fit: contain;
            background-color: #fff;
            /* Keeps the image area clean white as per your preference */
        }

        @media (min-width: 992px) {
            .modal-lg {
                max-width: 600px;
                /* Adjust this based on your image's aspect ratio */
            }
        }
    </style>

    <section class="banner">
        <div class="banner-content">
            <div class="container">
                <div class="row gy-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="banner-title  wow fadeInUp" data-wow-delay="0.2s">India's No-1
                            Professional Academy for<br> Indian & International Courses</h1>
                        <ul class="banner-list wow fadeInUp" data-wow-delay="0.3s">
                            <li><span>23 year</span> of Excellences & Legacy in <span>Global education</span></li>
                            <li><span>ISO 21001:2018</span> and <span>ISO 9001:2015</span> Certified Institute</li>
                            <li><span>global placements</span> at <span>big 4 </span>& Top MNC's</li>
                            <li><span>Creating Professionals</span> Globally</li>
                        </ul>
                        <!-- <h6 class="banner-subtitle  wow fadeInUp" data-wow-delay="0.4s">23 year  of Excellences &   Legacy
                                    in Global education</h6>
                                <h6 class="banner-subtitle  wow fadeInUp" data-wow-delay="0.4s"> global placements with Job Oriented Programs</h6> -->
                        <div class="text-change mt-3">
                            Learn & Earn <span class="word clr-fff410"></span> @ Ara Education <a href="#"
                                class="text-link"><i class="bi bi-arrow-right-circle"></i> Get Started </a>
                        </div>
                        <!-- <p class="banner-subtext">"Creating Professionals Globally"</p> -->
                    </div>

                    <div class="col-lg-5">
                        <div class="banner-img">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/banner-small.webp"
                                alt="India's No-1 Professional Academy" fetchpriority="high" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="highlight-text">
        <div class="row gx-1">
            <div class="col-lg-2 col-md-6">
                <div class="text-box">
                    Join Ara Education !
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="text-box">
                    The Foundation For A Successful Career Is Built Here!!
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-box">
                    Start Your Journey Today !!!
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-box">
                    Have Your Signature Footprints Globally !!!!
                </div>
            </div>
        </div>
    </section>

    <section class="achivement-detail">
        <div class="container">
            <div class="row gy-5 row-cols-lg-5 row-cols-md-2 row-cols-1 gx-0 gy-md-4 justify-content-between">
                <div class="col">
                    <div class="box-content">
                        <div class="row gx-2 align-items-center">
                            <div class="col-3">
                                <div class="box-icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/students.svg"
                                        alt="Online CA IPC Intermediate Coaching ">
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="box-title"><span class="count" data-count="35000">35000</span> +
                                </p>
                                <p class="box-text">Upskilled Students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-content">
                        <div class="row gx-2 align-items-center">
                            <div class="col-3">
                                <div class="box-icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/trained-employees.svg"
                                        alt="Online CMA Foundation Coaching">
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="box-title"><span class="count" data-count="10000">10000</span> +
                                </p>
                                <p class="box-text">Trained Employees</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-content">
                        <div class="row gx-2 align-items-center">
                            <div class="col-3">
                                <div class="box-icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/international.svg"
                                        alt="Online CSEET Coaching">
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="box-title"><span class="count" data-count="45">45</span> +
                                </p>
                                <p class="box-text"> countries covered</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-content">
                        <div class="row gx-2 align-items-center">
                            <div class="col-3">
                                <div class="box-icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/hiring.svg"
                                        alt="Online CMA Intermediate Coaching ">
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="box-title"><span class="count" data-count="115">115</span> +</p>
                                <p class="box-text">Hiring Partners</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-content">
                        <div class="row gx-2 align-items-center">
                            <div class="col-3">
                                <div class="box-icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/percent.svg"
                                        alt="Other Online Course Specific tuituons">
                                </div>
                            </div>
                            <div class=" col-9">
                                <p class="box-title"><span class="count" data-count="90">90</span> %</p>
                                <p class="box-text">Pass Percentage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-course-list">
        <div class="container">
            <div class="text-center">
                <h2 class="course-subtitle wow fadeInUp" data-wow-delay="0.1s">Which Designation Are You Willing to
                    Learn
                    & Earn?</h2>
                <h3 class="course-title d-flex  justify-content-center wow fadeInUp" data-wow-delay="0.2s">Our Courses
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg"
                        alt="Ara Education Coaching Center"> Your Designations
                </h3>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/ca.png"
                                            alt="CA COACHING INSTITUTE">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CA</h3>
                                        <p class="content-text">Ara Education Best Academy for CA Foundation, CA(IPCC)
                                            Intermediate & CA Final Coaching classes in Coimbatore, Tamil
                                            Nadu, India.</p>
                                        <p class="mt-2"><a href="{{ route('ca_coaching_class') }}"
                                                class="text-link">View More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-1 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cs.png"
                                            alt="CS (ACS) COACHING">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CS</h3>
                                        <p class="content-text">Ara Education is the Best no-1 CS Coaching Institute for
                                            CSEET, CS Executive & CS Professional in Coimbatore, TamilNadu
                                            ,India.</p>
                                        <p class="mt-2"><a href="{{ route('cs_coaching_classes') }}"
                                                class="text-link">View More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cma.png"
                                            alt="CMA COACHING center in india">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CMA (ICWA)</h3>
                                        <p class="content-text">Ara Education is the Top Renowed Institute For CMA
                                            (ICWA) Foundation, CMA(ICWA) ICWA Intermediate, CMA(ICWA) |ICWA Final
                                            coaching classes in Coimbatore Tamilnadu India.</p>
                                        <p class="mt-2"><a href="{{ route('cma_coaching') }}" class="text-link">View
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/clat.webp"
                                            alt="CLAT/All India Law Entrance Exam Coaching">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CLAT</h3>
                                        <p class="content-text">Ara Law Academy is the Only Professional Institute for
                                            law entrance –CLAT exam & TN Judiciary exam in Coimbatore
                                            TamilNadu India.</p>
                                        <p class="mt-2"><a
                                                href="{{ route('clat_all_india_law_entrance_exam_coaching') }}"
                                                class="text-link">View More<i class="bi bi-arrow-right ms-1"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/judiciary.webp"
                                            alt="Best JUDICIARY EXAM Coaching">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">JUDICIARY</h3>
                                        <p class="content-text">ARA Law Academy is the best Institute to provide judiciary
                                            exam
                                            coaching classes both online & Offline we provide study materials revisions &
                                            Mock exams.
                                            ARA Education is the best coaching institute for Judiciary exam in Coimbatore
                                            tamilnadu.</p>
                                        <p class="mt-2"><a href="{{ route('JUDICIARY_EXAM_Coaching') }}"
                                                class="text-link">View More<i class="bi bi-arrow-right ms-1"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-5 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/acca.png"
                                            alt="ACCA Coaching Classes
">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">ACCA UK</h3>
                                        <p class="content-text">Ara Education the most reputed ACCA Gold Approved
                                            Learning Partner in Coimbatore, TamilNadu , India.</p>
                                        <p class="mt-2"><a href="{{ route('ACCA_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cima.png"
                                            alt="CIMA Coaching Classes in india">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CIMA UK</h3>
                                        <p class="content-text">Ara Education is the No.1 CIMA Coaching in Coimbatore.
                                            ARA EDUCATION has skilled and experienced faculty members in
                                            Coimbatore.</p>
                                        <p class="mt-2"><a href="{{ route('CIMA_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-7 wow fadeInUp" data-wow-delay="1.0s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cfa.png"
                                            alt="CFA Coaching Classes ">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CFA UK</h3>
                                        <p class="content-text">Ara Education provides the most recognised certificate
                                            program in the investment domain.</p>
                                        <p class="mt-2"><a href="{{ route('CFA_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-8 wow fadeInUp" data-wow-delay="1.1s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/ifrs.png"
                                            alt="IFRS Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">IFRS UK</h3>
                                        <p class="content-text">Ara Education is the Best training Institute both for
                                            DIP IFRS & CERT IFRS course .</p>
                                        <p class="mt-2"><a href="{{ route('IFRS_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-9 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/uscma.webp"
                                            alt="USCMA Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CMA USA</h3>
                                        <p class="content-text">Ara Education is the benchmark Institute for USCMA
                                            Coaching in Coimbatore,TamilNadu India</p>
                                        <p class="mt-2"><a href="{{ route('US_CMA_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-10 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/ea.png"
                                            alt="EA Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">EA USA</h3>
                                        <p class="content-text">ARA Education is the only pioneer institute to provide
                                            EA Course both Offline & Online. An enrolled agent is a tax
                                            professional who holds federal authorization granted by the United States
                                            Department of the Treasury.</p>
                                        <p class="mt-2"><a href="{{ route('EA_coaching_classes') }}"
                                                class="text-link">View More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-11 wow fadeInUp" data-wow-delay="1.4s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cpa.webp"
                                            alt="CPA Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CPA USA</h3>
                                        <p class="content-text">Ara Education is the Premiere institute for CPA coaching
                                            in Coimbatore Tamilnadu India. CPA program is equivalent with
                                            US-CA.</p>
                                        <p class="mt-2"><a href="{{ route('CPA_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/frm.png"
                                            alt="FRM Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">FRM USA</h3>
                                        <p class="content-text">Ara Education is the No 1 leading coaching centre for
                                            FRM course in Coimbatore,TamilNadu,India.</p>
                                        <p class="mt-2"><a href="{{ route('FRM_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-13 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cfp.png"
                                            alt="CFP Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CFP USA</h3>
                                        <p class="content-text">ARA Education is the only Academy providing Classes for
                                            CFP both online & offline mode.This</p>
                                        <p class="mt-2"><a href="{{ route('CFP_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-14 wow fadeInUp" data-wow-delay="1.7s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cpa-aus.webp"
                                            alt="CPA Australia Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CPA AUS</h3>
                                        <p class="content-text">ARA Education is the best institute providing Classes
                                            for the CPA Australia course. CPA Program combines learning with
                                            practical experience, utilizing globally applicable content to assist
                                            candidates in comprehending the ever-changing
                                            challenges that face businesses today./p>
                                        <p class="mt-2"><a href="{{ route('CPA_austraila_coaching_classes') }}"
                                                class="text-link">Read
                                                More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card course-card-17 wow fadeInUp" data-wow-delay="1.8s">
                        <div class="course-index">
                            <div class="row gx-2 align-items-lg-center">
                                <div class="col-2 col-md-3">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/logo/cams.png"
                                            alt="CAMS Coaching Classes">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="content-box">
                                        <h3 class="content-title">CAMS</h3>
                                        <p class="content-text">The CAMS credential is globally recognized as a serious
                                            dedication to preventing money laundering in the financial
                                            system.</p>
                                        <p class="mt-2"><a href="{{ route('CAMS_coaching_class') }}"
                                                class="text-link">View More<i class="bi bi-arrow-right ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-detail">
        <h2 class="main-title wow fadeInUp" data-wow-delay="0.3s">Welcome to ARA EDUCATION <img
                src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg"
                alt="Online CA Foundation Coaching"> Explore Our Institute</h2>
        <div class="row gx-2 gy-4  mt-3">
            <div class="col-lg-7">
                <div class="content-left">
                    <h3 class="content-title d-none wow fadeInUp" data-wow-delay="0.2s">Best Coaching
                        Centre for
                        CS,CA,CMA-ICWA,CLAT LAW, ACCA , USCMA , IFRS, FRM, CFA, CPA, CIMA, CFP , EA , CPA AUS ,CAMS
                        JUDICIAL
                        ENTRANCE EXAM Coaching Classes in
                        Coimbatore TamilNadu India</h3>
                    <p class="content-subtitle d-none wow fadeInUp" data-wow-delay="0.3s">Top Institute for
                        Online/Offline Live classes, Academy for full
                        time/part
                        time ,
                        Dual Integrated Courses
                        B.COM/BBA/M.COM/MBA with CA,CS,CMA,ACCA,USCMA,CIMA</p>

                    <h3 class="mb-3 wow fadeInUp" data-wow-delay="0.4s"><b><span class="common">Welcome to ARA
                                EDUCATION</span></b></h3>
                    <p class="content-text wow fadeInUp" data-wow-delay="0.5s">The ARA EDUCATION is a prestigious
                        chartered institute dedicated to promoting excellence in INDIAN & INTERNATIONAL Professional
                        Courses. With a rich history spanning 23 years, we have established ourselves as a leading Coaching
                        Institute in the field of Chartered FINANCE, ACCOUNTING, TAX, MANAGEMENT, COMMERCE, & LAW Courses
                        marking excellence as Global Chartered Coaching Institute both online & offline mode. ARA EDUCATION
                        Encourages students to explore their potential, develop their passions, and make a positive impact
                        in the world by assisting job placement globally. </p>
                    <h3 class="mb-3 wow fadeInUp" data-wow-delay="0.6s"><span class="common"><b>Recognized for Excellence
                                in Education</b></span></h3>
                    <p class="content-text wow fadeInUp" data-wow-delay="0.7s"> ARA Education is proud to be the only
                        pioneer institute in Coimbatore Tamilnadu accredited with ISO 21001:2018 and ISO 9001:2015
                        certifications.
                        These international recognitions reflect our unwavering commitment to quality education, effective
                        learning management, and student success</p>
                    <h3 class="mb-3 wow fadeInUp" data-wow-delay="0.6s"><span class="common"><b>Explore Our Institute
                            </b></span></h3>
                    <p class="content-text wow fadeInUp" data-wow-delay="0.7s">
                        We invite you to explore our website and discover more about our programs, uniqueness in each
                        course, and community. Whether you're a prospective student, parent, or partner, we look forward to
                        connecting with you and sharing our passion for education and learning.
                    </p>
                    <p class="content-text wow fadeInUp" data-wow-delay="0.8s">Ara Education is the
                        top India's No 1 best Institute | Center | Academy for
                        Company Secretary Coaching Classes (CS-ACS) ,
                        Chartered Accountant Coaching Classes (CA), Cost and Management Accountant Coaching Classes (
                        CMA-ICWA ), Common Law Admission Test (CLAT), Associated
                        Chartered Certified Accountant Coaching Classes (ACCA UK) , United States Cost & Management
                        Accountant Coaching Classes
                        (US CMA), International Financial Reporting Standards Coaching classes (IFRS), Financial Risk
                        Management Coaching
                        Classes (FRM) Chartered Public Accountants (CPA) Coaching Classes, Chartered Financial Analyst
                        (CFA) Coaching
                        Classes , Chartered Institute of Management Accountants (CIMA), Certified Financial
                        Planner (CFP), Enrolled Agent (EA), Certified Public Accountant AUS (CPA AUS), Certified
                        Anti-Money
                        Laundering Specialist (CAMS) Coaching Classes in
                        Coimbatore Tamilnadu.</p>


                </div>
            </div>
            <div class="col-lg-5">
                <div class="img-box wow fadeInRight" data-wow-delay="0.5s">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-7.webp"
                        alt="Online CMA Coaching">
                </div>
            </div>
        </div>
    </section>

    <section class="course-list">
        <div class="container">
            <h2 class="main-title wow fadeInUp" data-wow-delay="0.3s">Why Choose Ara Education <img
                    src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg" alt="Ara Education" /> Our
                Result Speaks For Us</h2>
            <h3 class="course-subtitle common wow fadeInUp" data-wow-delay="0.4s"></h3>
            <div class="row gy-4  justify-content-center mt-3">

                <div class="col-lg-5 col-md-6 order-1 order-lg-0">
                    <div class="img-box wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/webimages/34.webp"
                            alt="Online course in UK" />
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 order-0 order-lg-0">
                    <p class="course-text wow fadeInUp" data-wow-delay="0.6s">
                        <b><span class="common">ARA EDUCATION No: 1</span> Coaching Centre in Coimbatore Tamilnadu
                            India</b> for Finance - Commerce - Accounting Professional courses both for Indian &
                        International level courses solely based on
                        Results.
                    </p>
                    <ul class="course-sublist mt-3 wow fadeInUp" data-wow-delay="0.7s">
                        <li>Comprehensive care 100% syllabus coverage</li>
                        <li>100 % mentoring</li>
                        <li>100 % job placement - to study, Prepare, mock, revise, and Attend the exam to secure the goal at
                            the very first attempt itself.</li>
                        <li>Classes handled by proficient expert professionals</li>
                        <li>One on one attention with the progress of every students</li>
                        <li>Teaching pedagogy - draw graphs, derive formulas, hands on due diligence on compliances and
                            Explain concepts using real Time examples from sitcoms, businesses, and brands</li>
                        <li>
                            Continuous mentoring - no sugar-coating, no shortcuts, focus, work hard, and study to Achieve
                            long-term goals the only Institution in tamilnadu which encourages its students to clear the
                            exam in the very first
                            Attempt.
                        </li>
                        <li>The only coaching centre of tamilnadu where all the syllabus are covered in detail.</li>

                        <li>We collect nominal one time fee payment till passing.</li>
                        <li>Availing opportunities globally by helping the student to get international placement
                            Assistance.</li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="why-choose-list mt-3">
                        <div class="owl-carousel row-slider1">
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/certificate.svg"
                                            alt="Ara Education In-Demand Certifications">
                                    </div>
                                    <p class="box-title">In-Demand Certifications</p>
                                    <p class="box-text">ARA EDUCATION offers courses that provide worldwide opportunites as
                                        Finance professionals courses including ACCA,USCMA,CIMA,EA,CPA CA CS CMA etc.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/rigorous-training.svg"
                                            alt="Rigorous Training in Ara Education">
                                    </div>
                                    <p class="box-title">Rigorous Training</p>
                                    <p class="box-text">Our academy offers a comprehensive and challenging curriculum that
                                        prepares students for success in Professional education and beyond.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/small-class-size.svg"
                                            alt="Ara Education">
                                    </div>
                                    <p class="box-title">Small Class Sizes</p>
                                    <p class="box-text">With a minimum of student-to-teacher ratio, our students receive
                                        personalized attention and guidance.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="" alt="Ara Education">
                                    </div>
                                    <p class="box-title">Career Guidance</p>
                                    <p class="box-text">ARA EDUCATION offers courses that provide worldwide opportunites as
                                        Finance professionals courses including ACCA,USCMA,CIMA,EA,CPA CA CS CMA etc.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/internship-oppertunity.svg"
                                            alt="Internship Opportunities in Ara Education">
                                    </div>
                                    <p class="box-title">Internship Opportunities</p>
                                    <p class="box-text">We offer internship opportunities that provide students with
                                        hands-on experience in their chosen fields Globally.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/job-offer.svg"
                                            alt="Ara Education Job Placement">
                                    </div>
                                    <p class="box-title">Job Placement</p>
                                    <p class="box-text">Our academy has a strong track record of job placement, with many
                                        professionals going on to secure employment in their chosen fields.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/global-network.svg"
                                            alt="Ara Education Global Networking">
                                    </div>
                                    <p class="box-title">Global Networking</p>
                                    <p class="box-text">Our academy has a global network of alumni and partners, providing
                                        students with opportunities to connect with professionals and organizations around
                                        the world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel row-slider2">
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/exceptional-faculty.svg"
                                            alt="Ara Education 100% placement center">
                                    </div>
                                    <p class="box-title">Exceptional Faculty</p>
                                    <p class="box-text">Excellent experiential training is provided by our carefully
                                        selected industry experts and seasoned professionals who serve as our training
                                        faculty is more student friendly.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/technology-integration.svg"
                                            alt="Ara Education Technology Integration">
                                    </div>
                                    <p class="box-title">Technology Integration</p>
                                    <p class="box-text"> Our academy integrates technology into the curriculum, providing
                                        students with hands-on experience with the latest technologies</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/digital-asset.svg"
                                            alt="Ara Education Digital Resources">
                                    </div>
                                    <p class="box-title">Digital Resources</p>
                                    <p class="box-text">We offer a range of digital resources, including e-books, online
                                        tutorials, and educational software to make study easy for our students.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/placement.svg"
                                            alt="Ara Education 100% Placement Assistance">
                                    </div>
                                    <p class="box-title">100% Placement Assistance</p>
                                    <p class="box-text">Choose from a list of well curated matching preferences and find
                                        jobs that fit your career goals. thorough resume construction and interview
                                        preparation..</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/pioneer.svg"
                                            alt="Pioneers in Active Learning in Ara Education">
                                    </div>
                                    <p class="box-title">Pioneers in Active Learning</p>
                                    <p class="box-text">Our unique active learning system offers skill improvement and
                                        concept-based, application-oriented learning for upgradation..</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/mentors-for-growth-support.svg"
                                            alt="Mentors for Growth Support in Ara Education">
                                    </div>
                                    <p class="box-title">Mentors for Growth Support</p>
                                    <p class="box-text">Growth support mentors help in enhancing knowledge learning and
                                        elevating career goals by tapping into candidates' potential</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="why-choose-box">
                                    <div class="icon">
                                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/learning.svg"
                                            alt="Ara Education Flexible Learning Made Easy">
                                    </div>
                                    <p class="box-title">Flexible Learning Made Easy</p>
                                    <p class="box-text">The adaptable learning approach is tailored to accommodate the
                                        distinct schedules and individual requirements of working professionals and students
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-list-items mt-2">
                        <div class="owl-carousel indian-slider">
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/ca.webp"
                                                alt="CA COACHING INSTITUTE" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Chareterd Accountant (CA)</h3>
                                            <p class="card-text">
                                                Ara Education is the best coaching centre for CA FOUNDATION, INTERMEDIATE |
                                                IPCC & CA FINAL | PROFESSIONAL Classes in Tamilnadu.
                                                <a href="{{ route('ca_coaching_class') }}" class="text-link common">View
                                                    More</a>
                                            </p>
                                            <ul class="btn-list">
                                                <li><a href="{{ route('ca_foundation_coaching') }}"
                                                        class="btn btn-sm btn-blue">CA Foundation</a></li>
                                                <li><a href="{{ route('ca_intermediate_coaching') }}"
                                                        class="btn btn-sm btn-red">CA INTER</a></li>
                                                <li><a href="{{ route('ca_final_coaching') }}"
                                                        class="btn btn-sm btn-black">CA Final</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cs.webp"
                                                alt="Company Secretary Coaching in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Company Secretary (CS)</h3>
                                            <p class="card-text">
                                                Ara Education is the best Coaching center for CSEET Online|live Coaching,CS
                                                executive Coaching, CS Professional Coaching classes in Coimbatore
                                                Tamilnadu.
                                                <a href="{{ route('cs_coaching_classes') }}"
                                                    class="text-link common">View More</a>
                                            </p>
                                            <ul class="btn-list">
                                                <li><a href="{{ route('cseet_coaching_class') }}"
                                                        class="btn btn-sm btn-blue">CSEET </a></li>
                                                <li><a href="{{ route('cs_executive_coaching') }}"
                                                        class="btn btn-sm btn-red">CS Executive</a></li>
                                                <li><a href="{{ route('cs_professional_coaching_class') }}"
                                                        class="btn btn-sm btn-black">CS Professional</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="0.9s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cma.webp"
                                                alt="Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Cost & Management Accountant (CMA)</h3>
                                            <p class="card-text">
                                                Ara Education is the leading and best institute for excellent and
                                                professional coaching centre for ICWA| (CMA-INDIA) in Coimbatore Tamilnadu.
                                                <a href="{{ route('cma_coaching') }}" class="text-link common">View
                                                    More</a>
                                            </p>
                                            <ul class="btn-list">
                                                <li><a href="{{ route('cma_foundation_coaching') }}"
                                                        class="btn btn-sm btn-blue">CMA Foundation </a></li>
                                                <li><a href="{{ route('cma_intermediate_coaching') }}"
                                                        class="btn btn-sm btn-red">CMA Inter</a></li>
                                                <li><a href="{{ route('cma_final_coaching') }}"
                                                        class="btn btn-sm btn-black">CMA Final</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/clat.webp"
                                                alt="Common Law Admission in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Common Law Admission (CLAT)</h3>
                                            <p class="card-text">
                                                ARA Law Academy is a best coaching for CLAT, LSAT, AILET, AIL AE SET BVP
                                                CET, DUET, AMULE, BHU-UET, AIBE Christ Law exam, PULET, other top private
                                                university Law entrance Exams in Coimbatore
                                                Tamilnadu India.
                                            </p>
                                            <p class="mt-3"><a
                                                    href="{{ route('clat_all_india_law_entrance_exam_coaching') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/acca.webp"
                                                alt="Association of Chartered Certified Accountants" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Association of Chartered Certified Accountants (ACCA UK)
                                            </h3>
                                            <p class="card-text">
                                                Ara Education is the No-1 Top Coaching Institute for ACCA in Coimbatore, ARA
                                                EDUCATION has skilled and experienced faculty member. ARA EDUCATION offers
                                                the finest ACCA Classes for all 13 papers
                                                with Job Placement
                                            </p>
                                            <p class="mt-3"><a href="{{ route('ACCA_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cima.webp"
                                                alt="Ara Education - Chartered Institute of Management Accountants" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Chartered Institute of Management Accountants (CIMA UK)
                                            </h3>
                                            <p class="card-text">
                                                Ara Education is the No.1 CIMA Coaching in Tamilnadu. ARA EDUCATION has
                                                skilled and experienced faculty members for providing classes for CIMA
                                                classes online and offline in Coimbatore tamilnadu.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('CIMA_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cfa.webp"
                                                alt="Chartered Financial Analyst Course in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Chartered Financial Analyst (CFA UK)</h3>
                                            <p class="card-text">CFA Institute or the Chartered Financial Analyst Institute
                                                provides distinctive and most diverse programmes for candidates who want to
                                                become investment professionals.</p>
                                            <p class="mt-3"><a href="{{ route('CFA_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/ifrs.webp"
                                                alt=" International Financial Reporting course in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">International Financial Reporting course (IFRS UK)</h3>
                                            <p class="card-text">Understanding of IFRS is crucial for individuals who are
                                                aiming for a career in accounting as it serves as the foundation for
                                                creating financial statements on a global scale.</p>
                                            <p class="mt-3"><a href="{{ route('IFRS_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/uscma.webp"
                                                alt="Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Certified Management Accountant-USA (CMA USA)</h3>
                                            <p class="card-text">
                                                Ara Education is the No.1 USCMA Coaching in Tamilnadu. ARA EDUCATION has
                                                skilled and experienced faculty members in Coimbatore. ARA EDUCATION in
                                                Coimbatore offers the best USCMA Classes for both
                                                parts, each with six sections both in online and offline mode.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('US_CMA_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/ea.webp"
                                                alt="Enrolled Exam (EA USA) in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Enrolled Exam (EA USA)</h3>
                                            <p class="card-text">
                                                Ara Education is the No.1 EA Coaching in Tamilnadu. ARA EDUCATION has
                                                skilled and experienced faculty members for taughting EA course in
                                                Coimbatore. ARA EDUCATION in Coimbatore offers the best EA
                                                Classes for both parts, each with six sections both online & offline
                                                coaching are available at ARA Education.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('EA_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cpa.webp"
                                                alt="CPA Coaching Classes" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Certified Public Accountant (CPA USA)</h3>
                                            <p class="card-text">
                                                CPA is a certification issued by the American Institute of Certified Public
                                                Accountants (AICPA) for accounting proficiency. The CPA course is designed
                                                to provide individuals with the knowledge and
                                                skills necessary to excel in a variety of accounting professions, including
                                                auditing, taxation, financial analysis and management reporting.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('CPA_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/frm.webp"
                                                alt="Financial Risk Management in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Financial Risk Management (FRM USA)</h3>
                                            <p class="card-text">
                                                The GARP, Global Association of Risk Professionals, offers Financial Risk
                                                Manager accreditation. Because of the growing need for risk identification,
                                                appraisal, and management, there is a
                                                significant demand for FRM® -certified individuals in every business.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('FRM_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cfa.webp"
                                                alt="Chartered Financial Analyst Course in Ara Education" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Certified Financial Planner (CFP USA)</h3>
                                            <p class="card-text">
                                                Ara Education is the No.1 CFP Coaching institute Coimbatore Tamilnadu. ARA
                                                EDUCATION has skilled and experienced faculty members in Coimbatore. ARA
                                                EDUCATION in Coimbatore offers the best CFP
                                                Classes for all six modules both online and offline.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('CFP_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cpa-aus.webp"
                                                alt="Ara Education Certified Public Accountant AUS(CPA AUS)" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Certified Public Accountant AUS(CPA AUS)</h3>
                                            <p class="card-text">
                                                Ara Education is the No.1 CPA Australia Coaching in Tamilnadu. ARA OVERSEAS
                                                EDUCATION has skilled and experienced faculty members in Coimbatore. ARA
                                                OVERSEAS EDUCATION in Coimbatore offers the
                                                best CPA Australia Classes for both parts, each with six sections.
                                            </p>
                                            <p class="mt-3"><a href="{{ route('CPA_austraila_coaching_classes') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-1">
                                    <div class="card course-card wow fadeInUp" data-wow-delay="1s">
                                        <div class="img-box">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/course/course-image/cams.webp"
                                                alt="Ara Education placement center in india" />
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Certified Anti-Money Laundering Specialist (CAMS)</h3>
                                            <p class="card-text">The CAMS credential is globally recognized as a serious
                                                dedication to preventing money laundering in the financial system.</p>
                                            <p class="mt-3"><a href="{{ route('CAMS_coaching_class') }}"
                                                    class="btn readmore-btn">View More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="institution-detail">
        <div class="container">
            <h2 class="content-subtitle text-center wow fadeInUp" data-wow-delay="0.2s"><span class="text-dark">ARA LAW
                    ACADEMY </span>&nbsp;&nbsp; OUR MOTTO: YOUR AIM</h2>
            <h3 class="main-title wow fadeInUp" data-wow-delay="0.3s">
                OUR MISSION! <img src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg"
                    alt="Ara Education"> WE GIVE DIMENSIONS TO YOUR DREAMS</h3>
            <div class="row gy-4  mt-3">
                <div class="col-lg-5 col-md-4 order-1 order-lg-0">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/ara-law-academy-coimbatore.webp"
                            alt="LAW ACADEMY in Ara Education">
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 order-0 order-lg-1">

                    <p class="content-text wow fadeInUp" data-wow-delay="0.5s">ARA Law Academy is the best coaching for
                        CLAT, LSAT, AILET, SLAT, AIL AE SET BVP CET, DUET, AMULE, BHU-UET, AIBE Christ Law exam, PULET,
                        other top private university Law entrance Exams in Coimbatore Tamilnadu India. Crack Law Entrance
                        Exam for various 5 years and 3 years LLB Course with India’s Best premier Clat Coaching Institute in
                        Tamilnadu Coimbatore India. Law entrance exams are competitive tests that assess a candidate's
                        aptitude, knowledge, and skills for admission to law programs in various institutions. Here are some
                        key details about law entrance exams:</p>
                    <p class="content-text wow fadeInUp" data-wow-delay="0.6s"> ARA Law Academy is the only Academy in
                        south India which deals specially and exclusively enriches a unique solution as a place for all your
                        legal studies under one roof. We deal with Entry level entrance of Law LLB to the highest level of
                        qualifying exam Judiciary PCS-J, Further, We deal with all master level entrance exams LLM UGC Net
                        and all the semester courses.
                    </p>
                    <p class="quote-text wow fadeInUp" data-wow-delay="0.7s">"We are here to make you lawyers. Law is not
                        only a noble but a lucrative profession."</p>
                </div>
            </div>

        </div>
    </section>

    <section class="course-wrapper-list">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-1 wow fadeInUp" data-wow-delay="0.4s">
                        <h3 class="card-title">LLB 5 Years
                            Entrance Coaching</h3>
                        <p class="card-text">One of the most well-known professions in the world is law. In India, it is
                            also one of the most promising career paths. As a result, a large number of people in the nation
                            seek legal degrees.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('llb_5_years_entrance_coaching') }}"
                                class="text-link">View More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-2 wow fadeInUp" data-wow-delay="0.5s">
                        <h3 class="card-title">LLB 3 Years
                            Entrance Coaching</h3>
                        <p class="card-text">LLB is an abbreviation for Bachelor of Laws or Bachelor of Legislative Laws.
                            The LLB program lasts for 3 years (except for integrated programs, which last for five years)
                            and offers a thorough education on diverse areas of law.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('llb_3_years_entrance_coaching') }}"
                                class="text-link">View More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-3 wow fadeInUp" data-wow-delay="0.6s">
                        <h3 class="card-title">CLAT UG & PG
                            Entrance Coaching</h3>
                        <p class="card-text">The Consortium of NLUs administers the national Common Law Admission Test (or
                            CLAT) for admission to 22 member NLUs' 5-year integrated LLB (UG) and one-year LLM (PG) program.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('clat_ug_pg_entrance_coaching') }}"
                                class="text-link">View More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-4 wow fadeInUp" data-wow-delay="0.7s">
                        <h3 class="card-title">AIBE EXAM Coaching</h3>
                        <p class="card-text">The All India Bar Examination is administered by the Bar Council of India. The
                            All India Bar Examination (AIBE) differs from entrance exams as it is a Certification exam.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('aibe_exam_coaching') }}" class="text-link">View More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-5 wow fadeInUp" data-wow-delay="0.8s">
                        <h3 class="card-title">JUDICIARY EXAM
                            Coaching</h3>
                        <p class="card-text">ARA Law Academy is the best Institute to provide judiciary exam coaching
                            classes both online & Offline we provide study materials revisions & Mock exams. ARA Education
                            is the best coaching institute for Judiciary exam in Coimbatore tamilnadu.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('JUDICIARY_EXAM_Coaching') }}" class="text-link">View
                                More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-6 wow fadeInUp" data-wow-delay="0.9s">
                        <h3 class="card-title">Law College
                            Subject Coaching</h3>
                        <p class="card-text">Online Virtual LLB Tuition and Classroom LLB Tuition in Coimbatore ARA LAW
                            ACADEMY guides students through different law subjects which are to be covered by law colleges
                            in their 5 Years/3 Years Law course.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('law_college_subject_coaching') }}"
                                class="text-link">View More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card course-box course-box-child-7 wow fadeInUp" data-wow-delay="1.0s">
                        <h3 class="card-title">UGC NET- LAW EXAM
                            Coaching</h3>
                        <p class="card-text">Live Online Classes Based on the divisions of the syllabus, there will be a
                            live video based online class. You can ask questions, share your screen, get personal feedback
                            in this class.
                        </p>
                        <p class="mt-2 mb-0"><a href="{{ route('ugc_net_law_exam_coaching') }}" class="text-link">View
                                More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="institution-detail">
        <div class="container">

            <div class="">
                <h2 class="content-title wow fadeInUp" data-wow-delay="0.3s">Career Opportunities</b></h2>
                <p class="content-text wow fadeInUp" data-wow-delay="0.4s">LLB 5 years and 3 Years Subject tuitions are
                    also available Online remotely</p>
                <div class="owl-carousel career-opertunity-slide ">
                    <div class="item">
                        <div class="course-card course-card-2 wow fadeInUp" data-wow-delay="0.3s"
                            style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                            <div class="course-index">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-12">
                                        <div class="icon">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/advocate.svg"
                                                alt="Ara Education Career Opportunities">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box">
                                            <h3 class="content-title">Lawyer</h3>
                                            <p class="content-text">Pursue a career as a lawyer in various fields, such as
                                                corporate law, criminal law, or environmental law.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-card course-card-1 wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                            <div class="course-index">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-12">
                                        <div class="icon">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/judge.svg"
                                                alt="Career Opportunities in Ara Education">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box">
                                            <h3 class="content-title">Judge</h3>
                                            <p class="content-text">Aspire to become a judge in various courts, including
                                                the Supreme Court of India.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="course-card course-card-3 wow fadeInUp" data-wow-delay="0.5s"
                            style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                            <div class="course-index">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-12">
                                        <div class="icon">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/consultation.svg"
                                                alt="Ara Education Legal Consultant">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box">
                                            <h3 class="content-title"> </h3>
                                            <p class="content-text">Work as a legal consultant for companies,
                                                organizations, or individuals.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-card course-card-4 wow fadeInUp" data-wow-delay="0.6s"
                            style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            <div class="course-index">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-12">
                                        <div class="icon">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/academician.svg"
                                                alt="teaching law at Ara Education">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box">
                                            <h3 class="content-title">Academician</h3>
                                            <p class="content-text">Pursue a career in academia, teaching law at various
                                                institutions.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-card course-card-4 wow fadeInUp" data-wow-delay="0.6s"
                            style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            <div class="course-index">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-12">
                                        <div class="icon">
                                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/bank-officer.svg"
                                                alt="Legal Officer Designation Course Ara Education">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box">
                                            <h3 class="content-title">Bank officer</h3>
                                            <p class="content-text">Pursue as a Legal Officer designation in various
                                                Scheduled & Nationalized, Private Banks.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="course-list">
        <div class="container">
            <h2 class="main-title wow fadeInUp" data-wow-delay="0.3s">Ara Education Provides <img
                    src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg"
                    alt="Ara Education">Offline and Online Classes</b></h2>

            <div class="row gy-4 mt-3 align-items-center">
                <div class="col-lg-7">

                    <h3 class="course-subtitle wow fadeInUp" data-wow-delay="0.5s">Our Offline Classroom Live Coaching
                        Programs :</h3>
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
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-3.webp" width="100%"
                            alt="Ara Education ProvidesAra EducationOffline and Online Classes" />
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-3">
                <div class="col-lg-5 order-1 order-lg-0">
                    <div class="wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-4.webp" width="100%"
                            alt="Ara Education Live Classroom" />
                    </div>
                </div>
                <div class="col-lg-7 order-0 order-lg-1">

                    <h3 class="course-subtitle wow fadeInUp" data-wow-delay="0.5s">How Our Offline Live Classroom
                        Coaching Works</h3>
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
                    <span class="course-title text-center common wow fadeInUp" data-wow-delay="0.4s">Our Online Coaching
                        Programs</span>
                    <h3 class="main-title wow fadeInUp" data-wow-delay="0.5s">Join Our ONLINE Coaching <img
                            src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg"
                            alt="Ara Education"> Learn from the Comfort of Your Home</h3>
                    <p class="course-text common wow fadeInUp" data-wow-delay="0.6s"><b>Welcome to Our Online Coaching
                            Classes</b><br>
                    </p>
                    <p class="course-text wow fadeInUp" data-wow-delay="0.6s">In today's fast-paced world, finding time
                        to attend physical coaching classes can be challenging. That's why we offer online virtual coaching
                        classes that you can attend from the comfort of your own home.
                    </p>

                </div>
            </div>
            <div class="mt-2">
                <h3 class="course-subtitle wow fadeInUp mt-2" data-wow-delay="0.5s">Benefits of Our Online Classes</h3>
                <div class="row mt-1 gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="syllabus-box syllabus-box-1">
                            <h5 class="syllabus-title">Flexibility</h3>
                                <p class="syllabus-text">Attend classes from anywhere, at any time, as long as you have a
                                    stable internet connection.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="syllabus-box syllabus-box-2">
                            <h5 class="syllabus-title">Personalized Attention</h3>
                                <p class="syllabus-text">Our experienced faculty provide one-on-one attention, ensuring
                                    that
                                    each student's needs are met.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="syllabus-box syllabus-box-3">
                            <h5 class="syllabus-title">Comprehensive Study Materials</h3>
                                <p class="syllabus-text">Access our extensive library of study materials, including video
                                    lectures, notes, and practice tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="syllabus-box syllabus-box-4">
                            <h5 class="syllabus-title">Interactive Learning</h3>
                                <p class="syllabus-text">Engage with our faculty and fellow students through live chats,
                                    discussions, and doubt-clearing sessions.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="syllabus-box syllabus-box-5">
                            <h5 class="syllabus-title">Convenience</h3>
                                <p class="syllabus-text">No need to commute or worry about finding a coaching center near
                                    your
                                    home.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="syllabus-box syllabus-box-6">
                            <h5 class="syllabus-title">Cost-Effective</h3>
                                <p class="syllabus-text">Save money on transportation and coaching fees</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-5">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-12 order-2 order-lg-2 col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th colspan="3">We Provide Online Coaching for the following programms</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{ route('ca_foundation_coaching') }}">Online CA Foundation
                                                Coaching</a></td>
                                        <td><a href="{{ route('ca_intermediate_coaching') }}">Online CA IPC Intermediate
                                                Coaching</a></td>
                                        <td><a href="{{ route('ca_final_coaching') }}">Online CA Final Coaching</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('cma_coaching') }}">Online CMA Coaching</a></td>
                                        <td><a href="{{ route('cma_foundation_coaching') }}">Online CMA Foundation
                                                Coaching</a></td>
                                        <td><a href="{{ route('cma_intermediate_coaching') }}">Online CMA Intermediate
                                                Coaching</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('cma_final_coaching') }}">Online CMA Final Coaching</a>
                                        </td>
                                        <td><a href="{{ route('cs_coaching_classes') }}">Online CS (ACS Coaching)</a>
                                        </td>
                                        <td><a href="{{ route('cseet_coaching_class') }}">Online CSEET Coaching</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('cs_executive_coaching') }}">Online CS Executive
                                                Coaching</a></td>
                                        <td><a href="{{ route('cs_professional_coaching_class') }}">Online CS
                                                Professional Coaching</a></td>
                                        <td><a href="{{ route('ACCA_coaching_classes') }}">Online ACCA Coaching</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('US_CMA_coaching_classes') }}">Online Uscma Coaching</a>
                                        </td>
                                        <td><a href="{{ route('CPA_coaching_classes') }}">Online CPA US Coaching</a></td>
                                        <td><a href="{{ route('CPA_austraila_coaching_classes') }}">Online CPA AUS
                                                Coaching</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('EA_coaching_classes') }}">Online EA Coaching</a></td>
                                        <td><a href="{{ route('FRM_coaching_classes') }}">Online FRM Coaching</a></td>
                                        <td><a href="{{ route('IFRS_coaching_classes') }}">Online IFRS Coaching</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('CFA_coaching_classes') }}">Online CFA Coaching</a></td>
                                        <td><a href="{{ route('online_coaching_class') }}">Other Online Course Specific
                                                tuituons</a></td>
                                        <td><a href="{{ route('law_entrance_exam_course') }}">Online Clat Coaching</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <!-- <h3 class="course-subtitle text-center common wow fadeInUp" data-wow-delay="0.5s">Online coaching in India</h3> -->
                <h2 class="main-title wow fadeInUp" data-wow-delay="0.3s">Online coaching in India</h2>
                <div class="row gy-4 align-items-center mt-3">
                    <div class="col-lg-5 order-1 order-lg-0">
                        <div class="wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-5.webp"
                                width="100%" alt="Online coaching in India" />
                        </div>
                    </div>
                    <div class="col-lg-7 order-0 order-lg-1">
                        <p class="quote-text wow fadeInUp" data-wow-delay="0.3s">Online coaching in India</p>
                        <p class="course-text wow fadeInUp" data-wow-delay="0.5s">
                            Are you looking for Quality online coaching from India? Look no further Our Institution offers a
                            range of online coaching programs tailored to meet the needs of indian students. We understand
                            that accessing quality education can be challenging. Our online programs are designed to bridge
                            this gap, providing you with access to world-class education from the comfort of your own home.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h3 class="course-subtitle text-center common wow fadeInUp" data-wow-delay="0.5s">Online Tuition abroad
                </h3>
                <h2 class="main-title wow fadeInUp" data-wow-delay="0.3s">Best Online tutoring services <img
                        src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg"
                        alt="Ara Education" /> for students abroad</h2>
                <div class="row gy-4 align-items-center justify-content-center mt-3">
                    <div class="col-lg-5 order-1 order-lg-0">
                        <div class="wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-6.webp"
                                width="100%" alt="Online Tuition abroad" />
                        </div>
                    </div>
                    <div class="col-lg-7 order-0 order-lg-1">
                        <p class="quote-text wow fadeInUp" data-wow-delay="0.3s">Get Personalized, Effective Global
                            Online Tutoring Your Path to Academic Success.</p>
                        <h6 class=" common wow fadeInUp mb-4" data-wow-delay="0.4s">Global online Tuitions</h6>
                        <p class="course-text wow fadeInUp" data-wow-delay="0.5s">
                            At ARA EDUCATION We offer personalized online tuitions for students from various countries
                            providing flexible and accessible learning solutions even with one on one coaching or Group
                            Coaching tuitions.
                        </p>
                        <p class="course-text wow fadeInUp" data-wow-delay="0.6s">
                            At ARA EDUCATION we offer high-quality online tutoring services designed to help students
                            achieve their academic goals. Whether you need help with our expert tutors are here to support
                            you every step of the way.
                        </p>
                        <h6 class=" common wow fadeInUp mt-3 mb-4" data-wow-delay="0.4s">Countries We Serve</h6>
                        <h2 class="course-title wow fadeInUp" data-wow-delay="0.3s">We serve globally in the following
                            Countries</h2>
                        <p class="course-text wow fadeInUp" data-wow-delay="0.4s">
                            United States - United Kingdom - Australia - Canada - Singapore - UAE - South Africa - New
                            Zealand - Many more... We also cater to students from other countries, please contact us for
                            more information.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('online-tuition-abroad') }}" class="btn common-btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 align-items-center justify-content-center mt-4">
                    <div class="col-lg-9">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th colspan="3">Book Now Online Tuition Today</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{ route('contact') }}">Online Tuition in India</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in USA</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in UK</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Canada</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Australia</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Newzeland</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Bahrain</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Qatar</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Kuwait</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Saudi Arabia</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Oman</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in UAE</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Hong Kong</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Malaysia</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Singapore</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Maldives</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in Thailand</a></td>
                                        <td><a href="{{ route('contact') }}">Online Tuition in South Africa</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-7">
                        <h2 class="course-title wow fadeInUp" data-wow-delay="0.3s">How to Get Started</h2>
                        <ul class="course-sublist mt-3 wow fadeInUp" data-wow-delay="0.4s">
                            <li><b>Register</b>: Fill out our registration form</li>
                            <li><b>Choose Your Course</b>: Select the online course that suits your needs.</li>
                            <li><b>Book Your Admission</b>: Make Your Admissions Online <B> (OR)</B> in Offline Mode</li>
                            <li><b>Attend Classes</b>: Log in to our virtual classroom and attend live sessions.</li>
                            <li><b>Interact with Faculty</b>: Clear doubts, ask questions, and interact with our experienced
                                faculty.</li>
                        </ul>
                        <p class="course-text wow fadeInUp" data-wow-delay="0.5s">Enroll in our online coaching program
                            today and start learning from the comfort of your own home.</p>
                        <div class="mt-3 wow fadeInUp" data-wow-delay="0.6s">
                            <a href="{{ route('contact') }}" class="btn common-btn">Get Started at Registration</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-9.webp"
                                width="100%" alt="Ara Education Registration" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="join-us">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-10 col-md-10">
                    <h3 class="join-us-left">
                        STILL WAITING FOR A CHANGE ?……………...JOIN ARA EDUCATION……………. TO BECOME A GAME CHANGER
                    </h3>
                </div>
                <div class="col-lg-2 col-md-2">
                    <p class="text-center text-md-end mb-0"><a href="{{ route('contact') }}"
                            class="btn join-btn">Join Us</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="partnership-integration">
        <div class="container">
            <h6 class="integration-subtitle wow fadeInUp" data-wow-delay="0.2s">INTEGRATE YOUR SCHOOLS & COLLEGES WITH
                ARA EDUCATION</h6>
            <h3 class="main-title wow fadeInUp" data-wow-delay="0.3s"> Transform Education <img
                    src="<?php echo url(''); ?>/public/frontend/assets/images/pointing-right.svg" alt="Ara Education">
                To Partner With Us!
            </h3>
            <diiv class="row gy-4 align-items-center mt-4">
                <div class="col-lg-6 col-md-6">
                    <h2 class="partnership-title wow fadeInUp" data-wow-delay="0.2s">Empowering Students, Enhancing
                        Institutions
                    </h2>
                    <p class="partnership-text wow fadeInUp" data-wow-delay="0.3s">At ARA EDUCATION, we believe that
                        education is a powerful tool for transforming lives. As a leading Global Chartered Professional
                        coaching academy, we are committed to helping students achieve their academic and professional goals
                        Internationally .We are dedicated to empowering aspiring CA | CS| CMA | ACCA | USCMA | CPAUS | CPA
                        AUS | EA | CIMA | CFP IFRS | ACAMS students to achieve success in their academic and professional as
                        well as job pursuits. </p>
                    <p class="mt-4 wow fadeInUp" data-wow-delay="0.4s"><a
                            href="{{ route('college-school-intergration-with-ara-education') }}"
                            class="btn common-btn">View More</a>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-container">
                        <div class="img-box wow fadeInUp" data-wow-delay="0.5s">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-8.webp"
                                alt="Empowering Students, Enhancing Institutions - Ara Education">
                        </div>
                    </div>
                </div>
            </diiv>
        </div>
    </section>

    <section class="placement-detail">
        <div class="container">
            <h3 class="placement-title wow fadeInUp" data-wow-delay="0.2s"> 100% Placement
                Assistance Program</h3>
            <p class="placement-text wow fadeInUp" data-wow-delay="0.3s">Your success, Our Commitment, Guaranteed
                Interview assistance with Big Companies.</p>
        </div>
        <div class="placement-marquee">
            <div class="marquee-track track-1">
                <ul>
                    <li>
                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-1.webp"
                                    alt="Online Tuition in India" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-1.webp"
                                    alt="Online Tuition in India" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-2.webp"
                                    alt="Online Tuition in Canada" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-2.webp"
                                    alt="Online Tuition in Canada" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-3.webp"
                                    alt="Online Tuition in Bahrain" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-3.webp"
                                    alt="Online Tuition in Bahrain" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-4.webp"
                                    alt="Online Tuition in Saudi Arabia" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-4.webp"
                                    alt="Online Tuition in Saudi Arabia" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-5.webp"
                                    alt="Online Tuition in Hong Kong" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-5.webp"
                                    alt="Online Tuition in Hong Kong" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-6.webp"
                                    alt="Online Tuition in Maldives" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-6.webp"
                                    alt="Online Tuition in Maldives" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-7.webp"
                                    alt="Online Tuition in USA" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-7.webp"
                                    alt="Online Tuition in USA" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-8.webp"
                                    alt="Online Tuition in Australia" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-8.webp"
                                    alt="Online Tuition in Australia" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-9.webp"
                                    alt="	Online Tuition in Qatar" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-9.webp"
                                    alt="	Online Tuition in Qatar" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-10.webp"
                                    alt="	Online Tuition in Oman" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-10.webp"
                                    alt="	Online Tuition in Oman" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-11.webp"
                                    alt="Online Tuition in Malaysia" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-11.webp"
                                    alt="Online Tuition in Malaysia" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-12.webp"
                                    alt="Online Tuition in Thailand" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-12.webp"
                                    alt="Online Tuition in Thailand" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-13.webp"
                                    alt="Online Tuition in UK" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-13.webp"
                                    alt="Online Tuition in UK" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-14.webp"
                                    alt="Online Tuition in Newzeland" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-14.webp"
                                    alt="Online Tuition in Newzeland" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-15.webp"
                                    alt="Online Tuition in Kuwait" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-15.webp"
                                    alt="Online Tuition in Kuwait" />
                            </div>
                        </div>

                    </li>

                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-16.webp"
                                    alt="Online Tuition in UAE" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-16.webp"
                                    alt="Online Tuition in UAE" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-17.webp"
                                    alt="Online Tuition in Singapore" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-17.webp"
                                    alt="Online Tuition in Singapore" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-18.webp"
                                    alt="Online Tuition in South Africa" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-18.webp"
                                    alt="Online Tuition in South Africa" />
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-19.webp"
                                    alt="Ara Online Tuition in India" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-19.webp"
                                    alt="Ara Online Tuition in India" />
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-20.webp"
                                    alt="Ara Online Tuition in Canada" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-20.webp"
                                    alt="Ara Online Tuition in Canada" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-21.webp"
                                    alt="Ara Online Tuition in Bahrain" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-21.webp"
                                    alt="Ara Online Tuition in Bahrain" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-22.webp"
                                    alt="Ara Online Tuition in Saudi Arabia" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-22.webp"
                                    alt="Ara Online Tuition in Saudi Arabia" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-23.webp"
                                    alt="Ara Online Tuition in Hong Kong" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-23.webp"
                                    alt="Ara Online Tuition in Hong Kong" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-24.webp"
                                    alt="Ara Online Tuition in Maldives" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-24.webp"
                                    alt="Ara Online Tuition in Maldives" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-25.webp"
                                    alt="Ara Online Tuition in USA" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-25.webp"
                                    alt="Ara Online Tuition in USA" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-26.webp"
                                    alt="Ara Online Tuition in Australia" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-26.webp"
                                    alt="Ara Online Tuition in Australia" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-27.webp"
                                    alt="Ara Online Tuition in Qatar" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-27.webp"
                                    alt="Ara Online Tuition in Qatar" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-28.webp"
                                    alt="Ara Online Tuition in Oman" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-28.webp"
                                    alt="Ara Online Tuition in Oman" />
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-29.webp"
                                    alt="Ara Online Tuition in Malaysias" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-29.webp"
                                    alt="Ara Online Tuition in Malaysias" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-30.webp"
                                    alt="Ara Online Tuition in Thailand" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-30.webp"
                                    alt="Ara Online Tuition in Thailand" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-31.webp"
                                    alt="Ara Online Tuition in UK" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-31.webp"
                                    alt="Ara Online Tuition in UK" />
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="team-img">
                            <div class="front">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-32.webp"
                                    alt="Ara Online Tuition in Newzeland" />
                            </div>
                            <div class="back">
                                <img src="<?php echo url(''); ?>/public/frontend/assets/images/company/company-32.webp"
                                    alt="Ara Online Tuition in Newzeland" />
                            </div>
                        </div>

                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section class="elite-infrastructure">
        <div class="container">
            <div class="text-center">
                <h2 class="elite-title wow fadeInUp" data-wow-delay="0.2s">Elite Infrastructure</h2>
                <div class="elite-list-items">
                    <div class="row gy-5">
                        <div class="col-lg-4 col-md-6 border-rt">
                            <div class="course-card wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/hostel-boys.png"
                                        alt="Online CA Foundation Coaching">
                                </div>
                                <h3 class="card-title"><a class="scroll-link"
                                        href="elite-infrastructure#scroll-section">Hostel For Boys | Girls</a></h3>
                                <p class="card-text">One of the key contributors to an intensive learning experience is
                                    living in campus. Ara Education has a well-furnished
                                    and aesthetically designed hostel with separate wings for boys and girls has been
                                    constructed with a view to provide
                                    best possible facilities to the students,</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 border-rt">
                            <div class="course-card wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/book.png"
                                        alt="Online CMA Coaching">
                                </div>
                                <h3 class="card-title"><a class="scroll-link"
                                        href="elite-infrastructure#scroll-section">Library</a></h3>
                                <p class="card-text">Ara Eduaction's library collection covers books on subjects such as
                                    Indian & International Professional Courses. Library
                                    is the source of our Success.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 border-rt">
                            <div class="course-card wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/wifi.png"
                                        alt="Online CMA Final Coaching">
                                </div>
                                <h3 class="card-title"><a class="scroll-link"
                                        href="elite-infrastructure#scroll-section">WIFI Enabled Campus</a></h3>
                                <p class="card-text">Understanding the importance of internet in the field of education.
                                    Ara Educations entire campus is enabled with Wi-Fi.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 border-rt">
                            <div class="course-card wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/virtual-classroom.png"
                                        alt="Online CS Executive Coaching">
                                </div>
                                <h3 class="card-title"><a class="scroll-link"
                                        href="elite-infrastructure#scroll-section">Digital Classrooms</a></h3>
                                <p class="card-text">Ara Eduaction's classrooms are equipped with audio visual digital
                                    facilities. .The classrooms of the institute are smart
                                    in the true sense of the word.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 border-rt">
                            <div class="course-card wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/research.png"
                                        alt="Online Uscma Coaching">
                                </div>
                                <h3 class="card-title"><a class="scroll-link"
                                        href="elite-infrastructure#scroll-section">Computer Lab Facilities</a></h3>
                                <p class="card-text">Ara Education has Internet enable computer lab with over 12
                                    computers to meet the students’ Information Technology
                                    needs.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 border-rt">
                            <div class="course-card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="icon">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/surveillance.png"
                                        alt="Online EA Coaching">
                                </div>
                                <h3 class="card-title"><a class="scroll-link"
                                        href="elite-infrastructure#scroll-section">Centralized Camera Surveillance</a>
                                </h3>
                                <p class="card-text">We installed cameras at all our class rooms and campus.Our
                                    surveillance cameras to provide quality security safety
                                    assurance .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="campus-job">
        <div class="container">
            <diiv class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="campus-title wow fadeInUp" data-wow-delay="0.2s">Campus Job Placement
                    </h2>
                    <p class="campus-text wow fadeInUp" data-wow-delay="0.4s">At Ara Education, We
                        are proud of the dynamic and motivated students who are
                        mentored and supported to take on the
                        challenges and opportunities that await them in the Industry inside our campus. Ara
                        Education assist all Indian
                        professional courses students ie CA | CS | CMA-ICWA and all International Professional Courses ie
                        ACCA | CIMA | IFRS | USCMA | CPA USA | EA | FRM | CFP | ACAMS | CPA AUS | Law Entrance Coaching to
                        get trainingship and also job placement in India & International. On
                        Monthly Basis On campus
                        interviews of big fortune companies will be organised by Ara Education for supporting.</p>
                    <p class="mt-4 wow fadeInUp" data-wow-delay="0.4s"><a href="{{ route('campus_job_placement') }}"
                            class="btn common-btn">View More</a>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-container">
                        <div class="img-box wow fadeInUp" data-wow-delay="0.5s">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/new-img/img-10.webp"
                                alt="Campus Job Placement in ara education">
                        </div>
                    </div>
                </div>
            </diiv>
        </div>
    </section>

    <section class="international-course">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <h3 class="course-subtitle wow fadeInUp" data-wow-delay="0.2s">
                        Professional Courses offered in Ara Education
                    </h3>
                    <h2 class="course-title wow fadeInUp" data-wow-delay="0.3s">
                        Best Coaching, Institute, Centre, Academy for All Indian & International Professional courses.
                    </h2>
                </div>
            </div>
            <div class="course-list-items">
                <div class="row gy-4 align-items-center">

                    <!-- CA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card course-card wow fadeInUp" data-wow-delay="0.7s">
                            <div class="youtube-facade" data-id="NMZWvveq79I" onclick="loadYT(this)">
                                <img src="https://img.youtube.com/vi/NMZWvveq79I/hqdefault.jpg"
                                    alt="CA Video Thumbnail">
                                <div class="play-button">▶</div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Chartered Accountant (CA)</h3>
                                <p class="card-text">Ara Education is the best coaching centre for CA FOUNDATION,
                                    INTERMEDIATE | IPCC & CA FINAL | PROFESSIONAL Classes in Tamilnadu.</p>
                                <p class="mt-3">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=NMZWvveq79I"
                                        class="btn readmore-btn">Read More</a>


                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- CS -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card course-card wow fadeInUp" data-wow-delay="0.8s">
                            <div class="youtube-facade" data-id="ytgXVcxAXqw" onclick="loadYT(this)">
                                <img src="https://img.youtube.com/vi/ytgXVcxAXqw/hqdefault.jpg"
                                    alt="CS Video Thumbnail">
                                <div class="play-button">▶</div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Company Secretary (CS)</h3>
                                <p class="card-text">Ara Education is the best Coaching center for CSEET Online | live
                                    Coaching, CS executive Coaching, CS Professional Coaching classes in Coimbatore
                                    Tamilnadu.</p>
                                <p class="mt-3">

                                    <a target="_blank" href="https://www.youtube.com/watch?v=ytgXVcxAXqw"
                                        class="btn readmore-btn">Read More</a>

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- CMA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card course-card wow fadeInUp" data-wow-delay="0.9s">
                            <div class="youtube-facade" data-id="NU4pouj6Bn0" onclick="loadYT(this)">
                                <img src="https://img.youtube.com/vi/NU4pouj6Bn0/hqdefault.jpg"
                                    alt="CMA Video Thumbnail">
                                <div class="play-button">▶</div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Cost & Management Accountant (CMA)</h3>
                                <p class="card-text">Ara Education is the leading and best institute for excellent and
                                    professional coaching centre for ICWA | (CMA-INDIA) in Coimbatore Tamilnadu.</p>
                                <p class="mt-3">

                                    <a target="_blank" href="https://www.youtube.com/watch?v=NU4pouj6Bn0"
                                        class="btn readmore-btn">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <p class="mt-3 text-center">
                    <a href="{{ route('indian_international_course') }}" class="btn common-btn">All Course Video -
                        Click Here</a>
                </p>
            </div>
        </div>
    </section>






    <section class="important-links">
        <div class="container">
            <h3 class="import-subtitle">Links</h3>
            <h2 class="import-title">IMPORTANT LINKS</h2>
            <ul class="important-link-list">
                <li>
                    <a href="https://www.icsi.edu/home/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Company Secretaries of India <b>[ICSI]</b></p>
                        <span class="text-link">https://www.icsi.edu/home/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.icai.org/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Chartered Accountants of India <b>[ICAI]</b></p>
                        <span class="text-link">https://www.icai.org/</span>
                    </a>
                </li>
                <li>
                    <a href="https://icmai.in/icmai/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Cost Accountants of India <b>[CMA]</b></p>
                        <span class="text-link">https://icmai.in/icmai/</span>
                    </a>
                </li>
                <li>
                    <a href="https://consortiumofnlus.ac.in/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">The Common Law Admission Test <b>[CLAT]</b></p>
                        <span class="text-link">https://consortiumofnlus.ac.in/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.accaglobal.com/gb/en.html" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Association of Chartered Certified Accountants <b>[ACCA]</b></p>
                        <span class="text-link">https://www.accaglobal.com/gb/en.html</span>
                    </a>
                </li>
                <li>
                    <a href="https://myfuture.cimaglobal.com/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">The Chartered Institute of Management Accountants <b>[CIMA - UK]</b></p>
                        <span class="text-link">https://myfuture.cimaglobal.com/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.cfauk.org/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Chartered Financial Analyst <b>[CFA - UK]</b></p>
                        <span class="text-link">https://www.cfauk.org/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.theirm.org/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Risk Management <b>[IRM – UK]</b></p>
                        <span class="text-link">https://www.theirm.org/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.ifrs.org/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">International Financial Reporting Standards <b>[IFRS]</b></p>
                        <span class="text-link">https://www.ifrs.org/</span>
                    </a>
                </li>
                <li>
                    <a href="https://in.imanet.org/en/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Management Accountants <b>[CMA - USA]</b></p>
                        <span class="text-link">https://in.imanet.org/en/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.irs.gov/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">The Internal Revenue Service - Enrolled Agent <b>[EA - USA]</b></p>
                        <span class="text-link">https://www.irs.gov/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.aicpa-cima.com/home" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Certified Public Accountant <b>[ CPA - USA]</b>

                        </p>
                        <span class="text-link">https://www.aicpa-cima.com/home</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.garp.org/frm" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Global Association of Risk Professionals |GARP - <b>[FRM]</b></p>
                        <span class="text-link">https://www.garp.org/frm</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.cfp.net/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Certified Financial Planner Board of Standards <b>[ CFP - USA]</b></p>
                        <span class="text-link">https://www.cfp.net/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.cpaaustralia.com.au/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Incorporated Institute of Accountants <b>[CPA – AUS]</b></p>
                        <span class="text-link">https://www.cpaaustralia.com.au/</span>
                    </a>
                </li>
                <li>
                    <a href=" https://cmaaustralia.edu.au/" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Certified Management Accountants <b>[CMA – AUS]</b></p>
                        <span class="text-link"> https://cmaaustralia.edu.au/</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.publicaccountants.org.au/about" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Institute of Public Accountants <b>[ AT – AUS]</b></p>
                        <span class="text-link">https://www.publicaccountants.org.au/about</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.acams.org/en" class="link-box wow zoomIn" target="_blank"
                        data-wow-delay="0.2s">
                        <p class="link-text">Certified Anti-Money Laundering Specialist <b>[CAMS]</b></p>
                        <span class="text-link">https://www.acams.org/en</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <section class="blog-section">
        <div class="container">
            <h3 class="blog-subtitle wow fadeInUp" data-wow-delay="0.2s">
                Blogs</h3>
            <h2 class="blog-title wow fadeInUp" data-wow-delay="0.3s">Our Latest Articles</h2>
            <div class="blog-list mt-5">
                <div class="row gy-4">
                    @php $blog = App\Models\Blog::latest()->get(); @endphp
                    @if ($blog)
                        @foreach ($blog as $key => $value)
                            <div class="col-lg-4 col-md-6">
                                <div class="card blog-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="img-box">
                                        <img src="<?php echo url(''); ?>/public/blog_images/{{ $value->image }}"
                                            alt="Our Recent Blogs">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a
                                                href="{{ route('frontend.blog_details', $value->slug) }}">{{ $value->title }}</a>
                                        </h3>
                                        <p class="card-text">{{ $value->short_description }}</p>
                                        <p class="mt-2 mb-0"><a
                                                href="{{ route('frontend.blog_details', $value->slug) }}"
                                                class="text-link">View More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="faq-detail">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-4 order-1 order-md-0">
                    <div class="faq-img   wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/faq-img.png"
                            alt="Ara Education Frequently Asked Question">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 order-0 order-md-1">
                    <h3 class="faq-subtitle  wow fadeInUp" data-wow-delay="0.2s">FAQ’S</h3>
                    <h2 class="faq-title  wow fadeInUp" data-wow-delay="0.3s">Frequently Asked
                        Questions</h2>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1.What kind of courses are offered in Ara Education?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>Indian Professional Courses – CS, CMA, CA, CLAT, JUDICIAL EXAMS</li>
                                        <li>International Professional Courses – ACCA, EA, AT, CMA-US, CPA-US & AUS,
                                            CIMA, CFA, FRM, IFRS, CFP, CAMS
                                        </li>
                                        <li>We provide Common Coaching for Both Indian & International Professional
                                            Courses.</li>
                                        <li>INDIAN and INTERNATIONAL students support*: Online coaching for students
                                            Globally with time flexibility</li>
                                        <li> Don't let location constraints hold you back from achieving your academic goals
                                            Students from UK,USA, Australia, Middle East UAE, Singapore, Malaysia Newzeland
                                            will be given preference according to country specific timezone.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2.What is the difference between Common, Integrated and parallel courses?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>In Common Stream line - After Completing 12th School (or) any degree they
                                            do Professional Courses on fulltime (or)
                                            Part-time bases</li>
                                        <li>In Parallel Stream line - The Student do Degree course separately and
                                            Professional Course Separately at the same
                                            period of time.
                                        </li>
                                        <li>In Integrated Stream line – The Student do only one course. But get
                                            Certification for both Degree & Professional
                                            Course.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    3.Is International Professional Courses are Valid in India?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>100%, International Professional Courses are Valid in India.</li>
                                        <li>Due to Global Liberalizations, GAAP, and IFRS, Particularly after 2019 in
                                            India. Any student can Register, study,
                                            write Exam and get their International Professional Certificate in India
                                            Itself.</li>
                                        <li>Subjects Syllabus, Exam Pattern, Exam Questions Pattern, Job Role and Pay
                                            Salary and other terms & Conditions will
                                            remain same all over the world including India.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4.Can a student get job (or) Practice as Professional in India after completing
                                    International Professional Courses?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>It is student’s wish after completing the course. A student can either
                                            work & Practice all over the world
                                            including India.</li>
                                        <li>We have Million’s of MNC’s in India and the Students after completing the
                                            International Professional Courses can
                                            get placed in India Itself.</li>
                                        <li>The student’s, after completing the international professional Courses can
                                            also practice putting their own office
                                            in India on retainership basis.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5.What mode of coaching is given in the Ara Education, Is it Online (or) Offline?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>We provide Coaching on both, Online & Offline in full-time &
                                            Part-time Basis.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6.Is Recorded Classes available?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>Yes Available with Demo Class</li>
                                        <li>We provide Online & Offline Live Face to Face Interactive Coaching
                                            Classes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    7.What kind of supports are available for learners in Ara Education?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>We provide Study Materials, Study Notes, Coaching, Revisions, Mock Tests.
                                        </li>
                                        <li>We Provide flexible 2-time installment for fees payment methods.</li>
                                        <li>We arrange 0% interest free EMI Educational Loan based on IT & CIBIL.</li>
                                        <li>We collect One-Time fee, till student get pass.</li>
                                        <li>We support to get, allotted for Internship (Training) for all courses.
                                        </li>
                                        <li>We provide In-Campus Placement assistance for all courses within India &
                                            Global on regular basis.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    8.Any Branch’s available for ARA EDUCATION? What is the registration Process to
                                    enroll in Ara Education?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>We are placed in Coimbatore -Tamilnadu – India and we don’t have any
                                            branches anywhere.</li>
                                        <li>It is flexible dual mode options. Students can directly visit Ara
                                            Education Institute and do the admission process
                                            (or) can process through online for admission.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    9.What if, a student or a Parent need more details (or) clarification (or) carrier
                                    counseling?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="accordion-list">
                                        <li>Students (or) Parents can either call us directly (or) email us for any
                                            short quires.</li>
                                        <li>For Personal | Online Virtual Carrier Counseling (or) Detailed
                                            conversation. Students | Parents should call | email
                                            us and fix prior appointment slot. </li>
                                        <li>For email quires. Replay will be given within 24hrs of time.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4  wow fadeInUp" data-wow-delay="0.9s">
                        <a href="{{ route('contact') }}" class="btn help-btn"><i class="bi bi-telephone-fill"></i>Do
                            you need
                            help?</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonial-detail">
        <div class="container">
            <h2 class="testimonial-title wow fadeInUp" data-wow-delay="0.3s">
                Testimonials from our successful students
            </h2>
            <div class="row gy-4 mt-2">

                @php
                    $testimonials = App\Models\Testimonial::where('status', 1)->latest()->limit(4)->get();
                @endphp

                @if ($testimonials)
                    @foreach ($testimonials as $key => $value)
                        <div class="item-video col-md-6 col-lg-3">
                            <div class="testimonial-box wow fadeInUp" data-wow-delay="0.7s">
                                <div class="youtube-facade" data-id="{{ $value->youtube_url }}"
                                    onclick="loadYT(this)">
                                    <img src="https://img.youtube.com/vi/{{ $value->youtube_url }}/hqdefault.jpg"
                                        alt="Video Thumbnail">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <p class="mt-5 text-center">
                <a href="{{ route('testimonials') }}" class="btn common-btn">View All</a>
            </p>
        </div>
    </section>
    <script>
        function loadYT(el) {
            const videoId = el.getAttribute('data-id');
            const iframe = document.createElement('iframe');
            iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            iframe.width = '100%';
            iframe.height = '400';
            iframe.frameBorder = '0';
            iframe.allow =
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.allowFullscreen = true;
            el.replaceWith(iframe);
        }
    </script>

    @include('frontend.newsletter')



@endsection
