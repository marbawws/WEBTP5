<?php

require_once 'Controleur/ControleurAdmin.php';
require_once 'Modele/Place.php';

class ControleurAdminPlaces extends ControleurAdmin {

    private $place;

    public function __construct() {
        $this->place = new Place();
    }

// L'action index n'est pas utilisée mais pourrait ressembler à ceci 
// en ajoutant la fonctionnalité de faire afficher tous les places
    public function index() {
        $places = $this->place->getPlaces();
        $this->genererVue(['places' => $places]);
    }
  
// Confirmer la suppression d'un place
    public function confirmer() {
        $id = $this->requete->getParametreId("id");
        // Lire le place à l'aide du modèle
        $place = $this->place->getPlace($id);
        $this->genererVue(['place' => $place]);
    }

// Supprimer un place
    public function supprimer() {
        $id = $this->requete->getParametreId("id");
        // Lire le place afin d'obtenir le id de l'transaction associé
        $place = $this->place->getPlace($id);
        // Supprimer le place à l'aide du modèle
        $this->place->deletePlace($id);
        //Recharger la page pour mettre à jour la liste des places associés
        $this->rediriger('Admintransactions', 'lire/' . $place['transaction_id']);
    }

    // Rétablir un place
    public function retablir() {
        $id = $this->requete->getParametreId("id");
        // Lire le place afin d'obtenir le id de l'transaction associé
        $place = $this->place->getPlace($id);
        // Supprimer le place à l'aide du modèle
        $this->place->restorePlace($id);
        //Recharger la page pour mettre à jour la liste des places associés
        $this->rediriger('Admintransactions', 'lire/' . $place['transaction_id']);
    }

}
