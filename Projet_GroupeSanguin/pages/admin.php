<?php
    $dbh = new PDO('mysql:host=localhost;dbname=groupesanguin', "root", );
    $sth = $dbh->prepare("SELECT * FROM personnes , administrateur ");
    $sth->execute();

    $result = $sth->fetchAll();
    print_r($result);
?>