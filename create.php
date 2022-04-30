<?php
require 'conn.php';
include_once('variables.php');


$sql = "INSERT INTO clients (prenom, nom,  gender, email, country, subject, message) 
  VALUES ('$prenom', '$nom', '$genre', '$email', $country, '$subject', '$message', )";

$dbstatement = $db->prepare($sql);
$dbstatement->execute();

header('Location:contact.php');
?>