<?php $this->titre = 'Le site de Marwane Rezgui'; ?>

<?php foreach ($transactions as $transaction):
    ?>
    <article>
        <header>
            <a href="Transactions/lire/<?= $this->nettoyer($transaction['id']) ?>">
                <h1 class="titreTransaction"><?= $this->nettoyer($transaction['Daate']) ?></h1>
            </a>
            <strong class=""><?= $this->nettoyer($transaction['Prix']) ?></strong><br>
            par <?= $this->nettoyer($transaction['retourInformation']) ?><br>
            <time><?= $this->nettoyer($transaction['Daate']) ?></time>
        </header>
    </article>
    <hr />
<?php endforeach; ?>    
