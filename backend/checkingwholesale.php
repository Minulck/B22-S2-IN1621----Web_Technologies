<?php

    function isempty($company,$name,$email,$phone,$type){
        if($company=="" || $name=="" || $email=="" || $phone=="" || $type==""){
            return true;
        }
        else{
            return false;
        }
    }

    function namecheck($name){
        $pattern= '/^[a-zA-Z\s]+$/';
        if(preg_match($pattern,$name)){
            return true;
        }
        else{
            return false;
        }
    }

    function pnumbercheck($num){
        $pattern= '/^0?[0-9]{9}$/';
        if(preg_match($pattern,$num)){
            return true;
        }
        else{
            return false;
        }
    }

    function emailcheck($email){
        $pattern= '/^[a-zA-z0-9]+@[a-z]+\.[a-z]+$/';
        if(preg_match($pattern,$email)){
            return true;
        }
        else{
            return false;
        }
    }

    function wsinputtodb($conn,$company,$name,$email,$phone,$type,$msg){
        $sql="insert into wholesale (`Company`,`Name`,`Email`,`P_Number`,`Type`,`Description`) values ('$company','$name','$email','$phone','$type','$msg')";
        mysqli_query($conn,$sql);
    }

?>