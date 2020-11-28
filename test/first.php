<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Step1</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="main">
    <form action="step1.php" method="post">
    <div class="step-box">
    Step
        <input type="number" name="step1" min="0" require>
    </div>
    <div class="menu-box">
    メニュー数
        <input type="number" name="" min ="0" require>
    </div>
    
        <div class="order">
            <div class="order-title">order:</div>
            <div class="order-dish">
            料理番号
            <input type="number" name="dish" min="0" max="999999" require>
            </div>
            <div class="order-stock">
            初期在庫数
                <input type="number" name="stock" min="1" max="10000" require>
            </div>
            <div class="order-price">
            価格
                <input type="number" name="price" min="1" max="100000" require>
            </div>
            <input type="submit" value="ok">
        </div>
        
    </form>
</div>
</body>
</html>
