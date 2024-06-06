<?php
    include "database.php";
    include "checking.php";

    if(isset($_POST['submit'])){
        $company = $_POST['company'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date= $_POST['date'];
        $time=$_POST['time'];
        $count = $_POST['count'];
        $msg = $_POST['text'];
        
        if(isempty($company,$name,$email,$date,$time,$count)){
            header("Location: ../book_a_table.php?err=empty_inputs");
        }
        elseif(!emailcheck($email)){
            header("Location: ../book_a_table.php?err=InvalidEmail");
        }
        elseif(!namecheck($name)){
            header("Location: ../book_a_table.php?err=InvalidName");
        }
        elseif(!numbercheck($count)){
            header("Location: ../book_a_table.php?err=InvalidNumber");
        }
        else{
            inputtodb($conn,$company,$name,$email,$date,$time,$count,$msg);
            header("Location: ../book_a_table.php?err=sucess");
        }
    }
?>
