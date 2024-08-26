
  
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
<?php     

include "connection.php";

       if(isset($_POST['submit'])){
        //  print_r($_POST);
        //  exit;
           $name=$_POST['name'];
           $password=$_POST['password'];  
           $email=$_POST['email'];
           $gender=$_POST['gender'];   
           $mobile_no=$_POST['mobile_no'];
           $address=$_POST['addrees'];      
           $language=$_POST['language'];  
           $ch=implode("," ,$language); 
           // /$Gender=$_POST["Gender"];   
           $other_information=$_POST['other_information'];  
           $country=$_POST['country'];      
           
 
          
//  $sql="INSERT INTO my_crud(`fname`,`password`,`email`,`gender`,`mobile_no`,`address`,`language`,`other_information`,`country`)VALUES('$name','$password','$email','$gender','$monile_NO','$address',`language`,`other_information`,`country`)";
        
$sql="INSERT INTO `crud_data`(`Name`, `password`, `Email`, `mobile_no`, `language`, `Gender`, `other_information`, `choose_a_country`, `address`) VALUES ('$name','$password','$email','$mobile_no','$ch','$gender','$other_information','$country','$address')";   
 
// print_r($sql);
// exit;

 $result=mysqli_query($con,$sql);
//   print_r($result);
// exit;  

 if($result){
   echo "success";
   header("location:search.php");
 }else{
   die(mysqli_error($con));
 }
} 
?>
    <html> 
    <head>  
  <title>form  page</title>   
  <link rel="stylesheet" href="crud.css">    
  
  <body>
    </head>   
    <div class="headar"> 
    <h1>crud operation</h1>    
</div>  <br>
<form  action="" method="post">   
    <div class="allfiled">   
         
 <div class="name"> 
    Name:<input type="text" name="name"id="name" placeholder="Enter your name" required><br><br>    
</div>   
    <!-- name:<input type="text" name="lname"><br><br>   -->
   <div class="password"> 
    password:<input type="password" name="password" placeholder="Enter your password" required> <br><br>  
    </div>     
    <div class="Email">
    Email:<input type="email" name="email" placeholder="Enter your email" required> <br><br>
</div>    
     <!-- <div class="id">  
        <label for="">ID:</label>
     <input type="id" name="id" placeholder="Enter your id"> <br><br>
         </div>    -->
         <div class="mobile_no"> 
          
     Mobile NO:<input type="number" name="mobile_no" placeholder="Enter your mobile_no"value="<?php echo $mobile_no?>"onkeypress="return is a Numberkry(evt)"maxlength="10">  
</div>  
    <br>    
    <div class="add">  
        addrees:<input type="text" name="addrees" placeholder="Enter addrees"required>
    </div>  <br>
    <br> 
    <div class="L">    
    language : <input type="checkbox" name="language[]" value="English"> English 
        <input type="checkbox" value="hindi" name="language[]" >Hindi
        <input type="checkbox" value="Gujarati" name="language[]">Gujarati
    </div>   
    <!-- <br>   -->
   
    <br>   
     
    <div class="radio">
   Gender<input type="radio" name="gender" value="male"required> 
         <label for="male">male</label>
        <input type="radio" name="gender"value="female">    
        <label for="female">female</label>
    </div>  
        <br>    
        <div class="area">  
      other information <textarea id="other_information" name="other_information"required>   

      </textarea>
        </div>
        <!-- age:<input type="text" name="age"><br><br>     -->

         <!-- <input type="radio" name="gender" value="male"><br><br> 
         <label for="male">male</label><br>
        <input type="radio" name="gender"value="female">  -->
         <!-- <label for="female">female</label><br> -->      

         <div class="c">  
        choose a  country<select name="country"required>   
                <option value="india"> india   </option>   
                <option value="U.S.A"> U.S.A   </option>
                <option value="chaina"> chaina </option>
                <option value="pakistan">pakistan</option> 
        </div>  
     <br>    
     <br>
        <input type="submit" name="submit" value="submit">
  <!-- <button type="submit" value="submit" name="submit"> submit </button> -->
</div>
           
         
     </div>
</form>  
</body>    
</html>
</body>
<script>   
// validetion of the number
  function isNumberkey(evt){   
     var charcode=(evt.which)?evt.which:evt.keycode;   
     if(charcode > 31 && (charcode < 48 ||charcode >57)){   
      return false;
     } 
     return true;
  }
</script>
</html>


