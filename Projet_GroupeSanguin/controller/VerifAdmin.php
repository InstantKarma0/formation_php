<?php

function tryLogAdmin ($nom, $prenom, $password){
    $dbh = new PDO('mysql:host=localhost;dbname=groupesanguin', "root", "");
    $sth = $dbh->prepare("SELECT mdp FROM administrateur WHERE nom = '$nom' AND prenom = '$prenom';");

    $sth->execute();
    $result = $sth->fetch();
    
    
    if($result == false) {
        return false;
    } else {
        if (($result['mdp']) == $password){
            return true;
        }else{
            return false;
        }
    }
}
function tryLogAdminTry($nom, $prenom, $password) {
    require __DIR__."/../sql/sql.php";
    $result = connectWithParam("SELECT mdp FROM administrateur WHERE nom = ? AND prenom = ?;", "GET", $nom, $prenom);
    var_dump($result);
    if($result == false) {
        return false;
    } else {

    }

}



?>