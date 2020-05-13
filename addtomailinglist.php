<?php

require_once 'vendor/autoload.php';

use \DrewM\MailChimp\MailChimp; //https://github.com/drewm/mailchimp-api

if (isset($_POST['email']))
{
    require_once("mailchimpapikey.php"); // Contains nothing but $MailChimpAPIKey = "...";
    $MailChimp = new MailChimp($MailChimpAPIKey);
    $MailChimp->post("lists/10a1d2bb93/members", [
        'email_address' => $_POST['email'],
        'status'        => 'subscribed',
    ]);

    echo "You're subscribed! Thank you.";
}

?>