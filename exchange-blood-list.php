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
    <style type="text/css">
        td{
            /* width:50%; */
            height:40px;
            overflow:hidden;
            /* overflow-y: scroll; */
            margin-bottom:10px;
            
        }
       
    .form tr {
    position: relative;
    top: -30px;
    display: grid;
    grid-template-columns: repeat(10,1fr); /* Added one column for delete option */
    /* width: 100%; */
    column-gap: 15px;
}

    </style>
</head>
<body>
    <div class="container">

        <div class="inner-container">
        <!-- ****************************************
        Heading
        ************************************************* -->
        <section class="header">
        <a href="admin-home.php"><h2>Blood Bank Management</h2></a>
        </section>
        
        <!-- *******************************************
        body 
        ************************************** -->
        <section class="body">
        <!-- session add -->
        <?php
        echo $un=$_SESSION['un'];
        if(!$un){
            header("Location:index.php");
        }
        ?>
        <center><h3>Exchange Blood List</h3></center>
        <center><div class="form">
            <table>
            
            <tr>
            <td><b>Name</td>
            <td><b>F_Name</b></td>
             <td><b>City</b></td>
            <td><b>Address</b></td>
            <td><b>Age</b></td>
            <td><b>Email</b></td>
            <td><b>Contact</b></td>
            <td><b>B_Group</b></td>
            <td><b>Ex_bgroup</b></td>
            <td><b>A</b></td> <!-- New column for delete option -->
            </tr>
            <?php
            $q=$db->query("SELECT * FROM Ex_bgroup");
            while($r1=$q->fetch(PDO::FETCH_OBJ))
            {
                
                ?>
                <tr>
                <td><?= $r1->name; ?></td>
                <td><?= $r1->father_name; ?></td>
                 <td><?= $r1->city; ?></td>
                <td><?= $r1->address; ?></td>
                <td><?= $r1->age; ?></td>
                <td><?= $r1->email; ?></td>
                <td style="color:blue;"><?= $r1->phone_num; ?></td>
                <td style="color:red;"><?= $r1->blood_group; ?></td>
                <td style="color:red;"><?= $r1->ex_bgroup; ?></td>
                <td><a href="delete_entry.php?id=<?= $r1->id; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td> <!-- Link for deleting entry -->
                </tr>
                <?php
            }
            ?>
            
            </table></div>
        </center>
        </section>

        
        <!--***************************** ***********
        footer
        ********************************************* -->
        <section class="footer">
            <div class="copyright">
            <span>Copyright@</span><strong> team_undefined</strong>
            </div>
            <!-- logout portion -->
            <div class="logout">
            <p><a href="logout.php">Logout</a></p>
            </div>
        </section>
        </div>
    </div>
</body>
</html>

