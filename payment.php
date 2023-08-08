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
    
    <?php
session_start();
include("connect.php");
$uid=$_SESSION["uid"];
$result = mysqli_query($con,"select * from payment where p_user_id='$uid'") or die("Select Error");
                if($result){
                  if($result && mysqli_num_rows($result)>0)
                  {
                    echo 
                      "<table><tr><th>PaymentID</th><th>Date</th><th>Amount</th><th>UserID</th><th>GymID</th</tr>";
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

<a href="paymenthistory.php">Click here</a> for payment history</div><br>
    </body>
</html>