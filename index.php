<?php include 'mailer.php'; ?>

<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Words, Pictures, Code, Chris Butler Digital">
    <meta property="og:title" content="Chris Butler Digital" />
    <meta property="og:description" content="Words, Pictures, Code, Chris Butler Digital"/>
    <meta property="og:image" content="https://chrisbutlerdigital/img/mirrorbldg.jpg"/>
    <meta property="og:type " content="website"/>
    <meta property="og:url" content="https://chrisbutlerdigital.com" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Words, Pictures, Code, Chris Butler Digital" />
    <meta name="twitter:description" content="Words, Pictures, Code, Chris Butler Digital" />
    <meta name="twitter:image" content="https://chrisbutlerdigital/img/mirrorbldg.jpg" />
    <title>Chris Butler Digital: Words. Pictures. Code.</title>
    <script async src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



    <link rel="stylesheet" href="css/style.css?v-23">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24155518-22"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-24155518-22');
    </script>




</head>

<body>

<main>    
<header class="header">
    <div class="header__text-box">
        <h1 class="header__title">
            <span class="sub-title">Words.<br/>Pictures.<br/>Code.
            </span>
            <span class="main-title">Chris Butler <span class="grey">Digital</span></span>
        </h1>
    </div>

</header>

<section class="hero">
    <div class="hero__text-box">
        <h3 class="hero__title">
            Featured: The King of Panhandlers
        </h3>

        <a href="https://www.chrisbutler.us/homeless-in-boise/" class="btn btn--white">View Project &rarr;</a>

    </div>
     
</section>


<section class="projects">
    <h3 class="projects__title">Projects</h3>

    <div class="projects__row">
      <div class="projects__box">
          <div class="myBG">
              <img src="img/fsa.jpg" alt="The FSA projects" class="img-fluid">
          </div>
        <div class="info">
            <h3><a href="https://www.chrisbutler.us/50-cents-per-pound/">50 Cents Per Pound &rarr;</a></h3>
        </div>
     </div>


    <div class="projects__box">
        <div class="myBG">
            <img src="img/womenschallenge.jpg" alt="The Women's Challenge" class="img-fluid">
        </div>
        <div class="info">
            <h3><a href="https://www.challenge.chrisbutler.us">Women's Challenge &rarr;</a></h3>
        </div>
    </div>


    <div class="projects__box">
        <div class="myBG">
            <img src="img/tidybowlfull2.jpg" alt="photography" class="img-fluid">
        </div>
        <div class="info">
            <h3><a href="https://www.tidybowldays.com">Tidy Bowl Days &rarr;</a></h3>
        </div>
    </div>







</div>

    <!-- end row -->

</section>

<section class="about">
    <div class="about__holder">
        <img src="img/cb_circle.jpg" alt="Chris Butler about section" class="about__img">
        <h3 class="about__title">About Me</h3>
    </div>
    <p class="about__text">Words, Pictures, and Code. It’s a pretty straightforward title – and it also happens to be a few things I’m good at.</p>

    <p class="about__text">I’ve been working with these three elements in one form or another for most of my career. Starting as a photographer and
multimedia developer at the <a href="https://www.idahostatesman.com">IdahoStatesman.com</a>. It was there that I learned how to blend pictures with the power of
words. I shot plenty of forest fires and breaking news, but I also covered feature stories, sporting events, and how to
shoot a genuine <a href="https://www.chrisbutler.us/portraits">portrait</a>.</p> 

<p class="about__text">More recently, I was a Web Editor at <a href="https://www.bodybuilding.com">Bodybuilding.com</a> both companies are located in beautiful Boise, Idaho.
At bodybuilding.com, I learned the professional aspects of web development and how working on an enterprise-level
eCommerce site takes, not only smart people, but also teamwork.</p> 

<p class="about__text">The projects, shown above, display some or all of my talents.</p>

<p class="about__text">I’m capable of building websites from scratch (pen and paper) and utilizing a CMS such as <a href="https://www.wordpress.org">WordPress</a>. I love creating
sites that are functional, inclusive, and viewable across all platforms and fully accessible to everyone.</p>
<p class="about__text">If your company or organization is looking for someone good with Words, Pictures, and Code – I would like to hear from you.</p>

</section>




<section class="contact">
    
    <div class="contact__form">
        <h2 class="contact__title">Contact Me</h2>
        <form method="POST" action="">
    
            <div id="error"><?php echo $successMsg ?><?php echo $error ?><?php echo $captchaFail ?></div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Your Name" required>
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            <label for="email">Your Email</label>
            <input type="email" name="email" placeholder="Your Email" required>
            <label for="message">What's up?</label>
            <textarea name="message" placeholder="your message" id="txt-box" required></textarea>
    
            <div class="g-recaptcha" data-sitekey="6LduqLwZAAAAACVVFn8Nh8zZyoUH6rKa23N3m7UZ"></div>
            <button type="submit" name="submit" value="Send Message" class="btn--bottom btn--black myemail">Send</button>

        </form>
    
    </div>

</section>

</main>


<footer class="footer">
    <div class="footer__socials">
    <a class="btn  btn-social" href="https://twitter.com/_chrisbutler" target="_blank"><i
            class="fab fa-fw fa-twitter"></i></a><a class="btn btn-social"
        href="https://www.linkedin.com/in/chris-butler-86003571/" target="_blank"><i
            class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-social"
        href="https://www.instagram.com/csbphotos/" target="_blank"><i class="fab fa-fw fa-instagram"></i></a><a
        class="btn btn-social" href="https://www.strava.com/athletes/2346580" target="_blank"><i
            class="fab fa-fw fa-strava"></i></a>
            <a class="btn  btn-social" href="https://www.github.com/csbutlers"><i class="fab fa-fw fa-github" aria-hidden="true"></i></a>
 </div>



<?php
$imagesContent = "All Images and Content";
$myName = "Chris Butler";
$site = '<a href="https://www.chrisbutlerdigital.com">Chris Butler Digital</a>';
?>



</footer>

<small><?php echo $imagesContent ?> © <?php echo date('Y'); ?> - <?php echo $myName; ?></small>



</body> 
 
</html>

 