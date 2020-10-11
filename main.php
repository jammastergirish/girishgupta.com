<?php

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
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<script src="https://kit.fontawesome.com/9057082ce7.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<script type="text/javascript">
function AddToMailingList(email){
  $.post("addtomailinglist.php", {email: email} , function(data){
            $("#mailinglistresult").html(data);
          });}
</script>
</head>
<body bgcolor=#000000>

<div class="bgimg">

  <div class="caption"><br><br>

    <div><div class="button"><font size=7 style="letter-spacing: 10px;"><b>GIRISH GUPTA</b></font></div></div>

    <br><br>

    <img src="headshot.jpg" width=200 height=200 alt="Girish Gupta" border=5><br><br>

    <div class="text">

      Hi, I'm Girish! I'm from England and am currently bouncing around Europe before moving to the United States in 2021.
      <br><br>
      I’ve got a background in physics, two decades of full-stack programming experience and my investigative and multimedia reporting from Venezuela, the Americas and Middle East has been published by everyone from Reuters to the New Yorker. My writing, photography, video and audio have led front pages and news broadcasts—and my investigations have hit the highest rungs of corrupt government and corporations. I’m now CTO of an artificial intelligence startup using machine learning to identify quality journalism. I have created products and startups, enjoy playing music, photography, keeping fit and, ultimately, satiating my curiosity.
      <br><br>
      Please get in touch if you're keen to chat. I'm always open to meeting enthusiastic and interesting new people.
      <br><br>
      <hr width=80%>
      <br>
      I started teaching myself to code at eleven, assembling computers, writing software and building database-driven websites from scratch. A popular music site I created in my early teens, in 2000, was listed by MTV as one of the then nascent web’s top twenty sources. 
      <br><br>
      <img src="mgo.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      I was the first person in my family to go to university and began studying math, physics, chemistry and geology at Cambridge though, not excited by the medieval city’s social life, I moved on to Manchester where I focused on physics. My primary interests lie broadly on the theoretical end of the spectrum—spacetime, quantum mechanics and particles—though my Master’s project, the abstract to which was published, was more practical: a simulation of the heart to investigate atrial fibrillation.
      <br><br>
      <img src="mphys.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      I then bought a one-way ticket to Latin America to become a foreign correspondent. As a reporter, I was based primarily in Venezuela for nearly a decade where I produced groundbreaking investigations, covered daily clashes and reported on a humanitarian crisis. From Caracas, I traveled the world—often its most hostile environments: Colombia, Egypt, Iraq, Afghanistan, Cuba, Mexico and many others.
      <br><br>
      <img src="journalism.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      As a freelancer, I investigated diamond smuggling from illegal jungle mines in the Amazon, Glencore profiting from a Colombian paramilitary massacre and, separately, the killing of wildcat gold miners there. I worked with some 40 news outlets and stood up to sloppy reporting, slow payments and unpaid work in my own industry—as my career began, not just at its height. As a Senior Correspondent at Reuters covering Venezuela, I demonstrated—always with documents—high-level, multi-billion-dollar government corruption, military missile inventories, exaggeration of electoral results and that the country’s Chief Justice was arrested on suspicion of murder. 
      <br><br>
      <img src="journalism2.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      I went beyond traditional media by bringing math and code to journalism, automating data acquisition, simple story-writing and other mind-numbing tasks that pull resources from actual reporting. And, wanting to properly understand the roots of Venezuela’s humanitarian crisis, I created software to provide thousands of people with live and historic data on the country’s dire economy.
      <br><br>
      <img src="venecon.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      I left Reuters and expanded the Venezuela Econ platform into a company, Data Drum, which offered automated, clean and elegant global macroeconomic data. 
      <br><br>
      <video width=80% controls muted style="border-width: 5px;   border-color: black;   border-style: solid;">
        <source src="https://www.datadrum.com/vid.mp4" type="video/mp4">
      </video>
      <br><br>
      I spent just over a year in Mumbai where I created a data science unit at a public policy non-profit that advised government in applying computing to everything from urban planning and mapping to data governance and the COVID-19 response.
      <br><br>
      Now, as Chief Technology Officer at Stanford-conceived startup Deepnews.ai, I’m building a machine learning algorithm to identify quality journalism at scale.
      
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

    <div class=text style="width:<?php echo $width; ?>%;"><div class=button>Subscribe</div>
    <br>
      <input type="email" value="" id="email" placeholder="Email" size=40>
        <br><br>
        <input type="submit" value="Sign Up!" name="subscribe" class="ActualButton" onClick=AddToMailingList(document.getElementById("email").value)>
    <br><br><div id="mailinglistresult"></div>
    </div>

    <br><br>

    <div><div class="button"><a href="https://journalism.girishgupta.com/">Journalism</a></div></div>
    <br>
    <div><div class="button"><a href="https://photos.girishgupta.com/">Photography</a></div></div>
    <br>
    <div><div class="button"><a href="https://science.girishgupta.com/">Science</a></div></div>

    <br><br>

    <div><div class="button"><a href="https://www.deepnews.ai/">Deepnews</a></div></div>
    <div><div class="button"><a href="https://www.accordingtodocuments.com/">According to Documents</a></div></div>
    <div><div class="button"><a href="https://www.readwise2roam.com/">Readwise2Roam</a></div></div>
    <div><div class="button"><a href="https://www.globalotp.com/">GlobalOTP</a></div></div>
    <!-- <div><div class="button"><a href="https://www.freelanceforeigncorrespondent.com/">Freelance Foreign Correspondent</a></div></div> -->
    <div><div class="button"><a href="https://www.datadrum.com/">Data Drum</a></div></div>
    <div><div class="button"><a href="https://www.musicgoeson.com/">Music Goes On</a></div></div>
    <div><div class="button"><a href="https://storage.googleapis.com/girishnet/index.htm">First Website</a></div></div>
    

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
