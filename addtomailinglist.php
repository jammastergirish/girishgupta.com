<?php

require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;
$db = new FirestoreClient();

if (isset($_POST['email']))
{
    $data = [
        'date' => date('Y-m-d'),
        'email' => $_POST['email']
    ];
    $db->collection('emails')->add($data);

    echo "You're subscribed! Thank you.";
}
else
{
    echo "Error";
}

?>