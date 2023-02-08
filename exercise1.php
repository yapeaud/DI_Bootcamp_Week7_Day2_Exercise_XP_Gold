<?php

if(isset($_POST['submit'])){
    //Cette instruction à exécuter
    // Définir les variables d'erreur et leur donner une valeur vide.
    $nErr = $eErr =$pErr = "";
    $msS = "";
    /*
        Récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
    */
        $name = $_POST[ 'name' ];
        $email = $_POST[ 'email'];
        $psw = $_POST[ 'psw' ];
       
        // Vérifie si le nom est vide
        if(empty($_POST[ 'name' ])){
            $nErr = "Entrez votre nom svp!";
        }
        else{
            $name = $_POST[ 'name' ];
            if(!preg_match("/^[a-zA-Z-']*$/",$name)){
               $nErr = "Seules les lettres et les espaces blancs sont autorisés";
            }
        }

        /*
            Utilisation la fonction  filter_var
            avec le filtre FILTER_VALIDATE_EMAILfiltre,
        */

        if(empty($_POST['email'])){
           $eErr = "Entrez une adresse e-mail valide";
        }
        else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $eErr = "L'adresse e-mail est incorrecte";
            }
        }


        // Le mot de passe comporte au moins 8 caractères
        if(empty($_POST['psw'])){
           $pErr = "Entrez un mot de passe";
        }
        else{
            $psw = $_POST['psw'];
            if(strlen( $psw) < 8 )
                {
                    $pErr = "Mot de passe non valide!"; 
               } 
        }

        //Message de success
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['psw'])){
             $msS = "Connexion établir vos données sont bien enregistrées.";
        }
    }
    // else
    // {
    // //Cette instruction à exécuter
    // echo "<p>le bouton de soumission n'a pas été cliqué</p>";
    // }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>exercise 1</title>
</head>
<style>.error{color: red;}</style>
<body>
    <h2 class="text-center"> Valider L'entrée Utilisateur</h2>
    <p class="text-center"><span class="error">* Champ Obligatoire</span></p>
    <main class="container">
        <form action="" method="post">
            <div class="mb-3">
                Name<span class="error">* <?php echo $nErr;?></span>
                <input type="text" class="form-control" name="name" >
            </div>
            <div class="mb-3">
                Email<span class="error">* <?php echo $eErr;?></span>
                <input type="text" class="form-control" name="email" >
               
            </div>
            <div class="mb-3">
                Password <span class="error">* <?php echo $pErr;?></span>
                <input type="password" class="form-control" name="psw" >
            </div>
            <button type="submit" class="btn btn-success" name="submit">Soumettre</button>&nbsp;&nbsp;<a href="index.php">Retour</a>
    </form>
    <div class="text-center text-success">
        <?php echo $msS ?>
    </div>
    
    </main>
</body>
</html>
 