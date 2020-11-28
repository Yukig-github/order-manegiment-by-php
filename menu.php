<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<title>order-manegiment</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/order.css">
<link rel="stylesheet" href="css/user.css">
<link rel="stylesheet" href="css/menu.css">
</head>
<body>
<div class="main-box">
    <div class="menu-top-box">
        <div class="menu-type-box">
            <div class="menu-type" id="ty1">フード</div>
            <div class="menu-type" id="ty2">ドリンク</div>
            <div class="menu-type" id="ty3">その他</div>
        </div>
        <div class="menu-title-box">
            <div class="menu-back">
                <form action="order.php" method="port">
                    <input type="submit" value="戻る">    
                </form>
            </div>
            <div class="menu-title-slide">
                <div class="menu-title" >
                    フード
                </div>
                <div class="menu-title2">
                    ドリンク
                </div>
                <div class="menu-title3">
                    その他
                </div>
                <div class="menu-title4" id="title1">
                    野菜
                </div>
                <div class="menu-title5" id="title2">
                    肉
                </div>
                <div class="menu-title6" id="title3">
                    デザート
                </div>
            </div>
        </div>
    </div>
    
    <div class="menu-content-box">
    <form action="food-portal.php" method="post">
        <div class="menu-content-food" id="ct1">
            <div class="menu-line">
                <input type="submit" name="food1" value="前菜" class="menu-ct">
                <input type="submit" name="food2" value="肉" class="menu-ct">
                <input type="submit" name="food3" value="デザート" class="menu-ct">
            </div>
        </div>
        <div class="menu-content-food" id="ct2">
            <div class="menu-line">
                <div class="menu-ct"><p>ソフトドリンク</p></div>
                <div class="menu-ct"><p>アルコール</p></div>
            </div>
        </div>
        <div class="menu-content-food" id="ct3">
            <div class="menu-line">
                <div class="menu-ct"><p>サービス</p></div>
            </div>
        </div>
    </form>
        <form action="cart.php" method="post">
            <div class="send-box">
                <div class="send-switch">
                    <input type="submit" value="　注文内容確認　" >
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>