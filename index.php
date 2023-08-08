
    <?php
        session_start();
        include("connect.php");
        
        if(isset($_POST['login'])){
            header("location:loginpage.html");
        }
        if(isset($_POST['signup'])){
            header("location:register.html");
        }
        if(isset($_POST['admin'])){
            header("location:adminlogin.html");
        }
    
        ?>
        