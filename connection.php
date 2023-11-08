<?php
$db=new PDO('mysql:host=localhost;dbname=myproject_BBMS','root','');
if($db){
    echo("Connect");
}
else{
    echo("no connection");
}
?>