<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/sass/main.css">
</head>
<body>

<?php  if ($adModification): ?>
    <main>
    <section class="creation pt-lg-2">
            <div class="container-fluid">
                <div class="row align-items-stretch">
                    <div class="col-lg-8 pt-lg-0">
                        <!-- Colonne gauche avec formulaire -->
                        
                        <form id="update" action="<?php echo $actionUrl; ?>" method="post" class="tab-pane fade show active" id="pills-particulier" role="tabpanel" aria-labelledby="pills-particulier-tab">
                            <input type="text" name="action" value="updateAnnonce" hidden>
                            <input type="hidden" name="idAnnonce" value="<?php echo $adModification['idAnnonce']; ?>"> 
                        <div class="card cardCre">
                            <div class="card-body">
                                <h3>Modification d'annonce</h3>

            <!-- Titre de l'annonce -->
                        <div class="mb-3">
                            <label for="annonceTitle" class="form-label">Titre de votre annonce *</label>
                            <input type="text" name="titre" value="<?php echo $adModification['titre']; ?>" class="form-control" id="titre" placeholder=" " required>
                        </div>

            <!-- Catégorie -->
                        <div class="mb-3">
                        <label for="categorieSelect" class="form-label">Catégorie *</label>
                        <select class="form-select" id="categorieSelect" name="categorieId">
                            <?php
                            $annonceCategorieId = $adModification['categorieId'];
                            foreach ($categories as $categorie) {
                                $selected = ($categorie['idCategorie'] == $annonceCategorieId) ? 'selected' : '';
                                echo '<option value="' . $categorie['idCategorie'] . '" ' . $selected . '>' . $categorie['nomCategorie'] . '</option>';
                            }
                          
                        </select>
                     
                    </div>

                <!-- Type d'annonce -->
                <div class="mb-3 typecheck">
                    <span>Type d'annonce &nbsp;</span>
                    <?php
                foreach ($annonceTypes as $type) {
                    $checked = (in_array($type['idTypeAnnonce'], $annonceTypeIds)) ? 'checked' : '';
                    echo '<div class="form-check form-check-inline">';
                    echo '<input class="form-check-input" type="checkbox" name="typeAnnonceId[]" value="' . $type['idTypeAnnonce'] . '" ' . $checked . '>';
                    echo '<label class="form-check-label">' . $type['nomTypeAnnonce'] . '</label>';
                    echo '</div>';
                }
                ?>
                <div class="form-check form-check-inline">
                </div>
                <div class="form-check form-check-inline">
                </div>                        
           </div>
                <div class="mb-3">
                    <label for="annonceDescription" class="form-label">Description *</label>
                    <textarea name="description" class="form-control" id="annonceDescription" rows="5"><?php echo $adModification['description']; ?></textarea>

                </div>
                <div class="mb-3">
                    <label for="annoncePrix" class="form-label">Votre prix de service ? *</label>
                    <input type="text" name="prix" value="<?php echo $adModification['prix']; ?>" class="form-control" id="annoncePrix" placeholder="Votre prix de service" required>
                </div>
                <div class="mb-3">
                    <label for="annonceLieu" class="form-label">Votre lieu de service ? *</label>
                    <input type="text" name="ville" value="<?php echo $adModification['ville']; ?>" class="form-control" id="annonceLieu" placeholder="Votre lieu de service" required>
                </div>
                <div class="mb-3">
                                        <label for="annonceLieu" class="form-label">code postal*</label>
                                        <input type="text" name="codePostal"value="<?php echo $adModification['codePostal']; ?>"class="form-control" id="codePostal"  placeholder="codePostal service" required>
                                    </div>
                <!-- Bouton -->
                <div class="d-grid gap-2">
                    <button class="button-primary-regular" type="submit">Modifier une annonce</button>
                </div>
            </div>
        </div> 
    </form>
</div>

     <div class="col-lg-4">
        <img src="assets/img/Img_page_ads/kit.jpg" class="img-fluid rounded d-none d-lg-block"  alt="Image">
         </div>
        </div>
        </div>
        <?php endif; ?>

        </section>
    </main>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>