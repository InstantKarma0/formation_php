
De quel groupe sanguin êtes-vous ?
<?php
    require __DIR__ . '/Sql.php';

    $tab = ["A+","A-","B+","B-","AB+","AB-","O+","O-"];
    echo "<form method = 'POST'  action = 'GSDonner.php'>";
    echo "<select name ='formulaire'>";
    echo "<option value='' disabled selected hidden>----Veuillez selectionner----</option>";
    foreach ($tab as $value){
        echo "<option value =" . $value . "> ". $value ."</option>" ;
    }//EO foreach
    echo "</select>";
    echo "<input type = 'submit' value = 'Valider'>";
    echo "</form>";

    $existe = isset($_POST['formulaire']) ? $_POST['formulaire'] : false;
    if ($existe) {
      echo "Vous pouvez donner au(x) groupe(s) suivant(s) : ";
      echo  htmlentities(getDonneur($_POST['formulaire']), ENT_QUOTES, "UTF-8");
    } else {
     echo "Veuillez selectionner votre groupe sanguin";
     exit; 
    }


    
?>