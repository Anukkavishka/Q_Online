<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "q_online");  




$uid = $_POST['useremail'];
$pwd = $_POST['userpwd'];


echo $uid."<br>" ;
echo $pwd."<br>" ;

$sql="select * from user where username='$uid' and password='$pwd'";

$result=$conn->query($sql) or die($conn->error);

if(!$row = $result->fetch_assoc()){
   $_SESSION['incorrectpwd']=true;
    
    echo $_SESSION['incorrectpwd'];
}
else
{
     $_SESSION['incorrectpwd']=false;
          
    
    $_SESSION['fName']=$row['fname'];
    $_SESSION['lName']=$row['lname'];
    
}
    
echo '<script>window.location="Q_home - Copy.php"</script>';
    
?>