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
                <a class="active" href="utilisatuer.html">Utilisatuer</a>
              </li>
            </ul>
          </div>
          <h4 class="">Bienvenue Do4u !</h4>
          <p>date : 12/10/2023</p>
        </div>
        <div class="container mt-5">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Role</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>AHMADI</td>
                  <td>Zahra</td>
                  <td>Admin</td>
                  <td>Active</td>
                  <td class="action">
                    <i class="fa-regular fa-trash-can pe-2"></i>
                    <i class="fa-regular fa-pen-to-square"></i>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>AHMADI</td>
                  <td>Zahra</td>
                  <td>Admin</td>
                  <td>Active</td>
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
        <div class="footer">
          <div class="d-flex align-items-center justify-content-center pt-2">
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