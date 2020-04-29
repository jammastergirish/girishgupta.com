<?php

if ($_SERVER['SERVER_PORT']!=8888) // If I were on 8888, I'd be testing.
{
  if (substr($_SERVER['HTTP_HOST'],0,3)!="www")
  {
    header("Location: https://www.".$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI]);
  }
}
else
{
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

//20180403 https://training.kalzumeus.com/newsletters/archive/lifecycle_emails_3?__s=masu37fnwbjxsp1ycikb, https://betterexplained.com/articles/how-to-optimize-your-site-with-gzip-compression/, http://www.gidblog.com/compress-your-web-page/, http://www.gidnetwork.com/tools/gzip-test.php
ob_start( 'ob_gzhandler' );
/*
https://www.w3schools.com/howto/tryhow_css_fullpage_demo.htm
*/

$iPod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");

if($iPad||$iPhone||$iPod||$android)
{
    $mobile = true;
}
else
{
    $mobile = false;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Girish Gupta</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/9057082ce7.js" crossorigin="anonymous"></script>
<style>
body, html
{
  height: 100%;
  margin: 0;
  background: url("IMG_4169.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.bgimg
{
  position: relative;
  opacity: 1;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.caption
{
  position: absolute;
  left: 0;
  top: 7%;
  width: 100%;
  text-align: center;
  color: #000;
}

a
{
  color: white;
  text-decoration: none;
}

a:hover
{
  color: #ff8c00;
}

.button
{
  background-color:#000000;
  padding:10px;
  display: table; 
  margin: auto;
  letter-spacing: 5px;
  color:#FFFFFF;
  font-family: Raleway;
  font-size: 20px;
}

.text
{
  <?php
    if($mobile)
    {
      $width = 80;
    }
    else
    {
      $width = 50;
    }
  ?>
  background-color:#000000;
  padding:10px;
  width:<?php echo $width; ?>%;
  margin:auto;
  line-height:1.7em;
  color:#FFFFFF;
  font-family: Raleway;
  font-size: 15px;
}

input
{
        box-shadow: none;
        background-color: #000000;
        font-family: Raleway;
        color: #FFFFFF;
        outline: 0;
        border-style: solid;
        border-width: 0 0 2px;
        border-color: #FFFFFF;
        border-radius: 0px;
        font-size: 15px;
        
/*    https://stackoverflow.com/questions/37465458/input-text-field-with-only-bottom-border/37465540*/
}

input:focus
{
  border-color: red;
}

.ActualButton
{
  border-width: 2px;
  color: #FFFFFF;
}

</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151140334-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151140334-1');
</script>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
</head>
<body bgcolor=#000000>

<div class="bgimg">
  <div class="caption"><br><br>

    <div><div class="button"><font size=7 style="letter-spacing: 10px;"><b>GIRISH GUPTA</b></font></div></div>

    <br><br>

    <img src="headshot.jpg" width=200 height=200 alt="Girish Gupta" border=5><br><br>

    <div class="text">

     Girish has a Master’s in physics, two decades of full-stack programming experience and his investigative and multimedia reporting from Venezuela, the Americas and Middle East has been published by everyone from <i>Reuters</i> to the <i>New Yorker</i>. Girish has created and worked with startups, advised government and enjoys playing music, keeping fit and always satiating his curiosity.
      <br><br>
      <hr width=80%>
      <br>
      Girish started teaching himself to code at eleven, writing software and building relational database-driven websites from scratch. A popular music site he created in his early teens, in 2000, was listed by <i>MTV</i> as one of the then nascent web’s top twenty sources. 
      <br><br>
      <img src="mgo.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      In physics, which he studied at Cambridge and Manchester, his interests lie broadly on the theoretical end of the spectrum—spacetime, quantum mechanics and particles. His Master’s project, the abstract to which was published, was a simulation of the heart to investigate atrial fibrillation.
      <br><br>
      <img src="mphys.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      As a reporter, Girish was based primarily in Venezuela for nearly a decade where he produced groundbreaking investigations, covered daily clashes and reported on a humanitarian crisis. From Caracas, he traveled the world and reported across TV, photos, radio and text.
      <br><br>
      <img src="journalism.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      As a freelancer, he investigated diamond smuggling from illegal jungle mines in the Amazon, Glencore profiting from a Colombian paramilitary massacre and, separately, the killing of wildcat gold miners there. He worked with some 40 news outlets and stood up to sloppy reporting, slow payments and unpaid work in his own industry. As a Senior Correspondent at <i>Reuters</i> covering Venezuela, Girish demonstrated—always with documents—high-level, multi-billion-dollar government corruption, exaggeration of electoral results and that the country’s Chief Justice was arrested on suspicion of murder.  
      <br><br>
      <img src="journalism2.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      Girish has lived and worked across the world, often in its most hostile environments. As well as Venezuela, he reported from Egypt, Iraq, Afghanistan, Cuba, Colombia, Mexico and many others.
      <br><br>
      He went beyond traditional media by bringing math and code to journalism, automating story-writing and, wanting to properly understand the roots of Venezuela’s humanitarian crisis, creating a web and mobile app to provide thousands of people with live and historic data on the country’s dire economy. 
      <br><br>
      <img src="venecon.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      He expanded the <i>Venezuela Econ</i> platform into a company, <i>Data Drum</i>, which offered automated, clean and elegant data—intersecting data science, journalism and finance.
      <br><br>
      <video width=80% controls muted style="border-width: 5px;   border-color: black;   border-style: solid;">
        <source src="https://www.datadrum.com/vid.mp4" type="video/mp4">
      </video>
      <br><br>
      In Mumbai, he created a data science unit at a public policy non-profit think/do tank. It worked with government in applying computing to everything from urban planning and mapping to data governance and the COVID-19 response.
      <br><br>
      Now, as Chief Technology Officer at Stanford-conceived, France-based startup <i>Deepnews.ai</i>, Girish is building a machine learning algorithm to help identify quality journalism.
      
    </div>

    <br><br>

    <div><div class="button"><a href="mailto:girish@girishgupta.com">E-Mail</a><br><font size=2>(<a href="PublicKey.asc">PGP Key</a>)</font></div></div>

    <br><br>

    <?php
    if($mobile)
    {
      $width = 80;
    }
    else
    {
      $width = 25;
    }
    ?>

    <div class=text style="width:<?php echo $width; ?>%;"><div class=button>Subscribe</div>Receive the occasional update about what I'm up to.</font>
    <br><br>
    <!-- Begin Mailchimp Signup Form -->
    <div id="mc_embed_signup">
    <form action="https://girish-gupta.us6.list-manage.com/subscribe/post?u=8deb0bb0f3dfe79212f9cef9c&amp;id=10a1d2bb93" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email" size=40>
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8deb0bb0f3dfe79212f9cef9c_10a1d2bb93" tabindex="-1" value=""></div>
        <br><br>
        <input type="submit" value="Sign Up!" name="subscribe" id="mc-embedded-subscribe" class="ActualButton">
    </form>
    </div>
    <!--End mc_embed_signup-->
    </div>

    <br><br>

    <div><div class="button"><a href="https://journalism.girishgupta.com/">Journalism</a></div></div>
    <br>
    <div><div class="button"><a href="https://photos.girishgupta.com/">Photography</a></div></div>
    <br>
    <div><div class="button"><a href="https://science.girishgupta.com/">Science</a></div></div>

    <br><br>

    <div><div class="button"><a href="https://www.deepnews.ai/">Deepnews.ai</a></div></div>
    <div><div class="button"><a href="https://www.datadrum.com/">Data Drum</a></div></div>
    <div><div class="button"><a href="https://www.globalotp.com/">GlobalOTP</a></div></div>
    <div><div class="button"><a href="https://www.readwise2roam.com/">Readwise2Roam</a></div></div>
    <div><div class="button"><a href="https://www.accordingtodocuments.com/">According to Documents</a></div></div>
    <div><div class="button"><a href="https://www.musicgoeson.com/">Music Goes On</a></div></div>

    <br><br>

    <div><div class="button"><a href="https://www.girishgupta.com/CV.pdf">CV</a></div></div>

    <br><br>

    <div><div class="button"><font size=6><a href="https://www.linkedin.com/in/girish-gupta"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.twitter.com/jammastergirish/"><i class="fab fa-twitter"></i></a> <a href="https://www.instagram.com/jammastergirish/"><i class="fab fa-instagram"></i></a> <a href="https://vimeo.com/jammastergirish"><i class="fab fa-vimeo-v"></i></a> <a href="https://soundcloud.com/jammastergirish"><i class="fab fa-soundcloud"></i></a> <a href="https://github.com/jammastergirish"><i class="fab fa-github"></i></a> <a href="https://angel.co/girishgupta"><i class="fab fa-angellist"></i></a></font></div></div>

    <br><br>

    <div><div class="text"><font size=2>Photo: Oil wells set ablaze by Islamic State before fleeing Qayyara, Iraq. January, 2017.</font></div></div>


  </div>
</div>


</body>
</html>
