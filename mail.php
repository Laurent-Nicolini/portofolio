<?php
$errors = [];

if(!array_key_exists('name',$_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}

if(!array_key_exists('email',$_POST) || $_POST['email'] == ''){
    $errors['email'] = "Vous n'avez pas renseigné votre mail";
}

if(!array_key_exists('subject',$_POST) || $_POST['subject'] == ''){
    $errors['subject'] = "Vous n'avez pas renseigné le sujet";
}

if(!array_key_exists('message',$_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: contact.php');
} 
else {
    
$subjectmail = $_POST['subject'];
mail('contact@devshivan.com',"Contact DevShivan.com: $subjectmail",$_POST['message'],$_POST['name'],$_POST['email']);
session_start();
$_SESSION['success'] = "Votre message a bien été envoyé ! Merci de m'avoir contacté, je vous répondrai dans les plus brefs délais.";
header('Location: contact.php');
}