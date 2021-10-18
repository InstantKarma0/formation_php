<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--                   GOOGLE FONT                               -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;600&display=swap" rel="stylesheet"> 
    
    
    
    <title>Ajout DB</title>
</head>
<body class="formBody">
    
    <div class="formBox">
        <form action="../controller/add.php" method="POST">
        <div class="user-box">
            <input type="text" required="" pattern="^([A-Z][a-zàâäöôéèëêùïî]{1,15}([-]?[A-Z][a-zàâäöôéèëêùïî]{1,15})?)$" name = "name" title="Le nom doit posseder une majuscule au début">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="text" required="" pattern="^([A-Z][a-zàâäöôéèëêùïî]{1,15}([-]?[A-Z][a-zàâäöôéèëêùïî]{1,15})?)$" name = "fname" title="Le prenom doit posseder une majuscule au début">
            <label>Prenom</label>
        </div>
        <div class="user-box">
            <input type="number" class="checkAge" required="" name="age">
            <label>Age</label>
        </div>
        <div class="button-box">
            <input class="button" type="submit" value="Ajout!">
        </div>
        <br />
        <h3>Groupe Sanguin : </h3>
        <br />
        <select name="gp">
            <option value='' disabled selected>-- Selectionnez un groupe sanguin --</option>
            <?php
                require __DIR__.'/../controller/groupe_sanguin.php';
                $result = getAllGroupeName();
                foreach ($result as $gp) {
                    echo '<option value='.$gp["nom"].'>'.$gp["nom"].'</option>';
                }
            ?>
        </select><br />
    </form>
    
    
</div>
</body>
    <link rel="stylesheet" href="../styles/ajout.css" type="text/css">
</html>