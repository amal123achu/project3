<html>
<head>
    <title></title>
    <link type="text/css" rel="stylesheet" href="style1.css">
</head>

<body>
 <h1><b><u>Anytime Fitness</u></b></h1>
  <form action="edit.php" method="post">
            <div class="div4">
                
                
                    
                    <?php 
session_start();
         include("connect.php");
        
            $uid=$_SESSION["uid"];
            $result = mysqli_query($con,"SELECT * FROM user WHERE userid='$uid'") or die("Select Error");
                if($result){
                  if($result && mysqli_num_rows($result)>0)
                  {
                    $user_data = mysqli_fetch_assoc($result);
                        $p=$user_data['password'];
                        $un=$user_data['uname'];
                        $e=$user_data['email'];
                        $uph=$user_data['uph_no'];
                        $uti=$user_data['u_trainer_id'];

                  }}
                    echo "<label>Name :</label>".
                    "<input type='text' name='uname' id='username' value='$un'><br><br>";
                    echo "<label>Phone   :</label>".
                    "<input type='text' name='phone' id='phone' value='$uph'><br><br>".
                    "<label>Email   :</label>".
                    "<input type='email' name='email' id='email' value='$e'><br><br>".
                    "<label>Password:</label>".
                    "<input type='text' name='password' id='password' value='$p'><br><br>";
                    ?>
                    <input  type="submit" class="btn" name="submit" value="Update"><br></div>
                    
            </form>
</body>
</html>

<?php
             if(isset($_POST['submit'])){
            echo $uid;
            $uname =$_POST["uname"];
            $phone=$_POST["phone"];
            $email =$_POST["email"];
            $password =$_POST["password"];
          
           mysqli_query($con,"update user set uname='$uname',uph_no='$phone',email='$email',password='$password' where userid='$uid'"); 
             
               echo "updated successfully";
               header("location:home.php");
         }
         
      
        
        ?>