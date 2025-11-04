<?php include('entete.php');?>

   <body>
        <h1>Connexion</h1>
        
        <form action="connexion.php">
            <label>Identifiant : </label>
            <input type="text" name="identifiant" required>
            <br>
            <br>
            <label>Mot de passe : </label>
            <input type="password" name="motdepasse" required>
            <br>
            <br>
            <button type="submite">Se connecter</button>
        </form>

    </body>
 <?php include('pieddepage.php');?>


