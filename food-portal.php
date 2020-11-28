<?php
switch($_REQUEST['value']){
    case '前菜':
       header("Location: ./food1.php");
    break;

    case '肉':
        header("Location: ./food2.php");
    break;

    case 'デザート':
        header("Location: ./food3.php");
    break;
}

?>