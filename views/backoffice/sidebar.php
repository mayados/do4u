<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Nunito"
    />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../../public/sass/main.css" />
</head>
<body>
    <section id="sidebar" class="col-lg-3">
        <a href="#" class="brand d-flex justify-content-center pt-lg-2">
        <h1 class="fw-bolder small">Do4U</h1>
        </a>
        <ul class="side-menu top ps-0">
        <li class="">
            <a href="index.php" class="icon-sidebar">
            <i class="bx bxs-dashboard"></i>
            <span class="text side-text">Backoffice</span>
            </a>
        </li>
        <li>
            <a href="utilisatuer.php">
            <i class="bx bx-group"></i>
            <span class="text">Utilisatuer</span>
            </a>
        </li>
        <li>
            <a href="annonce.php">
            <i class="bx bxs-chart"></i>
            <span class="text">Annonces</span>
            </a>
        </li>
        <li>
            <a href="categorie.php">
            <i class="bx bx-chart"></i>
            <span class="text">Catégorie</span>
            </a>
        </li>
        <li>
            <a href="typeAnnoce.php">
                <i class="bx bx-doughnut-chart"></i>
                <span class="text">TypeAnnonce</span>
            </a>
        </li>

        <!-- with collapse -->
        <li>
            <a>
                <i class="bx bx-message-dots"></i>
                <span class="text">Communication</span>
                <i class="d-flex bx bx-down-arrow" data-bs-toggle="collapse" href="#message" role="button" aria-expanded="false" aria-controls="message"></i>
            </a>
            
        </li>
        <li class="ps-3 collapse" id="message">
            <a href="conversation.php">
                <i class="bx bx-message-dots"></i>
                <span class="text">Conversation</span>
            </a>
        </li>
        <li class=" ps-3 collapse" id="message">
            <a href="conversation.php">
                <i class="bx bx-file"></i>
                <span class="text">Message</span>
            </a>
        </li>

        <li>
            <a href="avis.php">
            <i class="bx bx-conversation"></i>
            <span class="text">Avis</span>
            </a>
        </li>
        <li>
            <a href="signalement.php">
            <i class="bx bx-conversation"></i>
            <span class="text">Signalement</span>
            </a>
        </li>
        </ul>
        <ul class="side-menu ps-0">
        <li>
            <a href="#">
            <i class="bx bx-cog"></i>
            <span class="text">Paramètres</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
            <i class="bx bx-log-out-circle"></i>
            <span class="text">Déconnexion</span>
            </a>
        </li>
        </ul>
        <div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>