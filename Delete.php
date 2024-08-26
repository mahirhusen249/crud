<?php   
include 'connection.php';     

if(isset($_GET['deleteid'])){    
        $did=$_GET['deleteid']; 

        $sql="DELETE FROM crud_data where id= $did";

        $result=mysqli_query($con,$sql);

        if($result){
            header("Location:search.php");
        }
}

?>