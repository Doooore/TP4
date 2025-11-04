<?php include('entete.php');?>
    <header>
        <h1>TP4 Connexion</h1>
    </header>
   <body>
    <h2>
        <?php $identifiant = $_REQUEST["identifiant"]; 
        echo "Bonjour ", $identifiant; ?>
    <h2>


 <?php include('pieddepage.php');?>