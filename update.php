 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>crud</title>
 </head>

 <body>
   <html>

   <head>
     <title>form page</title>
     <link rel="stylesheet" href="crud.css">  

   <body>

   <?php

include "connection.php";

if (isset($_GET['updateid'])) {

  $uid = $_GET['updateid'];

  $sql = "SELECT * FROM crud_data where id =$uid";

  $result = mysqli_query($con, $sql);

  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {

      $Name = $row['Name'];
      $password = $row['password'];
      $Email = $row['Email'];
      $mobile_no = $row['mobile_no'];
      $language = $row['language'];
      $lang = explode(",", $language);
      $Gender = $row['Gender'];
      $other_information = $row['other_information'];
      $country = $row['choose_a_country'];
      // print_r($choose_a_country);
      // exit;
      $address = $row['address'];
    }
  }

  if (isset($_POST['submit'])) {

    $Name = $_POST['name'];
    $password = $_POST['password'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender'];
    $mobile_no = $_POST['mobile_no'];
    $language = $_POST['language'];
    $ch = implode(",", $language);
    $other_information = $_POST['other_information'];
    $country = $_POST['choose_a_country'];
    $address = $_POST['addrees'];



    // $sql = "UPDATE crud_data SET Name='" . $Name . "',password='" . $password . "',Email='" . $Email . "',mobile_no='" . $mobile_no . "',language='" . $ch . "',Gender='" . $Gender . "',other_information='" . $other_information . "',choose_a_country='" . $country . "',address='" . $address . "' WHERE id='" . $uid . "'";


    $sql= "UPDATE crud_data SET Name='$Name', password='$password', Email='$Email', mobile_no='$mobile_no', language='$ch', Gender='$Gender', other_information='$other_information', choose_a_country='$country' , address='$address' where id=$uid ";
    $result = mysqli_query($con, $sql);


    if ($result) {
      echo "Update successfully...";
    } else {
      die(mysqli_error($con));
    }
  }

}


?>


     </head>
     <div class="headar">
       <h1>crud operation</h1>
     </div> <br>
     <form action="" method="post">
       <div class="allfiled">


         <div class="name">
           Name:<input type="text" name="name" id="name" placeholder="Enter your Name" value="<?php echo $Name ?>"><br><br>
         </div>
         <!-- name:<input type="text" name="lname"><br><br>   -->
         <div class="password">
           password:<input type="password" name="password" placeholder="Enter your password" value="<?php echo $password ?>"> <br><br>
         </div>
         <div class="Email">
           Email:<input type="email" name="email" placeholder="Enter your email" value="<?php echo $Email ?>"> <br><br>
         </div>
         <!-- <div class="id">  
        <label for="">ID:</label>
     <input type="id" name="id" placeholder="Enter your id"> <br><br>
         </div>    -->
         <div class="mobile_no">

           Mobile NO:<input type="number" name="mobile_no" placeholder="Enter your mobile_no" value="<?php echo $mobile_no ?>">
         </div>
         <br>
         <div class="add">
           addrees:<input type="text" name="addrees" placeholder="Enter addrees" value="<?php echo $address?> ">
         </div>
         <br>
         <div class="L">
   language :<input type="checkbox" name="language[]" value="English" <?php if(in_array("English",$lang))echo "checked";?>>English

           <input type="checkbox" name="language[]" value="hindi"<?php if(in_array("hindi",$lang))echo "checked";?>>Hindi

           <input type="checkbox" name="language[]" value="Gujarati"<?php if(in_array("Gujarati",$lang))echo "checked";?>> Gujarati
         </div>
         <!-- <br>   -->

         <br>

         <div class="radio">
           Gender<input type="radio" name="gender" value="male"<?php echo $Gender=='male'?'checked="checked"':''?>>
           <label for="male">male</label>
           <input type="radio" name="gender" value="female"<?php echo $Gender=='female'?'checked="checked"':''?>>
           <label for="female">female</label>
         </div>
         <br>
         <div class="area">
           other information <textarea id="other_information" name="other_information" value="<?php echo $other_information ?>">

      </textarea>
         </div>
         <!-- age:<input type="text" name="age"><br><br>     -->

         <!-- <input type="radio" name="gender" value="male"><br><br> 
         <label for="male">male</label><br>
        <input type="radio" name="gender"value="female">  -->
         <!-- <label for="female">female</label><br> -->

         <div class="c">
           choose a country<select name="choose_a_country" value="" id="country">
             <option  value="india"<?php echo  $country=='india'?'selected="selected"':''; ?>> india </option>
             <option value="U.S.A"<?php echo  $country=='U.S.A'?'selected="selected"':''; ?>>  U.S.A </option>
             <option value="chaina"<?php echo  $country=='chaina'?'selected="selected"':'';?>>  chaina </option>
             <option value="pakistan"<?php echo  $country=='pakistan'?'selected="selected"':'';?>> pakistan</option>
         </div>

         <input type="submit" name="submit" value="Update">
         <!-- <button type="submit" value="submit" name="submit"> submit </button> -->
       </div>


       </div>
     </form>
   </body>

   </html>
 </body>

 </html>


 