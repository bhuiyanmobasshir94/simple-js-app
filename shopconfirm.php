<?php
    session_start();
    if ($_SESSION["UserName"] == null && $_SESSION["Password"]==null ){
        include("signout.php"); 
        header("Location:signin.php");
    }else{
        $user = $_SESSION['User'];
    }
?>
<?php
$p_one =  $_REQUEST['product-name-1'].'|'.$_REQUEST['frequency-1'].'|'.$_REQUEST['t-price-1'];
$p_two =  $_REQUEST['product-name-2'].'|'.$_REQUEST['frequency-2'].'|'.$_REQUEST['t-price-2'];
$p_three = $_REQUEST['product-name-3'].'|'.$_REQUEST['frequency-3'].'|'.$_REQUEST['t-price-3'];
$p_four =  $_REQUEST['product-name-4'].'|'.$_REQUEST['frequency-4'].'|'.$_REQUEST['t-price-4'];

$my_file = 'Shopping-list.txt';

if(!fopen($my_file, 'r'))
{
  $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
  fwrite($handle,"User,Product1,Product2,Product3,Product4".PHP_EOL);
  $data = $user.','.$p_one.','.$p_two.','.$p_three.','.$p_four.PHP_EOL ;
  fwrite($handle, $data);
  fclose($handle);
  header("Location:store.php");
}else if(fopen($my_file, 'r')){
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = $user.','.$p_one.','.$p_two.','.$p_three.','.$p_four.PHP_EOL ;
    fwrite($handle, $data);
    fclose($handle);
    header("Location:store.php");  
}else{
    header("Location:store.php");
}
?>