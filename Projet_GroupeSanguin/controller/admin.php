



<?php
function addAdmin($nom, $prenom, $password){
    require __DIR__."/../sql/sql.php";
    $dbh = new PDO('mysql:host=localhost;dbname=groupesanguin', "root", );
    $dbh->query("INSERT INTO administrateur (nom, prenom, mdp) VALUES (? , ? , ?)", 'POST' , $nom, $prenom, password_hash($password,PASSWORD_BCRYPT));
}






