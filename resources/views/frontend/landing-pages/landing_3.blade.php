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
    <link rel="stylesheet" href="<?php echo url(''); ?>/assets/css/landing3.css" />
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
    <section class="hero hero-minh d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center g-4">

                <!-- Left Column -->
                <div class="col-12 col-lg-6 hero-content">
                    <h1 class="display-5 fw-bold mb-3">{{ $pageData->name }}</h1>
                    <h3>For More Details</h3>
                    <a href="tel:+91 9489877979" class="banner-btn">+91 94 89 87 79 79</a>
                </div>

                <!-- Right Column (Form) -->
                <div class="col-12 col-lg-5 ms-lg-auto">
                    <div class="form-card">
                        @if (session('success'))
                            <div id="successMessage" class="alert alert-success">
                               <h5 class="text-success"> {{ session('success') }}</h5>
                            </div>
            
                            <script>
                                setTimeout(function() {
                                    document.getElementById('successMessage').style.display = 'none';
                                }, 5000);
                            </script>
                        @endif
                        <form action="{{route('enquiry')}}" id="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your full name" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone
                                    Number</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="+91 98765 43210" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="you@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message here..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-brand w-100 text-white">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-edu py-5">
        <div class="container">

            <!-- Top row: Image + Sidebar -->
            <div class="row mt-2 align-items-start" style="padding-top: 50px">
                <!-- Left: Image card -->
                <div class="col-lg-8">
                    <figure class="m-0">
                        <img src="<?php echo url(''); ?>/assets/images/landing_page/content.webp"
                            alt="People learning in classroom" class="img-fluid rounded content-img">
                    </figure>

                    <!-- Content -->
                    <div class=" mt-5">
                        <div class="col-lg-12">
                            {!! $pageData->banner_description !!}

                            {!! $pageData->page_description !!}

                            <!-- FAQ -->
                            @php
                                $faqs = json_decode($pageData->faq, true);
                            @endphp

                            @if (!empty($faqs))
                                <h3 class="h4 fw-bold mt-5 mb-4 text-brand">Frequently Asked Questions</h3>
                                <div class="accordion fancy-acc mb-4" id="faqAcc">
                                    @foreach ($faqs as $index => $faq)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="q{{ $index }}h">
                                                <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#q{{ $index }}"
                                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                    aria-controls="q{{ $index }}">
                                                    {{ $faq['title'] }}
                                                </button>
                                            </h2>
                                            <div id="q{{ $index }}"
                                                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                aria-labelledby="q{{ $index }}h" data-bs-parent="#faqAcc">
                                                <div class="accordion-body">
                                                    {{ $faq['description'] }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <!-- /FAQ -->
                        </div>
                    </div>
                </div>

                <!-- Right: Categories sidebar -->
                <aside class="col-lg-4">
                    <div class="cat-card">
                        <h3 class="cat-title">Categories</h3>
                        <nav class="cat-list">
                            @foreach ($categories as $category)
                                <a href="{{ route('category.list', $category->slug) }}"
                                    class="cat-link">{{ $category->name }}</a>
                            @endforeach
                        </nav>
                    </div>
                    <div class="col-12  mb-4 col-lg-12 mt-4">
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

                </aside>

            </div>


        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
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

    @include('frontend.inc.footer')
</body>

</html>
