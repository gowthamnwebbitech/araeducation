<style>
  #social-fixed {
    display: flex;
    align-items: center;
    margin: 10px 0px;
  }

  #social-fixed a {
    color: #fff;
    display: block;
    height: 40px;
    position: relative;
    text-align: center;
    line-height: 40px;
    width: 40px;
    margin-right: 1px;
    z-index: 2;
  }

  #social-fixed a:hover>span {
    visibility: visible;
    left: 41px;
    opacity: 1;
  }

  #social-fixed a span {
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

  .fixed-facebook {
    background-color: #257FF3;
  }

  .fixed-facebook span {
    background-color: #257FF3;
  }

  .fixed-twitter {
    background-color: #000;

  }

  .fixed-twitter span {
    background-color: #000;
  }

  .fixed-pintrest {
    background-color: #C8555D;

  }

  .fixed-pintrest span {
    background-color: #C8555D;
  }

  .fixed-linkedin {
    background-color: #3493C4;

  }

  .fixed-linkedin span {
    background-color: #3493C4;
  }

  .fixed-instagram {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);

  }

  .fixed-instagram span {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  }

  .fixed-tumblr {
    background-color: #34526F;

  }

  .fixed-tumblr span {
    background-color: #34526F;
  }

  .fixed-youtube {
    background-color: #FF1515;

  }

  .fixed-youtube span {
    background-color: #FF1515;
  }


  .fixed-google-play {
    background: linear-gradient(-120deg, #4284f4, #34a853, #fbbc05, #ea4335)
  }

  .fixed-google-play span {
    background: linear-gradient(-120deg, #4284f4, #34a853, #fbbc05, #ea4335)
  }

  /*end fixed social*/

  /* Mobile Specific Adjustments */
@media (max-width: 767px) {
  .footer-top {
    text-align: center;
    padding-bottom: 30px;
  }

  /* Center the logo and text */
  .footer-logo {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
  }

  .footer-address-list {
    padding: 0;
    display: inline-block;
    text-align: left; /* Keeps contact info readable */
  }

  /* Improve Social Icon Layout for touch */
  #social-fixed {
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px; /* Adds space between icons */
    overflow: hidden;
  }

  #social-fixed a {
    margin-right: 0; /* Clear desktop margin */
    border-radius: 4px;
  }

  /* Disable hover tooltips on mobile as they interfere with clicking */
  #social-fixed a span {
    display: none !important;
  }

  /* Stack Footer Titles and Lists */
  .footer-title {
    font-size: 1.2rem;
    margin-top: 30px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding-bottom: 10px;
    text-align: center;
  }

  .footer-list {
    padding: 0;
    list-style: none;
  }

  .footer-list li {
    padding: 8px 0;
  }

  /* Make links easier to tap */
  .footer-link {
    display: block;
    padding: 5px 0;
    font-size: 14px;
  }

  .footer-bottom {
    padding: 20px 0;
  }
}

</style>


<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo">
            <a aria-label="Ara Education" href="{{ route('home') }}"><img
                src="<?php echo url(''); ?>/public/frontend/assets/images/footer-logo.png" alt="Ara Education 100% placement Education center"></a>
          </div>
          <p class="footer-text">Coaching for CA | CS | CMA-ICWA | CLAT LAW | ACCA | USCMA | IFRS | FRM |
            CFA | CPA |
            CIMA | CFP | EA | CPA AUS | CAMS</p>
          <ul class="footer-address-list mt-3">
            <li><a class="footer-link" href="https://maps.app.goo.gl/stTGVGDXNZwLa4rJ6" target="_blank"><i
                  class="bi bi-geo-alt-fill"></i>3rd
                Floor,
                Durga Complex,6th Street,
                Cross cut road, Back
                Side Sree Devi Textile
                Delivery Center,
                Coimbatore-641 012.Tamilnadu-India</a></li>
            <li><a class="footer-link clr-fff410" href="tel:+914224355539"><i class="bi bi-telephone-fill"></i>+91
                422 -
                43 555 39</a></li>
            <li><a class="footer-link clr-fff410" href="tel:+919489877979"><i class="bi bi-telephone-fill"></i>+91
                94 89 87 79 79</a></li>
            <li><a class="footer-link clr-fff410" href="tel:+919489885868"><i class="bi bi-telephone-fill"></i>+91
                94 89 88 58 68</a></li>
            <li><a class="footer-link" href="mailto:araeducationcoimbatore@gmail.com"><i
                  class="bi bi-envelope-fill"></i>araeducationcoimbatore@gmail.com</a>
            </li>
          </ul>
          <div class="mobile-view">
            <div id="social-fixed">
              <div>
                <a aria-label="Ara Education" href="https://www.facebook.com/araeducationcoimbatore"
                  class="fixed-facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
              <div>
                <a aria-label="Ara Education" href="https://twitter.com/araeducationcbe" class="fixed-twitter"
                  target="_blank"><i class="bi bi-twitter-x"></i></a>
              </div>
              <div>
                <a aria-label="Ara Education" href="https://in.pinterest.com/araeducationcoachingcenter/"
                  class="fixed-pintrest" target="_blank"><i class="bi bi-pinterest"></i></a>
              </div>
              <div>
                <a aria-label="Ara Education" href="https://www.instagram.com/araeducationcoimbatore/"
                  class="fixed-instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
              <div>
                <a aria-label="Ara Education"
                  href="https://www.linkedin.com/in/ara-education-ca-cs-cma-acca-uscma-cseet-clat-coaching-center-coimbatore-tamilnadu-india/ "
                  class="fixed-linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
              <div>
                <a aria-label="Ara Education" href="https://www.youtube.com/@araeducation" class="fixed-youtube"
                  target="_blank"><i class="bi bi-youtube"></i></a>
              </div>
              <div>
                <a aria-label="Ara Education" href="https://www.tumblr.com/blog/view/araeducation-blog"
                  class="fixed-tumblr" target="_blank"><img
                    src="https://araeducation.in/public/frontend/assets/images/tumblr.svg" alt="Ara Education"
                    style="width:18px;"></a>
              </div>
              <div>
                <a aria-label="Ara Education" href="https://play.google.com/store/apps/details?id=co.groot.bdpgr"
                  class="fixed-google-play" target="_blank"><i class="bi bi-google-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h3 class="footer-title">Indian Courses</h3>
          <ul class="footer-list">
            <li><a href="{{ route('ca_coaching_class') }}" class="footer-link">CA Coaching Classes</a></li>
            <li><a href="{{ route('cs_coaching_classes') }}" class="footer-link">CS Coaching Classes</a></li>
            <li><a href="{{ route('cma_coaching') }}" class="footer-link">CMA (ICWA) Coaching Classes</a></li>

            <li><a href="{{ route('clat_all_india_law_entrance_exam_coaching') }}" class="footer-link">Law Entrance
                Coaching Classes</a></li>

            <li><a href="{{ route('online_coaching_class') }}" class="footer-link">Online Coaching</a></li>
            <li><a href="{{ route('college-school-intergration-with-ara-education') }}" class="footer-link">Partnership
                Integration</a></li>
            <li><a href="{{ route('campus_job_placement') }}" class="footer-link"> Campus Job
                Placement</a></li>
          </ul>
          <h3 class="footer-title mt-4">Terms & Policy</h3>
          <ul class="footer-list">
            <li><a href="{{ route('disclaimer') }}" class="footer-link">Disclaimer</a></li>
            <li><a href="{{ route('terms_and_conditions') }}" class="footer-link">Terms & Conditions</a></li>
            <li><a href="{{ route('privacy_policy') }}" class="footer-link">Privacy Policy</a></li>
            <li><a href="{{ route('refund_policy') }}" class="footer-link">Refund Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h3 class="footer-title">International Courses</h3>
          <ul class="footer-list">
            <li><a href="{{ route('ACCA_coaching_classes') }}" class="footer-link">ACCA Coaching Classes</a>
            </li>
            <li><a href="{{ route('US_CMA_coaching_classes') }}" class="footer-link">US CMA Coaching Classes</a>
            </li>
            <li><a href="{{ route('IFRS_coaching_classes') }}" class="footer-link">IFRS Coaching Classes</a>
            </li>
            <li><a href="{{ route('FRM_coaching_classes') }}" class="footer-link">FRM Coaching Classes </a></li>
            <li><a href="{{ route('CFA_coaching_classes') }}" class="footer-link">CFA Coaching Classes</a></li>
            <li><a href="{{ route('CPA_coaching_classes') }}" class="footer-link">CPA Coaching Classes</a></li>
            <li><a href="{{ route('CIMA_coaching_classes') }}" class="footer-link">CIMA Coaching
                Classes</a></li>
            <li><a href="{{ route('CFP_coaching_classes') }}" class="footer-link">CFP Coaching Classes</a></li>
            <li><a href="{{ route('EA_coaching_classes') }}" class="footer-link">EA Coaching Classes</a></li>
            <li><a href="{{ route('CPA_austraila_coaching_classes') }}" class="footer-link">CPA Australia
                Coaching
                Classes</a></li>
            <li><a href="{{ route('CAMS_coaching_class') }}" class="footer-link">CAMS Coaching
                Classes</a></li>
          </ul>

          <h3 class="footer-title mt-4">Law Entrance Exam Courses</h3>
          <ul class="footer-list">
            <li><a class="footer-link" href="{{ route('llb_5_years_entrance_coaching') }}">LLB 5 Years
                Entrance Coaching</a></li>
            <li><a class="footer-link" href="{{ route('llb_3_years_entrance_coaching') }}">LLB 3 Years
                Entrance Coaching</a></li>
            <li><a class="footer-link" href="{{ route('clat_ug_pg_entrance_coaching') }}">CLAT UG & PG
                Entrance Coaching</a></li>
            <li><a class="footer-link" href="{{ route('aibe_exam_coaching') }}">AIBE EXAM Coaching</a>
            </li>
            <li><a class="footer-link" href="{{ route('JUDICIARY_EXAM_Coaching') }}">JUDICIARY EXAM
                Coaching</a></li>
            <li><a class="footer-link" href="{{ route('law_college_subject_coaching') }}">Law College
                Subject Coaching</a></li>
            <li><a class="footer-link" href="{{ route('ugc_net_law_exam_coaching') }}">UGC NET- LAW EXAM
                Coaching</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h3 class="footer-title">Get Online Tuition</h3>
          <ul class="footer-list">
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in India</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in USA</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in UK</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Canada</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Australia</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in New Zealand</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Bahrain</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Qatar</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Kuwait</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Saudi Arabia</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Oman</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in UAE</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Hong Kong</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Malaysia</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Singapore</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Maldives</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Online Tuition in Thailand</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7 col-md-8">
          <p class="copyright-text text-center text-lg-start">© Copyright {{date('Y')}} @Ara Education. All rights
            are reserved</p>
        </div>
        {{-- <div class="col-lg-5 col-md-4">
           <p class="copyright-text text-center text-md-end">Designed by <a href="https://webbitech.com/"
               target="_blank">Webbitech.com</a></p>
         </div>--}}
      </div>
    </div>
  </div>
</footer>