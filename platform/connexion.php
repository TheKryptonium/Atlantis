<?php
    require "elements/header.php";
?>
<body class="connexion">
    <div class="contains text-center pt-3">
        <h3 class="text-white my-3 fw-bolder">Connexion</h3>
        <form class="form" method="post">
                <div class="mb-3">
                    <input
                        type="text"
                        class="form-control rad-form"
                        name="nom"
                        id=""
                        placeholder="Nom"
                    />
                </div>
                <div class="mb-3">
                    <input
                        type="text"
                        class="form-control rad-form"
                        name="prenom"
                        id=""
                        placeholder="Prenom"
                    />
                </div>
                <div class="mb-3">
                    <input
                        type="password"
                        class="form-control rad-form"
                        name="password"
                        id=""
                        placeholder="Mot de passe"
                    />
                </div>
                <input class="connect" type="submit" value="Se connecter">
            </form>
    </div>
</body>
