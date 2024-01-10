<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de détails d'une annonce">
    <title>Annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css"> 
</head>
<body>
    <main id="main-details">
        <?php if ($adDetails): ?>
            <h1 id="annonceDetails">Page de details d'une annonce</h1>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="link" href="index.php">Accueil</a></li>
                                <li class="breadcrumb-item"><a class="link" href="ads.php"><?php echo $adDetails['nomTypeAnnonce']; ?></a></li>
                                <li class="breadcrumb-item"><a class="link" href="#"><?php echo $adDetails['nomCategorie']; ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $adDetails['titre']; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-lg-6">
                            <div class="image-container">
                                <img src="../public/assets/img/cards/image1.jpg" class="img-fluid rounded" alt="Soutien">
                                <div class="overlay-text"><?php echo $adDetails['nomTypeAnnonce']; ?></div>
                                <div class="d-flex flex-row justify-content-between align-items-center mb-2 mt-2">
                                    <span class="user-type">Particulier</span>
                                    <div class="report" role="alert">
                                        <a class="text-decoration-none" href="contact.php">
                                            <i class="fa-regular fa-flag fa-xl"></i>
                                        </a>  
                                        <span class="badge text-wrap" style="width: 5rem;">
                                            <a class="alert-link link-danger text-decoration-none" href="contact.php">Signaler un problème</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card details">
                                <div class="d-flex flex-row justify-content-between p-2">
                                    <i class="fa-regular fa-heart fa-2x" style="color: #1D838A;"></i>
                                    <span class=""><?php echo $adDetails['datePublication']; ?></span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title details-title"><?php echo $adDetails['titre']; ?></h3>
                                    <p class="card-text details-price"><?php echo $adDetails['prix']; ?> €</p>
                                </div>
                            </div>
                            <div class="card details mt-2">
                                <div class="card-body"> 
                                    <div class="flex-lg-row d-flex flex-wrap justify-content-between">
                                        <figure id="photo-user">
                                            <a href="myProfile.php">
                                                <img src="../public/assets/img/woman_face.jpg" alt="Photo d'un utilisateur">
                                            </a>
                                        </figure>  
                                        <div class="flex-column d-flex flex-wrap justify-content-center align-items-start">
                                            <h3 class="card-title"><?php echo $adDetails['nomUtilisateur']; ?></h3>
                                            <p><i class="fa-solid fa-star" style="color: #E9AD10;"></i> 4/5 8 avis</p>
                                        </div>
                                        <div class="flex-sm-column d-flex flex-wrap justify-content-center align-items-end offset-sm-6">
                                            <a href="myProfile.php"><i class="fa-solid fa-chevron-right fa-2x"></i></a>
                                        </div>
                                    </div>
                                    <a href="messenger.php" class="btn button-primary-regular btn-message">Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- line divider -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <hr class="border-1 mt-3 mb-3">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-2">
                        <article class="adDescription">
                            <h3><?php echo $adDetails['titre']; ?></h3><br>
                            <h4>Description</h4>
                            <p class="text-wrap">
                                <?php echo $adDetails['description']; ?>
                            </p>
                            <!-- <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            <button onclick="voirPlus()" id="myBtn" class="link">Voir plus</button> -->
                        </article>
                    </div>
                    <div class="col-12 col-lg-6 mt-2">
                        <p><i class="fa-solid fa-location-dot"></i> <?php echo $adDetails['villeUtilisateur']; ?></p>
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d337936.5389198585!2d7.762078999999999!3d48.569074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c8495e18b2c1%3A0x971a483118e7241f!2sStrasbourg!5e0!3m2!1sen!2sfr!4v1701726815229!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- section with ads cards-->
        <section>
            <?php
                $annonceType = ($adDetails['nomTypeAnnonce'] === 'Offre') ? $annonceOffre : $annonceDemande;
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="line-divider mt-3 mb-4"></div>
                        <div class="d-flex justify-content-end align-items-center mt-3 mb-3 p-2 gap-2">
                            <a class="link text-decoration-none" href="ads.php">Voir plus d'<?php echo $adDetails['nomTypeAnnonce']; ?> ➔</a>
                        </div>
                        
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-3">
                    <?php if (!empty($annonceType)) : ?>
                    <?php foreach ($annonceType as $annonce) : ?>
                            <div class="col">
                                <a href="" class="card-link">
                                    <div class="card h-100 card-ad">
                                        <div class="position-relative">
                                        <img src="../public/assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="...">
                                        <div class="demande-badge">
                                            <span class="demande-badge"><?php echo $annonce['nomTypeAnnonce'] ?></span>
                                        </div>
                                    </div>
                                        <div class="card-body">
                                            <div class="heart-icon fa-lg">
                                                <i class="icon fa-regular fa-heart"></i>
                                            </div>
                                            <p class="card-title fw-bold"><?php echo $annonce['titre']; ?></p>
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
                                                    <span><?php echo $annonce['prix']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-regular fa-folder"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $annonce['nomCategorie']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <img class="rounded-circle" width="22" width="22" src="../public/assets/img/woman_photo.jpg" alt="">
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $annonce['nomUtilisateur']; ?></span> <span> 4.5(19 avis) </span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <i class="icon fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <span><?php echo $annonce['villeUtilisateur']; ?></span>
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
                    <!-- Card 2 -->
                </div>
            </div>
        </section>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>
    
</body>
</html>