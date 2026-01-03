<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/404.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/x-png">
    <title><?= esc($title ?? 'Got Lost! Page Not Found') ?></title>
</head>
<body oncontextmenu="return false">

<!-- navbar starts -->
<header>
        <a href="<?= base_url() ?>" class="logo"><i class="fab fa-swift"></i></i> Shubham</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a href="<?= base_url() ?>#home">Home</a></li>
            <li><a href="<?= base_url() ?>#about">About</a></li>
            <li><a href="<?= base_url() ?>#skills">Skills</a></li>
            <li><a href="<?= base_url() ?>#education">Education</a></li>
            <li><a href="<?= base_url() ?>#work">Work</a></li>
            <li><a href="<?= base_url() ?>#experience">Experience</a></li>
            <li><a href="<?= base_url() ?>#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->

<!-- 404 section start -->
<section class="page_404">
        <div class="container">
          <div class="wrapper">
            <h1 class="text-center ">404</h1>
          </div>
          
          <div class="msg">
          <h3>Looks like you're lost</h3>
          <p>The page you are looking for is not available!</p>
           
          <div class="backbtn">
            <a href="<?= base_url() ?>" class="btn">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Home</span>
          </a>
          </div>

          </div>
        </div>
</section>
<!-- 404 section end -->

<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Shubham's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Keep Rising 🚀. Connect with me over live chat!</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="<?= base_url() ?>#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="<?= base_url() ?>#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="<?= base_url() ?>#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="<?= base_url() ?>#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="<?= base_url() ?>#work"><i class="fas fa-chevron-circle-right"></i> work</a>
          <a href="<?= base_url() ?>#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+91 8459097464</p>
          <p> <i class="fas fa-envelope"></i>sapkalshubham450@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Pune, India-411046</p>
          <div class="share">

            <a href="https://www.linkedin.com/in/shubham-sapkal-3963aa200?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
            <a href="https://github.com/" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
            <a href="mailto:sapkalshubham450@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
            <a href="https://x.com/Shubham34366496?t=uGr6fzcUxkiwH4BGvh7Qmg&s=09" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
            <a href="https://t.me/shubham2001918" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
        </div>
    </div>
</div>

<h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/shubham-sapkal-3963aa200?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">Shubham Sapkal</a></h1>


</section>
<!-- footer section ends -->

<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->

<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="<?= base_url('assets/js/404.js') ?>"></script>


</body>
</html>

