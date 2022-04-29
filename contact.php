<!-- contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackers Poulette - Formulaire de Contact</title>
   
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="d-flex flex-column min-vh-100 body_font">
  <div class="container">

    <?php include_once('template/header.php'); ?>
        <div class="row flex mt-5">
            <div class="col-4 text-center">
                <h1 class="text-wrap">Contactez nous</h1>
                <img src="assets/img/hackers-poulette-logo.png" class="img-fluid" alt="Logo">
                <h2>Merci!</h2>
            </div>
            <div class="col-8 mt-5">
                <form action="submit_contact.php" method="GET">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control"  name="name" placeholder="Prenom">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control"  name="lastName" placeholder="Nom">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                    <label for="message" class="form-label">Choissisez votre gender: </label>
                    </div>
                    <div class="col-12 col-md-8  mb-3">
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="genre" id="genreF" value="F">
                        <label class="form-check-label" for="genreF">F</label>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="genre" id="genreM" value="M">
                        <label class="form-check-label" for="genreM">M</label>
                    </div>
                    </div>
                </div>         

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                    <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control"  name="country" placeholder="Country">
                </div>
                <div class="mb-3">
                    <select class="form-select form-select-sm" aria-label="Other">
                        <option selected>Subject</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" placeholder="Exprimez vous" name="message"></textarea>
                </div>
                <button type="submit" class="mon_btn btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
        
        
        <br/>
    </div>

  <?php include_once('template/footer.php'); ?>
</body>
</html>
