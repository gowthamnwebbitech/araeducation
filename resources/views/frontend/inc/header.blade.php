<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="p:domain_verify" content="7b550f5234f3f5dbd29d474d37cbd1b9" />
  <meta name="google-site-verification" content="Kcszz9NiUUfvu3YB8_zmL3qBygBGTXBT92U_VB_piBc" />
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keyword')">
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" type="image/icon" href="<?php echo url(''); ?>/public/frontend/assets/images/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--<link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/bootstrap-icons.css" />-->
  <!--<link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/all.min.css" />-->
  <link rel="stylesheet" type="text/css"
    href="<?php echo url(''); ?>/public/frontend/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/bootstrap.min.css" />
  <!--<link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/flaticon.css" />-->
  <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/animate.css" />
  @if(\Route::current()->getName() != 'home')
    <link rel="stylesheet" type="text/css" href="<?php  echo url(''); ?>/public/frontend/assets/css/fancybox.min.css" />
  @endif
  <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/meanmenu.css" />
  <link rel="stylesheet" type="text/css"
    href="<?php echo url(''); ?>/public/frontend/assets/css/owl.theme.default.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo url(''); ?>/public/frontend/assets/css/style.css" />

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
    gtag('event', 'conversion', { 'send_to': 'AW-876206963/5dixCMyi1sQBEPO256ED' });
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