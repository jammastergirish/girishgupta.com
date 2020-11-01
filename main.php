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
      I’ve got a background in physics, two decades of full-stack programming experience and my investigative and multimedia reporting from Venezuela, the Americas and Middle East has been published by everyone from Reuters to the New Yorker. I have used strong analytical skills to do everything from solve differential equations and architect neural networks to unearth corruption and stay safe in hostile environments. I also enjoy playing music, photography, keeping fit and satiating my curiosity.
      <br><br>
      Please get in touch if you're keen to chat. I'm always open to meeting enthusiastic and interesting new people.
     
     </div>

     <br><br>

     <div><div class="button"><a href="mailto:girish@girishgupta.com">Email</a></div></div>
<br><br>

<div class=text>

<div class="button">Photos</div>

<br>

<div class="row_images"> 
  <div class="column_images">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497821667577-NU2ES45E4QF3NJEV3O50/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_2125.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497821675383-AA1L3Z6SQECLYUY68H3Y/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_4126.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1515507309961-N6388YCQ6FVGD9TKUQKU/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_8371.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1513415814727-T77TDCQKRT3K5WNTY12V/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/2.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822679474-B1IG5ADXWDQEY062VZN7/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_1776.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1515601706008-73VS88S7R9DQO0FQW134/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_2976.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1596093994584-49TB67WRV5QX3G56G716/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_8529.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822349893-8ZW0SJKQMZ6NJXA50I3I/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_1675.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497813094123-LSL3OVI6K6Q1A6DX6X4F/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_0602.jpg?format=2500w" style="width:100%">
  </div>
  <div class="column_images">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497984360703-R1HBK50JUMBTTKXGUFLQ/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/993-1.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497984418058-ST0WR4LFGNKM4OBXN0EN/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/993-9.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497813958750-CGUMQ05BQTIQNGZ946V5/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_9927.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822676988-SKH73E8NFW7Y23M2NMLY/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_0806.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1510312060545-60GKKFR3J6C6E6YWCQLD/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_8636.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1511105075353-G160ZK78BJQ08XR9YSHB/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_9040.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1511853982975-DSZ0KVAASBVKEVZPWOAF/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_0101.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1557120440710-I245DPHNLAB9PBADFDJX/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/IMG_8933.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1498075957046-U1PMRV52YUZF6Y6D3DAX/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_2109.jpg?format=2500w" style="width:100%">
  </div>  
  <div class="column_images">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822702271-4YCPQP59DF63EETC6BBD/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_4599.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822712746-FZH4UDFFCO3RMFPJUIVL/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_5388.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822717828-WG5F85XVEU84FTTK0LOY/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/IMG_7404.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497823174027-KAV786CTCR8DPPQ0KQWN/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_0739.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497823186176-YLB1SNMJUXY8EGRAZA9Q/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_8006.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497825192848-ZMXG4IP0XSVI60RRIARB/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_0325.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497824249956-B9A517HARB5AG6SNPLXH/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/667-1.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1498069848932-JS118FXSAZXHJQ9RSY6P/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/809-1.jpg?format=2500w" style="width:100%">
    <img src="https://images.squarespace-cdn.com/content/v1/5946a804ff7c505f81a7bbe9/1497822937529-P1F75893E0HO06XKAJ77/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/IMG_7010.jpg?format=2500w" style="width:100%">
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

<div><div class="button"><a href="https://journalism.girishgupta.com/">Journalism</a></div></div>
<!-- <br> -->
<!-- <div><div class="button"><a href="https://photos.girishgupta.com/">Photography</a></div></div> -->
<!-- <br> -->
<!-- <div><div class="button"><a href="https://science.girishgupta.com/">Science</a></div></div> -->

<br><br>

     <div class="text">

    <div class=button>About me</div>
<br>

      I grew up in Slough, a town just outside London scoffed at by anyone who knows it for being both the setting for <a href="https://www.youtube.com/watch?v=1mlevv9oFuA">The Office</a> and the subject of a 1937 <a href="http://www-cdr.stanford.edu/intuition/Slough.html">poem</a> which opens, "Come friendly bombs and fall on Slough! It isn’t fit for humans now." We lived in Chalvey, the part of Slough that people from Slough look down upon.
      <br><br>
      I started teaching myself to code at eleven, assembling computers, writing <a href="https://github.com/jammastergirish/BPMCounter">software</a> and building database-driven <a href="https://storage.googleapis.com/girishnet/index.htm">websites</a> from scratch. A <a href="https://www.musicgoeson.com/">popular music site</a> I created in my early teens was listed by MTV as one of the then nascent web’s top twenty sources. I received scores of free CDs from record companies while unwittingly honing skills as a programmer, reporter, writer and entrepreneur. 
      <br><br>
      <img src="mgo.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      I was the first person in my family to go to university and began studying Natural Sciences at Cambridge though, unexcited by the medieval city's social life, moved to Manchester where I focused on Physics. My primary interests lie in spacetime, quantum mechanics and particles. However, my <a href="https://github.com/jammastergirish/MPhysAtrialFibrillation">Master's project</a>, the abstract to which was <a href="https://www.physoc.org/abstracts/role-of-the-pulmonary-vein-in-the-genesis-of-atrial-fibrillation-insights-from-a-biophysically-detailed-computational-model/">published</a>, was more practical: a simulation of the heart to investigate atrial fibrillation.
      <br><br>
      <img src="mphys.png" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      Outside physics, I ran the news section of the <a href="https://journalism.girishgupta.com/article.php?id=74">student</a> <a href="https://www.theguardian.com/student-media-awards-2010/winners-runners-up-2010">newspaper</a>, learned drill and discipline in the Officers' Training Corps and went backpacking around South America—leading to a drug-filled <a href="https://journalism.girishgupta.com/sp.php?id=6">Bolivian prison</a> and a rare flesh-eating bug, <a href="https://www.youtube.com/watch?v=Ywqtf5hX3S8">leishmaniasis</a>, which required three weeks on an <a href="https://journalism.girishgupta.com/sp.php?id=10">intravenuous drip</a> of sodium stibogluconate.
      <br><br>
      After graduating, I took a one-way flight to become a foreign correspondent. I was based primarily in <a href="https://journalism.girishgupta.com/by.php?by=country&what=venezuela">Venezuela</a> for nearly a decade where I produced groundbreaking investigations, covered <a href="https://journalism.girishgupta.com/sp.php?id=858">daily</a> <a href="https://journalism.girishgupta.com/sp.php?id=831">clashes</a> and reported on a <a href="https://journalism.girishgupta.com/sp.php?id=976">humanitarian</a> <a href="https://journalism.girishgupta.com/sp.php?id=855">crisis</a>. From Caracas, I traveled the world—often its most hostile environments including <a href="https://journalism.girishgupta.com/by.php?by=country&what=colombia">Colombia</a>,  <a href="https://journalism.girishgupta.com/by.php?by=country&what=egypt">Egypt</a>, <a href="https://journalism.girishgupta.com/by.php?by=country&what=iraq">Iraq</a>, <a href="https://journalism.girishgupta.com/by.php?by=country&what=afghanistan">Afghanistan</a>, <a href="https://journalism.girishgupta.com/by.php?by=country&what=cuba">Cuba</a> and <a href="https://journalism.girishgupta.com/by.php?by=country&what=mexico">Mexico</a>.
      <br><br>
      <img src="journalism.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      As a freelancer, I covered the cancer, election and death of Hugo Chávez, the messy transition to Nicolás Maduro’s rule and the crisis that followed, including daily violent unrest. I also investigated <a href="https://journalism.girishgupta.com/sp.php?id=595">diamond smuggling</a> from illegal jungle mines in the Amazon, <a href="https://journalism.girishgupta.com/article.php?id=577">Glencore</a> profiting from a Colombian paramilitary massacre and, separately, the killing of wildcat gold miners there. For five years, I ran a sustainable business in a notoriously difficult industry, traveling all over the Americas and Middle East. I worked with some 40 news outlets—across text, photos, radio and television—and stood up to sloppy reporting, slow payments and <a href="https://journalism.girishgupta.com/article.php?id=240">unpaid work</a>.
      <br><br>
      As a Senior Correspondent at Reuters covering Venezuela, I demonstrated—always with documents—multi-billion-dollar government oil <a href="https://journalism.girishgupta.com/sp.php?id=977">corruption</a>, military <a href="https://journalism.girishgupta.com/sp.php?id=1008">missile inventories</a>, details of <a href="https://journalism.girishgupta.com/article.php?id=1017">soldiers</a> arrested for treason and rebellion, fabrication of <a href="https://journalism.girishgupta.com/sp.php?id=2010">electoral results</a> and that the country’s Chief Justice was <a href="https://journalism.girishgupta.com/sp.php?id=1024">arrested on suspicion of murder</a>. My investigative work on Venezuela took me to the United States and all over Latin America. I also continued to cover the country's ever-worsening hyperinflation, social decay, food riots and protests. During my final few months there, I produced the in-country elements of a <a href="https://journalism.girishgupta.com/sp.php?id=2020">documentary</a> on its downfall.
      <br><br>
      <img src="journalism2.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
      <br><br>
      Alongside my reporting, I <a href="https://journalism.girishgupta.com/sp.php?id=2011">wrote web and mobile applications</a> to provide live and historic data on Venezuela's dire economy. They were used by thousands of people including politicians, investors and journalists for everything from live black market exchange rate fluctuations to details of the brisk money-printing that fueled the world's highest inflation. I also wrote code to automate data acquisition, simple story-writing and other mind-numbing tasks that pull resources from reporting.
      <br><br>
      <img src="venecon.jpg" width="80%" style="border-width: 5px;   border-color: black;   border-style: solid;">
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