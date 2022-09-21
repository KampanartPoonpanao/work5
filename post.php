<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align = "center">Webboard Kukuk</h1>
    <hr>
    <div>
    <center><?php 
    if ($_GET["id"]% 2 == 0) {
    echo "ต้องการดูกระทู้หมายเลข".$_GET["id"]."<br>";
    echo "เป็นกระทู้หมายเลขคี่";} 
    
    else {
    echo "ต้องการดูกระทู้หมายเลข".$_GET["id"]."<br>";
    echo "เป็นกระทู้หมายเลขคี่";}
    ?></center>
    </div>
    <br>
    <form action = "index.php" method = "post">
    <table style="border:2px solid black ; width: 40%" align="center">
        <tr><td style="background-color:#6CD2FE ;"colspan="2">แสดงความคิดเห็น</td></tr>
        <tr><td align="center"><textarea name = "message" row="10" cols="30" ></textarea></td></tr>
        <tr><td align="center" colspan="2"><input type="submit" value="ส่งข้อความ" ></td></tr>
    </table> 
    <br>
    <center><a href="้home.html">กลับไปหน้าหลัก</a></center>
</body>
</html>