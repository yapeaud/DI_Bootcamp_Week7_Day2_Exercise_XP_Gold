<?php
    //Verifie si le bouton de soumission a été cliqué;
    if(isset($_POST['submit'])){

        $nbr1 = $nbr2 = $nbr = "";

        // récupère les données du formulaire à partir du tableau $_POST,
        $nbr1 = $_POST['nbr1'];
        $nbr2 = $_POST[ 'nbr2' ];
        $nbr = "";

        // Additionne les deux nombres et calcule le résultat.
        $nbr = $nbr1 + $nbr2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Exercise 2</title>
</head>
<body>
    <h2 class="text-center"> Somme De Nombres</h2>
    <main class="container text-center mt-5">
        <form action="" method="post">
            <div class="mb-3">
                Entrez le premier nombre.
                <input type="number" name="nbr1">
            </div>
            <div class="mb-3">
                Entrez le deuxième nombre.
                <input type="number" name="nbr2">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Additionner</button>&nbsp;&nbsp;<a href="index.php">Retour</a>
        </form>
    </main>

    <!-- Affichade du resultats sur la page. -->
        <div class="text-center mt-5">
        <?php
            
            echo"<h2>Resultat</h2>";
            echo "La somme de " . $nbr1 ." et " . $nbr2 . " est: " . $nbr;
           

        ?>
    </div>
</body>
</html>