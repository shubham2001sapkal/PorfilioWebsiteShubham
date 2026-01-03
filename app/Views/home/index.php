<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Shubham Sapkal, portfolio, Shubham, full stack dev, personal portfolio ,portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to Shubham's Portfolio. Full-Stack Web Developer " />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/x-png">
    <title><?= esc($title) ?></title>
</head>
<body>

<!-- pre loader -->
<!-- <div class="loader-container">
  <img draggable="false" src="<?= base_url('assets/images/preloader.gif') ?>" alt="">
</div> -->

<!-- navbar starts -->
<header>
        <a href="<?= base_url() ?>" class="logo"><i class="fab fa-swift"></i> Shubham</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm Shubham <span>Sapkal</span></h2>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/shubham-sapkal-3963aa200?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://x.com/Shubham34366496?t=uGr6fzcUxkiwH4BGvh7Qmg&s=09" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me/shubham2001918" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
          <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/shubh__am18?igsh=MWVlajlnOTRyYTAxbQ=="><i class="fab fa-instagram" target="_blank"></i></a></li>
        </ul>
      </div>
    </div> 
<div class="image">
    <img draggable="false" class="tilt" src="<?= base_url('assets/images/profile.png') ?>" alt="">
</div>
</section>
<!-- hero section ends -->

<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="<?= base_url('assets/images/profile2.png') ?>" alt="">
    </div>
    <div class="content">
        <h3>I'm Shubham</h3>
        <span class="tag">Web Developer</span>
        
        <p>I am a Full-Stack developer based in Pune, India. 
          I am an Information Technology undergraduate from SPPU.
          I am very passionate about improving my coding skills & developing applications & websites.
          I build WebApps and Websites. </p>
        
        <div class="box-container">
            <div class="box">
              <p><span> email : </span> sapkalshubham450@gmail.com</p>
              <p><span> place : </span> Pune, India - 411046</p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="https://docs.google.com/document/d/1pM-kXX-Wf3jhY7JuR2F0XcbqtVHolUXO/edit?pli=1" target="_blank" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
          <div class="row" id="skillsContainer">
              <?php if (!empty($skills)): ?>
                  <?php foreach ($skills as $skill): ?>
                      <div class="bar">
                          <div class="info">
                              <img src="<?= esc($skill['icon']) ?>" alt="<?= esc($skill['name']) ?>" />
                              <span><?= esc($skill['name']) ?></span>
                          </div>
                      </div>
                  <?php endforeach; ?>
              <?php endif; ?>
      </div>
</div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <img draggable="false" src="<?= base_url('assets/images/educat/college.jpg') ?>" alt="">
        </div>
        <div class="content">
        <h3>Bachelor of Computer Science(B.sc CS)</h3>
        <p>Sinhgad College Of Sciene Ambegaon Bk Pune | SPPU</p>
        <h4>2019-2022</h4>
        </div>
    </div>

    <div class="box">
      <div class="image">
      <img draggable="false" src="<?= base_url('assets/images/educat/school.jpg') ?>" alt="">
      </div>
      <div class="content">
      <h3>HSC Science </h3>
      <p>M.R.M HighSchool and Secondary HighSchool Manmad 423104</p>
      <h4>2017-2019 | Completed</h4>
      </div>
    </div>
    
    <div class="box">
      <div class="image">
      <img draggable="false" src="<?= base_url('assets/images/educat/school.jpg') ?>" alt="">
      </div>
      <div class="content">
      <h3> Ssc </h3>
      <p>M.R.M HighSchool and Secondary HighSchool Manmad 423104</p>
      <h4>2016-2017 | Completed</h4>
      </div>
    </div>
</div>
</section>
<!-- education section ends -->


<!-- work project section starts -->
<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>

  <div class="box-container">

    <?php if (!empty($projects)): ?>
        <?php foreach ($projects as $project): ?>
            <div class="box tilt">
                <img draggable="false" src="<?= base_url('assets/images/projects/' . esc($project['image']) . '.png') ?>" alt="<?= esc($project['name']) ?>" />
                <div class="content">
                    <div class="tag">
                        <h3><?= esc($project['name']) ?></h3>
                    </div>
                    <div class="desc">
                        <p><?= esc($project['desc']) ?></p>
                        <div class="btns">
                            <a href="<?= esc($project['links']['view']) ?>" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
                            <a href="<?= esc($project['links']['code']) ?>" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<div class="viewall">
  <a href="<?= base_url('projects') ?>" class="btn"><span>View All</span>
    <i class="fas fa-arrow-right"></i>
</a>
</div>

</section>
<!-- work project section ends -->

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

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

  <div class="morebtn">
    <a href="<?= base_url('experience') ?>" class="btn"><span>View All</span>
      <i class="fas fa-arrow-right"></i>
  </a>
  </div>

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="<?= base_url('assets/images/contact1.png') ?>" alt="">
      </div>
    <form id="contact-form">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Message" name="message" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
  </div>
  </div>
</section>
<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Shubham's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Keep Rising 🚀. Connect with me over live chat!</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
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


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="<?= base_url('assets/js/particles.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="<?= base_url('assets/js/script.js') ?>"></script>

</body>
</html>

