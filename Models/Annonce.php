<?php

namespace Models;
namespace Helpers;
use helpers\class\DB;

//require_once __DIR__.'/../bootstrap/app.php';


class Annonce
{
    public ?int $idAnnonce;
    public ?string $titre;
    public ?string $datePublication;
    public ?string $photo;
    public ?string $description;
    protected ?float $prix;
    public ?string $ville;
    public ?int $codePostal;
    public ?float $latitude;
    public ?float $longitude;

    // Constructeur
    public function __construct(
        ?int $idAnnonce = null,
        ?string $titre = null,
        ?string $datePublication = null,
        ?string $photo = null,
        ?string $description = null,
        ?float $prix = null,
        ?string $ville = null,
        ?int $codePostal = null,
        ?float $latitude = null,
        ?float $longitude = null
    ) {
        $this->idAnnonce = $idAnnonce;
        $this->titre = $titre;
        $this->datePublication = $datePublication;
        $this->photo = $photo;
        $this->description = $description;
        $this->prix = $prix;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }


    public function getAnnoncesByCategorie($categorie): void
    {


    }
    



    public function addAnnonce() : int|false
    {
        return DB::statement(
            "INSERT INTO annonce (idAnnonce, titre, datePublication, photo, description, prix, ville, codePostal, latitude, longitude)"
            ." VALUES (:idAnnonce, :titre, :datePublication, :photo, :description, :prix, :ville, :codePostal, :latitude, :longitude )",
            [
                'idAnnonce' => $this->idAnnonce,
                'titre' => $this->titre,
                'datePublication' => $this->datePublication,
                'photo' => $this->photo,
                'description' => $this->description,
                'prix' => $this->prix,
                'ville' => $this->ville,
                'codePostal' => $this->codePostal,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ],
        );
    }

}