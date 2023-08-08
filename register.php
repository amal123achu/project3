
<?php 
session_start();
         include("connect.php");
         if(isset($_POST['submit'])){
            $uid=$_POST["uid"];
            $uname =$_POST["uname"];
            $phone=$_POST["phone"];
            $email =$_POST["email"];
            $password =$_POST["password"];
            $tr=101;
           $count= mysqli_query($con,"INSERT INTO user VALUES('$uid','$uname','$phone','$email','$password','$tr')"); 
             if($count){
               echo "Registration successfully";
               
            header("location:loginpage.html");
         }
         else{
            echo "User ID exist!!!!";
         }
      }
        
        ?>
