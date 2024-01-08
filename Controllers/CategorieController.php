<?php

namespace Controllers;
require_once 'Controller.php';

use Models\CategorieModel;

class CategorieController
{
    public function index()
    {
        // Instantiate the CategorieModel class
        $categorieModel = new CategorieModel();

        // Pagination settings
        $recordsPerPage = 10;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

        // Get paginated categories and total categories from the model
        $categories = $categorieModel->getPaginatedCategories($page, $recordsPerPage);
        $totalPages = ceil($categorieModel->getTotalCategories() / $recordsPerPage);


        // Include the view file
        include_once(__DIR__ . '/../views/categorie.php');
    }
}
