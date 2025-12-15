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
   <div class="header_section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
               <img class="company-logo" src="./assets/images/logo.png" alt="">
            </div>
         </div>
      </div>
   </div>
   <div class="amin_banner_section">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-6 col-12">
               <h1 class="amin_banner_title padding_top_50">
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
               </div>
            </div>
            <!-- <div class="col-lg-1 col-md-1 col-12"></div> -->
            <div class="col-lg-5 col-md-6 col-12">
               <div class="row">
                  <div class="col-lg-2 col-md-1 col-12"></div>
                  <div class="p-0 col-lg-10 col-md-12 col-12">
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
                     <p class="highlights_card_content">Multidisciplinary UG,PG,PhD Programs</p>
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
                     <h2 class="highlights_card_header">2,500</h2>
                     <p class="highlights_card_content">Bedded Teaching Hospital</p>
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
                     <h2 class="highlights_card_header">35 lakh+</h2>
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
                     <p class="about_section_details">The Sri Ramachandra Institute of Higher Education and Research (SRIHER) in Chennai,
                        previously known as Sri Ramachandra University, is a distinguished Deemed University.
                        The university offers over 165 undergraduate and postgraduate programs across a variety of disciplines, including Physiotherapy, Allied Health Sciences, Biomedical Sciences, Management, and more.
                        SRIHER has earned the highest accolade of an A++ grade from NAAC, highlighting its commitment to excellence in education and research.
                     </p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="">
                     <iframe class="about_section_video" width="100%" height="130%" src="https://www.youtube.com/embed/-T2qZZe_e7Y?rel=0&modestbranding=1&autohide=1&mute=1&showinfo=0&controls=1&autoplay=1" title="SRIHER Admission" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12 desktoponly">
                  <div class="about_section_content">
                     <h3 class="about_section_header">About SRIHER</h3>
                     <p class="about_section_details">The Sri Ramachandra Institute of Higher Education and Research (SRIHER) in Chennai,
                        previously known as Sri Ramachandra University, is a distinguished Deemed University.
                        The university offers over 165 undergraduate and postgraduate programs across a variety of disciplines, including Physiotherapy, Allied Health Sciences, Biomedical Sciences, Management, and more.
                        SRIHER has earned the highest accolade of an A++ grade from NAAC, highlighting its commitment to excellence in education and research.
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
                  <!-- <div class="pre-course-card" onclick="toggleVisibility('Menu3');">
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
                  </div> -->
               </div>
               <div class="col-lg-7 col-md-8">
                  <h3 class="about_section_header pre-course-content-section">Courses</h3>
                  <div class="pre-course-details">
                     <div id="Menu1">
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech-Computer Science and Engineering-Artificial Intelligence & Machine Learning</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech-Computer Science and Engineering-Cyber Security & Internet of Things</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech. Computer Science and Engineering (Artificial Intelligence and Data Analytics)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech. Computer Science and Medical Engineering (Artificial Intelligence and Data Analytics)</p>
                        </div>
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Tech Electronics and Communication Engineering *</p>
                        </div>
                     </div>
                     <div id="Menu2" style="display: none;">
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
                           <p class="pre-course-details-content">B.Sc. Clinical Nutrition</p>
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
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">M.Sc. (Medical Radiology and Imaging Technology) (5 Year Integrated)</p>
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
                        <div class="pre-course-details-cards">
                           <p class="pre-course-details-content">B.Sc Bioinformatics</p>
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
                        <hr />
                        B.Tech Electronics and Communication Engineering *
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
                        <hr />
                        B.Sc Bioinformatics
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
                        <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                           <img class="testimonial_image" src="./assets/images/testimonial_image.png" alt="">
                        </div>
                        <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                           <p class="testimonial_section_card_name" style="margin-top: 0;">DR. S.GURUSHANKAR</p>
                           <p class="testimonial_section_card_details">Chairman Meenakshi Mission Hospital, Madurai</p>
                        </div>
                     </div>
                     <p class="testimonial_section_card_content">
                        Proud to be an SRMC alum, I cherish the exceptional education beyond textbooks.
                        Professors became friends, and friends, mentors. Here's to SRMC's continued success in fostering compassionate doctors.
                     </p>
                     <div class="testimonial_rating_image">
                        <img class="testimonial_rating" src="./assets/images/testimonial_rating.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="testimonial_section_card">
                     <div class="row">
                        <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                           <img class="testimonial_image" src="./assets/images/testimonial_image1.jpg" alt="">
                        </div>
                        <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                           <p class="testimonial_section_card_name" style="margin-top: 0;">DR. ADIL AGARWAL</p>
                           <p class="testimonial_section_card_details">CEO - Dr. Agarwal's Eye Hospitals Group</p>
                        </div>
                     </div>
                     <p class="testimonial_section_card_content">
                        At SRMC, I gained invaluable skills from brilliant peers and state-of-the-art resources, empowering my entrepreneurial ventures.
                        SRMC's influence is evident in its alumni's significant healthcare roles nationwide.
                     </p>
                     <div class="testimonial_rating_image">
                        <img class="testimonial_rating" src="./assets/images/testimonial_rating.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="testimonial_section_card">
                     <div class="row">
                        <div class="col-lg-3 col-md-5 col-4 padding_left_0">
                           <img class="testimonial_image" src="./assets/images/testimonial_image2.png" alt="">
                        </div>
                        <div class="col-lg-9 col-md-7 col-8 padding_left_0">
                           <p class="testimonial_section_card_name" style="margin-top: 0;">DR. SURAKSHITH BATTINA</p>
                           <p class="testimonial_section_card_details">Managing Director at Indigo Women's Centre</p>
                        </div>
                     </div>
                     <p class="testimonial_section_card_content">
                        Sri Ramachandra Medical College profoundly shaped me, providing an
                        ideal environment for medical entrepreneurs and molding me into a skilled practitioner and a better person.
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
   <div class="container">
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
   </div>
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
            slidesToShow: 7,
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
                  slidesToShow: 5,
                  slidesToScroll: 1,
                  dots: false,
                  infinite: true,

               }
            }, {
               breakpoint: 480,
               settings: {
                  slidesToShow: 3,
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