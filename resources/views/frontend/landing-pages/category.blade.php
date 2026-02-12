<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="p:domain_verify" content="7b550f5234f3f5dbd29d474d37cbd1b9" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keyword')">
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
    <style>
	    .blog-content
	    {
	        padding: 2px 16px;
	    }
	    .blog-box
	    {
	        display: flex;
            justify-content: center;
            align-items: center;
            height:100px;
            border-radius: 10px;
	    }
	    .blog-wrapper a
	    {
	        color: #fff;
	    }
	    .blog-content h2
	    {
	        text-align: center;
	    }
        .common-wrapper{
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, black, #00000073);
            color: white;
            font-size: 41px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .blog-wrapper a{
            font-size: 20px;
        }
	</style>
    <?php
        $arr_style = ['#68928c'];
        
    ?>
	<section class="common-wrapper pb-7 pt-7">
	   <div class="container">
	      <div class="common-heading text-center">
	         <span>{{ $category->name }}</span>
	      </div>
	   </div>
	</section>
	<!--common-banner-start-->
	<div class="common-color">
	   <!--blog-section-start-->
	   <section class="blog-wrapper common-padding">
	      <div class="container-fluid">
	         <!--<div class="blog-heading text-center">-->
	         <!--   <span>OUR JOURNAL</span>-->
	         <!--   <h1>Take a look at our latest articles & resources</h1>-->
	         <!--</div>-->
	         <div class="row">
	            <div class="col-lg-12 col-md-12">
	               <div class="row">

	                  @if($pages)
	                  @foreach($pages as $key => $value)
	                  <?php
                        $curr_key = array_rand($arr_style);
                      ?>
	                  <div class="col-lg-3 col-md-12 mb-4">
	                    <a href="{{ route('landing.page', $value->slug) }}">
	                        <div class="blog-box" style="background: {{ isset($arr_style[$curr_key]) ? $arr_style[$curr_key] : '' }}">
	                           <div class="blog-content">
	                              <h2>
	                                  <a href="{{ route('landing.page', $value->slug) }}"> {{ $value->name }} </a></h2>
	                           </div>
	                        </div>
	                    </a>
	                  </div>
	                  @endforeach
	                  @endif

	               </div>
	            </div>
	            
	         </div>
	      </div>
		</section>
	</div>
    @include('frontend.inc.footer')

    <!-- script -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
