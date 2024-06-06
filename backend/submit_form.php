<?php
    include "database.php";
    include "checkingwholesale.php";

    if(isset($_POST['submit'])){
        $company = $_POST['company'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $type=$_POST['business-type'];
        $msg = $_POST['message'];

        if(isempty($company,$name,$email,$phone,$type)){
            header("Location: ../wholesale.php?err=empty_inputs");
        }
        elseif(!namecheck($name)){
            header("Location: ../wholesale.php?err=InvalidName");
        }
        elseif(!namecheck($type)){
            header("Location: ../wholesale.php?err=InvalidType");
        }
        elseif(!emailcheck($email)){
            header("Location: ../wholesale.php?err=InvalidEmail");
        }
        elseif(!pnumbercheck($phone)){
            header("Location: ../wholesale.php?err=invalidpnumber");
        }
        else{
            wsinputtodb($conn,$company,$name,$email,$phone,$type,$msg);
            header("Location: ../wholesale.php?err=sucess");
        }
    }
?>
