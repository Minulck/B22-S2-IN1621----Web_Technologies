<?php

    function isempty($company,$name,$email,$date,$time,$count){
        if($company=="" || $name=="" || $email=="" || $date=="" || $time=="" || $count==""){
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

    function numbercheck($num){
        $pattern= '/^0?[0-9]{1}$/';
        if(preg_match($pattern,$num)){
            return true;
        }
        elseif($num<1){
            return false;
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

    function inputtodb($conn,$company,$name,$email,$date,$time,$count,$msg){
        $sql="insert into bookinginfo (`Company`,`Name`,`Email`,`Bookdate`,`BookTime`,`Count`,`Message`) values ('$company','$name','$email','$date','$time','$count','$msg')";
        mysqli_query($conn,$sql);
    }

?>