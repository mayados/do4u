<?php

namespace Models;

require_once __DIR__.'/../bootstrap/app.php';
include_once(__DIR__ . './../helpers/class/DB.php');

use DB;

class CategorieModel
{   
    public function getPaginatedCategories($page, $recordsPerPage)
    {
        $offset = ($page - 1) * $recordsPerPage;
        $sql = "SELECT idCategorie, nomCategorie FROM categorie ORDER BY idCategorie ASC LIMIT $recordsPerPage OFFSET $offset";
        return DB::fetch($sql);
    }

    public function getTotalCategories()
    {
        try {
            $sql = "SELECT COUNT(*) as count FROM categorie";
            $result = DB::fetch($sql);

            return isset($result[0]['count']) ? $result[0]['count'] : 0;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return 0;
        }
    }
}