<?php
use Models\Categorie;


require_once __DIR__.'../../../helpers/class/DB.php';

// Instantiate the DB class
$db = DB::getDB();

// Pagination settings
$recordsPerPage = 10; // Number of records to display on each page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Current page

// Calculate the offset for the SQL query
$offset = ($page - 1) * $recordsPerPage;

// Example query to get paginated data from the categorie table
$sql = "SELECT idCategorie, nomCategorie FROM categorie ORDER BY idCategorie ASC LIMIT $recordsPerPage OFFSET $offset";
$result = DB::fetch($sql);

// Get the total number of records for pagination
$totalRecords = DB::fetch("SELECT COUNT(*) as count FROM categorie")[0]['count'];
$totalPages = ceil($totalRecords / $recordsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content -->
</head>
<body class="b-body">
    <?php include('sidebar.php'); ?>
    <section id="content" class="col-lg-9">
        <?php include('nav.php'); ?>

        <main>
            <div class="head-title">
                <!-- Your header content -->
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
                            <?php foreach ($result as $cat): ?>
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
    <!-- Your script includes -->
</body>
</html>
