<html>
    <head>
    <link type="text/css" rel="stylesheet" href="style2.css">
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
p{
    background-color: cornsilk;
    width:50%;

}
    </style>
</head>
    <body >
    <div class="background"></div>   
    
    <form action="home1.php" method="post">
   
        
        <h1><b><u>Anytime Fitness</u></b></h1>            
        
        <div class="div1">
        <input class="block" type="submit" name="profile" value="PROFILE">
        <input class="block" type="submit" name="pay" value="PAYMENT">
        <input class="block" type="submit" name="trainer" value="TRAINER">
        <input class="block" type="submit" name="logout" value="LOGOUT">
        </div>
       
        <h3><b>WELCOME</b></h3>
        <br><br><br><br><br><br><br><br>
        <p><b>Anytime Fitness<br>
        Owner:Manoj<br>
        10:00 am to 8:00 pm <br>
        phone:1234567893 
        , Cherpulassery<br></b></p>
        <?php
        session_start();
        echo $_SESSION["uid"];
       
        ?> 
    </form>
    </body>
</html>

