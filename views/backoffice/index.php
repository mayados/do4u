<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Nunito"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
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
    <link rel="stylesheet" href="../../public/assets/sass/main.css" />

    <title>Do4U</title>
  </head>
  <body class="b-body d-flex flex-column">
    <?php include('sidebar.php'); ?>
    <section id="content" class="col-lg-9">
      <?php include('nav.php'); ?>

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
                <a class="active" href="index.php">Backoffice</a>
              </li>
            </ul>
          </div>
          <h4 class="">Bienvenue Do4u !</h4>
          <p>date : 12/10/2023</p>
        </div>
        <div class="container mt-5">
          <div class="row align-items-stretch">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="categorie-container p-2">
                <div class="categorie-num">
                  <i class="fa fa-xl fa-list"></i>
                </div>
                <div class="categorie-name fa-small">28 Catégories</div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="categorie-container p-2">
                <div class="annonce-num">
                  <i class="fa fa-xl fa-list"></i>
                </div>
                <div class="annonce-name fa-small">142 Annonces</div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="categorie-container p-2">
                <div class="uti-num">
                  <i class="fa fa-xl fa-list"></i>
                </div>
                <div class="uti-name fa-small">300 Utilisateurs</div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="categorie-container p-2">
                <div class="sin-num">
                  <i class="fa fa-xl fa-list"></i>
                </div>
                <div class="sin-name fa-small">10 Signalements</div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php include('footer.php'); ?>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../public/assets/js/backoffice.js"></script>
  </body>
</html>
