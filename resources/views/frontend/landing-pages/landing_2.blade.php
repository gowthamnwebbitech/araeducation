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
    <!--<link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/bootstrap-icons.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/all.min.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/bootstrap.min.css" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/flaticon.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/animate.css" />
    @if (\Route::current()->getName() != 'home')
        <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/fancybox.min.css" />
    @endif
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo url(''); ?>/public/frontend/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo url(''); ?>/assets/css/landing2.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

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
    <!-- banner -->
    <section class="banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row align-items-center gy-5">

                    <!-- LEFT: Headline + Copy -->
                    <div class="col-lg-6 text-white ms-4">
                        <h1 class="display-5 fw-bold mb-3">{{ $pageData->name }}</h1>
                        <h3>For More Details</h3>
                        <a href="tel:+91 9489877979" class="banner-btn">+91 94 89 87 79 79</a>

                    </div>

                    <!-- RIGHT: Form (glass/blur) -->
                    <div class="col-lg-5 ms-lg-auto">
                        <div class="form-glass p-4 p-md-5">
                            @if (session('success'))
                                <div id="successMessage" class="alert alert-success rounded-3">
                                    <h5 class="text-secondary bg-success text-white"> 
                                        {{ session('success') }}
                                    </h5>
                                </div>
                
                                <script>
                                    setTimeout(function() {
                                        document.getElementById('successMessage').style.display = 'none';
                                    }, 5000);
                                </script>
                            @endif
                            <h5 class="text-white mb-4">Contact us</h5>

                            <form action="{{route('enquiry')}}" class="pill-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control pill-input" placeholder="Name"
                                        aria-label="Name" required>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control pill-input" placeholder="Email"
                                        aria-label="Email" required>
                                </div>

                                <!-- Number -->
                                <div class="mb-3">
                                    <input type="number" name="phone" class="form-control pill-input" placeholder="Phone number"
                                        aria-label="Phone number" required>
                                </div>

                                <!-- Message -->
                                <div class="mb-4">
                                    <textarea class="form-control pill-input pill-textarea" name="message" rows="4" placeholder="Message" aria-label="Message"></textarea>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex gap-2">
                                    <button type="reset" class="btn reset btn-pill btn-darkghost w-50">Reset</button>
                                    <button type="submit" class="btn btn-pill btn-cta w-50">Send</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- content -->
    <section class="py-5 bg-light" style="padding-top: 50px">
        <div class="container">
            <div class="row mt-2">

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <aside class="sidebar-card">
                        <h3 class="sidebar-title">Categories</h3>
                        <nav class="sidebar-list">
                            @foreach ($categories as $category)
                                <a href="{{ route('category.list', $category->slug) }}"
                                    class="sidebar-item">{{ $category->name }}</a>
                            @endforeach
                        </nav>
                    </aside>
                    <div class="col-12 col-md-12 mb-4 col-lg-12 mt-4">
                        <div class="social-box whatsapp-box wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center p-4 gap-3">
                                <div class="social-icon-wrapper">
                                    <img src="<?php echo url('public/frontend/assets/images/whatsapp.webp'); ?>" alt="Ara Education Whatsapp"
                                        class="whatsapp-icon">
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

                    <div class="col-12 mb-4 col-lg-12 my-4">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12 mb-4">
                                <img src="<?php echo url('assets/images/landing_page/sidebar1.webp'); ?>" class="contents-img" alt="Description of image 1">
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 mb-4">
                                <img src="<?php echo url('assets/images/landing_page/sidebar2.webp'); ?>" class="contents-img" alt="Description of image 1">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="ms-4">
                        <img src="<?php echo url(''); ?>/assets/images/landing_page/content.webp" class="content-img"
                            alt="">
                        <div class="content-card">

                            <!-- Section 2 -->
                            {!! $pageData->banner_description !!}

                            {!! $pageData->page_description !!}

                        </div>
                        @php
                            $faqs = json_decode($pageData->faq, true);
                        @endphp

                        @if (!empty($faqs))
                            <section class="py-5 faq-section my-4">
                                <div class="container">
                                    <div class="text-center mb-5">
                                        <h2 class="fw-bold text-danger">Frequently Asked Questions</h2>
                                        <p class="text-muted">Find answers to the most common queries about our courses
                                            and services.</p>
                                    </div>

                                    <div class="accordion faq-accordion" id="faqAccordion">
                                        @foreach ($faqs as $index => $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                                    <button
                                                        class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapse{{ $index }}"
                                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}">
                                                        {{ $faq['title'] ?? '' }}
                                                    </button>
                                                </h2>
                                                <div id="faqCollapse{{ $index }}"
                                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                    data-bs-parent="#faqAccordion">
                                                    <div class="accordion-body">
                                                        {{ $faq['description'] ?? '' }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend.inc.footer')
    <script>
        document.querySelector(".pill-form").addEventListener("submit", function() {
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
