De quel groupe sanguin êtes-vous ?
<form method = 'POST'  action = '/../controller/donneurs.php'>"
<select name ='formulaire'>
<option value='' disabled selected hidden>----Veuillez selectionner----</option>

<?php
	$path = __DIR__;
	require $path. '/../controller/donneurs.php';
	foreach ($tab as $value){
		echo "<option value =" . $value . "> ". $value ."</option>" ;
}//EO foreach
?>

</select>
<input type = 'submit' value = 'Valider' name = "submit">
</form>


<?php

		$path = __DIR__;
		require $path. '/../controller/donneurs.php';

		$tab = ["A+","A-","B+","B-","AB+","AB-","O+","O-"];
		echo "<form method = 'POST'  action = '".__DIR__."/../controller/donneurs.php'>";
		echo "<select name ='formulaire'>";
		echo "<option value='' disabled selected hidden>----Veuillez selectionner----</option>";
		
		echo "</select>";
		echo "<input type = 'submit' value = 'Valider'>";
		echo "</form>";

		$existe = isset($_POST['formulaire']) ? $_POST['formulaire'] : false;
		if ($_POST['submit']) {
			echo "Vous pouvez donner au(x) groupe(s) suivant(s) : ";
			echo  htmlentities(getDonneur($_POST['formulaire']), ENT_QUOTES, "UTF-8");
		} else {
		 echo "Veuillez selectionner votre groupe sanguin";
		 exit; 
		}

?>