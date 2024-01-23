<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de paramètres du compte utilisateur">
    <title>Paramètres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/sass/main.css">
</head>
<body>
    <main id="main-parametres">
        <section>
            <div class="container-fluid bannerParametres">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h1 id="title-parametres">Page de paramètres</h1>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="d-flex flex-lg-row gap-3 align-items-center" id="profile-block">
                            <div class="d-flex flex-column">
                                <div id="photo-parametres">
                                    <figure>
                                        <img src="assets/img/woman_face.jpg" alt="Photo d'un utilisateur">
                                    </figure>
                                </div>  
                                 
                            </div>
                            <h2 id="username-parametres">Lola</h2>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
        <section class="container-fluid d-flex d-flex-column">
            <div class="container parametres-content">
            <?php if ($users): ?>
                <div class="row ">
                    <div class="col-lg-3 col-12">
                        <div id="choose-photo">
                            <button type="button" class="btn btn-link" id="choose-photo">Choisir une photo</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <form action="">
                            <div class="form-row mb-0">
                                <div class="col form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="<?php echo $users->getEmail() ?>" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center align-content-center">
                    <div class="col-lg-6 col-12">
                            <div class="form-parametres">
                                <form> 
                                    <div class="form-row mb-0">
                                        <div class="col form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" id="nom" placeholder="<?php echo $users->getNomUtilisateur() ?>" disabled>
                                          </div>
                                          <div class="col form-group">
                                              <label for="prenom">Prénom</label>
                                              <input type="text" class="form-control" id="prenom" placeholder="<?php echo $users->getPrenomUtilisateur() ?>" disabled>
                                        </div>
                                    </div>
                                    <!-- form to update user data -->
                                    <form action="<?php echo $actionUrl ?>" method="POST">
                                        <input type="text" name="action" value="update" hidden>
                                        <div class="form-group">
                                            <label for="adresse">Adresse (ville + code postal)</label>
                                            <input type="text" class="form-control" id="adresse" name="villeUtilisateur" placeholder="<?php echo $users->getVilleUtilisateur() ?>">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="bio">Bio</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="bio" name="description"><?php echo $users->getDescription() ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row gap-3 mt-4">
                                            <button type="button" class="btn btn-parametres">Annuler</button>
                                            <button type="submit" class="btn btn-parametres">Enregistrer</button>
                                        </div>
                                    </form>
                                    <div class="line-divider mt-4"></div>
                                    <div class="mt-4">
                                      <a href="#" class="text-black">Changer mot de passe</a>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="text-danger">Supprimer mon compte</a>
                                    </div>
                                </form> 
                            </div>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>