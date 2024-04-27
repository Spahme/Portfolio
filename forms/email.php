<?php


if(isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
  
  // Récupération des données du formulaire
  $the_name = $_POST['name'];
  $the_email = $_POST['email'];
  $the_subject = $_POST['subject'];
  $the_message = $_POST['message'];

  
  $to = 'sashadaza0902@gmail.com';
  $subject = "Contact portfolio de" . $the_name;
  $message = "Email de contact PortFolio " . $the_subject . "pour".
  $the_message . "à contacter" . $the_email;

  $headers = 'From: ' . $the_email . "\r\n" .
    'Reply-To: ' . $the_email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if(mail($to, $subject, $message, $headers)) {
    echo "Email envoyé avec succès";
  } else {
    echo "Échec de l'envoi de l'email";
  }
} else {
  // Displaying an error message if required fields are missing
  echo "All fields are required.";
}
?>