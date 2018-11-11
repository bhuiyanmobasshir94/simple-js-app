<?php 
$f_name =  $_REQUEST['FirstName'];
$l_name =  $_REQUEST['LastName'];
$email =  $_REQUEST['Email'];
$uname =  $_REQUEST['UserName'];
$password =  $_REQUEST['Password'];

$my_file = 'Signup-info.txt';
if(!fopen($my_file, 'r'))
{
  $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
  fwrite($handle,"First Name,Last Name,Password,User Name,Email");
  $data = $f_name.','.$l_name.','.$password.','.$uname.','.$email.PHP_EOL ;
  fwrite($handle, $data);
  fclose($handle);
  header("Location:signin.php");
}else if(fopen($my_file, 'r')){
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = $f_name.','.$l_name.','.$password.','.$uname.','.$email.PHP_EOL ;
    fwrite($handle, $data);
    fclose($handle);
    header("Location:signin.php");
}else{
    header("Location:signup.php");
}
?>