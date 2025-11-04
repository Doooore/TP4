<?php include('entete.php');?>
    <header>
        <h1>TP4 Connexion</h1>
    </header>
   <body>
        <?php $identifiant = $_REQUEST["identifiant"]; 
        echo "Bonjour ", $identifiant; ?>


 <?php include('pieddepage.php');?>