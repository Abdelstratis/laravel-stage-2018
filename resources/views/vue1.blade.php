<!doctype html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Prive</title>

</head>

<body>
        <form action="public/prive" method="POST">

            {{ csrf_field() }}



            Accès à toutes les données </br> </br>

            Password :
            <input type="text" name="password" placeholder="" required>



            <input type="submit">


        </form>

        <?php




        ?>
</body>
</html>