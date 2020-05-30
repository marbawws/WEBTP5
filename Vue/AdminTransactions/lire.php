<?php $this->titre = "Le site de Marwane Rezgui - " . $this->nettoyer($transaction['titre']); ?>

<article>
    <header>
        <h1 class="titreTransaction"><?= $this->nettoyer($transaction['Daate']) ?></h1>
        <time><?= $this->nettoyer($transaction['Daate']) ?></time>, par <?= $this->nettoyer($transaction['nom']) ?>
    </header>
    <p><?= $this->nettoyer($transaction['Prix']) ?></p>
    <p><?= $this->nettoyer($transaction['retourInformation']) ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $this->nettoyer($transaction['Daate']) ?> :</h1>
</header>
<?= ($places->rowCount() == 0) ? '<p class="message">Pas encore de places pour cet transaction.</p>' : '' ?>
<?php
foreach ($places as $place):
    ?>
    <?php if ($place['efface'] == '0') : ?>
        <!--<<!--?= $this->nettoyer($place['prive']) ? '<p class="prive">' : '<p>'; ?-->>-->
        <a href="AdminPlaces/confirmer/<?= $this->nettoyer($place['id']) ?>" >
            [Effacer]</a>
			<?= $this->nettoyer($place['auteur']) ?> dit :<br/>
            <strong><?= $this->nettoyer($place['Adresse']) ?></strong><br/>
            <?= $this->nettoyer($place['Description']) ?>
        </p>
    <?php else : ?>
        <p class="efface"><a href="AdminPlaces/retablir/<?= $this->nettoyer($place['id']) ?>" >
                [Rétablir]</a>
            Place par <?= $this->nettoyer($place['auteur']) ?> effacé! ?>)
        </p>
    <?php endif; ?>
<?php endforeach; ?>



