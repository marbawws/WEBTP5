<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux transactions 
 * 
 * @author André Pilon
 */
class Transaction extends Modele {

// Renvoie la liste de tous les transactions, triés par identifiant décroissant avec le nom de l'utilisateus lié
    public function getTransactions() {
//        $sql = 'select transactions.id, titre, sous_titre, utilisateur_id, date, texte, type, nom from transactions, utilisateurs'
//                . ' where transactions.utilisateur_id = utilisateurs.id order by ID desc';
        $sql = 'SELECT t.id,'
                . ' t.Daate,'
                . ' t.Prix,'
                . ' t.utilisateur_id,'
                . ' t.retourInformation,'
                . ' u.nom,'
                . ' u.identifiant'
                . ' FROM transactions t'
                . ' INNER JOIN utilisateurs u'
                . ' ON t.utilisateur_id = u.id'
                . ' ORDER BY id desc';
        $transactions = $this->executerRequete($sql);
        return $transactions;
    }

// Renvoie la liste de tous les transactions, triés par identifiant décroissant
    public function setTransaction($transaction) {
        $sql = 'INSERT INTO transactions ('
                . ' Daate,'
                . ' Prix,'
                . ' utilisateur_id,'
                . ' retourInformation)'
                . ' VALUES(?, ?, ?, ?)';
        $result = $this->executerRequete($sql, [
            $transaction['Daate'],
            $transaction['Prix'],
            $transaction['utilisateur_id'],
            $transaction['retourInformation']
                ]
        );
        return $result;
    }

// Renvoie les informations sur un transaction avec le nom de l'utilisateur lié
    function getTransaction($idTransaction) {
        $sql = 'SELECT t.id,'
                . ' t.Daate,'
                . ' t.Prix,'
                . ' t.utilisateur_id,'
                . ' t.retourInformation,'
                . ' u.nom'
                . ' FROM transactions t'
                . ' INNER JOIN utilisateurs u'
                . ' ON t.utilisateur_id = u.id'
                . ' WHERE t.id=?';
        $transaction = $this->executerRequete($sql, [$idTransaction]);
        if ($transaction->rowCount() == 1) {
            return $transaction->fetch();  // Accès à la première ligne de résultat
        } else {
            throw new Exception("Aucune transaction ne correspond à l'identifiant '$idTransaction'");
        }
    }

// Met à jour un transaction
    public function updateTransaction($transaction) {
        $sql = 'UPDATE transactions'
                . ' SET Daate = ?,'
                . ' Prix = ?,'
                . ' utilisateur_id = ?,'
                . ' retourInformation = ?'
                . ' WHERE id = ?';
        $result = $this->executerRequete($sql, [
            $transaction['Daate'],
            $transaction['Prix'],
            $transaction['utilisateur_id'],
            $transaction['retourInformation'],
			$transaction['id']
                ]
        );
        return $result;
    }

}
