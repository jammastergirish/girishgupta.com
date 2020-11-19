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
<script src="lazysizes.min.js" async=""></script>
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

.text a
{
  color: #FED998;
}

.text a:hover
{
  color: #ff8c00;
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

/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_image_grid_responsive */

* {
  box-sizing: border-box;
}

.row_images {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

.column_images {
  -ms-flex: 33%; /* IE10 */
  flex: 33%;
  max-width: 33%;
  padding: 0 4px;
}

.column_images img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column_images {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column_images {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}



/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_image_overlay_title */

.image_container {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.75); /* Black see-through */
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 15px;
  padding: 20px;
  text-align: center;
  font-family: Raleway;
  font-size: 15px;
  font-weight: bold;
}

.image_container:hover .overlay {
  opacity: 1;
}

/* https://www.w3schools.com/howto/howto_css_text_selection.asp */
::-moz-selection { /* Code for Firefox */
  color: white;
  background: #ff8c00;
}

::selection {
  color: white;
  background: #ff8c00;
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

      Hi, I'm Girish! I'm from England and am currently in Europe before moving to the United States next year.
      <br><br>
      I’ve got a background in physics, two decades of full-stack programming experience and my investigative and multimedia reporting from Venezuela, the Americas and Middle East has been published by everyone from Reuters to the New Yorker. I have used strong analytical skills to do everything from create products and architect neural networks to unearth corruption and stay safe in hostile environments. I also enjoy playing music, photography, keeping fit and satiating my curiosity.
      <br><br>
      Please get in touch if you're keen to chat. I'm always open to meeting enthusiastic and interesting new people.
     
     </div>

     <br><br>

     <div><div class="button"><a href="mailto:girish@girishgupta.com">Email Me</a></div></div>

<br><br>

<div class=text>

<div class="button">Photos</div>

<?php

function Image($file, $caption)
{
  echo "<div class=\"image_container\" style=\"width:100%\"><img data-src=\"".$file."\" alt=\"".$caption."\" class=\"lazyload\"><div class=\"overlay\">".$caption."</div></div>";
}

?>

<br>

<div class="row_images"> 
  <div class="column_images">
    <?php Image('IMG_2125.jpg', 'Santa Elena, Venezuela'); ?>
    <?php Image('IMG_4126.jpg', 'Santa Elena, Venezuela'); ?>
    <?php Image('IMG_8371.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_1776.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_2976.jpg', 'Abu Dhabi, UAE'); ?>
    <?php Image('IMG_8529.jpg', 'Montreux, Switzerland'); ?>
    <?php Image('IMG_1675.jpg', 'Petare, Venezuela'); ?>
    <?php Image('IMG_0602.jpg', 'Angel Falls, Venezuela'); ?>
  </div>
  <div class="column_images">
    <?php Image('993-1.jpg', 'Qayyarah, Iraq'); ?>
    <?php Image('993-9.jpg', 'Qayyarah, Iraq'); ?>
    <?php Image('IMG_9927.jpg', 'Zaatari, Jordan'); ?>
    <?php Image('IMG_0806.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_8636.jpg', 'Kabul, Afghanistan'); ?>
    <?php Image('IMG_9040.jpg', 'Kabul, Afghanistan'); ?>
    <?php Image('IMG_8933.jpg', '23 de enero, Venezuela'); ?>
    <?php Image('IMG_2109.jpg', 'Yellowstone, USA'); ?>
  </div>  
  <div class="column_images">
    <?php Image('IMG_4599.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_5388.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_7404.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_0739.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('IMG_8006.jpg', 'Caracas, Venezuela'); ?>
    <?php Image('667-1.jpg', 'Venezuela'); ?>
    <?php Image('809-1.jpg', 'Georgetown, Guyana'); ?>
    <?php Image('IMG_0325.jpg', 'Caracas, Venezuela'); ?>
  </div>
</div>

<br>

<a href="https://photos.girishgupta.com/" target=_blank>More...</a>

</div>

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
  <input type="email" value="" id="email" placeholder="Your email" style="width:80%;">
    <br><br>
    <input type="submit" value="Sign Up!" name="subscribe" class="ActualButton" onClick=AddToMailingList(document.getElementById("email").value)>
<br><br><div id="mailinglistresult"></div>
</div>

<br><br>

     <div class="text">

    <div class=button>About me</div>
<br>

      I grew up in Slough, a town just outside London scoffed at by anyone who knows it for being both the setting for <a href="https://www.youtube.com/watch?v=1mlevv9oFuA">The Office</a> and the subject of a 1937 <a href="http://www-cdr.stanford.edu/intuition/Slough.html">poem</a> which opens, "Come friendly bombs and fall on Slough! It isn’t fit for humans now." We lived in Chalvey, the part of Slough that people from Slough look down upon.
      <br><br>
      I started teaching myself to code at eleven, assembling computers, writing <a href="https://github.com/jammastergirish/BPMCounter">software</a> and building database-driven <a href="https://storage.googleapis.com/girishnet/index.htm">websites</a> from scratch. A <a href="https://www.musicgoeson.com/">popular music site</a> I created in my early teens was listed by MTV as one of the then nascent web’s top twenty sources. I received scores of free CDs from record companies while unwittingly honing skills as a programmer, reporter, writer and entrepreneur. 
      <br><br>
      <img data-src="mgo.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;" class="lazyload">
      <br><br>
      I was the first person in my family to go to university and began studying Natural Sciences at Cambridge though, unexcited by the medieval city's social life, moved to Manchester where I focused on Physics. My primary interests lie in spacetime, quantum mechanics and particles. However, my <a href="https://github.com/jammastergirish/MPhysAtrialFibrillation">Master's project</a>, the abstract to which was <a href="https://www.physoc.org/abstracts/role-of-the-pulmonary-vein-in-the-genesis-of-atrial-fibrillation-insights-from-a-biophysically-detailed-computational-model/">published</a>, was more practical: a simulation of the heart to investigate atrial fibrillation.
      <br><br>
      <img data-src="mphys.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;" class="lazyload">
      <br><br>
      Outside physics, I ran the news section of the <a href="https://journalism.girishgupta.com/article.php?id=74">student</a> <a href="https://www.theguardian.com/student-media-awards-2010/winners-runners-up-2010">newspaper</a>, learned drill and discipline in the Officers' Training Corps and went backpacking around South America—leading to a drug-filled <a href="https://journalism.girishgupta.com/sp.php?id=6">Bolivian prison</a> and a rare flesh-eating bug, <a href="https://www.youtube.com/watch?v=Ywqtf5hX3S8">leishmaniasis</a>, which required three weeks on an <a href="https://journalism.girishgupta.com/sp.php?id=10">intravenuous drip</a> of sodium stibogluconate.
      <br><br>
      After graduating, I took a one-way flight to become a foreign correspondent. I was based primarily in <a href="https://journalism.girishgupta.com/by.php?by=country&what=venezuela">Venezuela</a> for nearly a decade where I produced groundbreaking investigations, covered <a href="https://journalism.girishgupta.com/sp.php?id=858">daily</a> <a href="https://journalism.girishgupta.com/sp.php?id=831">clashes</a> and reported on a <a href="https://journalism.girishgupta.com/sp.php?id=976">humanitarian</a> <a href="https://journalism.girishgupta.com/sp.php?id=855">crisis</a>. From Caracas, I traveled the world—often its most hostile environments including <a href="https://journalism.girishgupta.com/by.php?by=country&what=colombia">Colombia</a>,  <a href="https://journalism.girishgupta.com/by.php?by=country&what=egypt">Egypt</a>, <a href="https://journalism.girishgupta.com/by.php?by=country&what=iraq">Iraq</a>, <a href="https://journalism.girishgupta.com/by.php?by=country&what=afghanistan">Afghanistan</a>, <a href="https://journalism.girishgupta.com/by.php?by=country&what=cuba">Cuba</a> and <a href="https://journalism.girishgupta.com/by.php?by=country&what=mexico">Mexico</a>.
      <br><br>
      <img data-src="journalism.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;" class="lazyload">
      <br><br>
      As a freelancer, I covered the cancer, election and death of Hugo Chávez, the messy transition to Nicolás Maduro’s rule and the crisis that followed, including daily violent unrest. I also investigated <a href="https://journalism.girishgupta.com/sp.php?id=595">diamond smuggling</a> from illegal jungle mines in the Amazon, <a href="https://journalism.girishgupta.com/article.php?id=577">Glencore</a> profiting from a Colombian paramilitary massacre and, separately, the killing of wildcat gold miners there. I covered drug killings in Juárez, anti-government protest in Tahrir Square, Syrian refugees at Zaatari and Hezbollah attacks on southern Beirut. For five years, I ran a sustainable business in a notoriously difficult industry. Across text, photos, radio and television, I worked with some 40 news outlets and stood up to sloppy reporting, slow payments and <a href="https://journalism.girishgupta.com/article.php?id=240">unpaid work</a>.
      <br><br>
      As a Senior Correspondent at Reuters covering Venezuela, I demonstrated—always with documents—multi-billion-dollar government oil <a href="https://journalism.girishgupta.com/sp.php?id=977">corruption</a>, military <a href="https://journalism.girishgupta.com/sp.php?id=1008">missile inventories</a>, details of <a href="https://journalism.girishgupta.com/article.php?id=1017">soldiers</a> arrested for treason and rebellion, fabrication of <a href="https://journalism.girishgupta.com/sp.php?id=2010">electoral results</a> and that the country’s Chief Justice was <a href="https://journalism.girishgupta.com/sp.php?id=1024">arrested on suspicion of murder</a>. My investigative work on Venezuela took me to the United States and all over Latin America. I also continued to cover the country's ever-worsening hyperinflation, social decay, food riots and protests. During my final few months there, I produced the in-country elements of a <a href="https://journalism.girishgupta.com/sp.php?id=2020">documentary</a> on its downfall. Outside Venezuela, I spent time in Kabul and covered Islamic State's final days in Mosul.
      <br><br>
      <img data-src="journalism2.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;" class="lazyload">
      <br><br>
      Alongside my reporting, I <a href="https://journalism.girishgupta.com/sp.php?id=2011">wrote web, mobile and watch applications</a> to provide live and historic data on Venezuela's dire economy. I wanted to understand the country's crisis from first principles and was shocked to see that companies such as Reuters and Bloomberg relied on staff pressing refresh on websites to get hold of data. My software was used by thousands of people including politicians, investors and journalists for everything from live black market exchange rate fluctuations to details of the brisk money-printing that fueled the world's highest inflation. I also wrote code to automate data acquisition, simple story-writing and other mind-numbing tasks that pull resources from reporting.
      <br><br>
      <img data-src="venecon.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;" class="lazyload">
      <br><br>
      However, I left journalism and expanded the <a href="https://journalism.girishgupta.com/sp.php?id=2018">Venezuela Econ</a> platform into a company, <a href="https://www.datadrum.com">Data Drum</a>, which offered automated, clean and elegant global macroeconomic data for half a dozen countries. I worked tirelessly on a meticulous product but never quite found its market. 
      <br><br>
      <video width=80% controls muted style="border-width: 5px;   border-color: black;   border-style: solid;">
        <source src="https://www.datadrum.com/vid.mp4" type="video/mp4">
      </video>
      <br><br>
      I then spent just over a year in Mumbai where I built a data science unit at a public policy <a href="https://www.idfcinstitute.org">non-profit</a>. I also created smaller-scale products of my own—<a href="https://www.globalotp.com">GlobalOTP</a>, <a href="https://www.readwise2roam.com">Readwise2Roam</a> and <a href="https://www.accordingtodocuments.com">According To Documents</a>. Now, as Chief Technology Officer at Stanford-conceived, Google-funded startup <a href="https://www.deepnews.ai">Deepnews.ai</a>, I’m building a machine learning algorithm to identify quality journalism at scale.


    </div>

    <br><br>

<div class=text style="text-align:left;">
<div class="button">Journalism</div>
<br>

<?php

function Story($url, $image, $headline, $publisher, $date)
{
  global $mobile;
  $brs = "";
  $imagewidth="100";
  if (!$mobile)
  {
    $brs = "<br><br>";
    $imagewidth = "150";
  }
  echo "<a href=\"".$url."\"><img data-src=\"".$image."\" width=".$imagewidth." height=".$imagewidth." align=left style=\"margin:10px\" class=\"lazyload\">".$brs.$headline."</a><br><font color=grey>".$publisher." | ".$date."</font><br clear=\"left\">";
}

?>

<?php echo Story('https://journalism.girishgupta.com/sp.php?id=2020', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/2020.jpg', 'The Venezuela Crisis: State of Disaster', 'RealVision', 'December 2018'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=1024', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/1024.jpg', 'Special Report: How a defrocked judge became the chief enforcer for Maduro\'s Venezuela', 'Reuters', 'November 2017'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=2010', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/2010.jpg', 'Exclusive: Venezuelan vote data casts doubt on turnout at Sunday poll', 'Reuters', 'August 2017'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=1017', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/1017.jpg', 'Exclusive: At least 123 Venezuelan soldiers detained since protests - documents', 'Reuters', 'July 2017'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=1008', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/1008.jpg', 'Exclusive: Venezuela holds 5,000 Russian surface-to-air MANPADS missiles', 'Reuters', 'May 2017'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=995', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/995.jpg', 'Bomb classes and gun counts: trauma of Mosul children under Islamic State', 'Reuters', 'January 2017'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=993', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/993.jpg', 'Iraqi sheep, locals, environment suffer Islamic State oil fires', 'Reuters', 'Jamuary 2017'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=977', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/977.jpg', 'Special Report: In Venezuela\'s murky oil industry, the deal that went too far', 'Reuters', 'July 2016'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=976', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/976.jpg', '\'We want food!\' Looting and riots rock Venezuela daily', 'Reuters', 'June 2016'); ?>
<br>
<?php echo Story('https://journalism.girishgupta.com/sp.php?id=899', 'https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/899.jpg', 'Could Low Oil Prices End Venezuela\'s Revolution?', 'New Yorker', 'November 2014'); ?>
<br>

<CENTER><a href="https://journalism.girishgupta.com/" target=_blank>More...</a></CENTER>

</div>

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