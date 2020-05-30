<?php $titre = 'Le Blogue du prof version 1.0.0.1'; ?>

<ul>
<h2><a href="https://github.com/marbawws/WEBTP5.git">LIEN VERS LE DEPOT GIT</a></h2>
    <li>Marwane Rezgui</li>

    <li>420-4A4 MO Web et Bases de données</li>
    <li>Hiver 2020, Collège Montmorency</li>
</ul>
<h3>Le site de Marwane Rezgui</h3>
<ul>
    <li>L'application "Le site de Marwane" permet de composer et de
        diffuser des transactions.</li>
    <li>La page d'Accueil présente la liste des dates des transactions
        et le nom de l'auteur :</li>
    <ul>
        <li>Cette version n'offre pas encore la gestion des auteurs.
            Les auteurs doivent être entrées manuellement dans la base de données.<br>
        </li>
        <li>
            Pour fin de démonstration, cette version offre la possibilité de changer de contrôleur d'accueil.<br/>
            L'accueil présente alors plutôt la liste de tous les places à l'accueil :
			L'accueil présente alors plutôt la liste de tous les places à l'accueil, avec un lien menant à l'transaction associé.<br/>
            Cela peut vous être utile si vous désirez présenter à l'accueil le côté n de la relation 1 à n pour votre application.
            </ul>
        </li>
        <li>
            <form action="<?= $utilisateur != '' ? 'Admin' : ''; ?>places" method="post">
                <input type="submit" value="Changer de controleur d'accueil">
            </form>
        </li>
    </ul>
    <li>Si un utilisateur est en session : </li>
    <ul>
        <li>On y retrouve un lien pour créer une nouvelle transaction :
            <ul>
                <li>
                    La transaction créé est attribué à l'utilisateur en session
                </li>
            </ul>
        </li>
        <li>
            Les actions pour effacer/rétablir une place sont affichées ;
        </li>
        <li>
            Il n'est plus possible d'ajouter une place pour une transaction.
        </li>
    </ul>
    <ul>
        <li>À la suite du texte de la transaction on offre la possibilité de
            laisser une place sur la transaction ;</li>
        <li>La personne qui veut laisser une place doit
            s'identifier à l'aide d'un courriel valide :</li>
        <ul>
            <li>Un message est affiché si le courriel est invalide et la
                place n'est pas enregistré.<br>
            </li>
        </ul>
        <ul>
        </ul>
        <li>On peut effacer une place après confirmation (par l'auteur de la transaction dans une prochaine version).</li>
        <li>Une place effacé peut être rétabli (par l'auteur de la transaction dans une prochaine version).</li>
        <li>Une place ne peut pas être modifié.<br>
        </li>
    </ul>
</ul>
<br>

<table>
    <tr>
        <td>
            <h4>Base de données utilisée par l'application :</h4>
            <object data="Contenu/images/Blogue-vers-MVC-v1_0_0_0.svg" type="image/svg+xml" height="500" width="800">
                <img src="Contenu/images/maBD.PNG" alt=""/>
            </object><br/>
        </td>
    </tr>
    <tr>
        <td>
            <h4>Basé sur ce modèle original :</h4>
            <a href="http://www.databaseanswers.org/data_models/fuel_stock/index.htm" >
                <img src="Contenu/images/bd_Barry.png" alt=""/><br/>
                Lien vers la bd :</a>
        </td>
    </tr>
</table>