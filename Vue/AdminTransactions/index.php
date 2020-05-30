<?php $this->titre = 'Le site de Marwane Rezgui'; ?>

<a href="Admintransactions/ajouter">
    <h2 class="titreTransaction">Ajouter une transaction</h2>
</a>
<?php foreach ($transactions as $transaction):
    ?>

    <article>
        <header>
            <a href="Transactions/lire/<?= $this->nettoyer($transaction['id']) ?>">
               <h1 class="titreTransaction"><?= $this->nettoyer($transaction['Daate']) ?></h1>
            </a>
            <strong class=""><?= $this->nettoyer($transaction['Prix']) ?></strong><br>
            par <?= $this->nettoyer($transaction['nom']) ?><br>
            <?= $this->nettoyer($transaction['retourInformation']) ?><br>
            <a href="Admintransactions/modifier/<?= $this->nettoyer($transaction['id']) ?>"> [modifier la transaction]</a>
        </header>
    </article>
    <hr />
<?php endforeach; ?>    
