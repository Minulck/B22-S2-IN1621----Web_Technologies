<?php
    $server = "sql12.freesqldatabase.com";
    $name ="sql12712056";
    $password="Edp6xZI8cs";
    $dbname="sql12712056";
    $conn = mysqli_connect($server,$name,$password,$dbname);

    if(!$conn){
        die("Data base not connected".mysqli_connect_error());
    }
    else{
        echo "sucess";
    }
?>