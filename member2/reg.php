<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
</head>
<body>
<h2>會員註冊</h2>    
<form action="./add_user.php" method="post">
    <div>
        <label>帳號</label>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label>密碼:</label>
        <input type="text" name="pw" id="pw">
    </div>
    <div>
        <label>姓名:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label>E-Mail:</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label>居住地:</label>
        <input type="text" name="address" id="address">
    </div>
    <div>
        <input type="submit" value="送出">
        <input type="reset" value="重置">
    </div>


</form>

</body>
</html>