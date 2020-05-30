<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Place extends Modele {

    // Renvoie la liste des places associés à un transaction
    public function getPlaces($idTransaction = NULL) {
        if ($idTransaction == NULL) {
            $sql = 'SELECT p.id,'
                    . ' p.transaction_id,'
                    . ' p.Description,'
					. ' p.Adresse,'
                    . ' p.auteur,'
                    . ' p.efface,'
                    . ' t.Daate as DaateTransaction'
                    . ' FROM places p'
                    . ' INNER JOIN transactions t'
                    . ' ON p.transaction_id = t.id'
                    . ' ORDER BY id desc';;
        } else {
            $sql = 'SELECT * from places'
                    . ' WHERE transaction_id = ?'
                    . ' ORDER BY id desc';;
        }
        $places = $this->executerRequete($sql, [$idTransaction]);
        return $places;
    }

    // Renvoie la liste des places publics associés à un transaction
    public function getPlacesPublics($idTransaction = NULL) {
        if ($idTransaction == NULL) {
            $sql = 'SELECT p.id,'
                    . ' p.transaction_id,'
                    . ' p.Adresse,'
                    . ' p.Description,'
                    . ' p.auteur,'
                    . ' p.efface,'
                    . ' t.Daate as DaateTransaction'
                    . ' FROM places p'
                    . ' INNER JOIN transactions t'
                    . ' ON p.transaction_id = t.id'
                    . ' WHERE p.efface = 0 '																							
                    . ' ORDER BY id desc';
        } else {
            $sql = 'SELECT * FROM places'
                    . ' WHERE transaction_id = ? AND efface = 0'
                    . ' ORDER BY id desc';;
        }
        $places = $this->executerRequete($sql, [$idTransaction]);
        return $places;
    }

// Renvoie un place spécifique
    public function getPlace($id) {
        $sql = 'SELECT * FROM places'
                . ' WHERE id = ?';
        $place = $this->executerRequete($sql, [$id]);
        if ($place->rowCount() == 1) {
            return $place->fetch();  // Accès à la première ligne de résultat
        } else {
            throw new Exception("Aucune place ne correspond à l'identifiant '$id'");
        }
    }

// Supprime un place
    public function deletePlace($id) {
        $sql = 'UPDATE places'
                . ' SET efface = 1'
                . ' WHERE id = ?';
        $result = $this->executerRequete($sql, [$id]);
        return $result;
    }

    // Réactive un place
    public function restorePlace($id) {
        $sql = 'UPDATE places'
                . ' SET efface = 0'
                . ' WHERE id = ?';
        $result = $this->executerRequete($sql, [$id]);
        return $result;
    }

// Ajoute un place associés à un transaction
    public function setPlace($place) {
        $sql = 'INSERT INTO places ('
                . 'transaction_id,'
                . ' Adresse,'
                . ' Description,'
                . ' auteur)'
                . ' VALUES(?, ?, ?, ?)';
        $result = $this->executerRequete($sql, [
            $place['transaction_id'],
            $place['Adresse'],
            $place['Description'],
            $place['auteur']
                ]
        );
        return $result;
    }

}
