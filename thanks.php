<?php
$validator_form =true;
// define variables and set to empty values
$userName = $firstName = $message = $topic = $email = "";

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
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ( $validator_form ) {
    echo "Merci $userName $firstName de nous avoir contacté à propos de $topic.<br>Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $_POST[user_phone] dans les plus brefs délais pour traiter votre demande : $message";
}
?>