<html>
<?php 
if(isset($_GET['name']) && $_GET['name']!=''){
	$name = $_GET['name'];
	$token = $_GET['token'];
}
else
{
	$name = 'Student';
}
?>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no">
   <meta name="google-site-verification" content="">
   <meta name="msvalidate.01" content="">
   <title>Admissions Open 2025 | Sri Ramachandra Institute of Higher Education and Research</title>
   <meta name="description" content="Shape your future with world-class education! Admissions for 2025 are now open at Sri Ramachandra Institute of Higher Education and Research. Explore our diverse range of programs in medicine, healthcare, and allied sciences. Apply now and join a legacy of excellence!">
   <meta name="keywords" content="Sri Ramachandra Institute of Higher Education and Research | 2025">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
   <link href="assets/css/style.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
   <link rel="icon" href="" type="image/x-icon">
   <link rel="shortcut icon" href="https://www.sriramachandra.edu.in/images/favicon.ico" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@200&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   
   <!-- Google Tag Manager -->
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
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=766828882081258&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

   <style>
      #otpSection {
         display: none;
      }
      .otp_btn {
         border: none;
         background-color: transparent;
         color: #2f8f1f;
         font-weight: 500;
         float: right;
         margin-top: 10px;
         cursor: pointer;
      }
      .otp-input-fields {
         margin: auto;
         background-color: white;
         /* box-shadow: 0px 0px 8px 0px #02025044; */
         /* max-width: 400px; */
         width: auto;
         display: flex;
         justify-content: center;
         gap: 10px;
         padding: 0px;
         input {
            height: 40px;
            width: 40px;
            background-color: transparent;
            border-radius: 4px;
            border: 2px solid #2f8f1f;
            text-align: center;
            outline: none;
            font-size: 16px;
            &::-webkit-outer-spin-button,
            &::-webkit-inner-spin-button {
               -webkit-appearance: none;
               margin: 0;
            }
            /* Firefox */
            &[type=number] {
               -moz-appearance: textfield;
            }
            &:focus {
               border-width: 2px;
               border-color: darken(#2f8f1f, 5%);
               font-size: 20px;
            }
         }
      }
      .msg {
         margin-bottom: 5px;
      }
      .errorMobile {
         color: red;
         font-size: 0.70rem;
         text-align: start;
         padding-top: 0.3rem;
         padding-left: 5px;
         display: none;
      }
      .errorMobile {
         margin-bottom: 0px;
      }
      .getotpdiv{
         font-size: 13px;
         cursor:pointer;
         color: #FFFFFF;
         background:rgba(191, 34, 40, 1);
         padding: 8px 6px 8px 6px;
         border-radius: 5px;
         text-decoration: none;
      }
      .getotpdiv:hover{
        cursor:pointer;
        color:#FFFFFF;
        text-decoration: none !important;
     }
     .resendotp{
      color:#FFFFFF;}
      .otpverifieddiv{font-size:13px;color:#FFFFFF;display:none;text-decoration: none;}
      .form-control:disabled, .form-control[readonly] {
        background-color: transparent !important;
        opacity: 1;
     }
  </style>
</head>
<body>
 
   <div class="header_section">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-5 col-12">
               <img class="company-logo" src="./assets/images/logo.png" alt="">
            </div>
         </div>
      </div>
   </div>
   <div class="amin_banner_section">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="thankspage-content">
                 <p class="thankspage-name">Dear Mr/Ms/Mrs. <b><?php echo $name;?>,</b></p>
                 <p class="thankspage-details">Thanks for completing the registration. You will receive a confirmation email.</p>
                 <p class="thankspage-regards">Regards,</p>
                 <p class="thankspage-team">SRIHER Team</p>
                 
                 
              </div>
           </div>
        </div>
     </div>
  </div>
  <div class="highlights_section">
   <div class="container">
      <h3 class="highlights_header">Highlights</h3>
      <div class="">
         <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
               <div class="highlights_card color">
                  <h2 class="highlights_card_header">25k+</h2>
                  <p class="highlights_card_content">Alumni</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <div class="highlights_card color1">
                  <h2 class="highlights_card_header">165+</h2>
                  <p class="highlights_card_content">Multidiscipline UG, PG, PHD Programs</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <div class="highlights_card color2">
                  <h2 class="highlights_card_header">650+</h2>
                  <p class="highlights_card_content">Internationally Acclaimed Faculty</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <div class="highlights_card color3">
                  <h2 class="highlights_card_header">₹4Cr+</h2>
                  <p class="highlights_card_content">Scholarships / Fellowships Offered</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <div class="highlights_card color4">
                  <h2 class="highlights_card_header">A++</h2>
                  <p class="highlights_card_content">Highest Grade in NAAC</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <div class="highlights_card color5">
                  <h2 class="highlights_card_header">35lakh+</h2>
                  <p class="highlights_card_content">Patients treated</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="about_section">
   <div class="container">
      <div class="">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mobileonly">
               <div class="about_section_content">
                  <h3 class="about_section_header">About SRIHER</h3>
                  <p class="about_section_details">Sri Ramachandra Institute of Higher Education and Research (SRIHER),
                     Chennai is a Deemed University formerly known as Sri Ramachandra University.
                     The institute is ranked 57th in University and ranked 21st in Medical by NIRF 2023.
                     The university offers 50+ UG and PG programs in the discipline of Physiotherapy, Allied Health Sciences, Biomedical Sciences, Management, etc.
                  </p>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
               <div class="about_section_video">
                  <video class="videos_content" controls="controls" preload="none" onclick="this.play();arguments[0].preventDefault();">
                     <source type="video/mp4" src="./assets/videos/big_buck_bunny_720p_2mb.mp4">
                     </video>
                  </div>
               </div>
               <div class="col-lg-1 col-md-1 col-12"></div>
               <div class="col-lg-6 col-md-6 col-12 desktoponly">
                  <div class="about_section_content">
                     <h3 class="about_section_header">About SRIHER</h3>
                     <p class="about_section_details">Sri Ramachandra Institute of Higher Education and Research (SRIHER),
                        Chennai is a Deemed University formerly known as Sri Ramachandra University.
                        The institute is ranked 57th in University and ranked 21st in Medical by NIRF 2023.
                        The university offers 50+ UG and PG programs in the discipline of Physiotherapy, Allied Health Sciences, Biomedical Sciences, Management, etc.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pre-course-section">
      <div class="container">
         <div class="desktoponly">
            <div class="row">
               <div class="col-lg-5 col-md-4">
                  <h3 class="about_section_header pre-course-content-section">Faculty</h3>
                  <div class="pre-course-card active" onclick="toggleVisibility('Menu1');">
                     <p class="pre-course-title">Engineering and Technology</p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu2');">
                     <p class="pre-course-title">Management Science </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu3');">
                     <p class="pre-course-title">Pharmacy </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu4');">
                     <p class="pre-course-title">Nursing </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu5');">
                     <p class="pre-course-title">Physiotherapy </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu6');">
                     <p class="pre-course-title">Allied Health Science </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu7');">
                     <p class="pre-course-title">Behavioral and Social Sciences </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu8');">
                     <p class="pre-course-title">Biomedical Sciences and Technology </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu9');">
                     <p class="pre-course-title">Public Health </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu10');">
                     <p class="pre-course-title">Sports and Exercise Sciences </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu11');">
                     <p class="pre-course-title">Clinical Research </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu12');">
                     <p class="pre-course-title">Occupational Therapy </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu13');">
                     <p class="pre-course-title">Audiology and Speech Language Pathology </p>
                  </div>
               </div>
               <div class="col-lg-7 col-md-8">
                  <h3 class="about_section_header pre-course-content-section">Courses</h3>
                  <div class="pre-course-details">
                     <div id="Menu1">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech-CSE-Artificial Intelligence & Machine Learning</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech-CSE-Cyber Security & Internet of Things</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech. Computer Science and Engineering (Artificial Intelligence and Data Analytics)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech. Computer Science and Medical Engineering (Artificial Intelligence and Data Analytics)</p>
                        </div>
                     </div>
                     <div id="Menu2" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.B.A. (Hons)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.B.A.</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Com.</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Com. (Hons.) </p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Com (Hons) Twinning with Bentley University, USA.</p>
                        </div>
                     </div>
                     <div id="Menu3" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.PHARMACY</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">PHARM.D (Doctor of Pharmacy)</p>
                        </div>
                     </div>
                     <div id="Menu4" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. NURSING (Basic)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Nursing (Post Basic)</p>
                        </div>
                     </div>
                     <div id="Menu5" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">Bachelor in Physiotherapy (BPT)</p>
                        </div>
                     </div>
                     <div id="Menu6" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Allied Health Sciences (AHS)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Trauma Care Management)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Optom (Bachelor of Optometry)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Clinical Nutrition</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Health Information Management</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Medical Microbiology and Applied Molecular Biology</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Cardiac Technology</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc(Hons)Radiotherapy Technology</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Radiology and Imaging Science Technology</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Medical Laboratory Technology</p>
                        </div>
                     </div>
                     <div id="Menu7" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Applied Psychology</p>
                        </div>
                     </div>
                     <div id="Menu8" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Biomedical Sciences</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Medical Biotechnology</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Medical Biotechnology</p>
                        </div>
                     </div>
                     <div id="Menu9" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc.(Hons) Environmental Health Sciences</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Public Health</p>
                        </div>
                     </div>
                     <div id="Menu10" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Sports & Exercise Sciences</p>
                        </div>
                     </div>
                     <div id="Menu11" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Clinical Research</p>
                        </div>
                     </div>
                     <div id="Menu12" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">Bachelor of Occupational Therapy (BOT)</p>
                        </div>
                     </div>
                     <div id="Menu13" style="display: none;">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">Bachelor In Audiology and Speech Language Pathology</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mobileonly">
            <div id="accordion">
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Engineering and Technology
                        </button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">
                        B.Tech-CSE-Artificial Intelligence & Machine Learning
                        <hr />
                        B.Tech-CSE-Cyber Security & Internet of Things
                        <hr />
                        B.Tech. Computer Science and Engineering (Artificial Intelligence and Data Analytics)
                        <hr />
                        B.Tech. Computer Science and Medical Engineering (Artificial Intelligence and Data Analytics)
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingTwo">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Management Science
                        </button>
                     </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                     <div class="card-body">
                        B.B.A. (Hons)
                        <hr />
                        B.B.A.
                        <hr />
                        B.Com.
                        <hr />
                        B.Com. (Hons.)
                        <hr />
                        B.Com (Hons) Twinning with Bentley University, USA.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Pharmacy
                        </button>
                     </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                        B.PHARMACY
                        <hr />
                        PHARM.D (Doctor of Pharmacy)
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading4">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                           Nursing
                        </button>
                     </h5>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc. NURSING (Basic)
                        <hr />
                        B.Sc. Nursing (Post Basic)
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading5">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                           Physiotherapy
                        </button>
                     </h5>
                  </div>
                  <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                     <div class="card-body">
                        Bachelor in Physiotherapy (BPT)
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading6">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                           Allied Health Science
                        </button>
                     </h5>
                  </div>
                  <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc. (Hons) Allied Health Sciences (AHS)
                        <hr />
                        B.Sc. (Trauma Care Management)
                        <hr />
                        B.Optom (Bachelor of Optometry)
                        <hr />
                        B.Sc. (Hons) Clinical Nutrition
                        <hr />
                        B.Sc. Health Information Management
                        <hr />
                        B.Sc. (Hons) Medical Microbiology and Applied Molecular Biology
                        <hr />
                        B.Sc. (Hons) Cardiac Technology
                        <hr />
                        B.Sc(Hons)Radiotherapy Technology
                        <hr />
                        B.Sc. (Hons) Radiology and Imaging Science Technology
                        <hr />
                        B.Sc. Medical Laboratory Technology
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading7">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                           Behavioral and Social Sciences
                        </button>
                     </h5>
                  </div>
                  <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc. Applied Psychology
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading8">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                           Biomedical Sciences and <br /> Technology
                        </button>
                     </h5>
                  </div>
                  <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc. (Hons) Biomedical Sciences
                        <hr />
                        B.Sc. (Hons) Medical Biotechnology
                        <hr />
                        B.Sc. Medical Biotechnology
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading9">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                           Public Health
                        </button>
                     </h5>
                  </div>
                  <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc.(Hons) Environmental Health Sciences
                        <hr />
                        B.Sc. Public Health
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading10">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                           Sports and Exercise Sciences
                        </button>
                     </h5>
                  </div>
                  <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc. (Hons) Sports & Exercise Sciences
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading11">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                           Clinical Research
                        </button>
                     </h5>
                  </div>
                  <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
                     <div class="card-body">
                        B.Sc. Clinical Research
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading12">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                           Occupational Therapy
                        </button>
                     </h5>
                  </div>
                  <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
                     <div class="card-body">
                        Bachelor of Occupational Therapy (BOT)
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="heading13">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                           Audiology and Speech <br /> Language Pathology
                        </button>
                     </h5>
                  </div>
                  <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
                     <div class="card-body">
                        Bachelor In Audiology and Speech Language Pathology
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="testimonial_section">
      <div class="container">
         <h3 class="highlights_header">Testimonial</h3>
         <div class="">
            <div class="row">
               <div class="col-md-4 col-12">
                  <div class="testimonial_section_card">
                     <div class="row">
                        <div class="col-lg-3 col-md-5 col-4">
                           <img class="testimonial_image" src="./assets/images/testimonial_image.png" alt="">
                        </div>
                        <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                           <p class="testimonial_section_card_name">Ramya Krish</p>
                           <p class="testimonial_section_card_details">Student</p>
                        </div>
                     </div>
                     <p class="testimonial_section_card_content">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                     </p>
                     <div class="testimonial_rating_image">
                        <img class="testimonial_rating" src="./assets/images/testimonial_rating.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="testimonial_section_card">
                     <div class="row">
                        <div class="col-lg-3 col-md-5 col-4">
                           <img class="testimonial_image" src="./assets/images/testimonial_image1.png" alt="">
                        </div>
                        <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                           <p class="testimonial_section_card_name">Robert </p>
                           <p class="testimonial_section_card_details">Student</p>
                        </div>
                     </div>
                     <p class="testimonial_section_card_content">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                     </p>
                     <div class="testimonial_rating_image">
                        <img class="testimonial_rating" src="./assets/images/testimonial_rating.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="testimonial_section_card">
                     <div class="row">
                        <div class="col-lg-3 col-md-5 col-4">
                           <img class="testimonial_image" src="./assets/images/testimonial_image2.png" alt="">
                        </div>
                        <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                           <p class="testimonial_section_card_name">Alfert</p>
                           <p class="testimonial_section_card_details">Student</p>
                        </div>
                     </div>
                     <p class="testimonial_section_card_content">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                     </p>
                     <div class="testimonial_rating_image">
                        <img class="testimonial_rating" src="./assets/images/testimonial_rating.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="partners_section">
      <div class="container">
         <h3 class="highlights_header">Placement Partners</h3>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="carousel">
                  <img class="partners_section_images" src="./assets/images/partners_image1.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image2.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image3.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image4.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image5.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image6.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image7.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image8.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image9.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image10.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image11.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image12.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image13.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image14.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image15.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image16.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image17.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image18.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image19.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image20.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image21.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image22.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image23.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image24.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image25.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image26.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image27.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image28.png" alt="">
                  <img class="partners_section_images" src="./assets/images/partners_image29.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer_section">
      <div class="container">
         <p class="footer_section_content"><span class="footer_section_content_symbol"> © </span>Sri Ramachandra</p>
      </div>
   </div>
   <div id="result"></div>
   <input type="hidden" id="device">
   <input type="hidden" id="deviceName">
   <input type="hidden" id="otpget">
   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
   <script src='assets/js/script.js'></script>
   <script>
      $(document).ready(function() {
       $('.carousel').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        arrows: false,
        initialSlide: 0,
        speed: 8000,
        cssEase: 'linear',
             // easing:'linear',
        pauseOnHover: true,
        swipeToSlide: true,
             // dots: true,
        
        responsive: [{
         breakpoint: 1024,
         settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          centerMode: true,
          
       }
       
    }, {
      breakpoint: 800,
      settings: {
       slidesToShow: 4,
       slidesToScroll: 1,
       dots: false,
       infinite: true,
       
    }
 }, {
   breakpoint: 480,
   settings: {
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    infinite: true,
    autoplay: true,
                 // autoplaySpeed: 2000,
 }
}]
     });
    });
      var divs = ["Menu1", "Menu2", "Menu3", "Menu4", "Menu5", "Menu6", "Menu7", "Menu8", "Menu9", "Menu10", "Menu11", "Menu12", "Menu13"];
      var visibleDivId = null;
      function toggleVisibility(divId) {
       if (visibleDivId === divId) {
             //visibleDivId = null;
       } else {
        visibleDivId = divId;
     }
     hideNonVisibleDivs();
  }
  function hideNonVisibleDivs() {
    var i, divId, div;
    for (i = 0; i < divs.length; i++) {
     divId = divs[i];
     div = document.getElementById(divId);
     if (visibleDivId === divId) {
      div.style.display = "block";
   } else {
      div.style.display = "none";
   }
}
}
$(document).ready(function() {
 $('.pre-course-card').click(function() {
  $('.pre-course-card').removeClass("active");
  $(this).addClass("active");
});
});
<?php 
if($token!=""){
 ?>setTimeout(function () {
  window.location = 'https://studentportal.sriramachandra.edu.in/#/applications/redirect/<?php echo $token;?>';
}, 15000);
 <?php 
}
else{
		//echo "No";
}
?>	
</script>
</html>