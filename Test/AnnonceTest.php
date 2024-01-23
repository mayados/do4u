<?php

//./vendor/bin/phpunit tests/AuthControllerTest.php

use App\Controllers\AdsController;
use PHPUnit\Framework\TestCase;
use App\Controllers\AuthController;

class AnnonceTest extends TestCase{

    public function testCreateAnnonceSuccess()
    {
        $annonceController = new AdsController();

        $data = [
            'createurId' => 1,
            'titre' => 'test',
            'description' => 'test',
            'prix' => '10',
            'ville' => 'test',
            'codePostal' => 'test',
            'categorieId' => 1, 
            'typeAnnonceId' => 1,
        ];

        $_SERVER["REQUEST_METHOD"] = "POST";
        $_POST = $data;
        $_FILES['file'] = [
            'name' => 'test.jpg',
            'tmp_name' => '/tmp/test.jpg',
            'size' => 1000000,
        ];

        ob_start();
        $annonceController->createAnnonce();
        $output = ob_get_clean();

        $this->assertStringContainsString('Annonce créée avec succès', $output);
    }
}

