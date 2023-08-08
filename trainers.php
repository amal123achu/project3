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
   background-color: darkturquoise;
}
</style>
</head>
<body>
<div class="background"></div>
<form action="trainers.php" method="post">
<?php
        session_start();
        include("connect.php");
        
        $result = mysqli_query($con,"SELECT * FROM trainer ")or die("Select Error");
                if($result){
                  if($result && mysqli_num_rows($result)>0)
                  {
                    
                     echo "<table><tr><th>ID</th><th>Name</th><th>Phone</th></tr>";
                     while( $user_data = mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$user_data['trainer_id']."</td><td>".$user_data['name']."</td><td>".$user_data['ph_no']."</td></tr>";
                    
                    }
                    echo "</table>";
                    echo  "<input type='submit' name='addt' value='Add Trainer'>";
                    if(isset($_POST['addt'])){
                     
                    
                     header("location:addtrainer.php");

                  }
                    echo  "<input type='submit' name='back' value='Back'>";
                    if(isset($_POST['back'])){
                     
                    
                     header("location:admin.php");

                  }

                  
               }
               }
            
            ?>
</form>
            </body>
            </html>