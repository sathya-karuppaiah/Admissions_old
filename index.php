<html>
<?php 
$logindiv = 0;
if(isset($_GET['login']) && $_GET['login'] ==1){
	$logindiv = 1;
}
else{
	$logindiv = 0;
}
//echo $logindiv;
?>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no">
   <meta name="google-site-verification" content="">
   <meta name="msvalidate.01" content="">
   <title>Admissions Open 2025 | Sri Ramachandra Institute of Higher Education and Research</title>
   <meta name="description" content="Shape your future with world-class education! Admissions for 2025 are now open at Sri Ramachandra Institute of Higher Education and Research. Explore our diverse range of programs in medicine, healthcare, and allied sciences. Apply now and join a legacy of excellence!">
   <meta name="keywords" content="Sri Ramachandra Institute of Higher Education and Research">
   <link rel="shortcut icon" href="https://www.sriramachandra.edu.in/images/favicon.ico">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
   <link href="assets/css/stylelp.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
   <link rel="icon" href="" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@200&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- my script -->
<!-- Include the Lightbox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/html5lightbox@3.0.2/dist/html5lightbox.min.css" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

<!-- Include the Lightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/html5lightbox@3.0.2/dist/html5lightbox.min.js"></script>



   
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

      .already_btn_link {
         font-size: 16px;
         color: #93d1fb;
         text-decoration: underline;
         cursor: pointer;
      }

      .already_btn_link:hover {
         color: #93d1fb;
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

      .getotpdiv {
         font-size: 13px;
         cursor: pointer;
         color: #FFFFFF;
         background: rgba(191, 34, 40, 1);
         padding: 8px 6px 8px 6px;
         border-radius: 5px;
         text-decoration: none;
      }

      .getotpdiv:hover {
         cursor: pointer;
         color: #FFFFFF;
         text-decoration: none !important;
      }

      .resendotp {
         color: #FFFFFF;
      }

      .otpverifieddiv {
         font-size: 13px;
         color: #FFFFFF;
         display: none;
         text-decoration: none;
      }

      .otpverifieddiv:hover {
         font-size: 13px;
         color: #FFFFFF;
         display: none;
         text-decoration: none;
      }

      .form-control:disabled,
      .form-control[readonly] {
         background-color: transparent !important;
         opacity: 1;
      }

      .hight_text {
         /* text-align: center; */
         color: #FFFFFF;
         margin-top: -15px;
         margin-bottom: 5px;
      }

      .footer_section_content_address {
         color: #044976;
         font-size: 16px;
         line-height: 26px;
         margin-bottom: 10px;
         text-align: center;
      }

      .footer_section_content_address1 {
         color: #044976;
         font-size: 16px;
         line-height: 16px;
         margin-bottom: 10px;
         text-align: center;
         margin-top: 6px;
      }

      .alert-danger {
         color: #fe5a40;
         background-color: transparent;
         border-color: none;
      }

      .alert-success {
         color: greenyellow;
         background-color: transparent;
         border-color: none;
      }
   </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9NBDV6X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- <marquee behavior="scroll" direction="left" scrollamount="5"><img src="assets/images/new.gif" style="height: 20px;"> Excellence in Medical Education, Health Care and Research <span class="apply"><a>Apply Now!</a></span></marquee> -->

  <!--  <div class="header_section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
               <img class="company-logo" src="./assets/images/logo.png" alt="">
            </div>
         </div>
      </div>
   </div> -->
   <div class="amin_banner_section" id="admission">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-7 col-md-6 col-12">
              <!--  <h1 class="amin_banner_title padding_top_50">
                  Excellence in Medical Education, Health Care and Research
               </h1>
               <div class="row">
                  <div class="col-lg-3 col-4 padding_left_0">
                     <img class="amin_banner_content_img" src="./assets/images/banner_image_1.png" alt="">
                  </div>
                  <div class="col-lg-3 col-4 padding_left_0">
                     <img class="amin_banner_content_img" src="./assets/images/banner_image_2.png" alt="">
                  </div>
                  <div class="col-lg-3 col-4 padding_left_0">
                     <img class="amin_banner_content_img" src="./assets/images/banner_image_3.png" alt="">
                  </div>
               </div>
               <div class="padding_top_50">
                  <div class="row">
                     <div class="col-lg-5 col-6">
                        <h1 class="amin_banner_counter">85%</h1>
                        <h1 class="amin_banner_counter_content">Students Placed</h1>
                     </div>
                     <div class="col-lg-5 col-6">
                        <h1 class="amin_banner_counter">75 LPA</h1>
                        <h1 class="amin_banner_counter_content">Highest Offer</h1>
                     </div>
                  </div>
               </div> -->
            </div>
            <!-- <div class="col-lg-1 col-md-1 col-12"></div> -->
            <div class="col-lg-1 col-md-1 col-12"></div>
            <div class="col-lg-4 col-md-6 col-12">
              
                  
                  <div class="p-0 col-lg-11 col-md-12 col-12">
                     <form class="" id="addmission_form" action="#" method="POST" onSubmit="return false;" autocomplete="off" <?php if($logindiv ==1){echo 'style="display: none;"';}else{echo 'style="display: block;"';}?> >
                        <div class="candidate-form">
                           <p class="candidate-form-title">Admission Open 2025 - 26</p>
                           <div class="input-inside">
                              <input type="text" class="input" id="name" name="name" placeholder="Candidate Name">
                           </div>
                           <div class="input-inside">
                              <input type="text" class="input" id="email" name="email" placeholder="E-mail">
                           </div>
                           <!-- Mobile OTP Code -->
                           <div class="row">
                              <div class="form-group padding_left_0 col-md-9 col-sm-9 col-9">
                                 <input type="text" class="form-control input" id="phone_number" name="phone_number" placeholder="Phone Number">
                                 <p class="errorMobile">Enter Valid 10 digit Mobile Number</p>
                              </div>
                              <div class="form-group p-0 col-md-3 col-sm-3 col-3 paddingzero getotpbutton" style="margin-top:10px;">
                                 <a href="javascript:void(0);" class="otpdesktop getotpdiv otpget" onclick="getotp();">Get OTP</a>
                                 <a href="javascript:void(0);" class="otpverifieddiv" style="">Verified</a>
                              </div>
                           </div>
                           <div class="row" id="otpshow" style="display:none;">
                              <div class="form-group padding_left_0 col-md-9 col-9">
                                 <input type="text" class="form-control input" id="otp_number" name="otp_number" placeholder="Enter OTP">
                                 <p class="otperrorMobile">Enter OTP</p>
                              </div>
                              <div class="form-group padding_left_0 col-md-3 col-3 paddingzero">
                                 <a href="javascript:void(0);" class="btn btn-success otpdesktop verfiedtext" onclick='otpverified();'>Verify</a>
                              </div>
                           </div>
                           <div class="form-group" id="resendotpshow" style="display:none;">
                              <div class="resendotp">If OTP not Received - <span href="javascript:void(0);" onclick="resendotp();"> <span class="getotpdiv">Click Here</span></span></div>
                           </div>
                           <!--<div class="input-inside">
                                 <div class="row">
                                    <div class="col-md-8">
                                       <input class="input" type="tel" id="phone_number" name="phone_number" placeholder="Phone number" maxlength="10" >
                                    </div>
                                    <div class="col-md-4">
                                       <button class="otp_btn" id="verificationButton" onclick="generateOTP()">Get OTP</button>
                                    </div>
                                 </div>
                                 </div>-->
                           <!-- <div class="input-inside">
                                 <input type="text" class="input" id="phone_number" name="phone_number" placeholder="Phone number">
                                 
                                 </div> -->
                           <input type="hidden" class="utm_source" name="utm_source">
                           <input type="hidden" class="utm_medium" name="utm_medium">
                           <input type="hidden" class="utm_campaign" name="utm_campaign">
                           <input type="hidden" class="utm_term" name="utm_term">
                           <input type="hidden" class="utm_content" name="utm_content">
                           <div class="input-inside">
                              <select class="form-select input" id="stream" name="stream" placeholder="Domain" onchange='getcategory(this.value)'>
                                 <option class="form-select-option" value="">Select Domain</option>
                              </select>
                              <!-- <select class="form-select input" id="stream" name="stream" placeholder="Domain" data-gtm-form-interact-field-id="0">
                                 <option class="form-select-option" value="">Select Domain</option>
                                 <option class="form-select-option" value="1">Engineering</option>
                                 <option class="form-select-option" value="2">Management/Commerce</option>
                           </select> -->
                           </div>
                           <div class="input-inside">
                              <select class="form-select input" id="category" placeholder="Category" name="category" onchange='getcourse(this.value)'>
                                 <option class="form-select-option" value="">Select Category </option>
                              </select>
                           </div>
                           <div class="input-inside">
                              <select class="form-select input" name="course_interest" id="course_interest" placeholder="Course" onchange='getmode(this.value)'>
                                 <option class="form-select-option" value="">Select Course </option>
                              </select>
                           </div>
                           <!-- <div class="hight_text" id="enggtext" style="display: none;">Subject to AICTE approval*</div> -->
                           <div class="input-inside">
                              <select class="form-select input" name="mode" id="mode" placeholder="Mode">
                                 <option class="form-select-option" value="">Select Mode </option>
                              </select>
                           </div>
                           <div class="candidate-form-button">
                              <button class="candidate-form-btn sub-button" type="submit" onclick="submitapplication();">SUBMIT</button>
                              <div id="successmgs" style="display:none;margin-top: 10px;color: red;text-align: center;">Please wait..</div>
                           </div>
                           <div class="" style="text-align: center;">
                              <button class="already_btn btnform" data-target="login_id">Already applied? <span class="already_btn_link">Login</span> </button>
                           </div>
                        </div>
                     </form>
                     <form id="login_id" <?php if($logindiv ==1){echo 'style="display: block;"';}else{echo 'style="display: none;"';}?> data-target="login_id" onSubmit="return false;">
                        <div class="candidate-form">
                           <p class="candidate-form-title">Login</p>
                           <div class="input-inside">
                              <input type="text" class="input" id="emailIdorMobile" name="emailIdorMobile" placeholder="Candidate E-mail">
                           </div>
                           <div class="input-inside">
                              <input type="password" class="input" id="password" name="password" placeholder="Password">
                           </div>
                           <div class="candidate-form-button">

                              <button class="candidate-form-btn sub-button" type="submit" onclick="loginapplication();">Login</button>
                              <!-- <div id="successmgs" style="display:none;margin-top: 10px;color: red;text-align: center;">Please wait..</div> -->
                           </div>
                           <div class="" style="text-align: center;">
                              <button class="already_btn btnform candidate-form-btn sub-button" data-target="forget_id"><span class="already_btn_link">Forget Password?</span></button>
                           </div>
                           <div class="" style="text-align: center;">
                              <button class="already_btn btnform candidate-form-btn sub-button" data-target="addmission_form" type="submit" onclick="loginapplication();">New User? <span class="already_btn_link">Register</span></button>
                           </div>
                        </div>
                     </form>
                     <form  class="resetpassdiv" id="forget_id" style="display: none;" data-target="forget_id" onSubmit="return false;">
                        <div class="candidate-form">
                           <p class="candidate-form-title">Forgot Password</p>
						   <p style="color:#ffffff"><b>Your password has been sent to your registered Email ID and WhatsApp at the time of Registration. Please check these before using the 'Forgot Password' option.</b></p>
                           <div>
                              <div class="input-inside">
                                 <input class="input" type="text" name="emailId" id="emailId" placeholder="Enter Your E-mail">
                              </div>
                              <div id="error-message" class="alert-danger" style="display: none;"></div>
                              <div class="candidate-form-button">
                                 <button class="candidate-form-btn sub-button" type="submit" onclick="resetpassword();">Confirm</button>
                              </div>
                           </div>
                           <div class="">
                              <button class="already_btn btnform candidate-form-btn sub-button" data-target="login_id"><span class="already_btn_link">Back to login?</span></button>
                           </div>
                        </div>
                     </form>

                     <form  class="otpdivverified" style="display: none;" data-target="forget_id" onSubmit="return false;">
                        <div class="candidate-form">
                           <p class="candidate-form-title">Forget Password</p>
                           <div>
                              <div class="input-inside">
                                 <input class="input" type="hidden" name="studentId" id="studentId">
                              </div>
                              <div class="input-inside">
                                 <input class="input" type="text" name="otp" id="otp" placeholder="Enter OTP">
                              </div>
                              <div id="error-message-otp" class="alert-danger" style="display: none;"></div>
                              <div class="candidate-form-button">
                                 <button class="candidate-form-btn sub-button" type="submit" onclick="otp_verified();">Verify OTP</button>
                              </div>
                           </div>
                           <div class="">
                              <button class="already_btn btnform candidate-form-btn sub-button" data-target="login_id"><span class="already_btn_link">Back to login?</span></button>
                           </div>
                        </div>
                     </form>


                     <form  class="passworddiv" style="display: none;" data-target="forget_id" onSubmit="return false;">
                        <div class="candidate-form">
                           <p class="candidate-form-title">Forget Password</p>
                           <div>
                              <div class="input-inside">
                                 <input class="input" type="password" name="updatepassword" id="updatepassword" placeholder="New Password">
                              </div>
                              <div class="input-inside">
                                 <input class="input" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                              </div>
                              <div id="error-message-password" class="alert-danger" style="display: none;"></div>
                              <div class="candidate-form-button">
                                 <button class="candidate-form-btn sub-button" type="submit" onclick="submitpassword();">SUMBIT</button>
                              </div>
                           </div>
                           <div class="">
                              <button class="already_btn btnform candidate-form-btn sub-button" data-target="login_id"><span class="already_btn_link">Back to login?</span></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            
         </div>
      </div>
   </div>
<!--    <div class="highlights_section-1">
      <img src="assets/images/highlights.jpg" style="width: 100%;background-size: cover;">
   </div> -->
   <div class="highlights_section">
      <div class="container">
         <h3 class="highlights_header">Highlights</h3>
         <div class="">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="highlights_card color">
                     <h2 class="highlights_card_header">25k+</h2>
                     <p class="highlights_card_content">Alumni</p>
                     <!-- <img src="assets/images/high/25k.png" style="width: 100%"> -->
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                 <div class="highlights_card color">
                      <h2 class="highlights_card_header">169+</h2>
                     <p class="highlights_card_content">Multidisciplinary UG,PG,PhD Programs</p>
                     <!-- <img src="assets/images/high/169+.png" style="width: 100%"> -->
                </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12 ">
                  <div class="highlights_card color">
                      <h2 class="highlights_card_header">650+</h2>
                     <p class="highlights_card_content">Internationally Acclaimed Faculty</p>
                     <!-- <img src="assets/images/high/650+.png" style="width: 100%"> -->
                 </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                 <div class="highlights_card color">
                      <h2 class="highlights_card_header">2,500</h2>
                     <p class="highlights_card_content">Bedded Teaching Hospital</p>
                     <!-- <img src="assets/images/high/2500.png" style="width: 100%"> -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="highlights_card color">
                     <h2 class="highlights_card_header">A++</h2>
                     <p class="highlights_card_content">Highest Grade in NAAC</p>
                     <!-- <img src="assets/images/high/A++.png" style="width: 100%"> -->
                 </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="highlights_card color">
                     <h2 class="highlights_card_header">35 lakh+</h2>
                     <p class="highlights_card_content">Patients treated</p> 
                     <!-- <img src="assets/images/high/35L.png" style="width: 100%"> -->
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
                     <p class="about_section_details">The Sri Ramachandra Institute of Higher Education and Research (SRIHER) in Chennai,
                        previously known as Sri Ramachandra University, is a distinguished Deemed University.
                        The university offers over 165 undergraduate and postgraduate programs across a variety of disciplines, including Physiotherapy, Allied Health Sciences, Biomedical Sciences, Management, and more.
                        SRIHER has earned the highest accolade of an A++ grade from NAAC, highlighting its commitment to excellence in education and research.
                     </p>
                  </div>
               </div>
               <!-- <div class="col-lg-6 col-md-6 col-12">
                   <div class="">
                     <iframe class="about_section_video" width="100%" height="130%" src="https://www.youtube.com/embed/-T2qZZe_e7Y?rel=0&modestbranding=1&autohide=1&mute=1&showinfo=0&controls=1&autoplay=1" title="SRIHER Admission" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                  </div> 
               </div> -->
               <div class="col-lg-12 col-md-12 col-12 desktoponly">
                  <div class="about_section_content">
                     <h3 class="about_section_header text-center">About SRIHER</h3>
                     <p class="about_section_details">The Sri Ramachandra Institute of Higher Education and Research (SRIHER) in Chennai,
                        previously known as Sri Ramachandra University, is a distinguished Deemed University.
                        The university offers over 169 undergraduate and postgraduate programs across a variety of disciplines, including Physiotherapy, Allied Health Sciences, Biomedical Sciences, Management, and more.
                        SRIHER has earned the highest accolade of an A++ grade from NAAC, highlighting its commitment to excellence in education and research.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



<!-- Explore Section -->
<div class="Exploreklu" id="exploreklu">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="Explore-img">
          <!-- Play Icon that triggers the lightbox -->
          <a href="javascript:void(0)" class="html5lightbox">
            <img src="assets/images/campus.jpg" width="100%" class="img-fluid campus-img">
            <div class="play-icon">
              <img src="assets/images/play-icon.png" alt="Play Icon" class="play-button">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Lightbox HTML structure -->
<div id="html5box-html5-lightbox" style="top: 0px; left: 0px; width: 100%; height: 100%; z-index: 9999998; text-align: center; position: fixed; display: none;">
  <div id="html5-lightbox-overlay" style="position: absolute; top: 0px; left: 0px; width: 100%; min-height: 100%; background-color: rgb(0, 0, 0); opacity: 0.9;"></div>
  <div id="html5-lightbox-box" style="display: block; position: relative; margin: 48px auto 0px; width: 80%; height: auto;">
    <div class="html5-elem-box" style="position: relative; width: 100%; overflow: hidden; height: 100%; margin: 0px auto; text-align: center; background-color: #105c8e; max-height: 80%;">
      <div class="html5-elem-wrap" style="position: relative; width: 100%; height: 100%; overflow: hidden;">
        <div class="html5-image" style="width: 100%; height: 100%; overflow: auto; padding: 15px; text-align: center;">
          <div class="html5lightbox-video" style="width: 100%; height: 100%; overflow: hidden;">
            <!-- YouTube iframe without autoplay initially -->
            <iframe id="html5boxiframevideo8" class="html5boxiframevideo" width="100%" height="100%" 
              src="https://www.youtube.com/embed/-T2qZZe_e7Y?rel=0&enablejsapi=1&origin=https://www.sriramachandra.edu.in" 
              frameborder="0" allow="autoplay" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" title="Explore life at Sri Ramachandra University">
            </iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Close button to cancel and close the lightbox -->
    <button id="html5-close" style="cursor: pointer; position: absolute; top: 10px; right: 10px; padding: 7px; background-color: white; color: #105c8e; border: none; font-size: 20px;font-weight: 700; border-radius: 5px;">X</button>
  </div>
</div>

<script>
  // Function to set autoplay and unmute the video when lightbox is triggered
  function setVideoAutoplay() {
    var iframe = document.getElementById('html5boxiframevideo8');
    var videoSrc = "https://www.youtube.com/embed/-T2qZZe_e7Y?autoplay=1&mute=0&rel=0&enablejsapi=1&origin=https://www.sriramachandra.edu.in";
    iframe.src = videoSrc;  // Set the iframe src to autoplay and unmute the video
  }

  // Function to stop the video when lightbox is closed
  function stopVideo() {
    var iframe = document.getElementById('html5boxiframevideo8');
    iframe.src = "";  // Stop the video by clearing the src
  }

  // Trigger to open the lightbox and play the video
  document.querySelector('.play-button').addEventListener('click', function(event) {
    event.preventDefault();
    var lightbox = document.getElementById('html5box-html5-lightbox');
    lightbox.style.display = 'block'; // Show the lightbox
    setVideoAutoplay(); // Ensure the video starts autoplaying and unmuted
  });

  // Close the lightbox when the close button is clicked and stop the video
  document.getElementById('html5-close').addEventListener('click', function() {
    document.getElementById('html5box-html5-lightbox').style.display = 'none'; // Hide the lightbox
    stopVideo(); // Stop the video
  });

  // Close the lightbox if the overlay is clicked and stop the video
  document.getElementById('html5-lightbox-overlay').addEventListener('click', function() {
    document.getElementById('html5box-html5-lightbox').style.display = 'none'; // Hide the lightbox
    stopVideo(); // Stop the video
  });
</script>









   <script>

      $(window).on('load', function () {
         setTimeout(function () { // allowing 3 secs to fade out loader
            $('.page-loader').fadeOut('fast');
         }, 100);
      });
   </script>














   <div class="pre-course-section">
      <div class="container">
         <div class="desktoponly tab-icon">
            <div class="row">
               <div class="col-lg-5 col-md-4">
                  <h3 class="about_section_header pre-course-content-section">Faculty</h3>
                  <div class="pre-course-card active" onclick="toggleVisibility('Menu1');">
                     <p class="pre-course-title c-1"><i class="fa-solid fa-chalkboard"></i> Engineering and Technology</p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu2');">
                     <p class="pre-course-title c-2"><i class="fa-solid fa-people-roof"></i> Management Science </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu3');">
                     <p class="pre-course-title c-3"><i class="fa-solid fa-pills"></i> Pharmacy </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu4');">
                     <p class="pre-course-title c-4"><i class="fa-solid fa-user-nurse"></i> Nursing </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu5');">
                     <p class="pre-course-title c-5"><i class="fa-solid fa-wheelchair-move"></i> Physiotherapy </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu6');">
                     <p class="pre-course-title c-6"><i class="fa-solid fa-microscope"></i> Allied Health Science </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu7');">
                     <p class="pre-course-title c-7"><i class="fa-solid fa-head-side-virus"></i> Behavioral and Social Sciences </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu8');">
                     <p class="pre-course-title c-8"><i class="fa-solid fa-dna"></i> Biomedical Sciences and Technology </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu9');">
                     <p class="pre-course-title c-9"><i class="fa-solid fa-heart-pulse"></i> Public Health </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu10');">
                     <p class="pre-course-title c-10"><i class="fa-solid fa-person-running"></i> Sports and Exercise Sciences </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu11');">
                     <p class="pre-course-title c-11"><i class="fa-solid fa-flask-vial"></i> Clinical Research </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu12');">
                     <p class="pre-course-title c-12"><i class="fa-solid fa-hands-holding-child"></i> Occupational Therapy </p>
                  </div>
                  <div class="pre-course-card" onclick="toggleVisibility('Menu13');">
                     <p class="pre-course-title c-13"><i class="fa-solid fa-head-side-cough"></i> Audiology and Speech Language Pathology </p>
                  </div>
               </div>
               <div class="col-lg-7 col-md-8">
                  <h3 class="about_section_header pre-course-content-section">Courses</h3>
                  <div class="pre-course-details">
                     <div id="Menu1">
                        <a href="#admission">
                           <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech-Computer Science and Engineering-Artificial Intelligence & Machine Learning</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech-Computer Science and Engineering-Cyber Security & Internet of Things</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech. Computer Science and Engineering (Artificial Intelligence and Data Analytics)</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech. Computer Science and Medical Engineering (Artificial Intelligence and Data Analytics)</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech Electronics and Communication Engineering *</p>
                        </div>
                      </a>
                     </div>

                     <div id="Menu2" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.B.A.</p>
                        </div>
                     </a>
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Com.</p>
                        </div>
                     </a>
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Com. (Hons.) </p>
                        </div>
                     </a>
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Com (Hons) Twinning with Bentley University, USA.</p>
                        </div>
                         </a>
                     </div>
                     <div id="Menu3" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.PHARMACY</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">PHARM.D (Doctor of Pharmacy)</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu4" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. NURSING (Basic)</p>
                        </div>
                     </a>
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Nursing (Post Basic)</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu5" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">Bachelor in Physiotherapy (BPT)</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu6" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Allied Health Sciences (AHS)</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Trauma Care Management)</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Optom (Bachelor of Optometry)</p>
                        </div>
                     </a>
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Clinical Nutrition</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Health Information Management</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Medical Microbiology and Applied Molecular Biology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Cardiac Technology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc(Hons)Radiotherapy Technology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Radiology and Imaging Science Technology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Medical Laboratory Technology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">M.Sc. (Medical Radiology and Imaging Technology) (5 Year Integrated)</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu7" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Applied Psychology</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu8" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Biomedical Sciences</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Medical Biotechnology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Medical Biotechnology</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc Bioinformatics</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu9" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc.(Hons) Environmental Health Sciences</p>
                        </div>
                     </a>
                     <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Public Health</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu10" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. (Hons) Sports & Exercise Sciences</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu11" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc. Clinical Research</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu12" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">Bachelor of Occupational Therapy (BOT)</p>
                        </div>
                     </a>
                     </div>
                     <div id="Menu13" style="display: none;">
                        <a href="#admission">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">Bachelor In Audiology and Speech Language Pathology</p>
                        </div>
                     </a>
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
                      <a href="#addmission_form">
                     <div class="card-body">
                        B.Tech-CSE-Artificial Intelligence & Machine Learning
                        <hr />
                        B.Tech-CSE-Cyber Security & Internet of Things
                        <hr />
                        B.Tech. Computer Science and Engineering (Artificial Intelligence and Data Analytics)
                        <hr />
                        B.Tech. Computer Science and Medical Engineering (Artificial Intelligence and Data Analytics)
                        <hr />
                        B.Tech Electronics and Communication Engineering *
                     </div>
                  </a>
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
                     <a href="#addmission_form">
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
                      </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.PHARMACY
                        <hr />
                        PHARM.D (Doctor of Pharmacy)
                     </div>
                      </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.Sc. NURSING (Basic)
                        <hr />
                        B.Sc. Nursing (Post Basic)
                     </div>
                     </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        Bachelor in Physiotherapy (BPT)
                     </div>
                     </a>
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
                     <a href="#addmission_form">
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
                  </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.Sc. Applied Psychology
                     </div>
                      </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.Sc. (Hons) Biomedical Sciences
                        <hr />
                        B.Sc. (Hons) Medical Biotechnology
                        <hr />
                        B.Sc. Medical Biotechnology
                        <hr />
                        B.Sc Bioinformatics
                     </div>
                     </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.Sc.(Hons) Environmental Health Sciences
                        <hr />
                        B.Sc. Public Health
                     </div>
                   </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.Sc. (Hons) Sports & Exercise Sciences
                     </div>
                     </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        B.Sc. Clinical Research
                     </div>
                  </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        Bachelor of Occupational Therapy (BOT)
                     </div>
                  </a>
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
                     <a href="#addmission_form">
                     <div class="card-body">
                        Bachelor In Audiology and Speech Language Pathology
                     </div>
                  </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>






    <style>

/* Container for the carousel */
.placement-partners-section {
    padding: 50px 0;
    background-color: #f9f9f9;
}

/* Section Header */
.section-header {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
    color: #333;
}

/* Carousel Wrapper */
.carousel-wrapper {
    display: flex;
    justify-content: center;
}

/* Carousel container */
.partners-carousel {
    display: flex;
    overflow: hidden;
    width: 100%;
}

/* Image styling inside the carousel */
.partner-image {
    width: 100%;
    max-width: 220px;
    margin: 0 15px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

/* Optional: Hover effect for carousel images */
.partner-image:hover {
    transform: scale(1.05);
}

/* Media Queries for responsive design */

/* Desktop: 4 images at once */
@media (min-width: 1024px) {
    .partners-carousel {
        display: flex;
    }

    .partner-image {
        max-width: 250px;
    }
}

/* Tablet: 3 images at once */
@media (max-width: 1024px) and (min-width: 768px) {
    .partners-carousel {
        display: flex;
    }

    .partner-image {
        max-width: 250px;
    }
}

/* Mobile: 1 image at once */
@media (max-width: 768px) {
    .partners-carousel {
        display: flex;
    }

    .partner-image {
        max-width: 180px;
    }
}

    </style>


<!-- <div class="placement-partners-section">
    <div class="container">
        <h3 class="section-header">Campus Life @ SRIHER</h3>
        <div class="carousel-wrapper">
            <div class="partners-carousel">
                <img class="partner-image" src="./assets/images/i-1.jpg" alt="Partner 1">
                <img class="partner-image" src="./assets/images/i-2.jpg" alt="Partner 2">
                <img class="partner-image" src="./assets/images/i-3.jpg" alt="Partner 3">
                <img class="partner-image" src="./assets/images/i-4.jpg" alt="Partner 4">
                <img class="partner-image" src="./assets/images/i-5.jpg" alt="Partner 5">
                <img class="partner-image" src="./assets/images/i-8.jpg" alt="Partner 8">
                <img class="partner-image" src="./assets/images/i-9.jpg" alt="Partner 9">
            </div>
        </div>
    </div>
</div>
 -->





<script>

    $(document).ready(function() {
        $('.partners-carousel').slick({
            infinite: true,            // Infinite scroll
            slidesToShow: 4,           // Show 4 images on desktop
            slidesToScroll: 1,         // Scroll 1 image at a time
            autoplay: true,            // Auto-play
            autoplaySpeed: 2000,       // Speed of auto-play
            arrows: true,              // Show arrows
            initialSlide: 0,           // Start from the first slide
            speed: 1000,               // Animation speed
            pauseOnHover: true,        // Pause on hover
         

             


            responsive: [
                {
                    breakpoint: 1024, // For tablet screens
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768, // For mobile screens
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });
</script>





  




  <div class="testimonial_section">
    <div class="container">
        <h3 class="highlights_header">Testimonial</h3>
        <div class="testimonial">
            <!-- Testimonial Card 1 -->
            <div class="testimonial_section_card">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                        <img class="testimonial_image" src="./assets/images/testimonial_image.png" alt="Dr. S. Gurushankar">
                    </div>
                    <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                        <p class="testimonial_section_card_name">DR. S. GURUSHANKAR</p>
                        <p class="testimonial_section_card_details">Chairman Meenakshi Mission Hospital, Madurai</p>
                    </div>
                </div>
                <p class="testimonial_section_card_content">
                    Proud to be an SRMC alum, I cherish the exceptional education beyond textbooks. Professors became friends, and friends, mentors. Here's to SRMC's continued success in fostering compassionate doctors.
                </p>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="testimonial_section_card">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                        <img class="testimonial_image" src="./assets/images/testimonial-4.png" alt="Dr. S. Gurushankar">
                    </div>
                    <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                        <p class="testimonial_section_card_name">DR. SASIKUMAR MUTHU</p>
                        <p class="testimonial_section_card_details">Cosmetic surgeon &MD of Pearl Health, Chennai</p>
                    </div>
                </div>
                <p class="testimonial_section_card_content">
                    Ramachandra gave me an opportunity to move with mentors who always insisted on to create a legacy than just survive. It gave me necessary education and confidence to establish my Cosmetic practice. 
                </p>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="testimonial_section_card">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                        <img class="testimonial_image" src="./assets/images/testimonial_image1.jpg" alt="Dr. Adil Agarwal">
                    </div>
                    <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                        <p class="testimonial_section_card_name">DR. ADIL AGARWAL</p>
                        <p class="testimonial_section_card_details">CEO - Dr. Agarwal's Eye Hospitals Group</p>
                    </div>
                </div>
                <p class="testimonial_section_card_content">
                    At SRMC, I gained invaluable skills from brilliant peers and state-of-the-art resources, empowering my entrepreneurial ventures. SRMC's influence is evident in its alumni's significant healthcare roles nationwide.
                </p>
            </div>

            <!-- Testimonial Card 4 -->
            <div class="testimonial_section_card">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                        <img class="testimonial_image" src="./assets/images/testimonial_image2.png" alt="Dr. Surakshith Battina">
                    </div>
                    <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                        <p class="testimonial_section_card_name">DR. SURAKSHITH BATTINA</p>
                        <p class="testimonial_section_card_details">Managing Director at Indigo Women's Centre</p>
                    </div>
                </div>
                <p class="testimonial_section_card_content">
                    Sri Ramachandra Medical College profoundly shaped me, providing an ideal environment for medical entrepreneurs and molding me into a skilled practitioner and a better person.
                </p>
            </div>

          

            <!-- Testimonial Card 5 -->
            <div class="testimonial_section_card">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                        <img class="testimonial_image" src="./assets/images/testimonial-5.jpg" alt="Dr. Surakshith Battina">
                    </div>
                    <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                        <p class="testimonial_section_card_name">MR. MANI NEELAMEGAN</p>
                        <p class="testimonial_section_card_details">Ann Physiocare limited, United Kingdom</p>
                    </div>
                </div>
                <p class="testimonial_section_card_content">
                    Mani Neelamegan, Proudly introducing me as an Alumni College of Physiotherapy, can undoubtedly boast the input of my undergraduate study in my career progress and journey so far.
                </p>
            </div>

               <!-- Testimonial Card 6 -->
            <div class="testimonial_section_card">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                        <img class="testimonial_image" src="./assets/images/testimonial-6.jpg" alt="Dr. Surakshith Battina">
                    </div>
                    <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                        <p class="testimonial_section_card_name">MR. AJAY SHANMUGAVEL</p>
                        <p class="testimonial_section_card_details">Senior Physiotherapist in the ministry of social affairs, Saudi Arabia</p>
                    </div>
                </div>
                <p class="testimonial_section_card_content">
                    SRMC &RI Provides the state of the art educational system by providing students with the best faculties and infrastructure to learn and achieve in the field of study.
                </p>
            </div>

        </div>
    </div>
</div>




 <script>
$(document).ready(function() {
    // Initialize Slick slider
    $('.testimonial').slick({
        infinite: true,       // Infinite looping of slides
        slidesToShow: 3,      // Show 3 slides at once
        slidesToScroll: 1,    // Scroll one slide at a time
        autoplay: true,       // Enable autoplay
        autoplaySpeed: 2000,  // Speed of autoplay in milliseconds
        arrows: false,        // Disable navigation arrows
        speed: 8000,          // Speed of slide transition (ms)
        cssEase: 'linear',    // Smooth transition
        pauseOnHover: true,   // Pause on hover
        swipeToSlide: true,   // Allow slide change by swiping

        responsive: [
            {
                breakpoint: 1024, // For screens larger than 1024px
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: true,
                }
            },
            {
                breakpoint: 800,  // For screens 800px and smaller
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: true,
                }
            },
            {
                breakpoint: 480,  // For mobile screens 480px and smaller
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                }
            }
        ]
    });
});

   </script>

   <div class="partners_section">
      <div class="container">
         <h3 class="highlights_header">Our Recruiters</h3>
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

    <div id="FAQ">
      <h3 class="highlights_header">FAQ's</h3>
    <div class="accordian">
<h5>General queries</h5>
      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">1. What is the cost of the SRIHER Undergraduate Paramedical Entrance/Interview
Application form?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Application Cost - Rs.1000/-</p>
        </div>
      </div>
      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">2. Where can I find the fee structure for various programmes?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Refer prospectus</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">3. Are candidates appearing for HSC (+2) also eligible to apply for SRIHER
Undergraduate Paramedical Entrance/Interview?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Yes, They are eligible to apply for SRIHER Undergraduate Paramedical
Entrance/Interview and should produce their marks sheet at the time of
counselling/ admission.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">4. Which programme in Paramedical would have the best scope?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>All programmes have an equally good scope. Much depends on your passion for
the program and your endeavour to excel.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">5. Is NEET Score consider for admission ?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>No, NEET Score will not be considered. Admission will be based on SRIHER
Entrance/Interview Marks only.</p>
        </div>
      </div>

       <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">6. What is the closing date for issue of applications?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Applications will be issued till end of April 2025 (tentatively).</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">7. How can I complete the admission process?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Admission process is fully online. Any help to complete application form call our
help line numbers.</p>
        </div>
      </div>

       <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">8. Is it compulsory to fill all details of the online application or admission
form?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>It is recommended that you should fill all fields mentioned in the application
form, but you may only fill the mandatory fields marked as (*) to submit your
admission application.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">9. What are the documents required for taking online application?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>The scanned copies of following documents are required at the time of making
application for online admission.</p>
<ul>
   <li>Passport size photograph of candidate)</li>
<li>o HSC mark statement Certificate (if applicable)</li>
<li>o Transfer certificate from School (if applicable)</li>
<li>o Aadhaar card of candidate</li>
<li>o Community certificate (if applicable)</li>
</ul>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">10. Does SRIHER offer admissions through Management quota?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>There is no Management Quota in SRIHER. Admissions to Undergraduate
paramedical programme is based on the merit rank obtained in the SRIHER
Undergraduate paramedical Entrance/Interview- 2025.
</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">11. Do I need to apply separately for Entrance Exam((Group-A &amp; Group-C)) and
Interview (Group-B) ?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Yes, you have to apply separately.</p>

        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">12. Can I change the Group from Entrance Exam ((Group-A &amp; Group-C)) to
Interview (Group-B) after making payments for application?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>No you can’t change the group once you complete the application along with
payment.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">13. How many choices I can choose in each Group(Entrance Exam((Group-A &amp; Group-
C)) /Interview(Group-B)) ?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Maximum no. of choices is 3 in each Group (Entrance Exam((Group-A &amp; Group-
C))/Interview Group-B)). Anyway both Entrance Exam (Group-A &amp; Group-
C))/Interview Group-B) applications is common for all the courses mentioned in
each categories.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">14. Can I change the Course preferences after completing application ?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>No, You can’t change the course preferences after completing application.
Anyway it’s a common application, you are eligible for all the courses mentioned
against the Group (Entrance Exam (Group-A &amp; Group-C))/Interview Group-B)).</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">15. Do I need to apply separately for courses ?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>No, its common application for Group wise (Entrance Exam (Group-A &amp; Group-
C))/Interview Group-B)). But if your interested courses falls in each group , you
have to apply separately for Entrance Exam and Interview.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">16. Can I withdraw or cancel my application after payment ?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>No, You can’t withdraw or cancel once payment done.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">17. What are the Undergraduate Entrance Exam ((Group-A )) centres?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>The Entrance Exam (Group-A ) conducted in three centres namely Chennai,
Coimbatore and Madurai, for (Group-B (Interview) &amp; Group-C(Engineering
Entrance Exam)) will be conducted in SRIHER University campus, Chennai only.</p>
        </div>
      </div>

<br>
<h5>Entrance Exam related queries</h5>
     <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">1. Is SRIHER Entrance Exam/Interview mandatory or would merit of XII/ Higher
Secondary Board, considered for admission to Undergraduate Degree
programme?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Yes, SRIHER Entrance Exam/Interview is mandatory for admission to all the.
Programme in SRIHER.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">2. What would be the syllabus and Question pattern (QP) for the SRIHER Entrance
Exam?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>The All India Level Entrance Examination will be conducted in ENGLISH only. The question
booklet will consist of 180 multiple choice questions (single best response) in the following
pattern:-
<br>
The MCQ will cover the subjects as given below :-
<table>
   <thead>
      <tr>
         <th>Subject</th>
         <th>No. of Question</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>Physics</td>
         <td>60</td>
      </tr>
      <tr>
         <td>Chemistry</td>
         <td>60</td>
      </tr>
       <tr>
         <td>Biology (Botany &amp; Zoology)</td>
         <td>60</td>
      </tr>
      <tr>
         <td>Total</td>
         <td>180</td>
      </tr>


   </tbody>
 
</table>
</p>
<p>*Note: The candidates who have not studied Biology in the HSC(10+2) 21 but studied
Mathematics and seek admission to B.Pharmacy/ Pharm.D. (Doctor of Pharmacy) / B.ASLP
Degree Course will have to answer 40 MCQs in Mathematics instead of the MCQs in Biology.</p>
<p>Maximum marks will be 100 and the duration of the examination will be 2 hours.</p>
<p>All questions must be answered and they carry equal marks. There will be no negative mark for
wrong answer. Correct answer must be shaded with ball point pen in the OMR Answer Sheet
supplied along with the question booklet.</p>
<p>Syllabus: The Entrance Examination will be based on the HSC (10+2) syllabus followed by major
HSC (10+2) Boards.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">3. Where can I download Entrance Exam Hall Ticket?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>You can download your Hall ticket from application dashboard through your
login.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">4. Is Modal Question paper of the Entrance Exam available?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Yes available, you can download from application dashboard.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">5. What would be the valid ID proofs needed to be produced in the entrance
examination hall, in addition to Hall Ticket with photograph?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>You should bring original of either Aadhar card/ Driving license/ PAN card /
Passport/ Voter ID card or else School ID card.</p>
        </div>
      </div>

      <br>
      <h5>Scholarship related queries</h5>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">1. Does SRIHER provide scholarships to students from rural areas and underprivileged
meritorious students?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Yes, Scholarships available.</p>
        </div>
      </div>


      <br>
<h5>Hostel Related queries</h5>
     <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">1. How can I apply for a hostel?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>You can apply for hostel facilities at the time of admission and any time before joining
the university. However, it is advised to book the hostels at the earliest possible option, to
avail facilities of your choice and to avoid last moment rush.</p>
        </div>
      </div>

      <div class="item">
        <div class="FAQ-title">
          <p class="faqQuestion">2. Is mess facility compulsory to take with Hostel facility?</p>
          <span class="expandToggle">+</span>
        </div>
        <div class="FAQ-content">
          <p>Yes, mess facility is compulsory.</p>
        </div>
      </div>

    
    </div>
  </div>


  <style>
   #FAQ {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;
  height: 90%;
  padding: 20px;
   position: relative;
   background-color: #fff1f2;
}
.accordian {
  overflow-y: auto; /* Enable vertical scrolling */
  max-height: 470px;
}

.accordian {
  width: 100%;
  max-width: 1000px;
  background-color: #fff1f2;
  margin: 0 auto;
  padding: 15px 20px;
/*  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);*/
  border-radius: 8px;
}

.item {
  background-color: white;
  margin-bottom: 10px;
  padding: 15px 20px;
  border: 1px solid whitesmoke;
  border-left: 7px solid #bf2228;
  border-radius: 8px;
  position: relative;
  transition: background-color 0.3s ease;
}

.item.selected {
  background-color: #ffffff;
}
.accordian h5{
   color: #bf2228;
}


.FAQ-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  font-weight: 600;
  font-size: 18px;
  color: #bf2228;
}

.faqQuestion {
  font-size: 15px;
  color: #131414;
  text-align: start;
}

.FAQ-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.8s cubic-bezier(0, 1, 0, 1);
  font-weight: 400;
  font-size: 15px;
  line-height: 1.6;
  color: #bf2228;
}

.FAQ-content.show {
  max-height: 9999px;
  transition: max-height 0.8s cubic-bezier(1, 0, 1, 0);
}

.expandToggle {
  background: #ffffff;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  font-weight: 600;
}

.FAQ-ShowMore {
  text-align: center;
  margin-top: 10px;
}

.FAQ-ShowMore button {
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 8px;
  background-color: #06965c;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.FAQ-ShowMore button:hover {
  background-color: #8ee0c4;
  color: black;
  font-weight: 700;
}

/* Responsive styles */
@media (max-width: 1024px) {
  .accordian {
    max-width: 90%;
  }

  .item {
    padding: 12px 16px;
  }

  .FAQ-title {
    font-size: 16px;
  }

  .expandToggle {
    width: 28px;
    height: 28px;
    font-size: 16px;
  }
}

@media (max-width: 768px) {
  .accordian {
    padding: 10px;
  }

  .item {
    padding: 10px 14px;
  }

  .FAQ-title {
    font-size: 14px;
  }

  .expandToggle {
    width: 24px;
    height: 24px;
    font-size: 14px;
  }
  .faqQuestion {
    width: 95%;
}
}

@media (max-width: 480px) {
  .accordian {
    padding: 5px;
  }

  .item {
    padding: 8px 12px;
  }

  .FAQ-title {
    font-size: 12px;
  }

  .expandToggle {
    width: 20px;
    height: 20px;
    font-size: 12px;
  }
}

tr{
   padding: 10px;
}
th, td{
   border: 1px solid whitesmoke;
   padding: 10px;
}

  </style>

  <script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".item");

  items.forEach((item) => {
    item.querySelector(".FAQ-title").addEventListener("click", () => {
      if (item.classList.contains("selected")) {
        item.classList.remove("selected");
        item.querySelector(".FAQ-content").classList.remove("show");
      } else {
        document.querySelectorAll(".item").forEach((el) => {
          el.classList.remove("selected");
          el.querySelector(".FAQ-content").classList.remove("show");
        });
        item.classList.add("selected");
        item.querySelector(".FAQ-content").classList.add("show");
      }
    });
  });
});

  </script>


   <div id="helpdesk-snippet">
  <div class="container">     
 <div class="row align-items-center">
  
  <div class="col-md-8 left">
      <h3>
      Monday To Saturday - 9am To 5pm (Except Public Holidays)
   </h3>
   <div class="row">
         <div class="col-md-6">
         <p><i class="bi bi-pin-map-fill"></i> No.1 Ramachandra Nagar,
               Porur, Chennai - 600 116,
               Tamil Nadu, India.
        </p>
         </div>
         <div class="col-md-6">
            <p> <i class="bi bi-envelope-at"></i> dracademic@sriramachandra.edu.in </p>
             <p> <i class="bi bi-globe-central-south-asia"></i> www.sriramachandra.edu.in </p>
         </div>
      </div>
   </div>
    <div class="col-md-4 right">    
      <div class="features">
       <h2><img src="assets/images/24-hours-support.png"> &nbsp; <b>Admissions help Desk</b></h2>
        
        <p><span><a href="tel:+91 7010101510"><strong>+91 7010101510</strong></a></span></p>
      </div>
    </div> 
    </div> 
 </div>
 </div>




  <!--  <div class="container">
      <div class="row">
         <div class="col-md-6">
            <p class="footer_section_content_address">No.1 Ramachandra Nagar
               Porur, Chennai - 600 116 <br />
               Tamil Nadu, India.</p>
         </div>
         <div class="col-md-6">
            <p class="footer_section_content_address1">Email: dracademic@sriramachandra.edu.in</p>
            <p class="footer_section_content_address1">Mobile number: +91 7010101510</p>
         </div>
      </div>
   </div> -->
   <div class="footer_section">
      <div class="container">
         <p class="footer_section_content"><span class="footer_section_content_symbol"> © </span>2025 SRIHER<span style="float:right;color:#fff;"><b>Powered by SRIHER</b></span></p>
      </div>
   </div>
   <div id="result"></div>
   <input type="hidden" id="device">
   <input type="hidden" id="deviceName">
   <input type="hidden" id="otpget">
   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
   <script src='assets/js/script_check.js'></script>
   <script>
      $(document).ready(function() {
         $('.carousel').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            initialSlide: 0,
            speed: 1000,
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
                  slidesToShow: 3,
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
         scrollToTop();
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

      function scrollToTop() {
         var element = document.querySelector('.pre-course-section');
         element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
         });
      }

      $(document).ready(function() {
         $('.pre-course-card').click(function() {
            $('.pre-course-card').removeClass("active");
            $(this).addClass("active");
         });
      });
      $(function() {
         $('.btnform').on('click', function(e) {
            e.preventDefault();
            $("form").css("display", "none");
            var TargetDiv = $(this).attr("data-target");
            $("#" + TargetDiv).show();
         });
      });
      // var divs = ["Menu1", "Menu2", "Menu3", "Menu4", "Menu5", "Menu6", "Menu7", "Menu8", "Menu9", "Menu10", "Menu11", "Menu12", "Menu13"];
      // var visibleDivId = null;

      // function toggleVisibility(divId) {
      //    if (visibleDivId === divId) {
      //       //visibleDivId = null;
      //    } else {
      //       visibleDivId = divId;
      //    }
      //    hideNonVisibleDivs();
      // }

      // function hideNonVisibleDivs() {
      //    var i, divId, div;
      //    for (i = 0; i < divs.length; i++) {
      //       divId = divs[i];
      //       div = document.getElementById(divId);
      //       if (visibleDivId === divId) {
      //          div.style.display = "block";
      //       } else {
      //          div.style.display = "none";
      //       }
      //    }
      // }
      // $(document).ready(function() {
      //    $('.pre-course-card').click(function() {
      //       $('.pre-course-card').removeClass("active");
      //       $(this).addClass("active");
      //    });
      // });
      function loginapplication() {
         var emailIdorMobile = $("#emailIdorMobile").val();
         var password = $("#password").val();
         emailIdorMobile = emailIdorMobile.trim();
         if (emailIdorMobile == "") {
            $("#emailIdorMobile").focus();
            $("#emailIdorMobile").css({
               border: "2px solid #FF5F15",
            });
            $(".btn-form").prop("disabled", false);
            return false;
         } else {
            $("#emailIdorMobile").css({
               border: "2px solid #ccc",
            });
         }
         password = password.trim();
         if (password == "") {
            $("#password").focus();
            $("#password").css({
               border: "2px solid #FF5F15",
            });
            $(".btn-form").prop("disabled", false);
            return false;
         } else {
            $("#password").css({
               border: "2px solid #ccc",
            });
         }
         if (emailIdorMobile != "" && password != "") {
            //alert(API);
            const apiUrl = API + 'studentlogin/login';
            const myHeaders = new Headers();
            myHeaders.append('Content-Type', 'application/json');
            var raw = JSON.stringify({
               "emailIdorMobile": emailIdorMobile,
               "password": password,
               "ipaddress": 'ipaddress'
            });
            const options = {
               method: 'POST',
               body: raw,
               headers: myHeaders,
               redirect: 'follow'
            };
            fetch(apiUrl, options)
               .then(res => res.json())
               .then((result) => {
                     if (result.status === 1) {
                        localStorage.setItem('SRIHER_isLoggedIn', true);
                        localStorage.setItem('SRIHER_LoginResponse', result);
                        localStorage.setItem('SRIHER_studentId', result.studentId);
                        localStorage.setItem('SRIHER_studentImage', result.studentImage);
                        localStorage.setItem('SRIHER_studentName', result.studentName);
                        localStorage.setItem('SRIHER_studentEmailId', result.studentEmailId);
                        localStorage.setItem('SRIHER_studentMobilenumber', result.studentMobilenumber);
                        localStorage.setItem('SRIHER_studentstatus', result.status);
                        localStorage.setItem('SRIHER_collegeName', result.collegeName);
                        localStorage.setItem('SRIHER_Token', result.token);
                        window.location = 'https://studentportal.sriramachandra.edu.in/#/applications/lplogin/' + emailIdorMobile + '/' + password;
                     } else if (result.status == 300) {
                        alert(result.message)
                     } else if (result.status == 400) {
                        alert(result.message)
                     } else if (result.status == 500) {
                        alert(result.message)
                     } else if (result.status == 600) {
                        alert(result.message)
                     } else if (result.status == 700) {
                        alert(result.message)
                     }
                  },
                  (error) => {}
               )
         }
      }


      function displayErrorMessage(message) {
         var errorMessageContainer = document.getElementById("error-message");
         errorMessageContainer.innerHTML = message;
         errorMessageContainer.style.display = "block";
      }

      function displayErrorMessageotp(message) {
         var errorMessageContainer = document.getElementById("error-message-otp");
         errorMessageContainer.innerHTML = message;
         errorMessageContainer.style.display = "block";
      }

      function displayErrorMessagepassword(message) {
         var errorMessageContainer = document.getElementById("error-message-password");
         errorMessageContainer.innerHTML = message;
         errorMessageContainer.style.display = "block";
      }

      function resetpassword() {
         var emailId = $("#emailId").val();
         emailId = emailId.trim();
         if (emailId == "") {
            $("#emailId").focus();
            $("#emailId").css({
               "border": "2px solid #FF5F15"
            });
            return false;
         } else {
            if (emailId != "") {
               $("#emailId").css({
                  "border": "2px solid #ccc"
               });
               var atpos = emailId.indexOf("@");
               var dotpos = emailId.lastIndexOf(".");
               if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailId.length) {
                  //   alert("Enter valid Email ID");
                  displayErrorMessage('Email does not exist');
                  $("#emailId").focus();
                  return false;
               }
            }
         }
         if (emailId != "") {
            const apiUrl = API + 'studentlogin/check';
            const myHeaders = new Headers();
            myHeaders.append('Content-Type', 'application/json');
            var raw = JSON.stringify({
               "resetemailId": emailId,
               "ipaddress": "ipaddress"
            });
            const options = {
               method: 'POST',
               body: raw,
               headers: myHeaders,
               redirect: 'follow'
            };
            fetch(apiUrl, options)
               .then(res => res.json())
               .then((result) => {
                     if (result.status === 1) {
                        alert('OTP Sent to Registered Email ID')
                        // displaySuccessMessage('OTP Sent to Registered Email ID');
                        setTimeout(function() {
                           $('.otpdivverified').show();
                           $('.resetpassdiv').hide();
                           $("#studentId").val(result.studentId);
                        }, 500);

                        //setTimeout(() => navigate("/reset-password/" + result.studentId), 500);
                     } else if (result.status == 300) {
                        alert(result.message)
                     } else if (result.status == 400) {
                        alert(result.message)
                     } else if (result.status == 500) {
                        alert(result.message)
                     } else if (result.status == 600) {
                        alert(result.message)
                     } else if (result.status == 700) {
                        alert(result.message)
                     } else if (result.status == 800) {
                        alert(result.message)
                     }
                  },
                  (error) => {}
               )
         }
      }

      function otp_verified() {
         var studentId = $("#studentId").val();
         var otp = $("#otp").val();
         otp = otp.trim();
         if (otp == "") {
            $("#otp").focus();
            $("#otp").css({
               border: "2px solid #FF5F15",
            });
            //$(".btn-form").prop("disabled", false);
            return false;
         } else {
            $("#otp").css({
               border: "2px solid #ccc",
            });
         }
         if (studentId != "" && otp != "") {
            const apiUrl = API + 'student/studentotpcheck';
            const myHeaders = new Headers();
            myHeaders.append('Content-Type', 'application/json');
            var raw = JSON.stringify({
               "studentId": studentId,
               "ipaddress": "ipaddress",
               "otp": otp
            });
            const options = {
               method: 'POST',
               body: raw,
               headers: myHeaders,
               redirect: 'follow'
            };
            fetch(apiUrl, options)
               .then(res => res.json())
               .then((result) => {
                     if (result.status === 200) {
                        alert('OTP Verified');
                        // displaySuccessMessageotp('OTP Verified');
                        $(".passworddiv").show();
                        $(".otpdivverified").hide();
                     } else {
                        // alert('Invalid OTP');
                        displayErrorMessageotp('Invalid OTP');
                        $(".passworddiv").hide();
                     }
                  },
                  (error) => {}
               )
         }
      }

      function submitpassword() {
         var studentId = $("#studentId").val();
         var updatepassword = $("#updatepassword").val();
         var confirmpassword = $("#confirmpassword").val();

         updatepassword = updatepassword.trim();
         if (updatepassword == "") {
            $("#updatepassword").focus();
            $("#updatepassword").css({
               border: "2px solid #FF5F15",
            });
            //$(".btn-form").prop("disabled", false);
            return false;
         } else {
            $("#updatepassword").css({
               border: "2px solid #ccc",
            });
         }

         confirmpassword = confirmpassword.trim();
         if (confirmpassword == "") {
            $("#confirmpassword").focus();
            $("#confirmpassword").css({
               border: "2px solid #FF5F15",
            });
            //$(".btn-form").prop("disabled", false);
            return false;
         } else {
            $("#confirmpassword").css({
               border: "2px solid #ccc",
            });
         }
         if (updatepassword == confirmpassword) {} else {
            // alert('Password Does Not Match');
            displayErrorMessagepassword('Password Does Not Match');
            return false;
         }
         if (updatepassword != "" && confirmpassword != "" && studentId != "") {
            const apiUrl = API + 'student/passwordupdate';
            const myHeaders = new Headers();
            myHeaders.append('Content-Type', 'application/json');
            var raw = JSON.stringify({
               "studentId": studentId,
               "password": updatepassword,
               "confirmpassword": confirmpassword,
               "ipaddress": "ipaddress"
            });
            const options = {
               method: 'POST',
               body: raw,
               headers: myHeaders,
               redirect: 'follow'
            };
            fetch(apiUrl, options)
               .then(res => res.json())
               .then((result) => {
                     if (result.status === 200) {
                        $('[data-target="login_id"]').show();
                        $('[data-target="forget_id"]').hide();
                        alert(result.message);
                        // alert('login div show');
                        //setTimeout(() => navigate("/login"), 2000);
                     } else {
                        alert(result.message);
                     }
                  },
                  (error) => {}
               )
         }
      }
   </script>
 


</body>



</html>