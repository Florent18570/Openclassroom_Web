<!DOCTYPE html>
<html>
<header>
    <title> Page d'accueil</title>
    <?php include('bdd.php'); ?>
    <link rel="stylesheet" href="style.css" />
</header>
<body>


    <H1 style="text-align: center;" title="Vous ne le regretterez pas !">> 
        Fiche de révion cahier Anglais
    </H1>

    <h2>
        Ajout d'une page de révision
    </h2>

    <form method="post" action="tempon.php">
        <label for="numero_page"> <em> Numéro de la page </em></label>
        <input type="text" id="numero_page" name="numero_page" required
        minlength="4" maxlength="8" size="10">
        <button>
            Valider
        </button>


        <?php include('tableur.php'); ?>
    

    </form>
</body>
</html>

