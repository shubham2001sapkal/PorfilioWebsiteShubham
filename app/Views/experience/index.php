<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id='favicon' rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/x-png">

    <title><?= esc($title) ?></title>
</head>
<body oncontextmenu="return false">

<!-- navbar starts -->
<header>
        <a href="<?= base_url() ?>" class="logo"><i class="fab fa-node-js"></i> Shubham</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a href="<?= base_url() ?>#home">Home</a></li>
            <li><a href="<?= base_url() ?>#about">About</a></li>
            <li><a href="<?= base_url() ?>#skills">Skills</a></li>
            <li><a href="<?= base_url() ?>#education">Education</a></li>
            <li><a href="<?= base_url() ?>#work">Work</a></li>
            <li><a class="active" href="<?= base_url() ?>#experience">Experience</a></li>
            <li><a href="<?= base_url() ?>#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience</h2>
  <div class="quote">
      <span>every experience in your life is being orchestrated to teach you something you need to know to move forward.</span>
  </div>

  <div class="timeline">

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Knoxed Infotech Pvt. Ltd.</h2>
        </div>
        <div class="desc">
            <h3>IT Junior Programmer</h3>
            <p>November 2024 – Present, Pune, India</p>
            <p>• Developing and maintaining web applications using PHP and MySQL</p>
            <p>• Working with AJAX, jQuery, and JavaScript to build dynamic user interfaces</p>
            <p>• Creating and consuming REST APIs for third-party integrations</p>
            <p>• Managing code versions with Git and Bitbucket</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Knoxed Infotech</h2>
        </div>
        <div class="desc">
            <h3>IT Intern</h3>
            <p>May 2024 – November 2024</p>
            <p>• Learned and applied concepts of webhooks, XML, AJAX, and JavaScript</p>
            <p>• Built small-scale web modules to understand real-time development workflows</p>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Bajaj Finserv</h2>
        </div>
        <div class="desc">
            <h3>AEM Author (CMS)</h3>
            <p>March 2024 – April 2024</p>
            <p>• Worked as an AEM Author gaining insight into CMS platforms and content publishing workflows</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Self Employed</h2>
        </div>
        <div class="desc">
            <h3>Full Stack Developer</h3>
            <p>Oct 2019 - present</p>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>G-Soft Solution</h2>
        </div>
        <div class="desc">
            <h3>Java Full Stack Developer | Internship</h3>
            <p>Jan 2023 - Sept 2023</p>
        </div>
      </div>
    </div>

  <div class="morebtn">
    <a href="<?= base_url() ?>#experience" class="btn">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Home</span>
    </a>
  </div>

</div>
</section>
<!-- experience section ends -->

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

  <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/shubham-sapkal-3963aa200?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="fab fa-linkedin" aria-label="LinkedIn">Shubham Sapkal</a></h1>

</section>
<!-- footer section ends -->

<!-- scroll top btn -->
<a href="#experience" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="<?= base_url('assets/js/script.js') ?>"></script>

</body>
</html>

