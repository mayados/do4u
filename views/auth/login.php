<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="icon" href="../public/img/logo_do4u.svg">
    <link rel="icon" href="../public/img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
</head>
<body>

    <main class="container-fluid d-flex d-flex-column connexion">
        <div class="container">
            <div class="row d-flex align-items-center align-content-center pb-5">
                <div class="col-12 col-lg-5 order-2 order-lg-1 ">
                    <!-- col-1-connexion float-center -->
                    <img class="mx-auto img-fluid img-conx d-block " src="../public/assets/img/Img_page_de_connexion/personne.png" alt="" />
                    <p>Votre confidentialité et votre sécurité sont nos principales priorités !<br />
                        Consultez notre <a class="link" href="politique.php">politique de confidentialité</a><br />
                        Besoin d’aide ? <a class="link" href="./contact.php">contactez-nous</a><br />
                    </p>
                </div>
                <div class="offset-lg-2 col-12 col-lg-5 order-1 order-lg-2 pb-5">
                    <!-- col-2-connexion -->
                    <div class="form-connexion">
                    <form action="" method="POST">
                            <h3 class="fw-bolder">Bienvenue !</h3>
                            <p>Connectez-vous ou <a class="link" href="Inscription.php">créez un compte</a></p>
                            <div class="form-group mt-3">
                            
                                <label for="adresseMail">Adresse mail</label>
                                
                                <input type="text" name= "email" class="form-control" id="adresseMail" placeholder="mattsmith@mail.com">
                            </div>
                            <div class="form-group mt-3">
                                <label for="motPass">Mot de passe</label>
                                <input type="password" name = "motDePasse" class="form-control" id="motPass" placeholder="Votre mot de pass">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn button-primary-regular">Connecter</button>
                            </div>
                        </form>
                        <p class="pt-3"><a class="link" href="#" data-toggle="modal" data-target="#forgotPasswordModal">Mot de passe oublié</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Mot de passe oublié</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 0;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="fa fa-close" data-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                    <input type="email" class="form-control small" id="forgotPasswordEmail" placeholder="Votre adresse mail">
                </div>
                <div class="modal-footer align-item-center">
                    <button type="button" class="btn button-primary-regular" onclick="sendResetLink()">Envoyer le lien de réinitialisation</button>
                </div>
            </div>
        </div>
    </div>
   
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/js/script.js"></script>
    <script>
        function sendResetLink() {
            //  reset link
            $('#forgotPasswordModal').modal('hide');
        }
    </script>
    <script>
        function closeForgotPasswordModal() {
            $('#forgotPasswordModal').modal('hide');
        }
    </script>
</body>
</html>
