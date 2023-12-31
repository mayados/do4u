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
    
            <!-- Annonces -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Card 1 -->
                <div class="col mb-4">
                  <div class="card classperso position-relative">
                      <img src="../public/assets/img/Img_page_ads/soin.jpg" class="card-img-top" alt="...">
                      <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                      </div>
                      <div class="card-body">
                          <h5 class="card-title">Spécialiste de soin et de la mise en beauté</h5>
                          <p><i class="bi bi-person"></i> Entreprise</p>
                          <p><i class="bi bi-currency-euro"></i> 40€/H</p>
                          <p><i class="bi bi-folder"></i> Santé et bien-être</p>
                          <p>
                              <img src="../public/assets/img/Img_page_ads/avatar9.webp" class="rounded-circle" width="30" alt="Avatar">
                              Margaux <i class="bi bi-star icon-etoile"></i> 4/5 19 avis
                          </p>
                          <p><i class="bi bi-geo-alt"></i> Strasbourg</p>
                      </div>
                  </div>
              </div>
    
                <!-- Card 2 -->
                <div class="col mb-4">
                    <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/chien.jpg" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-ro p-1 text-white mt-5 align-self-end position-absolute">Demande</p>
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">Faire garder mon chien par une aide à domicile</h5>
                          <p><i class="bi bi-person"></i> Particulier</p>
                          <p><i class="bi bi-currency-euro"></i>20€/H</p>
                          <p><i class="bi bi-folder"></i> Animaux</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar7.webp" class="rounded-circle" width="30"> Hugo <i class="bi bi-star icon-etoile"></i> 4/5 2avis</p> 
                          <p> <i class="bi bi-geo-alt"></i>  Lyon</p>
                          </div>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="col mb-4">
                    <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/cuisine.jpg" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                      </div>
                        <div class="card-body">
                            <h5 class="card-title">Un chef privé s'occupe de tout pour vous</h5>
                            <p><i class="bi bi-person"></i> Particulier</p>
                            <p><i class="bi bi-currency-euro"></i>50€/H</p>
                            <p><i class="bi bi-folder"></i>  Service à la personne</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar6.webp" class="rounded-circle" width="30"> Eric  <i class="bi bi-star icon-etoile"></i> 5/5 23 avis</p> 
                            <p> <i class="bi bi-geo-alt"></i>  Nice</p>
                          </div>
                      </div>
                    </div>
                
    
                <!-- Card 4 -->
                <div class="col mb-4">
                    <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/enfant.webp" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                      </div>
                        <div class="card-body">
                            <h5 class="card-title">Jeune etudiante cherche à garder vos enfants</h5>
                            <p><i class="bi bi-person"></i> Particulier</p>
                            <p><i class="bi bi-currency-euro"></i> 20€/H</p>
                            <p><i class="bi bi-folder"></i> Enfant</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar1.webp" class="rounded-circle" width="30">  Claire  <i class="bi bi-star icon-etoile"></i> 4/5 8 avis</p> 
                            <p> <i class="bi bi-geo-alt"></i> Montpeillier</p>
                          </div>
                    </div>
                </div>

                        <!-- Card 5 -->
                        <div class="col mb-4">
                          <div class="card classperso position-relative">
                              <img src="../public/assets/img/Img_page_ads/informatique.webp" class="card-img-top" alt="...">
                              <div class="card-img-overlay d-flex flex-column">
                                <!-- Contenu de la carte -->
                                <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                                    <i class="bi bi-heart favo"></i>
                                </div>
                                <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                            </div>
                              <div class="card-body">
                                  <h5 class="card-title">Informaticien propose ses services</h5>
                                  <p><i class="bi bi-person"></i> Auto-entrepreneur</p>
                                  <p><i class="bi bi-currency-euro"></i> 45€/H</p>
                                  <p><i class="bi bi-folder"></i> Informatique & Administratif</p>
                                  <p> <img src="../public/assets/img/Img_page_ads/avatar5.webp" class="rounded-circle" width="30"> Rosie <i class="bi bi-star icon-etoile"></i> 4/5 36 avis</p> 
                                  <p> <i class="bi bi-geo-alt"></i> Paris </p>
                                </div>
                          </div>
                      </div>
              
                          <!-- Card 6 -->
                          <div class="col mb-4">
                              <div class="card classperso position-relative">
                                  <img src="../public/assets/img/Img_page_ads/réparer.jpg" class="card-img-top" alt="...">
                                  <div class="card-img-overlay d-flex flex-column">
                                    <!-- Contenu de la carte -->
                                    <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                                        <i class="bi bi-heart favo"></i>
                                    </div>
                                    <p class="bg-ro text-white p-1 mt-5 align-self-end position-absolute">Demande</p>
                                </div>
                                  <div class="card-body">
                                      <h5 class="card-title">Petite réparation rapide et efficace</h5>
                                      <p><i class="bi bi-person"></i> Particulier</p>
                                      <p><i class="bi bi-currency-euro"></i> 50€/H</p>
                                      <p><i class="bi bi-folder"></i> Réparation & maintenance </p>
                                      <p> <img src="../public/assets/img/Img_page_ads/avatar6.webp" class="rounded-circle" width="30"> Jordan <i class="bi bi-star icon-etoile"></i> 4/5  26 avis </p> 
                                      <p> <i class="bi bi-geo-alt"></i> Rouen </p>
                                    </div>
                              </div>
                          </div>
              
                          <!-- Card 7 -->
                          <div class="col mb-4">
                              <div class="card classperso position-relative">
                                  <img src="../public/assets/img/Img_page_ads/ménage.jpg" class="card-img-top" alt="...">
                                  <div class="card-img-overlay d-flex flex-column">
                                    <!-- Contenu de la carte -->
                                    <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                                        <i class="bi bi-heart favo"></i>
                                    </div>
                                    <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                                </div>
                                  <div class="card-body">
                                      <h5 class="card-title">Femme de ménage expérimentée</h5>
                                      <p><i class="bi bi-person"></i> Entreprise </p>
                                      <p><i class="bi bi-currency-euro"></i> 30€/H</p>
                                      <p><i class="bi bi-folder"></i> Ménage & nettoyage</p>
                                      <p> <img src="../public/assets/img/Img_page_ads/avatar7.webp" class="rounded-circle" width="30"> Hervé <i class="bi bi-star icon-etoile"></i> 5/5 19 avis </p> 
                                      <p> <i class="bi bi-geo-alt"></i> Toulon </p>
                                    </div>
                                </div>
                              </div>
                          
              
                          <!-- Card 8 -->
                          <div class="col mb-4">
                              <div class="card classperso position-relative">
                                  <img src="../public/assets/img/Img_page_ads/travaux.webp" class="card-img-top" alt="...">
                                  <div class="card-img-overlay d-flex flex-column">
                                    <!-- Contenu de la carte -->
                                    <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                                        <i class="bi bi-heart favo"></i>
                                    </div>
                                    <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                                </div>
                                  <div class="card-body">
                                      <h5 class="card-title">Trouver rapidement un bricoleur</h5>
                                      <p><i class="bi bi-person"></i> Auto-entrepreneur</p>
                                      <p><i class="bi bi-currency-euro"></i> 50€/H </p>
                                      <p><i class="bi bi-folder"></i> Jardinage & bricolage</p>
                                      <p> <img src="../public/assets/img/Img_page_ads/avatar8.jpg" class="rounded-circle" width="30"> Franc <i class="bi bi-star icon-etoile"></i> 4/5 8 avis  </p> 
                                      <p> <i class="bi bi-geo-alt"></i> Nante </p>
                                    </div>
                              </div>
                          </div>
                      </div>
<br>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col mb-4">
                  <div class="card classperso position-relative">
                    <img src="../public/assets/img/Img_page_ads/soin.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay d-flex flex-column">
                      <!-- Contenu de la carte -->
                      <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                          <i class="bi bi-heart favo"></i>
                      </div>
                      <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                  </div>
                    <div class="card-body">
                        <h5 class="card-title">Spécialiste de soin et de la mise en beauté</h5>
                        <p><i class="bi bi-person"></i> Entreprise</p>
                        <p><i class="bi bi-currency-euro"></i>40€/H</p>
                        <p><i class="bi bi-folder"></i> Santé et bien être</p>
                        <p> <img src="../public/assets/img/Img_page_ads/avatar9.webp" class="rounded-circle" width="30"> Margaux <i class="bi bi-star icon-etoile"></i> 4/5 19avis </p> 
                        <p> <i class="bi bi-geo-alt"></i>  Strasbourg</p>
                      </div>
                    </div>
                </div>
                <div class="col mb-4">
                  <div class="card classperso position-relative">
                    <img src="../public/assets/img/Img_page_ads/chien.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay d-flex flex-column">
                      <!-- Contenu de la carte -->
                      <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                          <i class="bi bi-heart favo"></i>
                      </div>
                      <p class="bg-ro text-white p-1 mt-5 align-self-end position-absolute">Demande</p>
                  </div>
                      <div class="card-body">
                          <h5 class="card-title">Faire garder mon chien par une aide à domicile</h5>
                          <p><i class="bi bi-person"></i> Particulier</p>
                          <p><i class="bi bi-currency-euro"></i>20€/H</p>
                          <p><i class="bi bi-folder"></i> Animaux</p>
                          <p> <img src="../public/assets/img/Img_page_ads/avatar7.webp" class="rounded-circle" width="30"> Hugo <i class="bi bi-star icon-etoile"></i> 4/5 2avis</p> 
                          <p> <i class="bi bi-geo-alt"></i>  Lyon</p>
                          </div>
                      </div>
                  </div>
                <div class="col mb-4">
                  <div class="card classperso position-relative">
                    <img src="../public/assets/img/Img_page_ads/cuisine.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay d-flex flex-column">
                      <!-- Contenu de la carte -->
                      <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                          <i class="bi bi-heart favo"></i>
                      </div>
                      <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                  </div>
                      <div class="card-body">
                            <h5 class="card-title">Un chef privé s'occupe de tout pour vous</h5>
                            <p><i class="bi bi-person"></i> Particulier</p>
                            <p><i class="bi bi-currency-euro"></i>50€/H</p>
                            <p><i class="bi bi-folder"></i>  Service à la personne</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar6.webp" class="rounded-circle" width="30"> Eric  <i class="bi bi-star icon-etoile"></i> 5/5 23 avis</p> 
                            <p> <i class="bi bi-geo-alt"></i>  Nice</p>
                            </div>
                      </div>
                  </div>
                <div class="col mb-4">
                  <div class="card classperso position-relative">
                    <img src="../public/assets/img/Img_page_ads/enfant.webp" class="card-img-top" alt="...">
                    <div class="card-img-overlay d-flex flex-column">
                      <!-- Contenu de la carte -->
                      <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                          <i class="bi bi-heart favo"></i>
                      </div>
                      <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                  </div>
                      <div class="card-body">
                            <h5 class="card-title">Jeune etudiante cherche à garder vos enfants</h5>
                            <p><i class="bi bi-person"></i> Particulier</p>
                            <p><i class="bi bi-currency-euro"></i> 20€/H</p>
                            <p><i class="bi bi-folder"></i> Enfant</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar1.webp" class="rounded-circle" width="30">  Claire  <i class="bi bi-star icon-etoile"></i> 4/5 8 avis</p> 
                            <p> <i class="bi bi-geo-alt"></i> Montpeillier</p>
                          </div>
                      </div>
                  </div>
                
                    <div class="col mb-4">
                      <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/informatique.webp" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                      </div>
                          <div class="card-body">
                            <h5 class="card-title">Informaticien propose ses services</h5>
                            <p><i class="bi bi-person"></i> Auto-entrepreneur</p>
                            <p><i class="bi bi-currency-euro"></i> 45€/H</p>
                            <p><i class="bi bi-folder"></i> Informatique & Administratif</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar2.jpg" class="rounded-circle" width="30"> Rosie <i class="bi bi-star icon-etoile"></i> 4/5 36 avis</p> 
                            <p> <i class="bi bi-geo-alt"></i> Paris </p>
                            </div>
                          </div>
                      </div>
                    <div class="col mb-4">
                      <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/réparer.jpg" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                      </div>
                          <div class="card-body">
                            <h5 class="card-title">Petite réparation rapide et efficace</h5>
                            <p><i class="bi bi-person"></i> Particulier</p>
                            <p><i class="bi bi-currency-euro"></i> 50€/H</p>
                            <p><i class="bi bi-folder"></i> Réparation & maintenance </p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar3.jpg" class="rounded-circle" width="30"> Jordan <i class="bi bi-star icon-etoile"></i> 4/5  26 avis </p> 
                            <p> <i class="bi bi-geo-alt"></i> Rouen </p>
                            </div>
                          </div>
                      </div>
                    <div class="col mb-4">
                      <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/ménage.jpg" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex flex-column">
                          <!-- Contenu de la carte -->
                          <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                              <i class="bi bi-heart favo"></i>
                          </div>
                          <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                      </div>
                          <div class="card-body">
                            <h5 class="card-title">Femme de ménage expérimentée</h5>
                            <p><i class="bi bi-person"></i> Entreprise </p>
                            <p><i class="bi bi-currency-euro"></i> 30€/H</p>
                            <p><i class="bi bi-folder"></i> Ménage & nettoyage</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar4.webp" class="rounded-circle" width="30"> Hervé <i class="bi bi-star icon-etoile"></i> 5/5 19 avis </p> 
                            <p> <i class="bi bi-geo-alt"></i> Toulon </p>
                            </div>
                          </div>
                      </div>
                    <div class="col mb-4">
                      <div class="card classperso position-relative">
                        <img src="../public/assets/img/Img_page_ads/travaux.webp" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                          <div class="card-img-overlay d-flex flex-column">
                            <!-- Contenu de la carte -->
                            <div class="bg-white p-1 rounded-circle align-self-end mb-5">
                                <i class="bi bi-heart favo"></i>
                            </div>
                            <p class="bg-gr text-white p-1 mt-5 align-self-end position-absolute">Offre</p>
                        </div>
                        </div>
                          <div class="card-body">
                            <h5 class="card-title">Trouver rapidement un bricoleur</h5>
                            <p><i class="bi bi-person"></i> Auto-entrepreneur</p>
                            <p><i class="bi bi-currency-euro"></i> 50€/H </p>
                            <p><i class="bi bi-folder"></i> Jardinage & bricolage</p>
                            <p> <img src="../public/assets/img/Img_page_ads/avatar5.webp" class="rounded-circle" width="30"> Aurélie <i class="bi bi-star icon-etoile"></i> 4/5 8 avis  </p> 
                            <p> <i class="bi bi-geo-alt"></i> Nante </p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <br>
                  <br>
    
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