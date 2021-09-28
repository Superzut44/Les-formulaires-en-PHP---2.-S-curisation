<?php
$validator_form =true;
$userName = $firstName = $message = $topic = $email = "";

if (isset($_POST['user_firstname'])) $user_firstname = $_POST['user_firstname'];
if (isset($_POST['user_name'])) $user_name = $_POST['user_name'];
if (isset($_POST['user_email'])) $user_email = $_POST['user_email'];
if (isset($_POST['user_phone'])) $user_phone = $_POST['user_phone'];
if (isset($_POST['user_topic'])) $user_topic = $_POST['user_topic'];       
if (isset($_POST['user_message'])) $user_message = $_POST['user_message'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = test_input($_POST["user_name"]);
  $firstName = test_input($_POST["user_firstname"]);
  $message = test_input($_POST["user_message"]);
  $topic = test_input($_POST["user_topic"]);
  $email = test_input($_POST["user_email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        $validator_form = false;
    }
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ( $validator_form ) {
    echo "Merci $userName $firstName de nous avoir contacté à propos de $topic.<br>Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $_POST[user_phone] dans les plus brefs délais pour traiter votre demande : $message";
}
?> 