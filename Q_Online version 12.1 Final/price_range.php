<?php  
   echo '<script> console.log(5 + 6);</script>';     
echo  '<script>alert("inside the price range")</script>';
 $connect = mysqli_connect("localhost", "root", "", "q_online");  
 $output = '';  
 if(isset($_POST["ls_val"] && $_POST["gt_val"]))  
 {      echo  '<script>alert("inside if")</script>';
      if($_POST["ls_val"] != '' && $_POST["gt_val"]!= '')  
      {  
        echo '<script>alert("inside the second if")</script>'
           $sql = "SELECT * FROM product WHERE price between '".$_POST["ls_val"]."' AND '" .$_POST["gt_val"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM product";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
          
             $output .='<div class="card" style="width: 20rem; margin: 10px;">';
            $output .=        '<img class="card-img-top" src="'.$row["imgurl"].'" alt="Card image cap">';
            $output .=        '<div class="card-body">';
            $output .=            '<h3>'.$row["model"].'</h3>';
             $output .=                  '<form action="Q_product _add_to_cart - Copy.php" method="POST">';
             $output .=                     '<input type="hidden" name="description" value="'.$row['descrip'].'">';
              $output .=                   ' <input type="hidden" name="model" value="'. $row['model'].'">';
             $output .=                     '<input type="hidden" name="price" value="'. $row['price'].'">';
              $output .=                   ' <input type="hidden" name="brand" value="'.$row['brand'].'">';
             $output .=                    ' <input type="hidden" name="phval" value="'. $row['imgurl'].'">';
              $output .=                   ' <input type="hidden" name="pro_id" value="'. $row['product_id'].'">';
                          
               $output .=                   '<input type="submit" class="btn btn-primary" value="View More">';
              $output .=                '</form> ';                     
                                     

           
            $output .=            '<p>RS'.$row["price"].'</p>';
            $output .=        '</div>';
            $output .=    '</div>';
      }  
      echo $output;  
 }  
 ?>  
