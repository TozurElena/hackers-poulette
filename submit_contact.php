
<?php
include_once('variables.php');

if (
    (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    || (!isset($message) || empty($message))
    || (!isset($prenom) || empty($prenom))
    || (!isset($nom) || empty($nom))
    || (!isset($genre) || empty($genre))
    || (!isset($country) || empty($country))
    )

{
	echo('Il faut  remplir tous les champs (sauf subject)  pour soumettre le formulaire.');
    echo "<br><a href='contact.php'>Formulaire Contact</a>";
    return;
} 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sibmit_contact</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('template/header.php'); ?>
        <h1 class="mt-5">Message bien reçu !</h1>
        <div class="card-body mb-5">
            <h5 class="card-title mb-3">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($_GET['email']); ?></p>
            <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
        </div>
           

</body>
</html>

