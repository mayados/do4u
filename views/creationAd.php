<?php 
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>création d'annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/sass/main.css">
</head>
<body>
    <main>
        <section class="creation pt-lg-2">
            <div class="container-fluid">
                <div class="row align-items-stretch">
                    <div class="col-lg-8 pt-lg-0">
                        <form action="<?php echo $actionUrl; ?>" method="post" class="tab-pane fade show active" id="pills-particulier" role="tabpanel" aria-labelledby="pills-particulier-tab">
                        <input type="text" name="action" value="createAnnonce" hidden>
                            <div class="card cardCre">
                                <div class="card-body">
                                    <h3>Créer une annonce</h3>
                                    <!-- Titre de l'annonce -->
                                    <div class="mb-3">
                                        <label for="annonceTitle" class="form-label">Titre de votre annonce *</label>
                                        <input type="text" class="form-control" id="annonceTitle" name="titre" placeholder="Titre de votre annonce"required>
                                    </div>
                                    <!-- Catégorie -->
                                    <div class="mb-3">
                                        <label for="categorieSelect" class="form-label">Catégorie *</label>
                                        <select class="form-select" id="categorieSelect" name="categorieId" required>
                                            <option selected>Choisir une catégorie</option>
                                            <option value="1">Ménage</option>
                                            <option value="2">Services à la personne</option>
                                            <option value="3">Rénovation & construction</option>
                                            <option value="4">Jardinage & bricolage</option>
                                            <option value="5">Réparation & maintenance</option>
                                            <option value="6">Informatique & administratif</option>
                                            <option value="7">Cours & coaching</option>
                                            <option value="8">Evènements & divertissements</option>
                                            <option value="9">Santé & bien-être</option>
                                            <option value="10">Animaux</option>
                                            <option value="11">Artisanat & création</option>
                                            <option value="12">Garde d'enfants</option>
                                            <option value="13">Autres</option>
                                        </select>
                                    </div>
                                    <!-- Type d'annonce -->
                                    <div class="mb-3 typecheck">
                                        <span>Type d'annonce &nbsp;</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="typeAnnonceId" id="inlineRadio1" value="1" required>
                                            <label class="form-check-label" for="inlineRadio1">Offre</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="typeAnnonceId" id="inlineRadio2" value="2" required>
                                            <label class="form-check-label" for="inlineRadio2">Demande</label>
                                        </div>
                                    </div>
                                    <!-- Ajouter des photos -->
                                    <div class="addphoto mb-3">
                                        <span>Ajouter des photos (pas obligatoire)</span>
                                        <input type="file" class="form-control" id="annoncePhoto" name="Photo[]" multiple accept="image/*">
                                        <a href="#" id="downloadlink" style="display:none;" download>Télécharger l'image</a>
                                            <div class="card icone-card">
                                                <div class="card-body">
                                                    <i class="bi bi-image fa-2x photo-icon"></i>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="annonceDescription" class="form-label">Description *</label>
                                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="annoncePrix" class="form-label">Votre prix de service ? *</label>
                                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Votre prix de service" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="annonceLieu" class="form-label">ville de service ? *</label>
                                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre lieu de service" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="annonceLieu" class="form-label">code postal*</label>
                                        <input type="text" class="form-control" id="codePostal" name="codePostal" placeholder="codePostal service" required>
                                    </div>
                                    <!-- Bouton -->
                                    <div class="d-grid gap-2">
                                        <button class="button-primary-regular" type="submit">Déposer une annonce</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <img src="./assets/img/Img_page_ads/house-3950679_640.jpg" class="img-fluid rounded d-none d-lg-block" alt="Image">
                    </div>                    
                </div>
            </div>
        </section>
    </main>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>