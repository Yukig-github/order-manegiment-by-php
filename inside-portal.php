//check user is already exsisted or not
<?php
if($_POST['women']>0 || $_POST['men']>0){
    //create db
    //move to menu
    header("Location: ./menu.php");
}else{
    //error message
    header("Location: ./main.php");
}
?>