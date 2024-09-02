<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <a class="navbar-brand text-light" href="#">
                <img src="/public/img/logo_poleS.png" alt="Bootstrap" width="30">Les bases en PHP</a>
            <a href="/bases.php">Les bases</a>
        </div>
    </nav>

    <h1>Hello !</h1>
    <p>Bienvenue, dans le monde de PHP</p>
    <?php
    echo '<h2> Les balises </h2>';
    echo '<p class="fst-italic text-secondary"> Ici je suis dans les balises PHP.</p>';
    ?>
    <p>
        Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
            En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
    </p>
    <?php
    echo '<p>Echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se termiennt par un ";". Dans un echo nous pouvons mettre aussi du HTML.</p>';

    ?>
    <h3>Différents affichage</h3>
    <?php
    echo '<p> valeur 1 </p>', '<p> valeur 2</p>';
    print '<p> La différence majeure avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.';
    ?>
    <ul>
        <li>print_r, affiche des informations à propos d'une variable, de manière à ce qu'elle soit lisible.</li>
        <li>var_dump, affiche les informations structurées d'une variable, y compris son type et sa valeur.</li>
    </ul>
</body>

</html>