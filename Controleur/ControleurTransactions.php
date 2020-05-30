<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Transaction.php';
require_once 'Modele/Place.php';

class ControleurTransactions extends Controleur {

    private $transaction;
    private $place;

    public function __construct() {
        $this->transaction = new Transaction();
        $this->place = new Place();
    }

// Affiche la liste de tous les transactions du blog
    public function index() {
        $transactions = $this->transaction->getTransactions();
        $this->genererVue(['transactions' => $transactions]);
    }

// Affiche les détails sur un transaction
    public function lire() {
        $idTransaction = $this->requete->getParametreId("id");
        $transaction = $this->transaction->getTransaction($idTransaction);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $places = $this->place->getPlacesPublics($idTransaction);
        $this->genererVue(['transaction' => $transaction, 'places' => $places, 'erreur' => $erreur]);
    }

}
