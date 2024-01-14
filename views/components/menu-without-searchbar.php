<!-- Delete searchbar on desktop version too for these pages ? -->
<header> 
        <nav class="na">
            <input type="checkbox" id="burger-check">            
            <h1><a href="index.php" id="link-logo"><img src="../public/assets/img/logo_do4u.svg" alt="logo Do4U" class="logo"></a> </h1>
            <button class="na__burger-menu" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop">
                    <span></span>
                    <span></span>
                    <span></span>
            </button>               
            <form class="na__form na__form--mobile" action="ads.php" method="get">
                <div class="na__container_fields">
                    <input type="text" name="terme" placeholder="chercher une annonce par mot-clé" aria-label="Rechercher une annonce" class="na__input">
                </div>
                <button class="na__search-glass" type="submit" aria-label="Rechercher"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasEndLabel"><a href="index.php"><img src="../public/img/logo_do4u.svg" alt="logo Do4U" class="logo"></a></h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                    <ul class="na__list--mobile">
                        <li>
                            <button class="link-annonces bg-transparent border-0" role="button"  aria-haspopup="true" aria-expanded="false" aria-label="Afficher les catégories d'annonces">Annonces <i class="fa-solid fa-chevron-down"></i></button>   
                            <ul role="menuitem" class="p-0 na__dropdown na__dropdown_annonces">
                                <li><a href="ads.php">Ménage</a></li>
                                <li><a href="ads.php">Services à la personne</a></li>
                                <li><a href="ads.php">Rénovation & construction</a> </li>
                                <li><a href="ads.php">Jardinage & bricolage</a> </li>
                                <li><a href="ads.php">Réparation & maintenance</a></li> 
                                <li><a href="ads.php">Informatique & administratif</a> </li>
                                <li><a href="ads.php">Cours & coaching</a> </li>
                                <li><a href="ads.php">Santé & bien-être</a> </li>
                                <li><a href="ads.php">Evenements & divertissements</a> </li>
                                <li><a href="ads.php">Animaux</a> </li>
                                <li><a href="ads.php">Artisanat & création</a></li>
                                <li><a href="ads.php">Garde d'enfants</a> </li>
                                <li><a href="ads.php">Autre</a></li> 
                            </ul>
                        </li> 
                        <li>
                            <a href="creationAd.php" class="nav-link button-primary-pill"><i class="fa-solid fa-plus"></i> Créer une annonce</a>   
                        </li> 
                        <li>
                            <a href="contact.php" class="nav-link">Contact</a>   
                        </li> 
                        <li>
                            <a href="messenger.php" class="nav-link" aria-label="Consulter la messagerie"><i class="fa-solid fa-envelope"></i></a>   
                        </li> 
                        <li class="na__link_dropdown" id="dropdown-link-user">
                            <button class="border-0 bg-transparent user-link" role="button" aria-haspopup="true" aria-label="Ouvrir le sous-menu utilisateur"><i class="fa-solid fa-user"></i></button>
                            <ul class="na__dropdown na__dropdown_user" aria-label="Sous-menu utilisateur">
                                <li>
                                    <a href="myProfile.php">Mon profil</a>
                                </li>
                                <li>
                                    <a href="parameters.php">Paramètres</a>
                                </li>
                                <li>
                                    <a href="connexion.php">Déconnexion</a>
                                </li>
                            </ul>   
                        </li> 
                    </ul>   
                </div>
            </div>
            <ul class="na__list p-0">
                <li class="dropdown-link-annonces">
                    <button  class="bg-transparent border-0 link-annonces" aria-haspopup="true" aria-label="Ouvrir le sous-menu" aria-expanded="false">Annonces <i class="fa-solid fa-chevron-down"></i></button>   
                    <ul role="menuitem" class="na__dropdown na__dropdown_annonces">
                        <li><a href="ads.php">Ménage</a></li>
                        <li><a href="ads.php">Services à la personne</a></li>
                        <li><a href="ads.php">Rénovation & construction</a> </li>
                        <li><a href="ads.php">Jardinage & bricolage</a> </li>
                        <li><a href="ads.php">Réparation & maintenance</a></li> 
                        <li><a href="ads.php">Informatique & administratif</a> </li>
                        <li><a href="ads.php">Cours & coaching</a> </li>
                        <li><a href="ads.php">Santé & bien-être</a> </li>
                        <li><a href="ads.php">Evenements & divertissements</a> </li>
                        <li><a href="ads.php">Animaux</a> </li>
                        <li><a href="ads.php">Artisanat & création</a></li>
                        <li><a href="ads.php">Garde d'enfants</a> </li>
                        <li><a href="ads.php">Autre</a></li> 
                    </ul>
                </li> 
                <li>
                    <a href="creationAd.php" class="nav-link button-primary-pill"><i class="fa-solid fa-plus"></i> Créer une annonce</a>   
                </li> 
                <li>
                    <a href="contact.php" class="nav-link">Contact</a>   
                </li> 
                <li>
                    <a href="messenger.php" class="nav-link" aria-label="Consulter la messagerie"><i class="fa-solid fa-envelope"></i></a>   
                </li> 
                <li class="na__link_dropdown" id="dropdown-link-user">
                    <button class="border-0 nav-link user-link" aria-haspopup="true" aria-label="Ouvrir le sous-menu utilisateur" role="button"><i class="fa-solid fa-user"></i></button>
                    <ul class="na__dropdown na__dropdown_user" aria-label="Sous-menu utilisateur">
                        <li>
                            <a href="myProfile.php">Mon profil</a>
                        </li>
                        <li>
                            <a href="parameters.php">Paramètres</a>
                        </li>
                        <li>
                            <a href="connexion.php">Déconnexion</a>
                        </li>
                    </ul>   
                </li> 
            </ul>              
        </nav>          
    </header>