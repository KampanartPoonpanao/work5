<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align = "center">Webboard Kukuk</h1>
    <hr>
    <div align = "center">
        <?php
        $login = $_POST["login"];
        $password = $_POST["password"]; 
        if (($login == "admin")&&($password == "ad1234")) {
            echo "ยินดีต้อรับคุณ ADMIN";}
            else if (($login == "mem")&&($password == "mem1234")) {
            echo "ยินดีต้อนรับคุณ MEMBER";}
            else if (($login == "s6303051633093")&&($password == "Soccer312101")) {
            echo "ยินดีต้อนรับคุณ กัมปนาท สุดหล่อ";}
            else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
        ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
        <br>
        เข้าสู่ระบบด้วย <br>
        Login = <?php echo $_POST["login"]; ?>
        <br>
        Password = <?php echo $_POST["password"]; ?>
            
    </div>

    
</body>
</html>