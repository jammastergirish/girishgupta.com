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

  #putenv("GOOGLE_APPLICATION_CREDENTIALS=girishgupta-f33157326a57.json"); // https://cloud.google.com/storage/docs/reference/libraries#client-libraries-usage-php
}

switch (@parse_url($_SERVER['REQUEST_URI'])['path'])
{
    case '/':
        require 'main.php';
        break;
      case '/addtomailinglist.php':
        require 'addtomailinglist.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}

?>
