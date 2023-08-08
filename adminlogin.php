
<?php
session_start();
include("connect.php");
if(isset($_POST['submit']));
{
    $a1id=$_POST["aid"];
    $password=$_POST["password"];
    $query="SELECT * FROM admin WHERE admin_id='$a1id' AND admin_password='$password'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    if($count==1){
        
        
    header("location:admin.php");
}
else{
    echo "UserID and Password doesn't match ";
}
}
?>

