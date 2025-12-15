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
         padding: 10px 0px 10px 0px;
         background-color: transparent;
      }

      .company-logo {
         width: 100%;
      }

      .header_banner_section {
         padding: 10px 0px 10px 0px;
         background-color: #fff;
      }

      .main_banner_img {
         width: 100%;
         margin-bottom: 20px;
         cursor: pointer;
      }

      .hover12 {
         background: #000;
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
      }

      .main_banner_img {
         display: block;
         width: 100%;
         height: auto;
      }

      .center-button {
         position: absolute;
         background-color: #BF2228;
         color: #fff;
         border-radius: 8px;
         padding: 8px 12px;
         font-size: 20px;
         border: none;
         cursor: pointer;
         font-weight: 600;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         z-index: 1;
      }

      .center-button:hover {
         position: absolute;
         background-color: #fff;
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
         padding: 5px 0;
      }
      .header_content_bg{
         background-color: #105C8E;
         padding: 20px 30px;
         text-align: center;
         border-radius: 8px;
      }
      .header_content_text{
         font-size: 24px;
         font-weight: 800;
         color: #fff;
         margin-bottom: 0;
      }

      @media only screen and (max-width: 768px) {
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
      }
   </style>
</head>

<body>
   <div class="header_banner_section">
      <div class="container-fliud">
         <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
               <img class="company-logo" src="./assets/images/logo.png" alt="">
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
         </div>
      </div>
   </div>
   <div>
      <div class="header_content_section">
      <div class="container">
         <div class="header_content_bg">
            <h1 class="header_content_text">Discover Academic Excellence: Click on UG or PG Tabs for Top Study Options</h1>
         </div>
         <div class=""></div>
      </div>
      </div>
      <div class="banner_section">
         <div class="container-fliud">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="hover12">
                     <div class="image-container">
                        <a href="https://admissions.sriramachandra.edu.in/?utm_source=<?php echo $utm_source; ?>&utm_medium=<?php echo $utm_medium; ?>&utm_campaign=<?php echo $utm_campaign; ?>& &utm_term=ug&utm_content=ug" target="_blank">
                           <img class="main_banner_img" src="./assets/images/ug.png" alt="">
                           <button class="center-button">UG Admission 2024-25</button>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="hover12">
                     <div class="image-container">
                        <a href="https://admissions.sriramachandra.edu.in/pg/?utm_source=<?php echo $utm_source; ?>&utm_medium=<?php echo $utm_medium; ?>&utm_campaign=<?php echo $utm_campaign; ?>& &utm_term=pg&utm_content=pg" target="_blank">
                           <img class="main_banner_img" src="./assets/images/pg.png" alt="">
                           <button class="center-button">PG Admission 2024-25</button>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
      <script src='assets/js/script_check.js'></script>
</body>

</html>