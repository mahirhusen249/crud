
      <h1>all records</h1>  
    <style>
        h1{   
            text-align: center;
        }
    </style>
<?php 
   include 'connection.php';  

 
$sql= "SELECT * FROM `crud_data`";   
$result=mysqli_query($con,$sql);    
   
//       find the number of recods returned       
   $num=mysqli_num_rows($result);  
//    echo $num;   
    
   // display the rows returned by the sql query
    
   if($num>0){   
    
    echo '<table border=2>';
    echo '<thead>';
    echo '<tr>

        <th>Id</th>
        <th>Name</th>
        <th>password</th>
        <th>email</th>
        <th>gender</th>
        <th>mobile_no</th>  
        <th>addrees</th>  
        <th>language</th>   
        <th>other_information</th>   
        <th>country</th>

        <tr>';

        echo ' </thead>';
        echo '<tbody>';

        while($row=mysqli_fetch_assoc($result)){

            echo '<tr>

                <td>'.($row["id"]).'</td>
                <td>'.($row["Name"]).'</td>
                <td>'.($row["password"]).'</td>
                <td>'.($row["Email"]).'</td>
                <td>'.($row["Gender"]).'</td>
                <td>'.($row["mobile_no"]).'</td>
                <td>'.($row["address"]).'</td>
                <td>'.($row["language"]).'</td>
                <td>'.($row["other_information"]).'</td>
                <td>'.($row["choose_a_country"]).'</td>
                <td><button type="submit" name="delete" value="Delete"><a href="Delete.php?deleteid='.($row["id"]).'">Delete</a></button></td>  
                <td><button type="submit" name="update" value="update"><a href="update.php?updateid='.($row["id"]).'">update</a></button></td>
             </tr>';
        }
            echo'</tbody>';
            echo '</table>';
        }else{
            echo 'Record not found';
        }
         
   
  
        
        ?>
        <br>
        <br>
        <button><a href="crud.php">Add Data</a></button>

</div>
</div>
</body>
</html>
