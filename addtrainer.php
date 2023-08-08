<html>
<head>
    
    <link type="text/css" rel="stylesheet" href="style1.css">
</head>

<body>
 <h1><b><u>Anytime Fitness</u></b></h1>
  <form action="addtrainer.php" method="post">
            <div class="div4">
                
                <label>TrainerID  :</label>
                    <input type="text" name="tid" ><br>
                    <label>Name :</label>
                    <input type="text" name="tname"><br>
                    <label>Phone   :</label>
                    <input type="text" name="tphone"><br>
                   
                    <label>GymID:</label>
                    <input type="text" name="gid"><br>
                    <input  type="submit" class="btn" name="submit" value="Add">
                   </div>
            </form>
</body>
</html>
<?php 
session_start();
         include("connect.php");
         if(isset($_POST['submit'])){
            $uid=$_POST["tid"];
            $uname =$_POST["tname"];
            $phone=$_POST["tphone"];
           
            $gid =$_POST["gid"];
            
           $count= mysqli_query($con,"INSERT INTO trainer VALUES('$uid','$uname','$phone','$gid')"); 
             if($count){
               echo "Registration successfully";
               
            header("location:trainers.php");
         }
         else{
            echo "User ID exist!!!!";
         }
      }
        
        ?>
