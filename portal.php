
//select account method
<?php
switch($_REQUEST['login_id']){
    case 'order':
       header("Location: ./order.php");
    break;

    case 'cook':
        header("Location: ./check.php");
    break;

    case 'dev':
        header("Location: ./develop.php");
    break;
}
?>

