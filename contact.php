<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$admin_mail = "contact.prplerecord@gmail.com";
$message = $_POST['message'];
$formcontent = "Bonjour $name \n Nous avons bien reçu votre demande qui est la suivante: \n $subject : $message \n Nous vous répondrons au plus vite";
$formadmin = "Nouvelle demande de : \n[$name] \nSujet : $subject \nMessage : $message";
$admin_subject = "[Nouvelle Demande] $subject";
$title = "[PrpleRecord] $subject";
$mailheader = "From: $admin_mail \r\n";
$adminheader = "From: $email \r\n";
mail($email, $title, $formcontent, $mailheader);
mail($admin_mail, $admin_subject, $formadmin, $adminheader);

$success = mail('example@example.com', 'My Subject', $message);
if (!$success) {
    header('Location: contact_fail.html');
}
else {
	header('Location: contact_success.html');
}


?>