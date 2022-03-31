<?php
echo "<section>";
echo "<h1>Liste des livres</h1>";
echo "<ul>";

if (isset($_GET["lib"])) {
    $lib = $_GET["lib"];
} else {
    $lib = "library";
}
$scandir = scandir("./".$lib);
foreach($scandir as $fichier){
    if(preg_match("#\.(epub|pdf)$#",strtolower($fichier))){
        echo "<li><a href=\"library/$fichier\">$fichier</a></li>";
    }
}
echo "</ul>";
echo "</section>";