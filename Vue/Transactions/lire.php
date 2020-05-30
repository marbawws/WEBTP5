<?php $this->Daate = "Le site de Marwane Rezgui - " . $this->nettoyer($transaction['Daate']); ?>

<article>
    <header>
        <h1 class="DaateTransaction"><?= $this->nettoyer($transaction['Daate']) ?></h1>
        <time><?= $this->nettoyer($transaction['Daate']) ?></time>, par <?= $this->nettoyer($transaction['nom']) ?>
    </header>
    <p><?= $this->nettoyer($transaction['Prix']) ?></p>
    <p><?= $this->nettoyer($transaction['retourInformation']) ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $this->nettoyer($transaction['Daate']) ?> :</h1>
</header>
<?= ($places->rowCount() == 0) ? '<p class="message">Pas encore de places pour cette transaction.</p>' : '' ?>
<?php
foreach ($places as $place):
    ?>
        <p>
            <?= $this->nettoyer($place['auteur']) ?> dit :<br/>
            <strong><?= $this->nettoyer($place['Adresse']) ?></strong><br/>
            <?= $this->nettoyer($place['Description']) ?>
        </p>
<?php endforeach; ?>

<form action="Places/ajouter" method="post">
    <h2>Ajouter un place</h2>
    <p>
        <label for="auteur">Courriel de l'auteur (xxx@yyy.zz)</label> : <input type="text" name="auteur" id="auteur" /> 
        <?= ($erreur == 'courriel') ? '<span style="color : red;">Entrez un courriel valide s.v.p.</span>' : '' ?> 
        <br />
        <label for="texte">Adresse</label> :  <input type="text" name="Adresse" id="Adresse" /><br />
        <label for="texte">Description</label> :  <textarea type="text" name="Description" id="Description" >Écrivez la description ici</textarea><br />
        <input type="hidden" name="transaction_id" value="<?= $this->nettoyer($transaction['id']) ?>" /><br />
        <input type="submit" value="Envoyer" />
    </p>
</form>


