
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
    // header("location:contact.php");
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
            <p class="card-text"><b>Prenom</b> : <?php echo htmlspecialchars($prenom); ?></p>
            <p class="card-text"><b>Nom</b> : <?php echo htmlspecialchars($nom); ?></p>
            <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($email); ?></p>
            <p class="card-text"><b>Country</b> : <?php echo htmlspecialchars($country); ?></p>
            <p class="card-text"><b>Message</b> : <?php echo $message; ?></p>
        </div>
    <?php 
    
    include_once('variables.php');
    
    $add_client = $bd->prepare("INSERT INTO clients (prenom, nom,  gender, email, country, subject, message) VALUES (:prenom, :nom,  :gender, :email, :country, :subject, :message)");
    $add_client->execute([
    'prenom' => $prenom,
    'nom' => $nom,
    'gender' => $genre,
    'email' => $email, 
    'country' => $country,
    'subject' => $subject,
    'message' => $message,
    ]);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo '<p>La client a bien été ajoutée</p>';
    }
    $add_client->closeCursor();     
    ?>
    <h1>Liste des clients</h1>
    <?php
   //réalisation requete
    $result = $bd->query('SELECT * FROM clients');
  ?>
    <table class="table">
      <!-- Afficher la liste des clients -->
      <thead>
          <tr>
            <th> Prenom</th>
            <th> Nom</th>
            <th> Gender</th>
            <th> E-mail</th>
            <th> Country</th>
            <th> Subject</th>
            <th> Message</th>
          </tr>
        </thead>
        <tbody>
        <?php while ($donnees = $result->fetch()) : ?>
        <tr>
          <td><?php echo ($donnees['prenom']);?></a></td> 
          <td><?php echo ($donnees['nom']); ?></td>
          <td ><?php echo ($donnees['gender']); ?></td>
          <td ><?php echo ($donnees['email']); ?></td>
          <td class="text-center"><?php echo ($donnees['country']); ?></td>
          <td class="text-center"><?php echo ($donnees['subject']); ?></td>
          <td class="text-center"><?php echo ($donnees['message']); ?></td>
          
        </tr>
        <?php endwhile;
        $result->closeCursor();
        
        ?>
        </tbody>
    </table>
</body>
</html>

