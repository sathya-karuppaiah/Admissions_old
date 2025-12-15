<html>
<?php
if (isset($_GET['name']) && $_GET['name'] != '') {
   $name = $_GET['name'];
   $token = $_GET['token'];
} else {
   $name = 'Student';
}
?>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no">
   <meta name="google-site-verification" content="">
   <meta name="msvalidate.01" content="">
   <title>Sri Ramachandra Institute of Higher Education and Research | 2025</title>
   <meta name="description" content="Discover academic excellence at Sri Ramachandra Institute of Higher Education and Research. Explore innovative programs and world-class faculty. Enroll now!">
   <meta name="keywords" content="Sri Ramachandra Institute of Higher Education and Research">
   <link rel="shortcut icon" href="https://www.sriramachandra.edu.in/images/favicon.ico">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

   <link href="assets/css/stylelps.css" rel="stylesheet">
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

      .form-control:disabled,
      .form-control[readonly] {
         background-color: transparent !important;
         opacity: 1;
      }

      .slick-slide {
         height: auto !important;
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
               <div class="thankspage-content" style="color:#fff">
                  <p class="thankspage-name">Dear Mr/Ms/Mrs. <b><?php echo $name; ?>,</b></p>
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
         <div class="">
            <div class="row mobile_align">
               <div class="col-lg-1"></div>
               <div class="col-lg-3 col-md-4">
                  <img class="logo_image" src="./assets/images/logo_image_1.png" alt="">
               </div>
               <div class="col-lg-3 col-md-4">
                  <img class="logo_image" src="./assets/images/logo_image_2.png" alt="">
               </div>
               <div class="col-lg-3 col-md-4">
                  <img class="logo_image" src="./assets/images/logo_image_3.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="pre-course-section">
      <div class="container">
         
         <div class="">
            <h3 class="about_section_header pre-course-content-section" style="text-align: center;">Faculty</h3>
            <div id="main">
               <div class="container">
                  <div class="accordion" id="faq">
                     <div class="row">
                        <div class="col-md-6 mobile_padding">
                           <div class="card">
                              <div class="card-header" id="faqhead1">
                                 <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">Pharmacy</a>
                              </div>

                              <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                 <div class="card-body">
                                    M.Pharmacy - Pharmacy Practice <br />
                                    M.Pharmacy - Pharmaceutics<br />
                                    M.Pharmacy - Pharmacognosy<br />
                                    M.Pharmacy - Pharmaceutical Quality Assurance<br />
                                    M.Pharmacy - Pharmacology<br />
                                    M.Pharmacy - Pharmaceutical Analysis<br />
                                    M.Pharmacy - Pharmaceutical Regulatory Affairs<br />
                                    Pharm. D. Post Baccalaureate
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead2">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                    Allied Health Science
                                 </a>
                              </div>

                              <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                 <div class="card-body">
                                    M.Phil. Clinical Psychology<br />
                                    M.Sc. Medical Laboratory Technology<br />
                                    M.Sc. Neuroscience<br />
                                    M.Sc. Medical Imaging Technology<br />
                                    M.Sc. Renal Sciences & Dialysis Technology <br />
                                    M.Sc. Urology Technology <br />
                                    M.Sc. Clinical Nutrition<br />
                                    M.Sc. Trauma Care Management<br />
                                    M.Sc. Perfusion Technology<br />
                                    M.Sc. Applied Child Development<br />
                                    M.Sc. Biomedical Sciences<br />
                                    M.Optom. Master of Optometry<br />
                                    M.Sc. Clinical Embryology<br />
                                    M.Sc. Medical Psychology<br />
                                    M.Sc. Clinical Psychology<br />
                                    M.Sc. Counselling Psychology<br />
                                    M.Sc. Clinical Immunology<br />
                                    M.Sc. Respiratory Therapy<br />
                                    M.Sc. Mind-Body and Life Style Science<br />
                                    M.Sc. Stem Cell and Regenerative Biology<br />
                                    M.Sc. Forensic Science<br />
                                    M.Sc. Cardiovascular Sciences - Echocardiography<br />
                                    M.Sc. Critical Care Technology<br />
                                    Post Graduate Diploma In Clinical Embryology<br />
                                    M.Sc. Physician Associate <br />
                                    Master of Social Work (MSW)
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead3">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">
                                    Speech
                                 </a>
                              </div>

                              <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                 <div class="card-body">
                                    M.Sc. Audiology<br />
                                    M.Sc. Speech - Language Pathology
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead4">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">
                                    Nursing
                                 </a>
                              </div>

                              <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                 <div class="card-body">
                                    M.Sc. Nursing- Medical Surgical Nursing<br />
                                    M.Sc. Nursing- Obstetrics & Gynaecological Nursing<br />
                                    M.Sc. Nursing- Child Health - Paediatric Nursing<br />
                                    M.Sc. Nursing- Mental Health - Psychiatric Nursing<br />
                                    M.Sc. Nursing- Community Health Nursing<br />
                                    M.Sc. Nursing Nurse Practitioner in Critical Care
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead5">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq5">
                                    Management
                                 </a>
                              </div>

                              <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                 <div class="card-body">
                                    MBA Hospital & Health Systems Management
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead6">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq6">
                                    Physiotherapy
                                 </a>
                              </div>

                              <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                 <div class="card-body">
                                    Master of Physiotherapy - Orthopaedics & Traumatology<br />
                                    Master of Physiotherapy - Neuro Sciences<br />
                                    Master of Physiotherapy - Cardio- Pulmonary Sciences<br />
                                    Master of Physiotherapy - Women's Health<br />
                                    Master of Physiotherapy - Oncology
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 mobile_padding">
                           <div class="card">
                              <div class="card-header" id="faqhead7">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="faq7">
                                    Medical
                                 </a>
                              </div>

                              <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                 <div class="card-body">
                                    M.Sc. Medical Anatomy<br />
                                    M.Sc. Medical Physiology<br />
                                    M.Sc. Medical Biochemistry<br />
                                    M.Sc. Medical Microbiology and Applied Molecular Biology
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead8">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="true" aria-controls="faq8">
                                    Biomedical Sciences
                                 </a>
                              </div>

                              <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                 <div class="card-body">
                                    M.Sc. Human Genetics<br />
                                    M.Sc. Biotechnology
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead9">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="true" aria-controls="faq9">
                                    Public Health
                                 </a>
                              </div>

                              <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                 <div class="card-body">
                                    M.P.H. Master of Public Health
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead10">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="true" aria-controls="faq10">
                                    Clinical Research
                                 </a>
                              </div>

                              <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                 <div class="card-body">
                                    M.Sc. Clinical Research
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead11">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="true" aria-controls="faq11">
                                    Sports
                                 </a>
                              </div>

                              <div id="faq11" class="collapse" aria-labelledby="faqhead11" data-parent="#faq">
                                 <div class="card-body">
                                    M.P.T. Sports <br />
                                    M.Sc. Sports and Exercise Psychology
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead12">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq12" aria-expanded="true" aria-controls="faq12">
                                    Occupational Health
                                 </a>
                              </div>

                              <div id="faq12" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
                                 <div class="card-body">
                                    Master of Occupational Therapy - Peadiatrics<br />
                                    Master of Occupational Therapy - Neurology<br />
                                    Master of Occupational Therapy - Mental Health<br />
                                    Master of Occupational Therapy - Hand & Musculoskeletal Rehabilitation<br />
                                    Master of Occupational Therapy - Oncology and Palliative Care
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="faqhead13">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq13" aria-expanded="true" aria-controls="faq13">
                                    Engineering
                                 </a>
                              </div>

                              <div id="faq13" class="collapse" aria-labelledby="faqhead13" data-parent="#faq">
                                 <div class="card-body">
                                    M.Sc. Medical Bioinformatics
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="about_section">
      <div class="container">
         <div class="">
            <h3 class="about_section_header" style="text-align: center;">SRIHER EDGE</h3>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="about_section_content_card">
                     <img class="testimonial_image" src="./assets/images/edge_image1.png" alt="">
                     <p class="about_section_details">
                        Practical learning in 2 hospitals within campus
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="about_section_content_card">
                     <img class="testimonial_image" src="./assets/images/edge_image2.png" alt="">
                     <p class="about_section_details">
                        lndustry-oriented curriculum
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="about_section_content_card">
                     <img class="testimonial_image" src="./assets/images/edge_image3.png" alt="">
                     <p class="about_section_details">
                        ExcelIent placement records
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="about_section_content_card">
                     <img class="testimonial_image" src="./assets/images/edge_image4.png" alt="">
                     <p class="about_section_details">
                        Healthcare Leadership
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="about_section_content_card">
                     <img class="testimonial_image" src="./assets/images/edge_image5.png" alt="">
                     <p class="about_section_details">
                        Globally placed alumni
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="about_section_content_card">
                     <img class="testimonial_image" src="./assets/images/edge_image6.png" alt="">
                     <p class="about_section_details">
                        Intensive hands-on posting
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="partners_section">
      <div class="container">
         <h3 class="highlights_header">Top Recruiters</h3>
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
         <p class="footer_section_content"><span class="footer_section_content_symbol"> © </span>2025 SRIHER <span style="float:right;color:#fff;"><b>Powered by 42andmore</b></span></p>
      </div>
   </div>
   <div id="result"></div>
   <input type="hidden" id="device">
   <input type="hidden" id="deviceName">
   <input type="hidden" id="otpget">
   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
   <script src='assets/js/script_pg_new.js'></script>
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
            const apiUrl = API + 'pgstudentlogin/login';
            const myHeaders = new Headers();
            myHeaders.append('Content-Type', 'application/json');
            var raw = JSON.stringify({
               "emailIdorMobile": emailIdorMobile,
               "password": password,
               "degree_category": 'PG',
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
                        window.location = 'https://studentportal.sriramachandra.edu.in/pg/#/applications/lplogin/' + emailIdorMobile + '/' + password;
                        //window.location = 'http://localhost:3000/#/applications/lplogin/' + emailIdorMobile + '/' + password;
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
            const apiUrl = API + 'pgstudentlogin/check';
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
            const apiUrl = API + 'pgstudent/studentotpcheck';
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
            const apiUrl = API + 'pgstudent/passwordupdate';
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
	  setTimeout(function () {
 window.location = 'https://studentportal.sriramachandra.edu.in/pg/#/applications/redirect/<?php echo $token;?>';
}, 15000);
   </script>

</body>

</html>
</html>