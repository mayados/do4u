<?php
use Models\Annonce;
$annonces = Annonce::getAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
</head>
<body>
   
   
    <main>


    <section class="annonces">
        <div class="container p-5">
            <!-- Filtres de recherche -->
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                <div class="col">
                    <div class="Catégorie">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>Catégorie</option>
                            <option selected>Catégorie</option>
                            <option value="1">ménage, nettoyage, services à la personne</option>
                            <option value="2">rénovation & construction</option>
                            <option value="3">réparation et maintenance</option>
                            <option value="3">informatique & administratif</option>
                            <option value="3">cours et coaching</option>
                            <option value="3">santé et bien être</option>
                            <option value="3">evénements et divertissements</option>
                            <option value="3">animaux</option>
                            <option value="3">artisanat & création</option>
                            <option value="3">enfants</option>
                            <option value="3">autre</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="ville">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>Lieu</option>
                            <!-- ... Options de lieu ... -->
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="type">
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                            <label class="form-check-label" for="reverseCheck1">Offre</label>
                        </div>
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck2">
                            <label class="form-check-label" for="reverseCheck2">Demande</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <!-- Card 1 -->
                    <!-- Début de la boucle foreach -->

                    <?php
               
                    foreach ($annonces as $annonce): ?>
    <div class="col">
        <a href="#" class="card-link">
            <div class="card h-100 card-ad">
                <div class="position-relative">
                    <?php if (isset($annonce['photo'])): ?>
                        <img src="../public/assets/img/cards/<?php echo $annonce['photo']; ?>" class="img-fluid card-img-top" alt="...">
                    <?php endif; ?>
                    <div class="offer-badge">
                        <?php if (isset($annonce['type'])): ?>
                            <span class="offer-badge"><?php echo $annonce['type']; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Le reste de votre contenu avec des variables dynamiques -->
                    <?php if (isset($annonce['titre'])): ?>
                        <p class="card-title fw-bold"><?php echo $annonce['titre']; ?></p>
                    <?php endif; ?>
                    <div class="row align-items-center">
                        <div class="col-1">
                            <i class="icon fa-regular fa-user"></i>
                        </div>
                        <div class="col ps-3">
                            <?php if (isset($annonce['prix'])): ?>
                                <span><?php echo $annonce['prix']; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- ... Autres informations dynamiques -->
                </div>
            </div>
        </a>
    </div>
<?php endforeach; ?>

<!-- Fin de la boucle foreach -->



            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul class="pagination ads justify-content-center mt-4">
                  <li class="page-item">
                      <a class="page-link ad" href="#">Previous</a>
                  </li>
                  <li class="page-item fanye"><a class="page-link ad" href="#">1</a></li>
                  <li class="page-item fanye"><a class="page-link ad" href="#">2</a></li>
                  <li class="page-item fanye"><a class="page-link ad" href="#">3</a></li>
                  <li class="page-item fanye">
                      <a class="page-link ad" href="#">Next</a>
                  </li>
              </ul>
          </nav>
      </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../public/assets/js/script.js"></script>
</body>
</html>