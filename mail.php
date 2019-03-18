<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 
    
    $errorEmpty = false;
    $errorEmail = false;

    if (empty($name) || empty($company) || empty($phone) || empty($email) || empty($subject) || empty($message)){
        echo "<span class='msgerror'>Veuillez remplir tous les champs. </span> ";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class='msgerror'>Veuillez rentrer une adresse email valide. </span> ";
        $errorEmail = true;
    }
    elseif(preg_match("/([^0-9+])/",$phone)) {
        echo "<span class='msgerror'>Numéro de téléphone non conforme </span> ";
    }

    else{
        echo "<span class='msgsuccess'>Votre formulaire à bien été envoyé. </span> ";
    }
}
else{
    echo "<span class='msgerror'>Il y a eu une erreur lors de l'envoi de votre formulaire .</span> ";
}




?>

