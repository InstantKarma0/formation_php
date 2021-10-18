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
    
    
    
    <title>Ajout Admin</title>
</head>
<body class="formBody">
    
    <div class="formBox">
        <form action="../controller/admin.php" method="POST">
        <div class="user-box">
            <input type="text" required="" pattern="^([A-Z][a-zàâäöôéèëêùïî]{1,15}([-]?[A-Z][a-zàâäöôéèëêùïî]{1,15})?)$" name = "name" title="Le nom doit posseder une majuscule au début">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="text" required="" pattern="^([A-Z][a-zàâäöôéèëêùïî]{1,15}([-]?[A-Z][a-zàâäöôéèëêùïî]{1,15})?)$" name = "fname" title="Le prenom doit posseder une majuscule au début">
            <label>Prenom</label>
        </div>
        <div class="user-box">
            <input type="text" required="" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$" name = "password" title="Une majuscule, un chiffre, un caractère spécial (#?!@$%^&*-) minimum">
            <label>Mot de Passe</label>
        </div>
        <?php
    
            if (isset($_POST['submit'])) {
                require __DIR__."/../controller/admin.php";
                $result = addAdmin($_POST['name'], $_POST['fname'], $_POST['password']);
            if ($result == true) {
                header("Refresh: 0; URL=admin.php");
            } else {
                echo "<a href='http://google.com'>Erreur</a>";
            }
            }    
        ?>
        <div class="button-box">
            <input class="button" type="submit" value="Login" name="submit">
        </div>
    </form>
    </div>
    </form>
    
    
</div>
</body>
<link rel="stylesheet" href="../styles/ajout.css" type="text/css">
</html>