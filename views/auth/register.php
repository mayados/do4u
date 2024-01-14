<?php if(!empty($_POST)){
    var_dump($_POST);
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" href="../public/img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
</head>
<body >
 
    <main>
        <section class="container-fluid container-f-inscription d-flex d-flex-column">
            <div class="container insscription-container justify-content-center align-items-center">
                <div class="row align-items-center align-content-center">
                    <div class="col-12 col-lg-6">
                        <h2 class="h2-pc fw-bold pt-3">Créez un compte</h2>
                            <b><p class="fw-bold">Entrez les détails de votre compte ci-dessous ou <a href="connexion.php" class="link"> connectez-vous</a></p></b>
                            <div class="form-inscription">
                                <p class="p-orange text-center fw-bolder">Vous êtes ?</p>
                                <ul class="nav nav-pills nav-conx justify-content-around pb-4 pt-2 text-center" id="pills-tab" role="tablist">
                                    <li class="nav-item nav-item-conx" role="presentation">
                                      <a class="nav-link active tab-button" tabindex="0" type="button" id="pills-particulier-tab" data-bs-toggle="pill" data-bs-target="#pills-particulier" role="tab" aria-controls="pills-particulier" aria-selected="true">Particulier</a>
                                    </li>
                                    <li class="nav-item nav-item-conx"  role="presentation">
                                      <a class="nav-link tab-button" tabindex="0" type="button" id="pills-entrepreneur-tab" data-bs-toggle="pill" data-bs-target="#pills-entrepreneur" role="tab" aria-controls="pills-entrepreneur" aria-selected="false">Auto-entrepreneur</a>
                                    </li>
                                    <li class="nav-item nav-item-conx"  role="presentation">
                                      <a class="nav-link tab-button" tabindex="0" type="button" id="pills-entreprise-tab" data-bs-toggle="pill" data-bs-target="#pills-entreprise" role="tab" aria-controls="pills-entreprise" aria-selected="false">Entreprise</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                <form action="" method="POST" class="tab-pane fade show active" id="pills-particulier" role="tabpanel" aria-labelledby="pills-particulier-tab" >
                                       <div class="form-row mb-0">
                                            <div class=" col form-group">
                                                <label for="email">Nom <span class="text-danger">*</span></label>
                                                <input type="text" name="nomUtilisateur" class="form-control" id="nom" placeholder="Votre nom">
                                              </div>
                                              <div class="col form-group">
                                                  <label for="nom">Prénom <span class="text-danger">*</span></label>
                                                  <input type="text" name="prenomUtilisateur" class="form-control" id="prenom" placeholder="Votre prénom">
                                            </div>
                                        </div>
                                        <div class="form-row mb-0">
                                            <div class=" col form-group">
                                            <label for="email"> email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Votre Adresse mail">
                                                
                                            </div>
                                            <div class="col form-group">
                                                <label for="ville"> ville <span class="text-danger">*</span></label>
                                                <input type="ville" name="villeUtilisateur" class="form-control" id="ville" placeholder="Votre Adresse ville">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pseudo">codePostal <span class="text-muted"></span> <span class="text-danger">*</span></label>
                                            <input type="text" name="codePostalUtilisateur" class="form-control" id="adresse" placeholder="Votre adresse">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="motPass">Mot de passe <span class="text-danger">*</span></label>
                                            <input type="password" name="motDePasse" class="form-control" id="motPass" placeholder="Votre mot de pass">
                                          </div>
                                        <div class="form-group mt-3">
                                          <label for="motPass">Confirmer mot de passe <span class="text-danger">*</span></label>
                                          <input type="password" name="motDePasseConfirm" class="form-control" id="motPass" placeholder="Confirmez votre mot de passe">
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                En cochant cette case vous acceptez les <a class="link" href="cgu.php" target="_blank" rel="noopener noreferrer"> conditions générales d'utilisation </a> et la <a class="link" href="politique.php" target="_blank" rel="noopener noreferrer"    > politique de confidentialité</a> du site
                                            </label>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit " class="btn button-primary-regular">Je m'inscris</button>
                                        </div>
                                    </form>
                                    <form class="tab-pane fade show" id="pills-entrepreneur" role="tabpanel" aria-labelledby="pills-entrepreneur-tab">
                                        <div class="form-row mb-0">
                                            <div class=" col form-group">
                                                <label for="nom">Nom<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                                              </div>
                                              <div class="col form-group">
                                                  <label for="prenom">Prénom <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
                                            </div>
                                        </div>
                                        <div class="form-row mb-0">
                                            <div class=" col form-group">
                                                <label for="pseudo">Pseudo <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pseudo" placeholder="Votre pseudo">
                                            </div>
                                            <div class="col form-group">
                                                <label for="email">Adresse mail <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="Votre Adresse mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pseudo">Adresse <span class="text-muted">(ville + code postal)</span> <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="adresse" placeholder="Votre adresse">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="motPass">Mot de passe <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="motPass" placeholder="Votre mot de pass">
                                          </div>
                                        <div class="form-group mt-3">
                                          <label for="motPass">Confirmer mot de passe <span class="text-danger">*</span></label>
                                          <input type="password" class="form-control" id="motPass" placeholder="Confirmez votre mot de passe">
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                En cochant cette case vous acceptez les <a class="link" href="cgu.php" target="_blank" rel="noopener noreferrer"> conditions générales d'utilisation </a> et la <a class="link" href="politique.php" target="_blank" rel="noopener noreferrer"> politique de confidentialité</a> du site
                                            </label>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit " class="btn button-primary-regular">Je m'inscris</button>
                                        </div>
                                    </form action="inscription.php" methode="post">
                                    <form class="tab-pane fade show" id="pills-entreprise" role="tabpanel" aria-labelledby="pills-entreprise-tab">
                                        <div class="form-row mb-0">
                                            <div class=" col form-group">
                                                <label for="nom">Nom de l'entreprise <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nom" placeholder="Nom de entreprise">
                                              </div>
                                              <div class="col form-group">
                                                  <label for="prenom">Prénom contact <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control" id="prenom" placeholder="Prénom contact">
                                            </div>
                                        </div>
                                        <div class="form-row mb-0">
                                            <div class=" col form-group">
                                                <label for="pseudo">Nom de famille contact  <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pseudo" placeholder="Votre pseudo">
                                            </div>
                                            <div class="col form-group">
                                                <label for="email">Adresse mail <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="Votre Adresse mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pseudo">Adresse <span class="text-muted">(ville + code postal)</span> <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="adresse" placeholder="Votre adresse">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="motPass">Mot de passe <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="motPass" placeholder="Votre mot de pass">
                                          </div>
                                        <div class="form-group mt-3">
                                          <label for="motPass">Confirmer mot de passe <span class="text-danger">*</span></label>
                                          <input type="password" class="form-control" id="motPass" placeholder="Confirmez votre mot de passe">
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                En cochant cette case vous acceptez les <a class="link" href="cgu.php" target="_blank" rel="noopener noreferrer"> conditions générales d'utilisation </a> et la <a class="link" href="politique.php" target="_blank" rel="noopener noreferrer"> politique de confidentialité</a> du site
                                            </label>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit " class="btn button-primary-regular">Je m'inscris</button>
                                        </div>
                                    </form>       
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="../public/assets/img/Img_inscription/img1.png" class="img-fluid img-ins" alt="">
                    </div>
                </div>
            </div>
        </section>
        
    </main>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>