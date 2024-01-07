<?php

require_once __DIR__.'/../../helpers/class/DB.php';

// Instantiate the DB class
$db = DB::getDB();

// Pagination settings
$recordsPerPage = 10; // Number of records to display on each page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Current page

// Calculate the offset for the SQL query
$offset = ($page - 1) * $recordsPerPage;

// Example query to get paginated data from the categorie table
$sql = "SELECT idCategorie, nomCategorie FROM categorie ORDER BY idCategorie ASC LIMIT $recordsPerPage OFFSET $offset";
$categories = DB::fetch($sql);

// Get the total number of records for pagination
$totalRecords = DB::fetch("SELECT COUNT(*) as count FROM categorie")[0]['count'];
$totalPages = ceil($totalRecords / $recordsPerPage);
?>

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
    <link rel="stylesheet" href="../../public/assets/sass/main.css" />

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
                        <a class="active" href="conversation.php">Conversation</a>
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
                            <?php foreach ($categories as $cat): ?>
                                <tr>
                                    <td><?php echo $cat['idCategorie']; ?></td>
                                    <td><?php echo $cat['nomCategorie']; ?></td>
                                    <td class="action">
                                        <i class="fa-regular fa-trash-can pe-2"></i>
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </td>
                                </tr>
                            <?php endforeach; ?>  
                        </tbody>
                    </table>
                </div>

                <!-- Pagination links -->
                <div aria-label="Page navigation">
                    <ul class="pagination  d-flex justify-content-center pt-3">
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?php echo ($i === $page) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
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
