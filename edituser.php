<html>
<head>
<link type="text/css" rel="stylesheet" href="style1.css">
<style>
  table,th,td{
   border:1px solid black;
}
  </style>
    </head>

<body>
<form action="edituser.php" method="post">
<div class="d1">
<h4><u>Update Trainer</u></h4>
<label>Enter New TrainerID  :</label>
                    <input type="text" name="tid" id="tid"><br>
                    <input type="submit" name="update" id="update"><br><br></div><br>
                    Adding initial/registration payment? <a href="firstpay.php">Click here</a></div><br>
                    <div class="d2">
                    <h4><u>Update Payment Details</u></h4>
                    
                    <label>Enter pay id  :</label>
                    <input type="text" name="pid" id="pid"><br>
                    
                    <label>Enter pay date  :</label>
                    <input type="text" name="pd" id="pd"><br>
                    <label>Enter amount :</label>
                    <input type="text" name="amount" id="amount">
                   <input type="submit" name="pupdate" value="Add"></div><br>
                  <br>
                    <input type="submit" name="drop" value="Drop User">
                  

    <?php
        session_start();
        include("connect.php");
        $a=$_SESSION['name'];
       echo $a;
       if(isset($_POST['drop'])){
        mysqli_query($con,"delete from user where userid='$a'"); 
        mysqli_query($con,"delete from payment where p_user_id='$a'");
        mysqli_query($con,"delete from backup where uid='$a'");

        header("location:admin.php");
       }
        echo "</table><br>";
           $result = mysqli_query($con,"SELECT * FROM trainer ")or die("Select Error");
          
             if($result && mysqli_num_rows($result)>0)
             {
               
                echo "<table align='right'><tr><td>TrainerTable</td></tr><tr><th>ID</th><th>Name</th><th>Phone</th></tr>";
                while( $user_data = mysqli_fetch_assoc($result)){
                   echo "<tr><td>".$user_data['trainer_id']."</td><td>".$user_data['name']."</td><td>".$user_data['ph_no']."</td></tr>";
               
               }
               echo "<br></table>";
          }
       if(isset($_POST['update'])){
        $tid=$_POST["tid"];
        echo 
        mysqli_query($con,"update user set u_trainer_id=$tid where userid='$a'"); 
             
        echo "  updated successfully";
      
       }
      
       
          
       if(isset($_POST['pupdate'])){
        $pid=$_POST["pid"];
        $pd=$_POST["pd"];
        $amount=$_POST["amount"];
        $a=$_SESSION['name'];
        
        $count= mysqli_query($con,"update payment set  pid='$pid',date='$pd',amount='$amount' where p_user_id='$a'"); 
          if($count){
            echo "Updated successfully";
            
         header("location:userdetails.php");
          }
        }

        ?>
</form>
</body>
</html>
    