<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <title>Do4U</title>
  </head>
  <body class="b-body">
    <section id="sidebar" class="col-lg-3">
      <a href="#" class="brand d-flex justify-content-center pt-lg-2">
        <h1 class="fw-bolder small">Do4U</h1>
      </a>
      <ul class="side-menu top ps-0">
        <li class="">
          <a href="index.html" class="icon-sidebar">
            <i class="bx bxs-dashboard"></i>
            <span class="text side-text">Backoffice</span>
          </a>
        </li>
        <li>
          <a href="utilisatuer.html">
            <i class="bx bx-group"></i>
            <span class="text">Utilisatuer</span>
          </a>
        </li>
        <li>
          <a href="annonce.html">
            <i class="bx bxs-chart"></i>
            <span class="text">Annonces</span>
          </a>
        </li>
        <li>
          <a href="categorie.html">
            <i class="bx bx-chart"></i>
            <span class="text">Catégorie</span>
          </a>
        </li>
        <li>
          <a href="typeAnnoce.html">
            <i class="bx bx-doughnut-chart"></i>
            <span class="text">TypeAnnonce</span>
          </a>
        </li>
        <li>
          <a
            data-toggle="collapse"
            href="#conversation"
            role="button"
            aria-expanded="false"
            aria-controls="conversation"
          >
            <i class="bx bx-message-dots"></i>
            <span class="text">Conversation</span>
            <i class="bx bx-down-arrow align-items-end"></i>
          </a>
        </li>
        <div class="collapse" id="conversation">
          <li><a class="text ps-5" href="conversation.html">Message</a></li>
        </div>
        <li>
          <a href="avis.html">
            <i class="bx bx-conversation"></i>
            <span class="text">Avis</span>
          </a>
        </li>
        <li>
          <a href="signalement.html">
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
    </section>

    <section id="content" class="col-lg-9">
      <nav>
        <i class="bx bx-menu" style="color: white; padding-left: 10px"></i>
        <form action="#">
          <div class="form-input"></div>
        </form>
        <a href="#" class="profile">
          <img src="../../public/img/woman_photo.jpg" />
        </a>
      </nav>

      <main>
        <div class="head-title">
          <div class="left">
            <h1>Backoffice</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Backoffice</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="categorie.html">Catégories</a>
              </li>
            </ul>
          </div>
          <p>date : 12/10/2023</p>
        </div>
        <div class="container mt-5">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Label</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Label</td>
                  <td class="action">
                    <i class="fa-regular fa-trash-can pe-2"></i>
                    <i class="fa-regular fa-pen-to-square"></i>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Label</td>
                  <td class="action">
                    <i class="fa-regular fa-trash-can pe-2"></i>
                    <i class="fa-regular fa-pen-to-square"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
      <footer>
        <div class="footer d-footer mt-auto">
          <div class="d-flex align-items-center justify-content-center">
            <p class="text-center text-light">Do4U - 2023</p>
          </div>
        </div>
      </footer>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../public/js/backoffice.js"></script>
  </body>
</html>