<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="icon" href="img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/sass/main.css">
</head>
<body>
    <main class="container" id="main-container-mine">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb fil-ariane">
              <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Mon profil</li>
            </ol>
        </nav>
        <section>
            <div class="row d-flex flex-lg-row align-items-lg-center">
                <div class="col-12 col-lg-6 d-flex flex-column gap-2 flex-lg-row align-items-lg-center  gap-lg-3">
                    <figure class="mx-auto m-lg-0 figure-user-profile-style" >
                        <img src="assets/img/woman_face.jpg" alt="Ma photo de profil">
                    </figure>
                    <div>
                        <div class="d-flex flex-column gap-1 flex-lg-row align-items-lg-center flex-lg-wrap">
                            <h1 class="title-profile text-center text-lg-start m-0">Lola</h1>
                            <span class="fw-bold text-white rounded mx-auto mx-lg-0 profile-badge">Particulier</span>                             
                        </div>

                        <p class="mt-4 mt-lg-2 mb-0"><i class="fa-solid fa-star full-star-icon"></i> 4/5 <span>(18 avis)</span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <p class="d-none d-lg-inline">Informations vérifiées :</p>
                    <p><i class="fa-solid fa-circle-check checked-icon"></i> E-mail</p>                    
                </div>
                <div class="col-12 col-lg-3">
                    <p class="mb-0"><i class="fa-solid fa-location-dot primary-icon"></i> Strasbourg</p>
                    <p><i class="fa-solid fa-user primary-icon"></i> Membre depuis le 08/11/2023</p>
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
            <ul class="nav nav-underline row text-center mt-5">
                <li class="nav-item col-3  offset-lg-2 col-lg-2 ">
                    <button class="nav-link active profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-annonces">Annonces</button>
                </li>
                <li class="nav-item col-3  col-lg-2">
                    <button  class="nav-link profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-favoris">Favoris</button>
                </li>
                <li class="nav-item col-2  col-lg-2">
                    <button class="nav-link profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-avis">Avis</button>
                </li>
                <li class="nav-item col-2  col-lg-2">
                    <button class="nav-link profile-tab-links fw-bold" data-bs-toggle="pill" data-bs-target="#pills-suivis">Suivis</button>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active text-center" id="pills-annonces" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <p>4 annonces publiées</p>
                    <div class="row justify-content-evenly d-flex gap-5 gap-lg-0">
                        <div class="col-12 col-lg-3">
                                <div class="card card-ad">
                                    <div class="position-relative">
                                        <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                                        <div class="offer-badge">
                                            <span class="offer-badge">Offre</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title fw-bold text-start">Spécialiste de soin et de la mise en beauté</p>
                                        <div class="flex-column d-flex justify-content-evenly gap-3 pt-2 container-ad-actions">
                                            <a class="action-ad-link text-center p-2 rounded action-ad-consulter" href="adDetails.php">Consulter <i class="fa-solid fa-eye"></i></a>
                                            <a class="action-ad-link text-center p-2 rounded action-ad-modifier" href="modificationAd.php">Modifier <i class="fa-solid fa-pen"></i></a>
                                            <button  class="action-ad-link text-center p-2 rounded action-ad-supprimer border-0" data-bs-toggle="modal" data-bs-target="#modal_ad_petsitter">Supprimer <i class="fa-solid fa-trash"></i></button>                                
            
                                        </div>
                                    </div>                            
                                </div>
                        </div>
                        <!-- Modal for ad delete-->
                        <div class="modal fade modal-z-index" id="modal_ad_petsitter" tabindex="-1" aria-labelledby="suppressionAnnonce" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h2 class="modal-title fs-5" id="suppressionAnnonce">Supprimer mon annonce</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etes-vous sûr de vouloir supprimer votre annonce "Petsitter expérimentée" ?<br>
                                    Attention, cette action est irréversible</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">Supprimer l'annonce</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card card-ad">
                                <div class="position-relative">
                                    <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                                    <div class="offer-badge">
                                        <span class="offer-badge">Offre</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title fw-bold text-start">Spécialiste de soin et de la mise en beauté</p>
                                    <div class="flex-column d-flex justify-content-evenly gap-3 pt-2 container-ad-actions">
                                        <a class="action-ad-link text-center p-2 rounded action-ad-consulter" href="adDetails.php">Consulter <i class="fa-solid fa-eye"></i></a>
                                        <a class="action-ad-link text-center p-2 rounded action-ad-modifier" href="modificationAd.php">Modifier <i class="fa-solid fa-pen"></i></a>
                                        <button  class="action-ad-link text-center p-2 rounded action-ad-supprimer border-0" data-bs-toggle="modal" data-bs-target="#modal_ad_petsitter">Supprimer <i class="fa-solid fa-trash"></i></button>                                
                                    </div>
                                </div>                            
                            </div>
                    </div>                        
                    <div class="col-12 col-lg-3">
                        <div class="card card-ad">
                            <div class="position-relative">
                                <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                                <div class="offer-badge">
                                    <span class="offer-badge">Offre</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title fw-bold text-start">Spécialiste de soin et de la mise en beauté</p>
                                <div class="flex-column d-flex justify-content-evenly gap-3 pt-2 container-ad-actions">
                                    <a class="action-ad-link text-center p-2 rounded action-ad-consulter" href="adDetails.php">Consulter <i class="fa-solid fa-eye"></i></a>
                                    <a class="action-ad-link text-center p-2 rounded action-ad-modifier" href="modificationAd.php">Modifier <i class="fa-solid fa-pen"></i></a>
                                    <button  class="action-ad-link text-center p-2 rounded action-ad-supprimer border-0" data-bs-toggle="modal" data-bs-target="#modal_ad_petsitter">Supprimer <i class="fa-solid fa-trash"></i></button>                                
    
                                </div>
                            </div>                            
                        </div>
                </div>                        
                <div class="col-12 col-lg-3">
                    <div class="card card-ad">
                        <div class="position-relative">
                            <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
                            <div class="offer-badge">
                                <span class="offer-badge">Offre</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-title fw-bold text-start">Spécialiste de soin et de la mise en beauté</p>
                            <div class="flex-column d-flex justify-content-evenly gap-3 pt-2 container-ad-actions">
                                <a class="action-ad-link text-center p-2 rounded action-ad-consulter" href="adDetails.php">Consulter <i class="fa-solid fa-eye"></i></a>
                                <a class="action-ad-link text-center p-2 rounded action-ad-modifier" href="modificationAd.php">Modifier <i class="fa-solid fa-pen"></i></a>
                                <button  class="action-ad-link text-center p-2 rounded action-ad-supprimer border-0" data-bs-toggle="modal" data-bs-target="#modal_ad_petsitter">Supprimer <i class="fa-solid fa-trash"></i></button>                                
                            </div>
                        </div>                            
                    </div>
            </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-favoris" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <!-- The div with class row is also display with flex because elements will be dynamics, so if there is only 1 element, it should be centered -->
                    <div class="row justify-content-evenly d-flex gap-5 gap-lg-0">
                        <div class="col-12 col-lg-3">
                            <a href="adDetails.php" class="card-link">
                                <div class="card h-100 card-ad">
                                    <div class="position-relative">
                                        <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
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
                                                <img class="rounded-circle" width="22" width="22" src="assets/img/woman_photo.jpg" alt="Image de profil de Rosie">
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
                                        <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
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
                                                <img class="rounded-circle" width="22" width="22" src="assets/img/woman_photo.jpg" alt="Image de profil de Rosie">
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
                                        <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
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
                                                <img class="rounded-circle" width="22" width="22" src="assets/img/woman_photo.jpg" alt="Image de profil de Rosie">
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
                                        <img src="assets/img/cards/image1.jpg" class="img-fluid card-img-top" alt="Image principale de l'annonce spécialiste de soin et de la mise en beauté">
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
                                                <img class="rounded-circle" width="22" width="22" src="assets/img/woman_photo.jpg" alt="Image de profil de Rosie">
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
                <div class="tab-pane fade" id="pills-avis" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <div class="mx-auto d-flex flex-column align-items-center">
                        <p class="fs-3 mb-0"><i class="fa-solid fa-star full-star-icon"></i> 4/5</p>
                        <p>18 avis</p>                            
                    </div>
                    <section>
                        <p>Ils parlent de moi...</p>
                        <article class="avis-commentaire d-flex justify-content-between mt-3">
                            <div>
                                <div class="d-flex gap-2">
                                    <figure class="figure-avis mb-0">
                                        <img src="assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="Image de profil de Rosie">
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
                                <button class="vertical-dots d-flex align-items-center rounded signalement" id="signalement1" tabindex="0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <button class="signalement-action button-secondary-regular" id="signalement_avis1" tabindex="-1" data-bs-toggle="modal" data-bs-target="#signalement_modal1">Signaler</button>
                                <div class="modal fade modal-z-index" id="signalement_modal1" tabindex="-1" aria-labelledby="signalerAvis" aria-hidden="true">
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
                        <article class="avis-commentaire d-flex justify-content-between mt-3">
                            <div>
                                <div class="d-flex gap-2">
                                    <figure class="figure-avis mb-0">
                                        <img src="assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="Image de profil de Jessica">
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
                                <button class="vertical-dots d-flex align-items-center rounded signalement" id="signalement2" tabindex="0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <button class="signalement-action button-secondary-regular" id="signalement_avis2" tabindex="-1" data-bs-toggle="modal" data-bs-target="#signalement_modal2">Signaler</button>
                                <div class="modal fade modal-z-index" id="signalement_modal2" tabindex="-1" aria-labelledby="signalerAvis" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h2 class="modal-title fs-5 text-center" id="signalerAvis2">Signaler l'avis</h2>
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
                        </article>
                    </section>
                </div>
                <div class="tab-pane fade text-center" id="pills-suivis" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <p class="mx-auto">Vous suivez 1 utilisateur</p>
                    <div class="row justify-content-evenly d-flex gap-5 gap-lg-0">
                        <article class="col-lg-3 d-flex flex-column align-items-center">
                            <figure class="figure-avis mb-0">
                                <img src="assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="Image de profil de Joel_obp">
                            </figure> 
                            <p>Joel_obp</p>
                            <p><i class="fa-solid fa-star full-star-icon"></i> 4/5 <span>(18 avis)</span></p>
                            <a href="userProfile.php" class="button-primary-pill text-decoration-none">Voir le profil</a>
                        </article>
                    </div>
                </div>
              </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>