<html>
<head>
<link type="text/css" rel="stylesheet" href="style1.css">
<style>
  
  </style>
    </head>

<body>
<form action="firstpay.php" method="post">
<div class="d2">
                    <h4><u>Payment Details</u></h4>
                    <label>Enter paymentID  :</label>
                    <input type="text" name="pid" id="pid"><br>
                    <label>Enter pay date  :</label>
                    <input type="text" name="pd" id="pd"><br>
                    <label>Enter amount :</label>
                    <input type="text" name="amount" id="amount">
                   <input type="submit" name="pupdate" value="Add"></div><br>
</form>
</body>
</html>

<?php
        session_start();
        include("connect.php");
        if(isset($_POST['pupdate'])){
            $pid=$_POST["pid"];
            $pd=$_POST["pd"];
            $amount=$_POST["amount"];
            $a=$_SESSION['name'];
            $g=1111;
            $count= mysqli_query($con,"INSERT INTO payment VALUES('$pid','$pd','$amount','$a','$g')");
           
              if($count){
                echo "Updated successfully";
                
             header("location:userdetails.php");
              }
            }
    
            ?>