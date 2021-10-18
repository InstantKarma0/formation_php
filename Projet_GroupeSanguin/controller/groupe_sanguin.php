

<?php 

    function getAllGroupeName() {
        require __DIR__.'/../sql/sql.php';
        $args = "name";
        $request = "SELECT nom FROM groupe_sanguin";
        $type = "GET";
        $result = connect($request, $type);
        return $result;
        
    }
     
    
    

    

?>