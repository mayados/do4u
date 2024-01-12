<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
</head>
<body>
<?php require_once base_path('views/components/menu.php'); ?>
<?php displayErrorsAndMessages() ?>

    <main>
        <section class="creation">
            <div class="crea p-5">
                <div class="container-fluid">
                    <div class="row d-flex">
                        <!-- Colonne gauche avec formulaire -->
                        <div class="col-12 col-lg-8 mb-5 left-column flex-fill">
                            <div class="card cardCre">
                                <div class="card-body">
                                    <h3>Modification d'annonce</h3>
    
                                    <!-- Titre de l'annonce -->
                                    <div class="mb-3">
                                        <label for="annonceTitle" class="form-label">Titre de votre annonce *</label>
                                        <input type="text" class="form-control" id="annonceTitle" placeholder="Titre de votre annonce" disabled>
                                    </div>                                    
    
                                    <!-- Catégorie -->
                                    <div class="mb-3">
                                        <label for="categorieSelect" class="form-label">Catégorie *</label>
                                        <select class="form-select" id="categorieSelect" disabled>
                                            <option selected>Choisir une catégorie</option>
                                            <option value="1">ménage, nettoyage, services à la personne</option>
                                            <option value="2">rénovation & construction</option>
                                            <option value="3">réparation et maintenance</option>
                                            <option value="4">informatique & administratif</option>
                                            <option value="5">cours et coaching</option>
                                            <option value="6">santé et bien être</option>
                                            <option value="7">evénements et divertissements</option>
                                            <option value="8">animaux</option>
                                            <option value="9">artisanat & création</option>
                                            <option value="10">enfants</option>
                                            <option value="11">autre</option>
                                        </select>
                                    </div>
    
                                    <!-- Type d'annonce -->
                                    <div class="mb-3 typecheck">
                                        <span>Type d'annonce &nbsp;</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Offre</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Demande</label>
                                        </div>
                                    </div>
    
                                    <!-- Ajouter des photos -->
                                    <div class="addphoto mb-3">
                                        <span>Ajouter des photos (pas obligatoire)</span>
                                        <div class="icone row justify-content-evenly">
                                            <div class="card icone-card">
                                                <div class="card-body">
                                                    <i class="bi bi-image fa-5x photo-icon"></i>
                                                </div>
                                            </div>
                                            <div class="card icone-card">
                                                <div class="card-body mt-3">
                                                    <i class="bi bi-plus-lg fa-3x plus-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                <div class="container-fluid">
                                    <div class="mb-3">
                                        <label for="annonceDescription" class="form-label">Description *</label>
                                        <textarea class="form-control" id="annonceDescription" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="annoncePrix" class="form-label">Votre prix de service ? *</label>
                                        <input type="text" class="form-control" id="annoncePrix" placeholder="Votre prix de service" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="annonceLieu" class="form-label">Votre lieu de service ? *</label>
                                        <input type="text" class="form-control" id="annonceLieu" placeholder="Votre lieu de service" disabled>
                                    </div>
    
                                    <!-- Bouton -->
                                    <div class="d-grid gap-2">
                                        <button class="button-primary-regular" type="button">Modifier annonce</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-12 col-lg-4 imgcontainer flex-fill">
                            <img src="./../public/assets/img/Img_page_ads/kit.jpg" class="img-fluid d-none d-lg-block"  alt="Image">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </main>  
    <?php require_once base_path('views/components/footer.php'); ?> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>
</body>
</html>