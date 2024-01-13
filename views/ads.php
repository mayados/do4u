
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
    <section class="annonces pb-2">
        <div class="container pt-5">
            <!-- Filtres de recherche -->
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                <div class="col">
                    <div class="Catégorie">
                        <form method="get" class="d-flex">
                            <select class="form-select form-select-sm me-2" aria-label="Small select example" name="selectedCategory">
                                <option value="">All Categories</option>
                                <?php foreach ($allCategories as $category): ?>
                                    <option value="<?php echo $category['nomCategorie']; ?>" <?php echo ($selectedCategory === $category['nomCategorie']) ? 'selected' : ''; ?>><?php echo $category['nomCategorie']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="submit" class="btn button-filter">Filter</button>
                        </form>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="type d-flex">
                        <div class="form-check form-check-reverse me-3">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                            <label class="form-check-label" for="reverseCheck1">Offre</label>
                        </div>
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck2">
                            <label class="form-check-label" for="reverseCheck2">Demande</label>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($annonces as $annonce): ?>
                <div class="col">
                        <a href="adDetails.php?id=<?php echo $annonce['idAnnonce']; ?>" class="card-link">
                        <div class="card h-100 card-ad">
                            <div class="position-relative">
                                <img src="../public/assets/img/cards/<?php echo $annonce['photo']; ?>" class="img-fluid card-img-top" alt="...">
                                <?php if ($annonce['nomTypeAnnonce'] === 'Demande'): ?>
                                    <div class="demande-badge">
                                        <span class="demande-badge"><?php echo $annonce['nomTypeAnnonce'] ?></span>
                                    </div>
                                <?php else: ?>
                                    <div class="offer-badge">
                                        <span class="offer-badge"><?php echo $annonce['nomTypeAnnonce'] ?></span>
                                    </div>
                                <?php endif; ?>
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
            <!-- Fin de la boucle foreach -->

        <!-- Pagination -->
      </div>
      <div class="row pt-3 pb-3">
            <div class="col-12 d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination pt-4">
                        <li class="page-item">
                            <a class="page-link text-decoration-none link" href="?page=<?php echo max($currentPage - 1, 1); ?>">Précédent</a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                                <a class="page-link text-decoration-none link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item">
                            <a class="page-link text-decoration-none link" href="?page=<?php echo min($currentPage + 1, $totalPages); ?>">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../public/assets/js/script.js"></script>
</body>
</html>