<?php

$servername="localhost";    
 $username="root";   
 $password="";  
 $database="my_crud";     
 


        $con = mysqli_connect($servername,$username,$password,$database);

        if(!$con){
            die('Connection failed'.mysqli_error($conn));
        } 

?>