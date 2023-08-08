<html>
<head>
<style>
  p{
    background-color: cornsilk;
    width:50%;

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
table,th,td{
   background-color: darkturquoise;
   border:1px solid black;
}
</style>
    <title></title>
    <link type="text/css" rel="stylesheet" href="style1.css">
</head>

<body>
<div class="background"></div> 
 <h1><b><u>Anytime Fitness</u></b></h1>
  <form action="admin.php" method="post">
  <input  type="submit" name="logout" value="Logout"><br>
            <div class="div2"><br><br>
                
                    <input  type="submit" class="btn" name="userdetails" value="Show Users"><br>
                    <input  type="submit" class="btn" name="trainers" value="Show Trainers"><br>
                    <input  type="submit" class="btn" name="payments" value="Show Payments"><br>
                    </div>
                    <p><b>Anytime Fitness<br>Cherpulassery<br></b></p>
            </form>
</body>
</html>
<?php 

session_start();

include("connect.php");
if(isset($_POST['logout'])){
   echo "logged out";
   header("location:index.html");
}
$result = mysqli_query($con,"SELECT count(*) FROM user") or die("Select Error");
if($result){
  if($result)
  {
    $user_data = mysqli_fetch_assoc($result);
   echo "Total Bookings : ".$user_data['count(*)'];
}
}
if(isset($_POST['trainers'])){
   
   header("location:trainers.php");
}
if(isset($_POST['userdetails'])){
    
    header("location:userdetails.php");
 }
 if(isset($_POST['payments'])){
   $result = mysqli_query($con,"SELECT * FROM payment")or die("Select Error");
   $result1 = mysqli_query($con,"SELECT * FROM backup")or die("Select Error");
   if($result && mysqli_num_rows($result)>0)
   {
      
      echo "<table><tr><th>PaymentID</th><th>Date</th><th>Amount</th><th>UserID</th><th>GymID</th</tr>";
    while($user_data1 = mysqli_fetch_assoc($result1)){
      $p1id=$user_data1['pid'];
      $date1=$user_data1['date'];
      $amount1=$user_data1['amount'];
      $p1ui=$user_data1['uid'];
      $p1gi=$user_data1['g_id'];
      echo "<tr><td>".$p1id."</td><td>".$date1."</td><td>".$amount1."</td><td>".$p1ui."</td><td>".$p1gi."</td></tr>";
    }
   
      while($user_data = mysqli_fetch_assoc($result)){
      $pid=$user_data['pid'];
      $date=$user_data['date'];
      $amount=$user_data['amount'];
      $pui=$user_data['p_user_id'];
      $pgi=$user_data['p_gym_id'];
      echo "<tr><td>".$pid."</td><td>".$date."</td><td>".$amount."</td><td>".$pui."</td><td>".$pgi."</td></tr>";
    }
      echo "</table>";
    
     }
   }

      ?>
            
         