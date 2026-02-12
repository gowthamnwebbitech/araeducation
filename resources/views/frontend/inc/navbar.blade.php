<style>
#fixed-social {
   position: fixed;
   top: 62%;
   transform: translateY(-50%);
   z-index: 1200;
}

#fixed-social a {
   color: #fff;
   display: block;
   height: 40px;
   position: relative;
   text-align: center;
    line-height: 40px;
   width: 40px;
   margin-bottom: 1px;
   z-index: 2;
}
#fixed-social a:hover>span{
	visibility: visible;
  left: 41px;
  opacity: 1;
} 
#fixed-social a span {
	line-height: 40px;
    left: 60px;
    position: absolute;
    text-align: center;
    width: 120px;
    visibility: hidden;
    transition-duration: 0.5s;
    z-index: 1;
    opacity: 0;
}
 .fixed-facebook{
 	background-color: #257FF3;
 }
 .fixed-facebook span{
	background-color: #257FF3;
 }
 .fixed-twitter{
	background-color: #000;

 }
 .fixed-twitter span{
 	background-color: #000;
 }
 .fixed-pintrest{
	background-color: #C8555D;

 }
 .fixed-pintrest span{
 	background-color: #C8555D;
 }
 .fixed-linkedin{
	background-color: #3493C4;

 }
 .fixed-linkedin span{
 	background-color: #3493C4;
 }
.fixed-instagram{
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);

 }
.fixed-instagram span{
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
 }
 .fixed-tumblr{
	background-color: #34526F;

 }
  .fixed-tumblr span{
 	background-color: #34526F;
 }
  .fixed-youtube{
	background-color: #FF1515;

 }
 .fixed-youtube span{
 	background-color: #FF1515;
 }
 

  .fixed-google-play{
	background:linear-gradient(-120deg, #4284f4 , #34a853, #fbbc05, #ea4335)

 }
 .fixed-google-play span{
 	background:linear-gradient(-120deg, #4284f4 , #34a853, #fbbc05, #ea4335)
 }
 .modal-content{
    background: unset !important;
    border: unset !important;
 }

 .youtube-facade {
        position: relative;
        width: 100%;
        height: 230px;
        cursor: pointer;
        overflow: hidden;
        border-radius: 8px;
        background-color: #000;
    }

    .youtube-facade img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .youtube-facade .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
           font-size: 20px;
    color: white;
    background: red;
    /* text-shadow: 0 0 10px black; */
    pointer-events: none;
    padding: 8px 35px;
    border-radius: 25px;
    }
/*end fixed social*/
</style>


 





<div class="web-view">
    <div id="fixed-social">
  <div>
    <a href="https://www.facebook.com/araeducationcoimbatore" aria-label="Ara Education" class="fixed-facebook" target="_blank"><i class="bi bi-facebook"></i> <span>Facebook</span></a>
  </div>
  <div>
    <a href="https://twitter.com/araeducationcbe" aria-label="Ara Education" class="fixed-twitter" target="_blank"><i class="bi bi-twitter-x"></i> <span>Twitter</span></a>
  </div>
  <div>
    <a href="https://in.pinterest.com/araeducationcoachingcenter/" aria-label="Ara Education" class="fixed-pintrest" target="_blank"><i class="bi bi-pinterest"></i><span>Pintrest</span></a>
  </div>
  <div>
    <a href="https://www.instagram.com/araeducationcoimbatore/" aria-label="Ara Education" class="fixed-instagram" target="_blank"><i class="bi bi-instagram"></i> <span>Instagram</span></a>
  </div>
    <div>
    <a href="https://www.linkedin.com/in/ara-education-ca-cs-cma-acca-uscma-cseet-clat-coaching-center-coimbatore-tamilnadu-india/" aria-label="Ara Education" class="fixed-linkedin" target="_blank"><i class="bi bi-linkedin"></i> <span>LinkedIn</span></a>
  </div>
  <div>
    <a href="https://www.youtube.com/@araeducation" aria-label="Ara Education" class="fixed-youtube" target="_blank"><i class="bi bi-youtube"></i> <span>Youtube</span></a>
  </div>
  <div>
    <a href="https://www.tumblr.com/blog/view/araeducation-blog" aria-label="Ara Education" class="fixed-tumblr" target="_blank"><img src="https://araeducation.in/public/frontend/assets/images/tumblr.svg" alt="Ara Education" style="width:18px;"><span>Tumblr</span></a>
  </div>
    <div>
    <a href="https://play.google.com/store/apps/details?id=co.groot.bdpgr" aria-label="Ara Education" class="fixed-google-play" target="_blank"><i class="bi bi-google-play"></i> <span>Google Play</span></a>
  </div>
</div>
</div>


<div class="top-header ">
    <div class=" container">
        <div class="row gy-md-3 gy-0 align-items-center justify-content-center">
            <div class=" col-lg-3 col-md-5">
                <div class="top-header-right">
                    <ul class="top-header-list">
                        <li class="top-header-list-item">
                            <a href="mailto:araeducationcoimbatore@gmail.com" class="list-item"><i
                                    class="bi bi-envelope-fill clr-ee2737"></i>araeducationcoimbatore@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                 
                <div class="top-header-right d-flex justify-content-evenly align-items-center flex-wrap">
                    <a href="{{ route('contact') }}#contact-form-section" class="enquiry-btn"><i class="bi bi-bell"></i>Enquiry Form</a>
                    <ul class="top-header-list">
                        <li class="top-header-list-item">
                            <a href="tel:9489877979" class="list-item"><i
                                    class="bi bi-telephone-outbound-fill"></i>+91 422 - 43 555 39 | 94 89 87 79 79
                            </a>
                        </li>
                        <li class="top-header-list-item dis-n">
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a aria-label="Ara Education" href="https://www.facebook.com/araeducationcoimbatore"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/facebook.svg" alt="Ara Education"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://in.pinterest.com/araeducationcoachingcenter/"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/pintrest.svg" alt="Ara Education International Coaching Center"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://twitter.com/araeducationcbe" target="_blank"><img
                                                src="<?php echo url(''); ?>/public/frontend/assets/images/twitter.svg" alt="Ara Education twitter"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://www.instagram.com/araeducationcoimbatore/"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/instagram.svg" alt="Ara Education"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://www.youtube.com/@araeducation"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/youtube.svg" alt="Ara Education"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://www.tumblr.com/blog/view/araeducation-blog"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/tumblr.svg" alt="Ara Education"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://www.linkedin.com/in/ara-education-ca-cs-cma-acca-uscma-cseet-clat-coaching-center-coimbatore-tamilnadu-india/"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/linkedin.svg" alt="Ara Education"></a>
                                    </li>
                                    <li>
                                        <a aria-label="Ara Education" href="https://play.google.com/store/apps/details?id=co.groot.bdpgr"
                                            target="_blank"><img src="<?php echo url(''); ?>/public/frontend/assets/images/playstore.svg" alt="Ara Education"></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="marquee-section">
    <marquee direction="left" behavior="scroll" scrollamount="6" onmouseover="this.stop()"
        onmouseout="this.start()">
        <ul>
            <li><img src="<?php echo url(''); ?>/public/frontend/assets/images/star-box.svg" alt="Ara Education the best coaching center"></li>
            @php $home_slider = App\Models\Slider::where('status','1')->get(); @endphp
            @if($home_slider)
                @foreach($home_slider as $key=>$value)
                    <li><a href="{{ route('contact') }}"><span>ENROLL IN</span> {{ $value->title }} <img src="<?php echo url(''); ?>/public/frontend/assets/images/star-box.svg" alt="Ara Education"></a></li>
                @endforeach
            @endif
        </ul>
    </marquee>
</div>

<div class="mobile-header mobile-view">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a href="{{ route('home') }}" class="logo"><img src="<?php echo url(''); ?>/public/frontend/assets/images/logo.png" alt="Ara Education 100% placement centre" /></a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        </div>
        <div class="offcanvas-body ">
            <div class="mean-container">
                <div class="main-menu ">
                    <nav class="mean-menulist">
                        <ul>
                            <li>
                                <a class=" active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            

                           
                            <li>
                                <a href="">Indian Courses</a>
                                <ul>
                                    <li><a href="{{ route('ca_coaching_class') }}">CA Coaching
                                            Classes</a>
                                        <ul>
                                            <li><a href="{{ route('ca_foundation_coaching') }}">CA
                                                    Foundation Coaching
                                                    Classes</a></li>
                                            <li><a href="{{ route('ca_intermediate_coaching') }}">CA
                                                    Intermediate
                                                    Coaching Classes</a></li>
                                            <li><a href="{{ route('ca_final_coaching') }}">CA Final |
                                                    Professional
                                                    Coaching Classes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('cs_coaching_classes') }}">CS Coaching
                                            Classes </a>
                                        <ul>
                                            <li><a href="{{ route('cseet_coaching_class') }}">CSEET Coaching Classes</a>
                                            </li>
                                            <li><a href="{{ route('cs_executive_coaching') }}">CS Executive Coaching
                                                    Classes</a></li>
                                            <li><a href="{{ route('cs_professional_coaching_class') }}">CS Professional
                                                    Coaching Classes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('cma_coaching') }}">CMA (ICWA)
                                            Coaching Classes </a>
                                        <ul>
                                            <li><a href="{{ route('cma_foundation_coaching') }}">CMA
                                                    (ICWA) Foundation
                                                    Coaching Classes</a></li>
                                            <li><a href="{{ route('cma_intermediate_coaching') }}">CMA
                                                    (ICWA)
                                                    Intermediate Coaching Classes</a></li>
                                            <li><a href="{{ route('cma_final_coaching') }}">CMA (ICWA)
                                                    Final |
                                                    Professional Coaching
                                                    Classes</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#">International Courses</a>
                                <ul>
                                    <li><a href="{{ route('ACCA_coaching_classes') }}">ACCA Coaching Classes</a></li>
                                    <li><a href="{{ route('US_CMA_coaching_classes') }}">USCMA Coaching Classes</a>
                                    </li>
                                    <li><a href="{{ route('IFRS_coaching_classes') }}">IFRS Coaching Classes</a></li>
                                    <li><a href="{{ route('FRM_coaching_classes') }}">FRM Coaching Classes </a></li>
                                    <li><a href="{{ route('CFA_coaching_classes') }}">CFA Coaching Classes</a></li>
                                    <li><a href="{{ route('CPA_coaching_classes') }}">CPA Coaching Classes</a></li>
                                    <li><a href="{{ route('CIMA_coaching_classes') }}">CIMA Coaching
                                            Classes</a></li>
                                    <li><a href="{{ route('CFP_coaching_classes') }}">CFP Coaching Classes</a></li>
                                    <li><a href="{{ route('EA_coaching_classes') }}">EA Coaching Classes</a></li>
                                    <li><a href="{{ route('CPA_austraila_coaching_classes') }}">CPA Australia Coaching
                                            Classes</a></li>
                                     <li><a href="{{ route('CAMS_coaching_class') }}">CAMS CoachingClasses</a></li>
                                </ul>
                            </li>
                            
                             <li>
                                <a href="#">Law Entrance Exam Courses</a>
                                <ul>
                                    <li><a href="{{ route('llb_5_years_entrance_coaching') }}">LLB 5 Years
                                            Entrance Coaching</a></li>
                                    <li><a href="{{ route('llb_3_years_entrance_coaching') }}">LLB 3 Years
                                            Entrance Coaching</a></li>
                                    <li><a href="{{ route('clat_ug_pg_entrance_coaching') }}">CLAT UG & PG
                                            Entrance Coaching</a></li>
                                    <li><a href="{{ route('aibe_exam_coaching') }}">AIBE EXAM Coaching</a></li>
                                    <li><a href="{{ route('JUDICIARY_EXAM_Coaching') }}">JUDICIARY EXAM
                                            Coaching</a></li>
                                    <li><a href="{{ route('law_college_subject_coaching') }}">Law College
                                            Subject Coaching</a></li>
                                    <li><a href="{{ route('ugc_net_law_exam_coaching') }}">UGC NET- LAW EXAM
                                            Coaching</a></li>


                                </ul>
                            </li>
                            <li>
                                <a href="#" class="">Online Coaching </a>
                                <ul>
                                    <li><a href=" {{ route('online_coaching_class') }}">Online Coaching
                                            Classes</a>
                                    </li>
                                     <li><a  href="{{ route('online-coaching-india') }}">Online coaching India</a></li>
                                          <li><a  href="{{ route('online-tuition-abroad') }}">Online Tuition abroad</a></li>
                                    <li><a href="{{ route('contact') }}">Online Admission</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <li>
                                    <a href="{{ route('contact') }}">Countries</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('contact') }}">UAE</a>
                                            <ul>
                                                <li><a href="{{ route('contact') }}">Saudi Arabia</a></li>
                                                <li><a href="{{ route('contact') }}">Qatar</a></li>
                                                <li><a href="{{ route('contact') }}">Oman</a></li>
                                                <li><a href="{{ route('contact') }}">Bahrain</a></li>
                                                <li><a href="{{ route('contact') }}">Dubai</a></li>
                                                <li><a href="{{ route('contact') }}">Sharjah</a></li>
                                                <li><a href="{{ route('contact') }}">Fujairah</a></li>
                                                <li><a href="{{ route('contact') }}">Ajman</a></li>
                                                <li><a href="{{ route('contact') }}">Abu Dhabi</a></li>
                                                <li><a href="{{ route('contact') }}">Ras Al Khaimah</a></li>
                                                <li><a href="{{ route('contact') }}">Umm Al Quwain</a></li>
                                                <li><a href="{{ route('contact') }}">Kuwait</a></li>
                                                <li><a href="{{ route('contact') }}">Hong Kong</a></li>
                                                <li><a href="{{ route('contact') }}">Maldives</a></li>
                                                 <li><a href="{{ route('contact') }}">Mauritius</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Uk</a></li>
                                        <li><a href="{{ route('contact') }}">USA</a></li>
                                        <li><a href="{{ route('contact') }}">Australia</a></li>
                                        <li><a href="{{ route('contact') }}">South Africa</a></li>
                                        
                                       <li>
                                            <a href="{{ route('contact') }}">India</a>
                                            <ul>
                                                <li><a href="{{ route('contact') }}">Tamilnadu</a></li>
                                                <li><a href="{{ route('contact') }}">Kerala</a></li>
                                                <li><a href="{{ route('contact') }}">Karnataka</a></li>
                                                <li><a href="{{ route('contact') }}">Andhra pradesh</a></li>
                                                <li><a href="{{ route('contact') }}">Telangana </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Malaysia</a></li>
                                       
                                        <li><a href="{{ route('contact') }}">Kenya</a></li>
                                        <li><a href="{{ route('contact') }}">Singapore</a></li>
                                        <li><a href="{{ route('contact') }}">Thailand</a></li>
                                         <li><a href="{{ route('contact') }}">Canada</a></li>
                                        <li><a href="{{ route('contact') }}">Hong Kong</a></li>
                                        <li><a href="{{ route('contact') }}">Maldives</a></li>
                                        <li><a href="{{ route('contact') }}">New Zealand</a></li>
                                    </ul>
                                </li>

                             <li><a href="">Partnership Intergration</a>
                                <ul>
                                    <li><a href="{{ route('college-school-intergration-with-ara-education') }}">College | School</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('integrated_course') }}">Integrated Courses</a>
                                <ul>
                                    <li><a href="{{ route('integrated_course') }}#section1">B.COM/BBA
                                            WITH CA</a></li>
                                    <li><a href="{{ route('integrated_course') }}#section2">B.COM/BBA
                                            WITH CS</a></li>
                                    <li><a href="{{ route('integrated_course') }}#section3">B.COM/BBA
                                            WITH CMA</a></li>
                                    <li><a href="{{ route('integrated_course') }}#section4">B.COM/BBA
                                            WITH USCMA </a>
                                    </li>
                                    <li><a href="{{ route('integrated_course') }}#section4">B.COM/BBA
                                            WITH ACCA</a></li>
                                    <li><a href="{{ route('integrated_course') }}#section4">B.COM/BBA
                                            WITH CIMA</a></li>
                                    <li><a href="{{ route('integrated_course') }}#section4">MBA/M.COM
                                            WITH ACCA</a></li>
                                    <li><a href="{{ route('integrated_course') }}#section4">MBA/M.COM
                                            WITH USCMA</a>
                                    </li>
                                    <li><a href="{{ route('integrated_course') }}#section4">MBA/M.COM
                                            WITH CIMA</a></li>
                                    <li><a href="{{ route('other_courses') }}" class="text-center">
                                            Other Courses </a>
                                    </li>
                                </ul>
                            </li>
                           
                            <li>
                                <a href="{{ route('campus_job_placement') }}">Campus Job Placement</a>
                            </li>
                                                        <li>
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('resources') }}">Resource</a></li>
                                    <li><a href="{{ route('important_links') }}">Other Important Links</a></li>
                                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="#">Others</a>
                                <ul>
                                    <li>
                                        <a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="{{ route('image_gallery') }}">Image Gallery</a></li>
                                            <li><a href="{{ route('video_gallery') }}">Video Gallery</a></li>
                                        </ul>
                                    </li>
                                     <li>
                                        <a href="{{ route('elite_infrastructure') }}">Elite Infrastructure</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('why_after_12th') }}">WHAT AFTER 12th</a>
                                    </li>
                                    <li><a href="{{ route('education_loan') }}">Education Loan @ 0% Intrest
                                            EMI</a></li>
                                    <li><a href="{{ route('free_mock_test') }}">Free Mock Test</a></li>
                                </ul>
                            </li>
                           
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            
                        </ul>

                    </nav>

                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-10">
                <a aria-label="Ara Education" class="mobile-logo" href="{{ route('home') }}">
                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/logo.png" alt="Ara Education">
                </a>
            </div>
            <div class="col-2">
                <p class="text-end">
                    <a class="btn toggler" aria-label="Ara Education" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <i class="bi bi-filter-left"></i>
                    </a>
                </p>

            </div>
        </div>
    </div>
</div>

<div class="main-fixed-header">
    <div class="main-header-top web-view">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a aria-label="Ara Education" class="navbar-brand" href="{{ route('home') }}"><img src="<?php echo url(''); ?>/public/frontend/assets/images/logo.png" alt="Ara Education"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}">About Us</a></li>
                          <li class="dropdown nav-item"><a href="{{ route('integrated_course') }}">Integrated Courses <span
                            class="dropdown-toggle" data-bs-toggle="dropdown"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('integrated_course') }}#section1" class="dropdown-item">B.COM/BBA WITH CA</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section2" class="dropdown-item">B.COM/BBA WITH CS</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section3" class="dropdown-item">B.COM/BBA WITH CMA</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section4" class="dropdown-item">B.COM/BBA WITH USCMA
                            </a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section4" class="dropdown-item">B.COM/BBA WITH ACCA</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section4" class="dropdown-item">B.COM/BBA WITH CIMA</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section4" class="dropdown-item">MBA/M.COM WITH ACCA</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section4" class="dropdown-item">MBA/M.COM WITH USCMA</a>
                        </li>
                        <li><a href="{{ route('integrated_course') }}#section4" class="dropdown-item">MBA/M.COM WITH CIMA</a>
                        </li>
                        <li><a href="{{ route('other_courses') }}" class="dropdown-item" class="text-center"> Other Courses
                            </a>
                        </li>
                    </ul>

                </li>
                        
                       
                        <li class=" dropdown nav-item"><a href="">Blog  <span class="dropdown-toggle"
                                    data-bs-toggle="dropdown"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('blogs') }}">Blog</a></li>
                                <li><a class="dropdown-item" href="{{ route('resources') }}">Resource</a></li>
                                <li><a class="dropdown-item" href="{{ route('important_links') }}">Other Important Links</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('testimonials') }}">Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item"><a href="">Others <span class="dropdown-toggle"
                                    data-bs-toggle="dropdown"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a href="#" class="dropdown-item dropdown-toggle">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('image_gallery') }}">Image Gallery</a></li>
                                        <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('elite_infrastructure') }}" class="dropdown-item">Elite Infrastructure </a></li>
                                <li><a href="{{ route('why_after_12th') }}" class="dropdown-item">WHAT AFTER 12th</a></li>
                                 <li><a class="dropdown-item" href="{{ route('education_loan') }}">Education Loan @ 0% Intrest
                                        EMI</a></li>
                                <li><a class="dropdown-item" href="{{ route('free_mock_test') }}">Free Mock Test</a></li>
                            </ul>
                        </li>
                         <li class="nav-item"><a href="{{ str_replace('//', '//www.', route('contact')) }}">Contact Us</a></li>
                    </ul>
                    <div class=" ms-2" role="search">
                        <a href="{{ route('contact') }}#contact-form-section" class="btn enquiry-btn">Book a Free Demo Class</a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="main-header-bottom web-view">
        <div class="container">
            <ul class="navbar-header-bottom-list">
                <li class="dropdown nav-item"><a href="">Indian Courses <span class="dropdown-toggle"
                            data-bs-toggle="dropdown"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a href="{{ route('ca_coaching_class') }}"
                                class="dropdown-item dropdown-toggle">CA Coaching
                                Classes</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('ca_foundation_coaching') }}" class="dropdown-item">CA Foundation
                                        Coaching
                                        Classes</a></li>
                                <li><a href="{{ route('ca_intermediate_coaching') }}" class="dropdown-item">CA Intermediate
                                        Coaching Classes</a></li>
                                <li><a href="{{ route('ca_final_coaching') }}" class="dropdown-item">CA Final | Professional
                                        Coaching Classes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a href="{{ route('cs_coaching_classes') }}"
                                class="dropdown-item dropdown-toggle">CS Coaching
                                Classes </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('cseet_coaching_class') }}" class="dropdown-item">CSEET Coaching
                                        Classes</a>
                                </li>
                                <li><a href="{{ route('cs_executive_coaching') }}" class="dropdown-item">CS Executive Coaching
                                        Classes</a></li>
                                <li><a href="{{ route('cs_professional_coaching_class') }}" class="dropdown-item">CS
                                        Professional
                                        Coaching Classes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a href="{{ route('cma_coaching') }}"
                                class="dropdown-item dropdown-toggle">CMA
                                (ICWA)
                                Coaching Classes </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('cma_foundation_coaching') }}" class="dropdown-item">CMA (ICWA)
                                        Foundation
                                        Coaching Classes</a></li>
                                <li><a href="{{ route('cma_intermediate_coaching') }}" class="dropdown-item">CMA (ICWA)
                                        Intermediate Coaching Classes</a></li>
                                <li><a href="{{ route('cma_final_coaching') }}" class="dropdown-item">CMA (ICWA) Final |
                                        Professional Coaching
                                        Classes</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li class="dropdown nav-item"><a href="">International Courses<span class="dropdown-toggle"
                            data-bs-toggle="dropdown"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('ACCA_coaching_classes') }}" class="dropdown-item">ACCA Coaching Classes</a>
                        </li>
                        <li><a href="{{ route('US_CMA_coaching_classes') }}" class="dropdown-item">USCMA Coaching Classes</a>
                        </li>
                        <li><a href="{{ route('IFRS_coaching_classes') }}" class="dropdown-item">IFRS Coaching Classes</a>
                        </li>
                        <li><a href="{{ route('FRM_coaching_classes') }}" class="dropdown-item">FRM Coaching Classes </a></li>
                        <li><a href="{{ route('CFA_coaching_classes') }}" class="dropdown-item">CFA Coaching Classes</a></li>
                        <li><a href="{{ route('CPA_coaching_classes') }}" class="dropdown-item">CPA Coaching Classes</a></li>
                        <li><a href="{{ route('CIMA_coaching_classes') }}" class="dropdown-item">CIMA Coaching
                                Classes</a></li>
                        <li><a href="{{ route('CFP_coaching_classes') }}" class="dropdown-item">CFP Coaching Classes</a></li>
                        <li><a href="{{ route('EA_coaching_classes') }}" class="dropdown-item">EA Coaching Classes</a></li>
                        <li><a href="{{ route('CPA_austraila_coaching_classes') }}" class="dropdown-item">CPA Australia
                                Coaching
                                Classes</a></li>
                        <li><a href="{{ route('CAMS_coaching_class') }}" class="dropdown-item">CAMS Coaching
                                Classes</a></li>
                    </ul>

                </li>
                <li class="dropdown nav-item"><a href="{{ route('law_entrance_exam_course') }}">Law Entrance Exam Courses<span class="dropdown-toggle"
                            data-bs-toggle="dropdown"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('llb_5_years_entrance_coaching') }}">LLB 5 Years
                                Entrance Coaching</a></li>
                        <li><a class="dropdown-item" href="{{ route('llb_3_years_entrance_coaching') }}">LLB 3 Years
                                Entrance Coaching</a></li>
                        <li><a class="dropdown-item" href="{{ route('clat_ug_pg_entrance_coaching') }}">CLAT UG & PG
                                Entrance Coaching</a></li>
                        <li><a class="dropdown-item" href="{{ route('aibe_exam_coaching') }}">AIBE EXAM Coaching</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('JUDICIARY_EXAM_Coaching') }}">JUDICIARY EXAM
                                Coaching</a></li>
                        <li><a class="dropdown-item" href="{{ route('law_college_subject_coaching') }}">Law College
                                Subject Coaching</a></li>
                        <li><a class="dropdown-item" href="{{ route('ugc_net_law_exam_coaching') }}">UGC NET- LAW EXAM
                                Coaching</a></li>
                    </ul>
                </li>
                 <li class=" dropdown nav-item"><a href="">Online Coaching <span class="dropdown-toggle"
                                    data-bs-toggle="dropdown"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('online_coaching_class') }}">Online Coaching
                                        Classes</a></li>
                                          <li><a class="dropdown-item" href="{{ route('online-coaching-india') }}">Online coaching India</a></li>
                                          <li><a class="dropdown-item" href="{{ route('online-tuition-abroad') }}">Online Tuition abroad</a></li>
                                         <li><a class="dropdown-item" href="{{ route('contact') }}">Online Admission</a></li>
                               
                               
                            </ul>
                        </li>


                       <li class="dropdown nav-item">
    <a href="">Countries <span class="dropdown-toggle" data-bs-toggle="dropdown"></span></a>
    <ul class="dropdown-menu countries-dropdowm-menu">
        <!-- Countries -->
         <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="{{ route('contact') }}">UAE</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('contact') }}">Saudi Arabia</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Qatar</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Oman</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Bahrain</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Dubai</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Sharjah</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Fujairah</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Ajman</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Abu Dhabi</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Ras Al Khaimah</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Umm Al Quwain</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Kuwait</a></li>
                 <li><a class="dropdown-item" href="{{ route('contact') }}">Mauritius</a></li>
            </ul>
        </li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">UK</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">USA</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Australia</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">South Africa</a></li>

        <!-- UAE with Submenu -->
        
       <!-- India with Submenu -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="{{ route('contact') }}">India</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('contact') }}">Tamil Nadu</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Kerala</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Karnataka</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Andhra pradesh</a></li>
                <li><a class="dropdown-item" href="{{ route('contact') }}">Telangana </a></li>
            </ul>
        </li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Malaysia</a></li>
       
        <li><a class="dropdown-item" href="{{ route('contact') }}">Kenya</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Singapore</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Thailand</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Canada</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Hong Kong</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">Maldives</a></li>
        <li><a class="dropdown-item" href="{{ route('contact') }}">New Zealand</a></li>

       
    </ul>
</li>


                <li class="dropdown nav-item"><a href="">Partnership Intergration<span class="dropdown-toggle"
                            data-bs-toggle="dropdown"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('college-school-intergration-with-ara-education') }}">College | School</a></li>
                    </ul>
                </li>
              
                

                <li class="nav-item"><a href="{{ route('campus_job_placement') }}">Campus Job Placement</a>
               </li>
                
            </ul>
        </div>
    </div>
</div>