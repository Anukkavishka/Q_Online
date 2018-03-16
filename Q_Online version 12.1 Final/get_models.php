<?php  
         

 $connect = mysqli_connect("localhost", "root", "", "q_online");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
         
           $sql = "SELECT * FROM product WHERE brand='".$_POST["brand_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM product";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["model"].'">'.$row["model"].'</option>';  
   
      }  
      echo $output;  
 }  
 ?>  