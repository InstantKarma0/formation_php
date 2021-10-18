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
    <link rel="stylesheet" href="../styles/ajout.css" type="text/css">
    
    
    
    <title>Authentification Admin</title>
</head>
<body class="formBody">
    
    <div class="formBox">
        <form  method="POST">
        <h2>Admin</h2>
        <div class="user-box">
            <input type="text" required="" pattern="^([A-Z][a-zàâäöôéèëêùïî]{1,15}([-]?[A-Z][a-zàâäöôéèëêùïî]{1,15})?)$" name = "name">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="text" required="" pattern="^([A-Z][a-zàâäöôéèëêùïî]{1,15}([-]?[A-Z][a-zàâäöôéèëêùïî]{1,15})?)$" name = "fname">
            <label>Prenom</label>
        </div>
        <div class="user-box">
            <input type="password" required="" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$" name = "password">
            <label>Mot de Passe</label>
        </div>
        <?php
    
            if (isset($_POST['submit'])) {
                require __DIR__."/../controller/VerifAdmin.php";
                $result = tryLogAdmin($_POST['name'], $_POST['fname'], $_POST['password']);
            if ($result == true) {
                header("Refresh: 0; URL=admin.php");
            } else {
                echo "<a href='http://google.com'>Identification incorrecte</a>";
            }
            }    
        ?>
        <div class="button-box">
            <input class="button" type="submit" value="Login" name="submit">
        </div>
    </form>
    </div>
    
</div>
</body>
<link rel="stylesheet" href="../styles/ajout.css" type="text/css">
</html>