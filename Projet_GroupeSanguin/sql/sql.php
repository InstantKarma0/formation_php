<?php
    /**
     * 
     */
    function connectWithParam($request, $type, ...$args) {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "groupesanguin";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
            return false;
        }

        /*
         * Permet de generer la chaine de type d'arguments en fonction
         * des arguments reçus 
        */

        $param_type = "";
        foreach ($args as $arg) {
            if (is_int($arg)) {
                $param_type .= "i";
            } else {
                $param_type .= "s";
            } // EO If
        } // EO ForEach

        $pst = $conn->prepare($request);
        if (!$pst->bind_param($param_type, ...$args)) {
            echo "Preparation erreur";
            return false;
        }

        if (!$pst->execute()) {
            echo "Execute erreur";
            return false;
        }


        if ($type = "GET") {
            $result = $pst->get_result();
            return $result;
        } 

        return true;
    }
    
    function connect($request, $type) {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "groupesanguin";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
        }

        if (!$result = mysqli_query($conn,$request)) {
            return false;
        }
        
        return $result;
    }

?>