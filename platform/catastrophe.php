<?php
    require "elements/header.php";
?>

<body class="options disaster">
    <div class=" boldness">
        <a href="accueil.php"><i class="fa fa-home mx-2"></i>Retour au menu principal</a>
        <h1>GESTION DES CATASTROPHES</h1>
    </h1>
    <div class="row justify-content-center text-center mt-5">
        <div class="row params justify-content-center">
            <div class="title my-3">PARAMETRES GENERAUX:</div>
            <div class="col-3 mx-1 info">
                <div class="titles">Niveau de la mer:</div>
                <div class="result">xx m</div>
            </div>
            <div class="col-3 mx-1 info">
                <div class="titles">Vitesse du vent:</div>
                <div class="result">xx m.s<sup>-1</sup></div>
            </div>
            <div class="col-3 mx-1 info">
                <div class="titles">Secousse:</div>
                <div class="result">xx</div>
            </div>
        </div>
        
        <div class="row story">
            <div class="title my-3">HISTORIQUE DES CATASTROPHES:</div>
            <div class="table-responsive ">
                <table class="table table-stripped-primary text-white">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Caracteristiques</th>
                            <th scope="col">Bilan</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="row advises">
            <div class="title my-3">Conseils en cas de catastrophe</div>
        </div>
    </div>
</body>