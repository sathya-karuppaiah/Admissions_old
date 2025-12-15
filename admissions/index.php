<?php
if (isset($_GET['utm_source']) && $_GET['utm_source'] != "") {
   $utm_source = $_GET['utm_source'];
} else {
   $utm_source = '';
}
if (isset($_GET['utm_medium']) && $_GET['utm_medium'] != "") {
   $utm_medium = $_GET['utm_medium'];
} else {
   $utm_medium = '';
}
if (isset($_GET['utm_campaign']) && $_GET['utm_campaign'] != "") {
   $utm_campaign = $_GET['utm_campaign'];
} else {
   $utm_campaign = '';
}
if (isset($_GET['utm_term']) && $_GET['utm_term'] != "") {
   $utm_term = $_GET['utm_term'];
} else {
   $utm_term = '';
}
if (isset($_GET['utm_content']) && $_GET['utm_content'] != "") {
   $utm_content = $_GET['utm_content'];
} else {
   $utm_content = '';
}
?>

<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no">
   <meta name="google-site-verification" content="">
   <meta name="msvalidate.01" content="">
   <title>Sri Ramachandra Institute of Higher Education and Research | 2024</title>
   <meta name="description" content="Discover academic excellence at Sri Ramachandra Institute of Higher Education and Research. Explore innovative programs and world-class faculty. Enroll now!">
   <meta name="keywords" content="Sri Ramachandra Institute of Higher Education and Research">
   <link rel="shortcut icon" href="https://www.sriramachandra.edu.in/images/favicon.ico">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
   <link href="assets/css/stylelp.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
   <link rel="icon" href="" type="image/x-icon">
   <link rel="shortcut icon" href="" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@200&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <style>
      .row {
         margin-right: 0;
         margin-left: 0;
      }

      .banner_section {
         padding: 30px 0px 10px 0px;
         background-color: transparent;
         top: 100px;
         position: relative;
      }

      .company-logo {
         width: 100%;
         top: 20px;
         position:  relative;
         right: 10px;
      }

      .header_banner_section {
         padding: 10px 0px 10px 0px;
         background-color: transparent;

      }

      .main_banner_img {
         width: 100%;
         margin-bottom: 20px;
         cursor: pointer;
      }

      .hover12 {
         background: #000;
         border-radius: 10px;
      }

      .hover12 .main_banner_img {
         opacity: 1;
         -webkit-transition: .3s ease-in-out;
         transition: .3s ease-in-out;
      }

      .hover12:hover .main_banner_img {
         opacity: .5;
      }

      .hover12 {
         position: relative;
         background-color:#d80303;
         padding: 100px;
      }
      .hover12:hover{
         background-color:white; 
      }
       .hover12:hover button{
         color: #d80303;
      }

      .main_banner_img {
         display: block;
         width: 100%;
         height: auto;
      }

      .center-button {
         position: absolute;
         background: transparent;
         color: #fff;
         border-radius: 8px;
         padding: 8px 12px;
         font-size: 23px;
         border: none;
         cursor: pointer;
         font-weight: 700;
         width: 100%;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         z-index: 1;
      /* text-decoration: underline;*/
      }

      .center-button:hover {
         position: absolute;
         background: transparent;
         color: #BF2228;
         border-radius: 8px;
         padding: 8px 12px;
         border: none;
         cursor: pointer;
         font-weight: 600;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         z-index: 1;
      }
      .header_content_section{
         padding: 15px 0;
         z-index: 1;
        position: relative;
        top: 50px;
      }
      .header_content_bg{
         background-color: #105c8ed4;
         padding: 15px 30px;
         text-align: center;
         border-radius: 8px;
      }
      .header_content_text{
         font-size: 21px;
         font-weight: 700;
         color: #fff;
         margin-bottom: 0;
      }
      .mobileonly1 {
    display: none !important;
  }

  .desktoponly1 {
    display: block !important;
  }

      @media only screen and (max-width: 768px) {
         .mobileonly1 {
    display: block !important;
  }

  .desktoponly1 {
    display: none !important;
  }
         .center-button {
            font-size: 14px;
            padding: 4px 6px;
         }
         .header_content_bg{
         padding: 10px 10px;
      }
      .header_content_text{
         font-size: 14px;
      }
      .banner_section {
         padding: 10px 0px 10px 0px;
         background-color: transparent;
      }
      .header_content_section{
         padding: 5px 0;
      }
      }
    
     body {
    position: relative; /* Ensure the overlay is positioned correctly */
    background: url('./assets/images/bg.jpg') no-repeat center center;
    background-size: cover;
}

body::before {
    content: ''; /* Empty content to create the overlay */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Black with 20% opacity */
    z-index: 0; /* Ensure the overlay is above the background image */
}


   </style>
</head>

<body>
   <div class="header_banner_section">
      <div class="container-fliud">
         <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
               <img class="company-logo" src="./assets/images/sriher-white.png" alt="">
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
         </div>
      </div>
   </div>




  
      <div class="header_content_section">
      <div class="container">
         <div class="header_content_bg">
            <h1 class="header_content_text">Discover Academic Excellence: Click on UG or PG Tabs for Top Study Options</h1>
         </div>
         <div class=""></div>
      </div>
      </div>

<main class="page-content">
  <div class="card">
    <div class="content">
      <h2 class="title">Engineering <br>Admission 2025-26</h2>
     
      <button class="btn">Click Here</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">UG <br>Admission 2025-26</h2>
      
      <button class="btn">Click Here</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">PG <br>Admission 2025-26</h2>
     
      <button class="btn">Click Here</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Management <br>Admission 2025-26</h2>
      
      <button class="btn">Click Here</button>
    </div>
  </div>
</main>


      <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
      <script src='assets/js/script_check.js'></script>

      <style>
   .page-content {
  display: grid;
  grid-gap: 1rem;
  padding: 1rem;
  max-width: 1224px;
  margin: 0 auto;
  font-family: var(--font-sans);
}
@media (min-width: 600px) {
  .page-content {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 800px) {
  .page-content {
    grid-template-columns: repeat(4, 1fr);
  }
}

.card {
  position: relative;
  top: 85px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
  padding: 1rem;
  width: 100%;
  text-align: center;
  color: whitesmoke;
  background-color: #0000004a;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
}
@media (min-width: 600px) {
  .card {
    padding: 50px 0px;
  }
}
@media (max-width: 578px){
.btn {
    cursor: pointer;
    margin-top: 0px!important;
    padding: 0.75rem 1.5rem;
    font-size: 0.85rem;
    font-weight: bold;
    letter-spacing: 0.025rem;
    text-transform: uppercase;
    color: white;
    background-color: #bf0000;
    border: none;
}
.card {
  position: relative;
  top: 60px!important;
  padding: 10px!important;
  height: 100%!important;
}
.content {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 0px!important;
    transition: transform var(--d) var(--e);
    z-index: 1;
}
body{
   padding-bottom: 60px!important;
}
}

.card:hover{
/* background-color: #105c8ed4;*/
 background-color: #ffffffcc; 
}

.card:hover .title{
color: #bf0000;
}

.content {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  padding: 1rem;
  transition: transform var(--d) var(--e);
  z-index: 1;
}

.content > * + * {
/*  margin-top: 1rem;*/
}

.title {
  font-size: 1.3rem;
  font-weight: bold;
  line-height: 1.3;
  color: white;
}

.copy {
  font-family: var(--font-serif);
  font-size: 1.125rem;
  font-style: italic;
  line-height: 1.35;
}

.btn {
  cursor: pointer;
/*  margin-top: 1.5rem;*/
  padding: 0.75rem 1.5rem;
  font-size: 0.85rem;
  font-weight: bold;
  letter-spacing: 0.025rem;
  text-transform: uppercase;
  color: white;
  background-color: #bf0000;
  border: none;
}

.btn:hover {
 background-color: #bf0000;
  color: white;
}
.btn:focus {
  outline: 1px dashed yellow;
  outline-offset: 3px;
}

@media (hover: hover) and (min-width: 600px) {
  .card:after {
    transform: translateY(0);
  }

  .content {
    transform: translateY(calc(100% - 7.5rem));
  }
  .content > *:not(.title) {
    opacity: 1;
/*    transform: translateY(1rem);*/
    transition: transform var(--d) var(--e), opacity var(--d) var(--e);
  }

  .card:hover,
.card:focus-within {
    align-items: center;
  }
  .card:hover:before,
.card:focus-within:before {
    transform: translateY(-4%);
  }
  .card:hover:after,
.card:focus-within:after {
    transform: translateY(-50%);
  }
  .card:hover .content,
.card:focus-within .content {
    transform: translateY(0);
  }
  .card:hover .content > *:not(.title),
.card:focus-within .content > *:not(.title) {
    opacity: 1;
    transform: translateY(0);
    transition-delay: calc(var(--d) / 8);
  }

  .card:focus-within:before, .card:focus-within:after,
.card:focus-within .content,
.card:focus-within .content > *:not(.title) {
    transition-duration: 0s;
  }
}
   </style>


</body>

<!-- Start Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KNQ8VX9V');</script>
<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '766828882081258');
fbq('track', 'PageView');
</script>
</html>