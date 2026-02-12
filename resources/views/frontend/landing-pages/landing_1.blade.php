<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $pageData->meta_title }}</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="p:domain_verify" content="7b550f5234f3f5dbd29d474d37cbd1b9" />
    <meta name="description" content="{!! $pageData->page_description !!}">
    <meta name="keywords" content="{{ $pageData->meta_keyword }}">
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="nj7tk-TBXRYiHHW1gEJ_z0NM5eSWP3wjrks8OYkHD1k" />
    <link rel="shortcut icon" type="image/icon" href="<?php echo url(''); ?>/public/frontend/assets/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/animate.css" />
    @if (\Route::current()->getName() != 'home')
        <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/fancybox.min.css" />
    @endif
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo url(''); ?>/public/frontend/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo url(''); ?>/assets/css/landing1.css" />

    <link rel="canonical" href="<?php echo URL::current(); ?>">

    <script>
        window.addEventListener('scroll', function loadGTM() {
            var script = document.createElement('script');
            script.src = 'https://www.googletagmanager.com/gtag/js?id=G-PZ1SBBHVNW';
            document.head.appendChild(script);
            window.removeEventListener('scroll', loadGTM);
        });
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-876206963/5dixCMyi1sQBEPO256ED'
        });
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Ara Education",
            "url": "https://www.araeducation.in/",
            "logo": "https://www.araeducation.in/public/frontend/assets/images/logo.png",
            "sameAs": [
                "https://www.facebook.com/araeducationcoimbatore",
                "https://x.com/araeducationcbe",
                "https://www.instagram.com/araeducationcoimbatore/",
                "https://www.youtube.com/@araeducation",
                "https://www.linkedin.com/in/ara-education-ca-cs-cma-acca-uscma-cseet-clat-coaching-center-coimbatore-tamilnadu-india/"
            ]
        }
    </script>
</head>

<body>

    @include('frontend.inc.navbar')
    <section class="ara-banner">
        <div class="container">
            <div class="row align-items-center">
                <!-- align-items-center does vertical centering -->
                <!-- Left Column -->
                <div class="col-md-6 text-white">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <h1 class="fw-bold mb-3">{{ $pageData->name }}</h1>
                        <!-- <p class="lead">
                            ARA Education is a trusted <a href="#"> coaching and training institute in
                                Coimbatore,</a>
                            committed to helping students and professionals achieve their goals. We offer expert-led
                            courses, personalized guidance, and a supportive learning environment tailored to your
                            needs. Our dedicated mentors ensure you gain practical skills and confidence, empowering you
                            to excel in your career or studies.</a>.
                        </p> -->
                    </div>
                    <h3>For More Details</h3>
                    <a href="tel:+91 9489877979" class="banner-btn">+91 94 89 87 79 79</a>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="ara-card p-4">
                        @if (session('success'))
                            <div id="successMessage" class="alert alert-success">
                               <h5 class="text-white bg-success"> {{ session('success') }}</h5>
                            </div>
            
                            <script>
                                setTimeout(function() {
                                    document.getElementById('successMessage').style.display = 'none';
                                }, 5000);
                            </script>
                        @endif
                        <form id="form" method="POST" action="{{route('enquiry')}}" class="ara-form">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" name="email" type="email" placeholder="Email address" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input class="form-control" name="phone" type="phone" placeholder="Enter Mobile" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="message" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="ara-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    <section class="ara-content-section" style="padding-top: 50px">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Main Left Content -->
                <div class="col-lg-8 ">
                    <div class=" me-4">
                        <img src="<?php echo url(''); ?>/assets/images/landing_page/content.webp" class="content-img"
                            alt="">
                        <!-- First block -->
                        {!! $pageData->banner_description !!}

                        {!! $pageData->page_description !!}

                        <!-- FAQ -->
                        @php
                            $faqs = json_decode($pageData->faq, true);
                        @endphp

                        @if (!empty($faqs))
                            <div class="row">
                                <div class="col-8 mb-4">
                                    <h2 class="ara-faq-heading mb-4">Frequently Asked Questions</h2>
                                    <div class="accordion" id="araFaqAccordion">
                                        @foreach ($faqs as $index => $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                                    <button
                                                        class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapse{{ $index }}"
                                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                        aria-controls="faqCollapse{{ $index }}">
                                                        {{ $faq['title'] ?? '' }}
                                                    </button>
                                                </h2>
                                                <div id="faqCollapse{{ $index }}"
                                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                    aria-labelledby="faqHeading{{ $index }}"
                                                    data-bs-parent="#araFaqAccordion">
                                                    <div class="accordion-body">
                                                        {{ $faq['description'] ?? '' }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 mt-2">
                    <aside class="ara-sidebar p-3 rounded">
                        <h3 class="ara-sidebar-title mb-3">Categories</h3>
                        <ul class="ara-category-list list-unstyled">
                            @foreach ($categories as $category)
                                <li><a href="{{ route('category.list', $category->slug) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                    <div class="col-12 col-md-6 mb-4 col-lg-12 mt-4">
                        <div class="social-box whatsapp-box wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center p-4 gap-3">
                                <div class="social-icon-wrapper">
                                    <img src="<?php echo url(''); ?>/public/frontend/assets/images/whatsapp.webp"
                                        alt="Ara Education Whatsapp" class="whatsapp-icon">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="box-title fw-bold mb-0">Whatsapp</h5>
                                    <a class="btn btn-success mt-2"
                                        href="https://whatsapp.com/channel/0029VbB2koZGzzKOs404Pb2S" target="_blank">
                                        Reach Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  mb-4 col-lg-12 my-4">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12  mb-4">
                                <img src="<?php echo url(''); ?>/assets/images/landing_page/sidebar1.webp"
                                    class="contents-img" alt="Description of image 1">
                            </div>
                            <div class="col-12  col-md-6  col-lg-12 mb-4">
                                <img src="<?php echo url(''); ?>/assets/images/landing_page/sidebar2.webp"
                                    class="contents-img" alt="Description of image 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.inc.footer')
    <script>
        document.querySelector("#form").addEventListener("submit", function() {
            let submitBtn = this.querySelector("button[type='submit']");
            submitBtn.disabled = true;
            submitBtn.textContent = "Sending...";
        });
    </script>
    <!-- script -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
