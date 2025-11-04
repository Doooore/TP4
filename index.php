<?php include('entete.php');?>

   <body>
        <header id="entete">
            <h1>Document minimal en MMI</h1>
        </header>        

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
            

        <section id="Titre">
            <h3>Titre de section</h3>
         </section>
    </body>
 <?php include('pieddepage.php');?>


