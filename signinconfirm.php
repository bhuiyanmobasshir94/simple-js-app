<?php
$uname =  $_REQUEST['UserName'];
$password =  $_REQUEST['Password'];
session_start();
$my_file = 'Signup-info.txt';
$handle = fopen($my_file, 'r');
if($handle){
    foreach(file($my_file) as $line) {
        $pieces = explode(',', $line);
        $u_name = $pieces[3];
        $pass = $pieces[2];
        if($u_name === $uname){
           if($pass === $password){
            $_SESSION['UserName'] = $uname;
            $_SESSION['Password'] = $password;
            $_SESSION['User'] = $pieces[0].' '.$pieces[1];
            header("Location:store.php");
            fclose($handle);
            }else{
               header("Location:signin.php");
               fclose($handle);
            }
        }else{ 
            header("Location:signin.php");
            fclose($handle);
        }    
    }
}
?>