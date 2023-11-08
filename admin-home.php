<?php
include('connection.php');
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
        <h1>Admin Login Succesful</h1>
        </section>

        <!-- session add -->
        <?php
        echo $un=$_SESSION['un'];
        if(!$un){
            header("Location:index.php");
        }
        ?>
        <!--***************************** ***********
        footer
        ********************************************* -->
        <section class="footer">
            <span>Copyright@</span><strong> team_undefined</strong>
            <!-- logout portion -->
            <p><a href="logout.php">Logout</a></p>
        </section>
        </div>
    </div>
</body>
</html>