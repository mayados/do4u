<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="../public/img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">

</head>
<body>
<?php require_once base_path('views/components/menu.php'); ?>
<?php displayErrorsAndMessages() ?>
    <main class="container-fluid section-1 d-flex flex-column">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 ">
                    <h2 class="h2-pc fw-bold pt-3">Qui sommes nous ?</h2>
                    <p>Bienvenue chez DO4U, votre plateforme de choix de prestataires et d'offres de services ! </p>
                    <p>Chez Do4U, nous comprenons que trouver la bonne personne pour s'occuper de vos tâches peut être un défi chronophage. C'est pourquoi nous nous sommes dédiés à la création d'une plateforme qui simplifie le processus de mise en relation entre les particuliers, les auto-entrepreneurs et les entreprises offrant une variété de services. Que vous ayez besoin de services de Ménage, de rénovations domiciliaires, d'expertise en jardinage, de support technique, ou d'aide pour des événements et divertissements, nous avons tout prévu.</p>
                    <p>Do4u est fier de servir la communauté locale et nationale. Notre mission est de combler le fossé entre ceux qui recherchent des prestataires de services fiables et des professionnels qualifiés ou individus prêts à donner un coup de main : particuliers,  auto-entrepreneurs ou entreprises.</p>
                    <h3 class="h3-pc">Pourquoi choisir Do4U? </h3>
                    <p><span class="p-bold-cntact">Confort:</span> Notre plateforme conviviale vous permet de trouver facilement le prestataire de services adapté à vos besoins spécifiques, vous faisant gagner du temps et des efforts.</p>
                    <p><span class="p-bold-cntact">Services Variés:</span> du bien-être à la création artisanale, vous pourrez trouver un gamme diversifiée d'annonces de services afin de répondre à vos besoins.</p>
                    <p><span class="p-bold-cntact">Sérénité:</span> Profitez de la tranquillité d'esprit en sachant que vous faites appel à des individus passionnés par la fourniture de services de qualité.</p>
                    <p>Do4U – Vous met en relation avec des individus de confiance, des auto-entrepreneurs, et des entreprises à travers la France.</p>
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid float-md-end" src="../public/assets/img/Img_contact/contact_person.png" alt="">
                </div>
            </div>
        </div>
    </main>
    
    <div class="container-fluid section-2 d-flex flex-column">
        <section class="container justify-content-center align-items-stretch">
            <div class="row align-items-stretch">
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <div class="contact-form">
                        <form action="handle-form-submission" method="post">
                            <h2 class="fw-bolder pb-3">Nous contacter !</h2>
                            <div class="form-row">
                                <div class="col">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
                                </div>
                                <div class="col">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="adresseMail">Adresse mail</label>
                                <input type="text" class="form-control" name="adresseMail" id="adresseMail" placeholder="mattsmith@mail.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn button-primary-regular">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="responsive-map">
                        <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="100%" height="100%" frameborder="0" style="border:1px solid #898989; border-radius: 10px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require_once base_path('views/components/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>
</html>