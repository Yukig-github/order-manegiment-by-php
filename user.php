<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>order-manegiment</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/order.css">
<link rel="stylesheet" href="css/user.css">
</head>
<body>
<div class="main-box">
    <div class="title-box">
        <div class="return">
            <form action="order.php" method="port">
             <input type="submit" value="戻る">
            </form>
        </div>
        <div class="user-title">
            新規顧客
        </div>  
    </div>
    <div class="user-table">
        <div class="user-table-name">テーブルNo :</div>
        <div class="user-table-list">
            <form action="portal.php" method="post">
                <select name="table">
                    <?php
                    for($i=1; $i<10; $i++){
                        echo '<option value="',$i,'">','T',$i,'</option>';
                    }
                    ?>
                </select>
            </form>
         </div>
    </div>
    <form action="inside-portal.php" method="post">
    <div class="user-box">
        <div class="user-name">男性 :</div>
        <div class="user-list">
             <input type="number" name="men" min="0" required>
        </div>
    </div>
    <div class="user-box">
        <div class="user-name">女性 :</div>
        <div class="user-list">
            <input type="number" name="women" min="0" required>
        </div>
    </div>
    <div class="user-send">
        <input type="submit" value="完了">    
    </div>
    </form>
</div>
</body>
</html>