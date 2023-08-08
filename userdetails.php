<html>
<head>
<style>
   .block{
    display: block;
    width: 25%;
    height: 30px;
    border-color: black;
    box-shadow: 20px;
    background-color: antiquewhite;
    font-size: 16px;
    cursor:pointer;
    text-align: center;
}
   .uddiv{
    font-size:25px;
    width: 100px;
    height:300px ;
    float: left;
    background-color:yellow;
    left: 20%;
   }
   
table,th,td{

   border:1px solid black;
   background-color: red;
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
</head>
<body>
<div class="background"></div> 
<form action="userdetails.php" method="post">
<?php
        session_start();
        include("connect.php");
        
            
                  
            $result = mysqli_query($con,"SELECT * FROM user")or die("Select Error");
        
                  if($result && mysqli_num_rows($result)>0)
                  {
                     
                        echo "<table  align='center'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>TrainerID</th></tr>";
                        while($user_data = mysqli_fetch_assoc($result)){
                           $uid=$user_data["userid"];
                        
                        $un=$user_data['uname'];
                        $e=$user_data['email'];
                        $uph=$user_data['uph_no'];
                        $uti=$user_data['u_trainer_id'];
                        echo "<tr><td>".$uid."</td><td>".$un."</td><td>".$e."</td><td>".$uph."</td><td>".$uti."</td></tr>";
                       
                        echo  "<input class='block' type='submit' name='uedit' value='$uid'>"."<br>";
                        
                    }
                    
                    echo "</table>";
                  
                    echo  "<input type='submit' name='back' value='Back'>";
               if(isset($_POST['uedit'])){
                  $_SESSION['name']=$_POST['uedit'];
                 
                     header("location:edituser.php");

                  }
                  if(isset($_POST['back'])){
                     
                    
                        header("location:admin.php");
   
                     }

               }
            
            
            
            ?>
           
            
            </body>
            </html>