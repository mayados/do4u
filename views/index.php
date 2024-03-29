<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" href="assets/img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/sass/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="path/to/animate.css">

</head>
<body>
    <main>
        <section class="container-fluid container-f-index index-home">
            <div class="container hero">
                <div class="row d-flex align-items-center align-content-center ">
                    <div class="col-md-6 float-center">
                        <h2 class="invisible"></h2>
                        <!-- <h2 class=" h1">Votre plateforme de choix de prestataires et d'offres de services ! </h2> -->
                        <h2 class="pb-5 animate__animated animate__fadeInDownBig">Votre plateforme de choix de prestataires et d'offres de services !</h2>
                        <h4 class="scale-up-center">Profitez de la tranquillité d'esprit en sachant que vous faites appel à des individus passionnés par la fourniture de services de qualité.</h4>
                        <h4>Inscrivez-vous et créez votre première annonce !</h4>
                        <a class="mt-2 btn button-primary-pill" href="contact.php">En savoir plus</a>
                    </div>
                    <div class="col-md-6 ">
                        <img class="kenburns-top img-fluid test mx-auto"  src="assets/img/Img_home_page/hero-img.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container section">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="left-side">
                        <h3 class="slide-fwd-center">Les dernières offres</h3>
                    </div>
                    <div class="right-side">
                        <p><a href="ads.php"><span class="arrow-icon link text-decoration-none"> Voir toutes les offres ➔</span></a></p>
                    </div>
                </div>
                <!-- <?php echo($_SESSION['current_user_id'])?> -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-3">
                    <?php if (!empty($annonceOffre)) : ?>
                        <?php foreach ($annonceOffre as $offre): ?>
                            <div class="col">
                                <a href="adDetails.php?id=<?php echo $offre['idAnnonce']; ?>" class="card-link">
                                    <div class="card h-100 card-ad">
                                        <div class="position-relative">
                                            <img src="handlers/upload/<?php echo $offre['photo']; ?>" class="img-fluid card-img-top" alt="...">
                                            <div class="offer-badge">
                                                <span class="offer-badge"><?php echo $offre['nomTypeAnnonce'] ?></span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="heart-icon fa-lg">
                                                <i class="icon fa-regular fa-heart"></i>
                                            </div>
                                            <p class="card-title fw-bold"><?php echo $offre['titre']; ?></p>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-regular fa-user"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span>Auto entrepreneur</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-solid fa-euro-sign"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $offre['prix']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-regular fa-folder"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $offre['nomCategorie'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <img class="rounded-circle" width="22" width="22" src="assets/img/woman_photo.jpg" alt="">
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $offre['nomUtilisateur'] ?></span> <span> 4.5(19 avis) </span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $offre['villeUtilisateur'] ?></span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </a>    
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No data available</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section>
            <div class="container section pb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="left-side">
                        <h3 class="slide-fwd-center">Les dernières demandes</h3>
                    </div>
                    <div class="right-side">
                        <p><a href="ads.php"><span class="arrow-icon link text-decoration-none"> Voir toutes les demandes ➔</span></a></p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-3">
                    <?php if (!empty($annonceDemande)) : ?>
                        <?php foreach ($annonceDemande as $demande): ?>
                            <div class="col">
                                <a href="adDetails.php?id=<?php echo $demande['idAnnonce']; ?>" class="card-link">
                                    <div class="card h-100 card-ad">
                                        <div class="position-relative">
                                        <img src="handlers/upload/<?php echo $demande['photo']; ?>" class="img-fluid card-img-top" alt="...">

                                        <div class="demande-badge">
                                            <span class="demande-badge"><?php echo $demande['nomTypeAnnonce'] ?></span>
                                        </div>
                                    </div>
                                        <div class="card-body">
                                            <div class="heart-icon fa-lg">
                                                <i class="icon fa-regular fa-heart"></i>
                                            </div>
                                            <p class="card-title fw-bold"><?php echo $demande['titre']; ?></p>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-regular fa-user"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span>Auto entrepreneur</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-solid fa-euro-sign"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $demande['prix']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-regular fa-folder"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $demande['nomCategorie']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <img class="rounded-circle" width="22" width="22" src="assets/img/woman_photo.jpg" alt="">
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $demande['nomUtilisateur']; ?></span> <span> 4.5(19 avis) </span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $demande['villeUtilisateur']; ?></span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </a>
                            </div>
                    <?php endforeach; ?>
                    <?php else : ?>
                        <p>No data available</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="mt-5 last-section news-letter">
            <div class="container d-flex justify-content-center">
                <div class=" text-center">
                    <div class="row ">
                        <h1 class="text-white">Rejoignez notre newsletter</h1>
                        <p class="text-white">Abonnez-vous à notre newsletter pour recevoir du contenu précieux, des offres exclusives et bien plus encore !</p>
                        <form class="subscribe_form">
                            <div class="input-group">
                               <input type="text" class="form-control" name="email" placeholder="Votre Adresse Mail">
                               <span class="input-group-btn">
                                    <button class="fw" type="button">S'abonner</button>
                               </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>     
        </section>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>