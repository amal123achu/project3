<html>
   <style>
      table,th,td{
         border:1px solid black;
         height: 2cm;
  width: 11cm;
  background-color: gray;
      }
      .background{
    position: absolute;
    height:100%;
    width:100%;
    background-image:url("https://wallpaperaccess.com/full/4722387.jpg");
    background-size:cover;
    background-position: center;
    filter: blur(2px);
    z-index: -1;
}
      </style>
   <body>
   <div class="background"></div>
   <form action="home1.php"method="post">
      <?php 
session_start();
         include("connect.php");
         if(isset($_POST['logout'])){
            echo "logged out";
            header("location:index.html");
         }
         $uid=$_SESSION["uid"];
         if(isset($_POST['profile'])){
            
            
            $result = mysqli_query($con,"SELECT * FROM user WHERE userid='$uid'") or die("Select Error");
                if($result){
                  if($result && mysqli_num_rows($result)>0)
                  {
                     echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>TrainerID</th><th>Password</th></tr>";
                    while($user_data = mysqli_fetch_assoc($result)){
                    $p=$user_data['password'];
                    $un=$user_data['uname'];
                    $e=$user_data['email'];
                    $uph=$user_data['uph_no'];
                    $uti=$user_data['u_trainer_id'];
                    echo "<tr><td>".$uid."</td><td>".$un."</td><td>".$e."</td><td>".$uph."</td><td>".$uti."</td><td>".$p."</td></tr>";
                    echo "</table>";}
               }
                  
                }
               }
               if(isset($_POST['trainer'])){
                  $_SESSION["uid"]=$uid;
                  header("location:trainer.php");
               }
               if(isset($_POST['edit'])){
                  $_SESSION["uid"]=$uid;
                  $_SESSION["un"]=$un;
                  header("location:edit.php");
               }
               if(isset($_POST['pay'])){
                  $_SESSION["uid"]=$uid;
                  header("location:payment.php");
            }
               
         
         ?>
         <input class="block" type="submit" name="edit" value="EDIT">
         </body>
         </html>