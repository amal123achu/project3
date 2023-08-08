

<?php
session_start();
include("connect.php");
if(isset($_POST['submit']));
{
    $uid=$_POST["uid"];
    $password=$_POST["password"];
    $query="SELECT * FROM user WHERE userid='$uid' AND password='$password'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    if($count==1){
        $_SESSION['uid']=$uid;
        
    header("location:home.php");
}
else{
    echo "UserID and Password doesn't match ";
}
}
?>

