
<?php
if (
    (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_GET['message']) || empty($_GET['message']))
    || (!isset($_GET['name']) || empty($_GET['name']))
    || (!isset($_GET['lastName']) || empty($_GET['lastName']))
    )
{
	echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
} 
// Testons si le fishier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
    // testons si le fishier n'est pas trop gros
    if ($_FILES['screenshot']['size'] <= 1000000) {
        
    }
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
        <?php include_once('header.php'); ?>
        <h1 class="mt-5">Message bien reçu !</h1>
        <div class="card-body mb-5">
            <h5 class="card-title mb-3">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($_GET['email']); ?></p>
            <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
        </div>
           

</body>
</html>

