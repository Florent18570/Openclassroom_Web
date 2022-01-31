<!DOCTYPE html>
<html>
<header>
    <title> Page d'accueil</title>
    <?php include('bdd.php'); ?>
</header>
<body>


    <H1 style="text-align: center;"> 
        Fiche de révion cahier Anglais
    </H1>

    <h2>
        Ajout d'une page de révision
    </h2>

    <form method="post" action="tempon.php">
        <label for="numero_page">Numéro de la page </label>
        <input type="text" id="numero_page" name="numero_page" required
        minlength="4" maxlength="8" size="10">
        <button>
            Valider
        </button>


        <?php include('tableur.php'); ?>

        <script>
            var i = "coucou florent";
            console.log(i);
            i += " voila la suite";
            console.log(i);
        </script>

    </form>
</body>
</html>

