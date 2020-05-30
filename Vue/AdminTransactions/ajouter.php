<?php $this->titre = "Ajouter une transaction au site de Marwane Rezgui"; ?>

<header>
    <h1 id="titreReponses">Ajouter une transaction au nom de <u><?= $utilisateur ?></u> :</h1>
</header>
<form action="Admintransactions/nouvelTransaction" method="post">
    <h2>Ajouter un article</h2>
    <p>
		<label for="retourInformation">Retour d'information:</label><br/> <textarea type="text" name="retourInformation" rows="4" cols="25" id="retourInformation"> Écrivez votre retour d'information</textarea><br /><br/><br/>
        <label for="Daate">Date</label><br/>   <input type="date" name="Daate" id="Daate"  /><br /><br/><br/>
		<label for="Prix">Prix</label><br/>   <input type="number" name="Prix" id="Prix"  /><br /><br/><br/>	
        <input type="hidden" name="utilisateur_id" value="<?= $idUtilisateur ?>" /><br />
        <input type="submit" value="Envoyer" />
    </p>
</form>


