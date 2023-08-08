
<html>
<head>
<style>
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
table,th,td{
   border:1px solid black;
  height: 2cm;
  width: 11cm;
  background-color: gray;
}
</style>
</head>
<body>
<div class="background"></div> 
<?php
        session_start();
        include("connect.php");
        $uid=$_SESSION["uid"];
            
                  
            $result = mysqli_query($con,"SELECT * FROM trainer where trainer_id in(select u_trainer_id from user where userid='$uid') ") or die("Select Error");
                if($result){
                  if($result && mysqli_num_rows($result)>0)
                  {
                     $user_data = mysqli_fetch_assoc($result);
                     echo "<table><tr><th>ID</th><th>Name</th><th>Phone</th></tr>";
                     echo "<tr><td>".$user_data['trainer_id']."</td><td>".$user_data['name']."</td><td>".$user_data['ph_no']."</td></tr>";
                    echo "</table>";
                  
                     
                  
               }
               }
            
            ?>
            </body>
            </html>