<?php
require 'conn.php';

$prenom = isset($_GET['name']) ? $_GET['name'] : NULL;
$nom = isset($_GET['lastName']) ? $_GET['lastName'] : NULL;
$genre = isset($_GET['genre']) ? $_GET['genre'] :NULL; 
$email = isset($_GET['email']) ? $_GET['email'] :NULL;
$country = isset($_GET['country']) ? $_GET['country'] :NULL;
$subject = isset($_GET['subject']) ? $_GET['subject'] :NULL;
$message = isset($_GET['message']) ? $_GET['message'] :NULL;



?>