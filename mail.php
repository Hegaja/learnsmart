<?php

$nom = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$cell = !empty($_POST['cell']) ? $_POST['cell'] : NULL;
$from = !empty($_POST['email']) ? $_POST['email'] : NULL;
$msg = !empty($_POST['message']) ? $_POST['message'] : NULL;

$headers = 'From: info@learnsmarttutoring.ca';
//  echo "$msg" . "$nom" . "$from";

if(empty($nom) || empty($from) || empty($msg) || empty($cell))
{
     echo "Mail couldn't be send, a field is empty";
}
elseif(mail('info@learnsmarttutoring.ca', "The user:  $nom", " $nom write: $msg \n\n\n Contact email: $from\n\n\n Cellphone: $cell", "$headers"))
{
     header('location: https://learnsmarttutoring.ca/formsent/formsent.html');
        die;
}
else
{
    echo 'mail not sent, unexpected error';
}
// }
?>