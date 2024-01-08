<?php

namespace Models;

require_once __DIR__.'/../bootstrap/app.php';


class Utilisateur
{
    public ?int $idUtilisateur;
    public ?string $email;
    public ?string $nomUtilisateur;
    public ?string $prenomUtilisateur;
    public ?string $description;
    protected ?string $photo;
    public ?string $villeUtilisateur;
    public ?int $codePostalUtilisateur;
   

    // Constructeur
    public function __construct(
        ?int $idUtilisateur = null,
        ?string $email = null,
        ?string $nomUtilisateur = null,
        ?string $prenomUtilisateur = null,
        ?string $description =null,
        ?string $photo = null,
        ?string $villeUtilisateur = null,
        ?int $codePostalUtilisateur = null,
      
    ) {
        $this->idUtilisateur = $idUtilisateur;
        $this->email= $email;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenomUtilisateur = $prenomUtilisateur;
        $this->description = $description;
        $this->photo = $photo;
        $this->villeUtilisateur = $villeUtilisateur;
        $this->codePostalUtilisateur = $codePostalUtilisateur;
       
    }
    public function hasRole($role){
     
    }
}