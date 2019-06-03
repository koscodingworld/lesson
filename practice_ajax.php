<?php
    
    if (isset($_POST["password"])){
        if ($_POST["password"] == "13579"){
            echo "帳號為：123456"; 
        }else{
           echo "密碼錯誤"; 
        }
    }else{
        echo "沒有給我 password 的參數";
    }
    
?>

