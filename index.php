<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Livres</title>
</head>
<body>
    <section>
        <h1>Liste des livres</h1>
        <ul>
            <?php
            $scandir = scandir("./library");
            foreach($scandir as $fichier){
                if(preg_match("#\.(epub)$#",strtolower($fichier))){
                    echo "<li><a href=\"library/$fichier\">$fichier</a></li>";
                }
            }
            ?>
        </ul>

    </section>
    
</body>
</html>