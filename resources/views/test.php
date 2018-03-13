<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset=utf-8" />




</head>

<body>

<table class="table table-striped">
    <CAPTION> Liste des clients </CAPTION>

    <tr>
        <th> id </th>
        <th> nom </th>
        <th> mail </th>
        <th> message </th>
    </tr>

    <?php
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=tuto', 'root', '', $pdo_options);


        // On recupere tout le contenu de la table client
        $reponse = $bdd->query('SELECT id, nom ,mail, message FROM client');

// On affiche le resultat
        while ($donnees = $reponse->fetch())
        {
            //On affiche les données dans le tableau
            echo "</tr>";
            echo "<td> $donnees[id] </td>";
            echo "<td> $donnees[nom] </td>";
            echo "<td> $donnees[mail] </td>";
            echo "<td> $donnees[message] </td>";
            echo "</tr>";


        }
        $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>

</table>
</body>
</html>