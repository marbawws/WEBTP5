<?php $this->titre = "Le site de Marwane Rezgui - Places" ?>

<header>
    <h1 id="titreReponses">Places du site de Marwane Rezgui :</h1>
</header>
<?php
foreach ($places as $place):
    ?>
    <?php if ($place['efface'] == '0') : ?>
        <p><a href="AdminPlaces/confirmer/<?= $this->nettoyer($place['id']) ?>" >
                [Effacer]</a>
            <?= $this->nettoyer($place['auteur']) ?> dit :<br/>
            <strong><?= $this->nettoyer($place['Adresse']) ?></strong><br/>
            <?= $this->nettoyer($place['Description']) ?>
			<a href="Admintransactions/lire/<?= $this->nettoyer($place['transaction_id']) ?>" >
              [Voir la transaction]</a>
        </p>
    <?php else : ?>
        <p class="efface"><a href="AdminPlaces/retablir/<?= $this->nettoyer($place['id']) ?>" >
                [Rétablir]</a>
			Place par <?= $this->nettoyer($place['auteur']) ?> EFFACÉ!
        </p>
    <?php endif; ?>
<?php endforeach; ?>