<html>
    <head>
        <title> Connexion </title>
        <link rel="stylesheet" href= "navigation.css">
        <style>
            form{
                display:block;
                border: 3px solid crimson;
                padding: 50px;
                margin-top: 80px;
                margin-bottom: 80px;
                margin-left: auto;
                margin-right: auto;
                width: max-content;
                border-style:double;
                align-items: center;
            }

            .bouton{
                color: white;
                background-color: crimson;
                border-color: crimson;
                width: 200px;
                font-weight: 600;
            }

            .bouton:hover{
                color: crimson;
                background-color: white;
                border-color: white;
            }
        </style>
    </head>

    <body>
        <nav>
            <img id="logo" src="HealHub.png">
            <ul>
                <li><a href="pLandingPatients.php">Patient</a></li>
                <li><a href="pLandingMedecins.php">Médecins</a></li>
                <li><a href="pLandingConsultation.php">Consultations</a></li>
                <li><a href="dureeConsMed.php">Statistiques</a></li>
            </ul>
        </nav>


        <form action="pConnection.php" method="post">

            <label for="user" id="user" > Nom d'utilisateur : </label>
            <input type="text" id="user" name="user" placeholder="Entrer le nom d'utilisateur" required><br><br>

            <label for="mdp"> Mots de passe : </label> 
            <input type="password" id="mdp" name="mdp" placeholder="Entrer le mot de passe" required><br><br>

            <input type="submit" value="Connexion" class='bouton'><br>
            <input type="reset" value="Effacer" class='bouton'><br>
        </form>

    <?php
        if(isset($_GET['erreur'])){
            $erreur=urldecode($_GET['erreur']);
            echo '<script>alert("' . $erreur . '");</script>';
        }
    ?>

    </body>

</htmL>