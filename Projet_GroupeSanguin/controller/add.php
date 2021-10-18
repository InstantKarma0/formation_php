<?php

        function addppl() {
            

            require __DIR__.'/../sql/sql.php'; 
            $request = "INSERT INTO personnes (prenom , nom, age , groupe_id) VALUES (? , ?, ? , (SELECT id FROM groupe_sanguin WHERE nom = ?))";
            $type = "POST";
            if (!connectWithParam($request, $type, $_POST["name"], $_POST["fname"], $_POST["age"], $_POST["gp"])) {
                echo "Vous êtes enregistré dans notre base de donnée! <br/>";
            } else {
                echo "Une erreur est survenue, veuillez ressayer plus tard..";
            }

            echo "Redirection vers le menu...";
            
            header("Refresh: 3; URL=../index.php");
            exit;

        }
        
    if(isset($_POST))
    {
        addppl();
    } 

?>