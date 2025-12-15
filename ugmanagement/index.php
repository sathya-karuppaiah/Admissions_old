<html>

<?php
$logindiv = 0;
if (isset($_GET['login']) && $_GET['login'] == 1) {
  $logindiv = 1;
} else {
  $logindiv = 0;
}
//echo $logindiv;
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no">
  <meta name="google-site-verification" content="">
  <meta name="msvalidate.01" content="">
  <title>Admission Open 2025 | Sri Ramachandra Faculty of Management Sciences</title>
  <meta name="description" content="Enroll now for 2025 admissions at Sri Ramachandra Faculty of Management Sciences. Courses offered: BBA, B.Com in Hospital & Healthcare Management, International Business, Digital Marketing, Healthcare HR, Finance & Quality Management. Apply today!">
  <meta name="keywords" content="Sri Ramachandra Institute of Higher Education and Research">
  <link rel="shortcut icon" href="https://www.sriramachandra.edu.in/images/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
  <link rel="icon" href="" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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

</head>

<body>
  
  <div class="header">
    <div class="header_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-12">
            <img class="company-logo" src="./assets/images/logo_1.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="main-banner-background">
      <div class="container">
        <div class="row">
        </div>
      </div>
      <div class="main-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-12">
              <h1 class="banner_title">Welcome to Sri Ramachandra Faculty of Management Sciences </h1>
              <p class="banner_title_content">Discover a world of opportunities with our stellar<span class="banner_title_content_hl"> Management Programs </span></p>
              <div class="row">
                <div class="col-lg-9">
                  <img class="main-banner-slider" src="./assets/images/girl.png" alt="smile-list" />
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
              <div class="banner-form">

                <form id="addmission_form" action="#" method="POST" onSubmit="return false;" autocomplete="off" style="display: block;">
                  <p class="candidate-form-title">Admission Open 2025 - 26</p>
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    <!-- <div class="emailErr" style="color:red;font-size:12px"></div> -->
                  </div>
                  <div class="address_row">
                    <div class="form-group1">
                      <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder=" "/>
                      <p class="errorMobile">Enter Valid 10 digit Mobile Number</p>
                    </div>
                    <div class="paddingzero getotpbutton" style="margin-top:30px;">
                      <a href="javascript:void(0);" class="otpdesktop getotpdiv otpget" onclick="getotp();">Get OTP</a>
                      <a href="javascript:void(0);" class="otpverifieddiv" style="">Verified</a>
                    </div>
                  </div>

                  <div class="address_row" id="otpshow" style="display:none;">
                    <div class="form-group1">
                      <input type="text" class="form-control" id="otp_number" name="otp_number" placeholder="Enter OTP">
                      <p class="otperrorMobile">Enter OTP</p>
                    </div>
                    <div class="form-group">
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

                  <div class="form-group">
                    <select class="form-control" name="course_interest" id="course_interest" onchange='getmode(this.value)'>
                      <option class="form-select-option" value="">Select Course</option>
                    </select>
                  </div>
                  <div class="hight_text" id="enggtext" style="display: none;">Subject to AICTE approval*</div>
                  <div class="form-group">
                    <select name="mode" id="mode" class="form-control">
                      <option class="form-select-option" value="">Select Mode</option>
                    </select>
                  </div>
                  <div class="main-button">
                    <button class="bfc-btn blink-hard submit-btn sub-button" type="submit" onclick="submitapplication();">Apply Now </button>
                    <div id="successmgs" style="display:none;margin-top: 10px;color: red;text-align: center;">Please wait..</div>
                  </div>
                  <div class="" style="text-align: center;">
                    <button class="already_btn btnform" data-target="login_id">Already applied? <span class="already_btn_link">Login</span> </button>
                  </div>
                </form>

                <form id="login_id" <?php if ($logindiv == 1) {
                                      echo 'style="display: block;"';
                                    } else {
                                      echo 'style="display: none;"';
                                    } ?> data-target="login_id" onSubmit="return false;">
                  <img class="main-banner-slider1 desktoponly_desk" src="./assets/images/login2.png" alt="smile-list" />
                  <div class="candidate-form">
                    <p class="candidate-form-title">Login</p>
                    <div class="form-group">
                      <input type="text" class="form-control" id="emailIdorMobile" name="emailIdorMobile" placeholder="Candidate E-mail">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="main-button">

                      <button class="candidate-form-btn sub-button" type="submit" onclick="loginapplication();">Login</button>
                      <!-- <div id="successmgs" style="display:none;margin-top: 10px;color: red;text-align: center;">Please wait..</div> -->
                    </div>
                    <div class="" style="text-align: center;">
                      <button class="already_btn btnform sub-button" data-target="forget_id"><span class="already_btn_link">Forget Password ?</span></button>
                    </div>
                    <div class="" style="text-align: center;">
                      <button class="already_btn btnform sub-button" data-target="addmission_form" type="submit" onclick="loginapplication();">New User? <span class="already_btn_link">Register</span></button>
                    </div>
                  </div>
                </form>

                <form class="resetpassdiv" id="forget_id" style="display: none;margin-bottom: 0;" data-target="forget_id" onSubmit="return false;">
                  <div class="candidate-form">
                  <img class="main-banner-slider desktoponly_desk" style="height: 235px;" src="./assets/images/forgetpw2.png" alt="smile-list" />
                    <p class="candidate-form-title">Forgot Password</p>
					<p style="color:#000000"><b>Your password has been sent to your registered Email ID and WhatsApp at the time of Registration. Please check these before using the 'Forgot Password' option.</b></p>
                    <div>
                      <div class="form-group">
                        <input class="form-control" type="text" name="emailId" id="emailId" placeholder="Enter Your E-mail">
                      </div>
                      <div id="error-message" class="alert-danger" style="display: none;"></div>
                      <div class="main-button">
                        <button class="candidate-form-btn sub-button" type="submit" onclick="resetpassword();">Confirm</button>
                      </div>
                    </div>
                    <div class="">
                      <button class="already_btn btnform candidate-form-btn sub-button" data-target="login_id"><span class="already_btn_link">Back to login?</span></button>
                    </div>
                  </div>
                </form>

                <form class="otpdivverified" style="display: none;margin-bottom: 0;" data-target="forget_id" onSubmit="return false;">
                  <div class="candidate-form">
                  <img class="main-banner-slider desktoponly_desk" style="height: 235px;" src="./assets/images/forgetpw2.png" alt="smile-list" />
                    <p class="candidate-form-title">Forget Password</p>
					<p style="color:#000000"><b>Your password has been sent to your registered Email ID and WhatsApp at the time of Registration. Please check these before using the 'Forgot Password' option.</b></p>
                    <div>
                      <div class="form-group">
                        <input class="form-control" type="hidden" name="studentId" id="studentId">
                      </div>
                      <div class="form-group">
                        <input class="form-control" type="text" name="otp" id="otp" placeholder="Enter OTP">
                      </div>
                      <div id="error-message-otp" class="alert-danger" style="display: none;"></div>
                      <div class="main-button">
                        <button class="candidate-form-btn sub-button" type="submit" onclick="otp_verified();">Verify OTP</button>
                      </div>
                    </div>
                    <div class="">
                      <button class="already_btn btnform candidate-form-btn sub-button" data-target="login_id"><span class="already_btn_link">Back to login?</span></button>
                    </div>
                  </div>
                </form>

                <form class="passworddiv" style="display: none;margin-bottom: 0;" data-target="forget_id" onSubmit="return false;">
                  <div class="candidate-form">
                    <img class="main-banner-slider desktoponly_desk" src="./assets/images/login2.png" alt="smile-list" />
                    <p class="candidate-form-title">Forget Password</p>
					<p style="color:#000000"><b>Your password has been sent to your registered Email ID and WhatsApp at the time of Registration. Please check these before using the 'Forgot Password' option.</b></p>
                    <div>
                      <div class="form-group">
                        <input class="form-control" type="password" name="updatepassword" id="updatepassword" placeholder="New Password">
                      </div>
                      <div class="form-group">
                        <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                      </div>
                      <div id="error-message-password" class="alert-danger" style="display: none;"></div>
                      <div class="main-button">
                        <button class="candidate-form-btn sub-button" type="submit" onclick="submitpassword();">SUMBIT</button>
                      </div>
                    </div>
                    <div class="">
                      <button class="already_btn btnform candidate-form-btn sub-button" data-target="login_id"><span class="already_btn_link">Back to login?</span></button>
                    </div>
                  </div>
                </form>

              </div>
              <div class="banner_grade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 padding_0">
                    <img class="main-banner-slider banner_grade_image1" src="./assets/images/mainlogo1.png" alt="smile-list" />
                  </div>
                  <div class="col-lg-4 col-md-4 padding_0">
                    <img class="main-banner-slider banner_grade_image2" src="./assets/images/mainlogo2.png" alt="smile-list" />
                  </div>
                  <div class="col-lg-4 col-md-4 padding_0">
                    <img class="main-banner-slider banner_grade_image3" src="./assets/images/mainlogo3.png" alt="smile-list" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="Bentley_University_section">
    <div class="container">
      <h1 class="Bentley_University_title">B.Com. (Hons.)<span class="Bentley_University_title_hl">[3 Years at SRIHER + 1 Year at Bentley]</span></h1>
      <h1 class="Bentley_University_sub_title">Twinning with Bentley University, USA</h1>
      <div class="row">
        <div class="col-md-6">
          <h3 class="Bentley_University_adv_title">Bentley Advantage</h3>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">Excellent placement opportunities in USA</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">Free Entry without stringent admission procedures such as SAT, IELTS & TOEFL</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">On-campus Housing</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="Bentley_University_adv_title">Career Opportunities</h3>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">Taxation Associate</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">Banking & Insurance professionals</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">Financial Analyst</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-2">
              <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
            </div>
            <div class="col-lg-11 col-10 pl-0">
              <p class="Bentley_University_adv_details">Financial Planning & Consulting</p>
            </div>
          </div>
        </div>
      </div>
      <p class="Bentley_University_content">Students who choose the twinning option with Bentley University,
        will be able to complete a 1 year MS (Finance) or MS (Financial Analytics).</p>
      <h3 class="Bentley_University_adv_title">Eligibility</h3>
      <p class="Bentley_University_adv_details">55% marks in Commerce/Accounting stream (or) 60% marks in any other stream with
        Mathematics or Business Mathematics or Statistics in HSC/CBSE/ICSE or any other equivalent examination</p>
      <div class="">
        <div class="row">
          <div class="col-lg-2 col-md-1"></div>
          <div class="col-lg-8 col-md-10">
            <div class="" style="text-align: center;">
              <img class="Bentley_University_logo" src="./assets/images/bentley_logo.png" alt="smile-list" />
              <img class="Bentley_University_image" src="./assets/images/bentley_images.png" alt="smile-list" />
            </div>
          </div>
          <div class="col-lg-2 col-md-1"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="programmes_section">
    <div class="container">
      <h2 class="programmes_title">Other programmes offered</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="programmes_block_border">
            <div class="programmes_block_title_bg">
              <h3 class="programmes_block_title">BBA</h3>
            </div>
            <h3 class="Bentley_University_adv_title">(Hons. / 3 Year BBA Programme)</h3>
            <h3 class="Bentley_University_adv_title">Minors</h3>
            <div class="row">
              <div class="col-lg-1 col-2" style="padding-right: 10px;">
                <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Hospital and Healthcare Management</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2" style="padding-right: 10px;">
                <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">International Business</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2" style="padding-right: 10px;">
                <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Digital Marketing</p>
              </div>
            </div>
            <h3 class="Bentley_University_adv_title">Eligibility</h3>
            <div class="row">
              <div class="col-lg-1 col-2">
                <img class="arrow_mark_image" src="./assets/images/Polygon.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Candidates should have secured atleast 50% in the HSC / CBSE / ISC or any other equivalent examination.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2">
                <img class="arrow_mark_image" src="./assets/images/Polygon.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Selection will be based on merit.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="programmes_block_border1">
            <div class="programmes_block_title_bg1">
              <h3 class="programmes_block_title">MBA</h3>
            </div>
            <h3 class="Bentley_University_adv_title">Hospital and Health Systems Management</h3>
            <h3 class="Bentley_University_adv_title">Elective Streams</h3>
            <div class="row">
              <div class="col-lg-1 col-2" style="padding-right: 10px;">
                <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Healthcare HR</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2" style="padding-right: 10px;">
                <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Healthcare Finance</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2" style="padding-right: 10px;">
                <img class="arrow_mark_image" src="./assets/images/right-arrow.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Healthcare Quality</p>
              </div>
            </div>
            <h3 class="Bentley_University_adv_title">Eligibility</h3>
            <div class="row">
              <div class="col-lg-1 col-2">
                <img class="arrow_mark_image" src="./assets/images/Polygon.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Any degree with minimum 50% (45% for SC/ST) from a recognized university.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2">
                <img class="arrow_mark_image" src="./assets/images/Polygon.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Good score in MAT / CMAT / XAT / CAT / TANCET / ATMA /SRIHER MAT.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="programmes_block_border2">
            <div class="programmes_block_title_bg2">
              <h3 class="programmes_block_title">B.Com. (Hons.)</h3>
            </div>
            <p class="Bentley_University_adv_details">4 years with an option to exit at the end of 3 years,
              in which case a 3 year B.Com. degree shall be conferred, provided all requirements for obtaining the degree is fulfilled.</p>
            <h3 class="Bentley_University_adv_title">Eligibility</h3>
            <div class="row">
              <div class="col-lg-1 col-2">
                <img class="arrow_mark_image" src="./assets/images/Polygon.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">55% marks in Commerce/Accounting stream (or) 60% marks in any other
                  stream with Mathematics or Business Mathematics or Statistics in HSC/CBSE/ICSE or any other equivalent examination</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-2">
                <img class="arrow_mark_image" src="./assets/images/Polygon.png" alt="smile-list" />
              </div>
              <div class="col-lg-11 col-10 pl-0">
                <p class="Bentley_University_adv_details">Graduates can pursue careers in accounting, finance, marketing,
                  and human resource management,with paths leading to roles such as financial analysts, marketing managers, and HR specialists.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="edge_section">
    <div class="container">
      <h2 class="programmes_title">SRIHER EDGE</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="edge_frame">
            <div class="row">
              <div class="col-3 padding_right0">
                <img class="edge_frame_content_image" src="./assets/images/edge_frame_icon1.png" alt="smile-list" />
              </div>
              <div class="col-9">
                <p class="edge_frame_details">Practical learning in two hospitals within campus and assured placement</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="edge_frame">
            <div class="row">
              <div class="col-3 padding_right0">
                <img class="edge_frame_content_image" src="./assets/images/edge_frame_icon2.png" alt="smile-list" />
              </div>
              <div class="col-9">
                <p class="edge_frame_details padding_top10">Develop analytical abilities and research skills</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="edge_frame">
            <div class="row">
              <div class="col-3 padding_right0">
                <img class="edge_frame_content_image" src="./assets/images/edge_frame_icon3.png" alt="smile-list" />
              </div>
              <div class="col-9">
                <p class="edge_frame_details padding_top20">Healthcare Leadership</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 desktoponly"></div>
        <div class="col-lg-4 col-md-6">
          <div class="edge_frame">
            <div class="row">
              <div class="col-3 padding_right0">
                <img class="edge_frame_content_image" src="./assets/images/edge_frame_icon4.png" alt="smile-list" />
              </div>
              <div class="col-9">
                <p class="edge_frame_details padding_top20">Entrepreneurial Focus</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="edge_frame">
            <div class="row">
              <div class="col-3 padding_right0">
                <img class="edge_frame_content_image" src="./assets/images/edge_frame_icon5.png" alt="smile-list" />
              </div>
              <div class="col-9">
                <p class="edge_frame_details padding_top20">Holistic Business Education</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="about_video">
    <div class="container">
      <div class="" style="text-align: center;">
        <!-- <h2 class="programmes_title">Laboratory Facilities</h2> -->
        <!-- <img class="main_design" src="./assets/images/design.png" alt="smile-list" /> -->
      </div>
      <div class="laboratory_section_border">
        <div class="row">
          <div class="col-lg-12">
           <iframe class="about_section_video" width="100%" height="500px" src="https://www.youtube.com/embed/-T2qZZe_e7Y?rel=0&modestbranding=1&autohide=1&mute=1&showinfo=1&controls=1&autoplay=1" title="SRIHER Admission" frameborder="0" allow="accelerometer;autoplay;clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
           <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="placement-partners-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5 col-12">
          <div class="hallmark-excellence-right">
            <h3 class="hallmark-excellence-title">Top Recruiters</h3>
            <p class="hallmark-excellence-details">Join Sri Ramachandra Faculty of Management Sciences and become part of an elite
              network driving <span class="hallmark-excellence-details-hl"> excellence and innovation in healthcare. </span>
              Benefit from our strong industry connections, ensuring high placement rates in leading healthcare institutions. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-7 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="placement-images-card1">
                <div class="carousel3">
                  <img class="placement-images" src="./assets/images/corelogo-1.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-2.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-3.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-4.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-5.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-6.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-7.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/corelogo-8.png" alt="placement-images" />
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-6 padding_left0">
              <div class="placement-images-card4">
                <div class="carousel3">
                  <img class="placement-images" src="./assets/images/productlogo-1.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-2.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-3.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-4.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-5.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-6.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-7.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/productlogo-8.png" alt="placement-images" />
                </div>
              </div>
            </div>
            <!-- </div> -->
            <!-- <div class="row"> -->
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-6 col-6 padding_right0">
              <div class="placement-images-card3">
                <div class="carousel3">
                  <img class="placement-images" src="./assets/images/consultinglogo-1.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-2.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-3.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-4.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-5.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-6.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-7.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/consultinglogo-8.png" alt="placement-images" />
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="placement-images-card2">
                <div class="carousel3">
                  <img class="placement-images" src="./assets/images/logo-1.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-2.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-3.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-4.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-5.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-6.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-7.png" alt="placement-images" />
                  <img class="placement-images" src="./assets/images/logo-8.png" alt="placement-images" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="address-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6">
          <div class="desktoponly_desk">
            <div class="address_row">
              <div class="">
                <img class="address-images" src="./assets/images/location.png" alt="placement-images" />
              </div>
              <div class="">
                <p class="address_details1">No.1 Ramachandra Nagar, Porur, Chennai - 600116 <br />
                  Tamil Nadu, India</p>
              </div>
            </div>
          </div>
          <div class="mobileonly_mobile">
            <div class="address_row">
              <div class="">
                <img class="address-images" src="./assets/images/location.png" alt="placement-images" />
              </div>
              <div class="">
                <p class="address_details1">No.1 Ramachandra Nagar, Porur, Chennai - 600116
                  Tamil Nadu, India</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="address_row">
            <div class="">
              <img class="address-images" src="./assets/images/email.png" alt="placement-images" />
            </div>
            <div class="">
              <p class="address_details">Email: dracademic@sriramachandra.edu.in</p>
            </div>
          </div>
          <div class="address_row">
            <div class="">
              <img class="address-images" src="./assets/images/phone_call.png" alt="placement-images" />
            </div>
            <div class="">
              <p class="address_details">Mobile Number: +91 701010510</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <p class="footer-content">© 2025 SRIHER </p>
        </div>
        <div class="col-6">
          <p class="footer-content1"><b>Powered by SRIHER</b></p>
        </div>
      </div>
    </div>
  </div>
  <div id="result"></div>
  <input type="hidden" id="device">
  <input type="hidden" id="deviceName">
  <input type="hidden" id="otpget">

  <script>
    var index = 0;
    var slides = document.querySelectorAll(".slides");

    function changeSlide() {

      if (index < 0) {
        index = slides.length - 1;
      }

      if (index > slides.length - 1) {
        index = 0;
      }

      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slides[index].style.display = "block";

      index++;

      setTimeout(changeSlide, 3000);

    }

    changeSlide();
  </script>
  <script>
    let Buttons = document.querySelectorAll(".selectSection button");

    for (let button of Buttons) {
      button.addEventListener('click', (e) => {
        const et = e.target;
        const active = document.querySelector(".active");
        if (active) {
          active.classList.remove("active");
        }
        et.classList.add("active");

        let allContent = document.querySelectorAll('.content');

        for (let content of allContent) {
          if (content.getAttribute('data-number') === button.getAttribute('data-number')) {
            content.style.display = "block";
          } else {
            content.style.display = "none";
          }
        }
      });
    }

    $(function() {
      $('.btnform').on('click', function(e) {
        e.preventDefault();
        $("form").css("display", "none");
        var TargetDiv = $(this).attr("data-target");
        $("#" + TargetDiv).show();
      });
    });
  </script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
<script src="assets/js/intlTelInput.js"></script>
  <script src="assets/js/intlTelInput.min.js"></script>
  <script src="assets/js//utils.js"></script>
  <script src='assets/js/script.js'></script>
  <script src='assets/js/script_check.js'></script>

</body>

</html>