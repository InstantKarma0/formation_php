<?php 

    

function getDonneur ($groupe_sanguin){

    try {
        require __DIR__.'../sql/sql.php';

        $result = connectWithParam("SELECT nom FROM groupe_sanguin WHERE id IN (SELECT id_donneur FROM donneur WHERE id_groupe_sanguin = (SELECT id FROM groupe_sanguin WHERE nom = ?))", $groupe_sanguin);
        
        foreach($result as $res) {
            print_r($res["nom"]);
            echo " / ";
        }
        
        $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }//EO try catch
}//EO getDonneur
?>