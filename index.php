<?php
include('connection.php');
// session for security purpose?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">

        <div class="inner-container">
        <!-- ****************************************
        Heading
        ************************************************* -->
        <section class="header">
        <h2>Blood Bank Management</h2>
        </section>
        
        <!-- *******************************************
        body 
        ************************************** -->
        <section class="body">
        <form action="" method="POST">
        <table>
            <tr>
                <td class="login-title"><b>Enter Username :</b></td>
                <td class="login-input"><input type="text" name="un" placeholder="Enter Username"></td>
            </tr>
            <tr>
                <td class="login-title"><b>Enter password :</b></td>
                <td class="login-input"><input type="password" name="ps" placeholder="Enter password"></td>
            </tr>
            <tr>
                <td class="button-container"><input class="button" type="submit" name="sub" value="login" style="width: 130px; height: 60px; border-radius:5px;"></td>
            </tr>
        </table>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
             $un=$_POST['un'];
             $ps=$_POST['ps'];
             $q=$db->prepare("SELECT* FROM admin WHERE username='$un' AND pass='$ps'");
             $q->execute();
             $res=$q->fetchAll(PDO::FETCH_OBJ);
            
             //  login as admin
             if($res)
             {
                $_SESSION['un']=$un;   // session add for security purpose session check
                header("Location:admin-home.php");
             }
             else{
                echo "<script>alert('Wrong password or Username!!!')</script>";
             }

        }
        ?>
        </section>

        <!--***************************** ***********
        footer
        ********************************************* -->
        <section class="footer">
            <span>Copyright@</span><strong> team_undefined</strong>
        </section>
        </div>
    </div>
</body>
</html>