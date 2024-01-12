<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de Léa</title>
    <link rel="icon" href="../public/assets/img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
</head>
<body>
<?php require_once base_path('views/components/menu.php'); ?>
<?php displayErrorsAndMessages() ?>
    <main class="container" id="main-container-user">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="fil d'ariane">
            <ol class="breadcrumb fil-ariane">
              <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Léa</li>
            </ol>
        </nav>
        <section>
            <div class="row d-flex flex-lg-row align-items-lg-center">
                <div class="col-12 col-lg-6 d-flex flex-column gap-2 flex-lg-row align-items-lg-center  gap-lg-3">
                    <figure class="mx-auto m-lg-0 figure-user-profile-style">
                        <img src="../public/assets/img/woman_face.jpg" alt="Photo de profil de Léa">
                    </figure>
                    <div>
                        <div class="d-flex flex-column gap-1 flex-lg-row align-items-lg-center flex-lg-wrap">
                            <h1 class="title-profile text-center text-lg-start m-0">Léa</h1>
                            <span class="fw-bold text-white rounded mx-auto mx-lg-0 profile-badge">Particulier</span>                             
                        </div>

                        <p class="mt-4 mt-lg-2 mb-0"><i class="fa-solid fa-star full-star-icon"></i> 4/5 <span>(18 avis)</span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <p class="d-none d-lg-inline">Informations vérifiées :</p>
                    <p><i class="fa-solid fa-circle-check checked-icon"></i> E-mail</p>                    
                </div>
                <div class="col-12 col-lg-3 d-flex gap-5">
                    <a href="" class="button-primary-regular text-decoration-none follow-user text-center"><i class="fa-solid fa-circle-plus"></i> Suivre</a>
                    <div class="container-dots-action h-100">
                        <button class="vertical-dots d-flex align-items-center rounded signalement" id="signalement2" tabindex="0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <button class="signalement-action button-secondary-regular" id="signalement_avis2" tabindex="-1" data-bs-toggle="modal" data-bs-target="#signalement_modal2">Signaler</button>
                        <div class="modal fade modal-z-index" id="signalement_modal2" tabindex="-1" aria-labelledby="signalerAvis" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header"> 
                                <h2 class="modal-title fs-5 text-center" id="signalerAvis1">Signaler l'utilisateur</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                          <label for="motif">Motif du signalement</label>
                                          <input type="text" class="form-control" id="motif" aria-describedby="motifSignalement" placeholder="Motif du signalement">
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                          <label for="explication-signalement">Explication du signalement</label>
                                          <textarea name="" id="explication-signalement" placeholder="Expliquez ici pourquoi vous souhaitez signaler cet utilisateur"></textarea>
                                        </div>
                                        <button type="submit" class="button-primary-regular">Signaler</button>
                                      </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <article class="mt-4">
                <h2>Présentation</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti perspiciatis laudantium quidem, modi vel repellat voluptatibus odio quis ratione tenetur, sit exercitationem, corporis laboriosam dolores provident iste illo minus voluptate.
                Totam culpa odio consequatur ipsum sequi iure, unde atque aliquam dignissimos alias adipisci aut quod temporibus nemo ab? Ipsam possimus corrupti, ipsa dolores ipsum enim quibusdam. Minus sequi sint tempore!</p>
            </article>
        </section>
        <div class="line-divider"></div>
        <section>
            <ul class="nav nav-underline display-flex justify-content-evenly mt-5">
                <li class="nav-item ">
                    <button class="nav-link active profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-a-propos">A propos</button>
                </li>
                <li class="nav-item ">
                    <button class="nav-link profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-annonces-user">Annonces</button>
                </li>
                <li class="nav-item ">
                    <button class="nav-link profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-avis">Avis</button>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-a-propos" role="tabpanel" aria-labelledby="pills-a-propos-tab" tabindex="0">
                    <div class="pt-2">
                        <p><i class="fa-solid fa-location-dot primary-icon"></i> Strasbourg</p>
                        <p><i class="fa-solid fa-user primary-icon"></i> Membre depuis le 08/11/2023</p>
                    </div>
                    <div id="map">
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-annonces-user" role="tabpanel" aria-labelledby="pills-annonces-tab" tabindex="0">
                    <div class="row justify-content-evenly d-flex gap-5 gap-lg-0">
                        <div class="col-12 col-lg-3">
                            <a href="adDetails.php" class="card-link">
                                <div class="card h-100 card-ad">
                                    <div class="position-relative">
                                        <img src="../public/assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                                        <div class="offer-badge">
                                            <span class="offer-badge">Offre</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="heart-icon fa-lg">
                                            <i class="icon fa-regular fa-heart"></i>
                                        </div>
                                        <p class="card-title fw-bold">Spécialiste de soin et de la mise en beauté</p>
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
                                                <span>30€/H</span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="icon fa-regular fa-folder"></i>
                                            </div>
                                            <div class="col ps-3">
                                                <span>Santé et bien-etre</span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <img class="rounded-circle" width="22" width="22" src="../public/img/woman_photo.jpg" alt="Image de profil de Rosie">
                                            </div>
                                            <div class="col ps-3">
                                                <span>Rosie</span> <span> 4.5(19 avis) </span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="icon fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col ps-3">
                                                <span>Strasbourg</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-3">
                            <a href="adDetails.php" class="card-link">
                                <div class="card h-100 card-ad">
                                    <div class="position-relative">
                                        <img src="../public/assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                                        <div class="offer-badge">
                                            <span class="offer-badge">Offre</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="heart-icon fa-lg">
                                            <i class="icon fa-regular fa-heart"></i>
                                        </div>
                                        <p class="card-title fw-bold">Spécialiste de soin et de la mise en beauté</p>
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
                                                <span>30€/H</span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="icon fa-regular fa-folder"></i>
                                            </div>
                                            <div class="col ps-3">
                                                <span>Santé et bien-etre</span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <img class="rounded-circle" width="22" width="22" src="../public/img/woman_photo.jpg" alt="Image de profil de Rosie">
                                            </div>
                                            <div class="col ps-3">
                                                <span>Rosie</span> <span> 4.5(19 avis) </span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="icon fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col ps-3">
                                                <span>Strasbourg</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-3">
                            <a href="adDetails.php" class="card-link">
                                <div class="card h-100 card-ad">
                                    <div class="position-relative">
                                        <img src="../public/assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                                        <div class="offer-badge">
                                            <span class="offer-badge">Offre</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="heart-icon fa-lg">
                                            <i class="icon fa-regular fa-heart"></i>
                                        </div>
                                        <p class="card-title fw-bold">Spécialiste de soin et de la mise en beauté</p>
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
                                                <span>30€/H</span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="icon fa-regular fa-folder"></i>
                                            </div>
                                            <div class="col ps-3">
                                                <span>Santé et bien-etre</span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <img class="rounded-circle" width="22" width="22" src="../public/img/woman_photo.jpg" alt="Image de profil de Rosie">
                                            </div>
                                            <div class="col ps-3">
                                                <span>Rosie</span> <span> 4.5(19 avis) </span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="icon fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="col ps-3">
                                                <span>Strasbourg</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-avis" role="tabpanel" aria-labelledby="pills-avis-tab" tabindex="0">
                    <div class="mx-auto d-flex flex-column align-items-center">
                        <p class="fs-3 mb-0"><i class="fa-solid fa-star full-star-icon"></i> 4/5</p>
                        <p>18 avis</p>                            
                    </div>
                    <section>
                        <div class="rounded d-flex flex-row align-items-center gap-2 p-2 mb-5" id="ajout-avis" tabindex="0" role="button">
                            <figure class="figure-rating mb-0">
                                <img src="../public/assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="ma photo de profil">
                            </figure> 
                            <p class="m-0">Lola, donnez votre avis</p>
                        </div>
                        <div id="container-form-avis" class="mb-5 p-2 rounded">
                            <span class="d-flex justify-content-end">
                                <a class="text-left text-decoration-none" id="close-avis" aria-label="Fermer le formulaire d'ajout d'avis" href="#"><i class="fa-solid fa-xmark"></i> Fermer</a>                                
                            </span>
                            <form id="form-avis">
                                <span class="d-flex gap-2 mb-3">
                                    <label for="rating">Note :</label>
                                    <div class="rating" id="rating">
                                        <input type="radio" id="star1" name="rating" value="1" tabindex="-1">
                                        <label for="star1" role="button" tabindex="0">
                                            <span aria-hidden="true">1 étoile</span>
                                            <i class="fas fa-star"></i>
                                        </label>
                            
                                        <input type="radio" id="star2" name="rating" value="2" tabindex="-1">
                                        <label for="star2" role="button" tabindex="0">
                                            <span aria-hidden="true">2 étoiles</span>
                                            <i class="fas fa-star"></i>
                                        </label>
                            
                                        <input type="radio" id="star3" name="rating" value="3" tabindex="-1">
                                        <label for="star3" role="button" tabindex="0">
                                            <span aria-hidden="true">3 étoiles</span>
                                            <i class="fas fa-star"></i>
                                        </label>
                            
                                        <input type="radio" id="star4" name="rating" value="4" tabindex="-1">
                                        <label for="star4" role="button" tabindex="0">
                                            <span aria-hidden="true">4 étoiles</span>
                                            <i class="fas fa-star"></i>
                                        </label>
                            
                                        <input type="radio" id="star5" name="rating" value="5" tabindex="-1">
                                        <label for="star5" role="button" tabindex="0">
                                            <span aria-hidden="true">5 étoiles</span>
                                            <i class="fas fa-star"></i>
                                        </label>
                                    </div>                                    
                                </span>

                                <div class="form-group mb-3">
                                  <label for="textareaAvis">Mon avis</label>
                                  <textarea class="form-control" id="textareaAvis" aria-describedby="avisHelp" placeholder="Décrivez ici votre expérience avec cet utilisateur"></textarea>
                                  <small id="avisHelp" class="form-text text-muted">Même si vos échanges se limitent à la messagerie, n'hésitez pas à donner votre avis.</small>
                                </div>
                                <button type="submit" class="button-primary-regular">Publier mon avis</button>
                              </form>         
                        </div>
                        <article class="avis-commentaire d-flex justify-content-between mt-3">
                            <div>
                                <div class="d-flex gap-2">
                                    <figure class="figure-avis mb-0">
                                        <img src="../public/assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="Image de profil de Nolan">
                                    </figure> 
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="userProfile.php" class="mb-0 text-decoration-none">Nolan</a>
                                        <p class="mb-0"><i class="fa-solid fa-star full-star-icon"></i><i class="fa-solid fa-star full-star-icon"></i><i class="fa-solid fa-star full-star-icon"></i><i class="fa-solid fa-star full-star-icon"></i><i class="fa-regular fa-star"></i></p>
                                        <p class="mb-0">02/03/2023</p>
                                    </div>                                   
                                </div>
                                <div class="mt-3">
                                    <a href="ads.php" class="categorie-avis-links">Services à la personne</a>
                                    <p>Très satisfaite du travail de Lola pour mon grand-père</p>
                                </div>
                            </div>
                            <div class="container-dots-action">
                                <button class="vertical-dots d-flex align-items-center rounded signalement" id="signalement3" tabindex="0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <button class="signalement-action button-secondary-regular" id="signalement_avis3" tabindex="-1" data-bs-toggle="modal" data-bs-target="#signalement_modal3">Signaler</button>
                                <div class="modal fade modal-z-index" id="signalement_modal3" tabindex="-1" aria-labelledby="signalerAvis" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h2 class="modal-title fs-5 text-center" id="signalerAvis3">Signaler l'avis</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                  <label for="motif">Motif du signalement</label>
                                                  <input type="text" class="form-control" id="motif" aria-describedby="motifSignalement" placeholder="Motif du signalement">
                                                </div>
                                                <div class="form-group d-flex flex-column">
                                                  <label for="explication-signalement">Explication du signalement</label>
                                                  <textarea name="" id="explication-signalement" placeholder="Expliquez ici pourquoi vous souhaitez signaler cet avis"></textarea>
                                                </div>
                                                <button type="submit" class="button-primary-regular">Signaler</button>
                                              </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="avis-commentaire d-flex justify-content-between mt-3">
                            <div>
                                <div class="d-flex gap-2">
                                    <figure class="figure-avis mb-0">
                                        <img src="../public/assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="Image de profil de Jessica">
                                    </figure> 
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="userProfile.php" class="mb-0 text-decoration-none">Jessica</a>
                                        <p class="mb-0"><i class="fa-solid fa-star full-star-icon"></i><i class="fa-solid fa-star full-star-icon"></i><i class="fa-solid fa-star full-star-icon"></i><i class="fa-solid fa-star full-star-icon"></i><i class="fa-regular fa-star"></i></p>
                                        <p class="mb-0">02/03/2023</p>
                                    </div>                                   
                                </div>
                                <div class="mt-3">
                                    <a href="ads.php" class="categorie-avis-links">Services à la personne</a>
                                    <p>Très satisfaite du travail de Lola pour mon grand-père</p>
                                </div>
                            </div>
                            <div class="container-dots-action">
                                <button class="vertical-dots d-flex align-items-center rounded signalement" id="signalement4" tabindex="0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <button class="signalement-action button-secondary-regular" id="signalement_avis4" tabindex="-1" data-bs-toggle="modal" data-bs-target="#signalement_modal4">Signaler</button>
                                <div class="modal fade modal-z-index" id="signalement_modal4" tabindex="-1" aria-labelledby="signalerAvis" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h2 class="modal-title fs-5 text-center" id="signalerAvis1">Signaler l'avis</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                  <label for="motif">Motif du signalement</label>
                                                  <input type="text" class="form-control" id="motif" aria-describedby="motifSignalement" placeholder="Motif du signalement">
                                                </div>
                                                <div class="form-group d-flex flex-column">
                                                  <label for="explication-signalement">Explication du signalement</label>
                                                  <textarea name="" id="explication-signalement" placeholder="Expliquez ici pourquoi vous souhaitez signaler cet avis"></textarea>
                                                </div>
                                                <button type="submit" class="button-primary-regular">Signaler</button>
                                              </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
              </div>
        </section>
    </main>
    <?php require_once base_path('views/components/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>
    <script src="../public/assets/js/map.js"></script>
</body>
</html>