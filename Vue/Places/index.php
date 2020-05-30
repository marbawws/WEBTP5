<?php $this->titre = "Le site de Marwane Rezgui - Places" ?>

<header>
    <h1 id="titreReponses">Places du site de Marwane Rezgui :</h1>
</header>
<?php
foreach ($places as $place):
    ?>
    <?php 
        ?>
        <p><?= $this->nettoyer($place['auteur']) ?> dit : <br/>
            <strong><?= $this->nettoyer($place['Adresse']) ?></strong><br/>
            <?= $this->nettoyer($place['Description']) ?><br />
            <!-- Vers Admintransactions si utilisateur en session -->
            <a href="<?= ($utilisateur != '') ? 'Admin' : '' ?>Transactions/lire/<?= $this->nettoyer($place['transaction_id']) ?>" >
                [écrit pour la transaction <i><?= $this->nettoyer($place['DaateTransaction']) ?></i>]</a>
        </p>
<?php endforeach; ?>