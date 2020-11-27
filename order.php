<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>order-manegiment</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/order.css">
</head>
<body>
<div class="main-box">
    <div class="title-box">
        <div class="return">
            <form action="main.php" method="port">
             <input type="submit" value="戻る">
            </form>
        </div>
        <div class="title">
            Table
        </div>  
    </div>
    <div class="table-list-title">
            2020/11/25 (水)
        </div>
    <div class="order-content">
        <div class="table-line">
            <div class="table">
                <div class="info-line">
                    <div class="table-name">
                        <?php
                        $tableName1='T1';
                        echo $tableName1;
                        ?>
                    </div>
                    <div class="user-num">
                        
                    </div>
                </div>
                <div class="user-time">
                    
                </div>
                <div class="table-money">
                    
                </div>
            </div>   
            <div class="table">

            </div>    
            <div class="table">

            </div>
        </div>

        <div class="table-line">
            <div class="table">
                <div class="info-line">
                    <div class="table-name">
                        T1
                    </div>
                    <div class="user-num">
                        2名
                    </div>
                </div>
                <div class="user-time">
                    18:39
                </div>
                <div class="table-money">
                    ¥ 10,340
                </div>
            </div>   
            <div class="table">

            </div>    
            <div class="table">

            </div>
        </div>

        <div class="table-line">
            <div class="table">
                <div class="info-line">
                    <div class="table-name">
                        T1
                    </div>
                    <div class="user-num">
                        2名
                    </div>
                </div>
                <div class="user-time">
                    18:39
                </div>
                <div class="table-money">
                    ¥ 10,340
                </div>
            </div>   
            <div class="table">

            </div>    
            <div class="table">

            </div>
        </div>
        
        <div class="add-user-box">
            新規追加
            <a href="user.php"></a>
        </div>
</div>
</body>
</html>