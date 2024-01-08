<?php
namespace Models;
use helpers\class\DB;

//require_once __DIR__.'/../bootstrap/app.php';


class Annonce
{
    public ?int $id;
    public ?string $titre;
    public ?string $datePublication;
    public ?string $photo;
    public ?string $description;
    protected ?float $prix;
    public ?string $ville;



    // Constructeur
    public function __construct(
        ?string $titre ,
        ?string $datePublication,
        ?string $photo,
        ?string $description,
        ?float $prix,
        ?string $ville,

    ) {
        $this->titre = $titre;
        $this->datePublication = $datePublication;
        $this->photo = $photo;
        $this->description = $description;
        $this->prix = $prix;
        $this->ville = $ville;

    }

    public static function getAll() {
        $sql = "SELECT * FROM annonce";
        $result = DB::statement($sql);
    
        // Vérifier si la requête a réussi et que le résultat est un tableau ou un objet
        if ($result !== false && is_iterable($result)) {
            return $result;
        }
    
        // Gérer les cas où la requête échoue ou le résultat n'est pas itérable
        return [];
    }
    

    public function addAnnonce()
    {
        return DB::statement(
            "INSERT INTO annonces ( titre, datePublication, photo, description, prix, ville)"
            . " VALUES ( :titre, :datePublication, :photo, :description, :prix, :ville)",
            [
               
                'titre' => $this->titre,
                'datePublication' => $this->datePublication,
                'photo' => $this->photo,
                'description' => $this->description,
                'prix' => $this->prix,
                'ville' => $this->ville,

            ],
        );
    }

    public function getAnnoncesByCategorie($categorie): void
    {
        // À implémenter
        // Vous pouvez ajouter la logique pour récupérer les annonces par catégorie ici
    }
}
