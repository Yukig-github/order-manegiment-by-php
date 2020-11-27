<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>order-manegiment</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="main-box">
        <div class="main-title-box">
            <div class="main-title">
                Order App
            </div>  
        </div>
        <div class="main-margin">
            <p>ページの選択</p>
        </div>
            <div class="main-content">
                <div class="login-box">
                    <form action="portal.php" method="post">
                    <select name="login_id">
                    <option value="order">注文ページ</option>
                    <option valie="cook">調理ページ</option>
                    <option value="dev">開発ページ</option>
                    </select>
                </div>
                <div class="main-check"><input type="submit" value="Go"></div>
                </form>
            </div>
    </div>
</body>
</html>