<?php include "connect.php"?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php
$member = $_GET["username"];
$stmt=$pdo->prepare("SELECT username,name,address,email FROM member WHERE username LIKE '$member'");
$stmt->execute();
$row=$stmt->fetch();
?>
<div style="display:flex">
    <div>
        <img src='member_photo/<?=$row["username"]?>.jpg' width=100>
    </div>
    <div style="margin:auto;margin-left:1em">
        ชื่อ: <?=$row["name"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล์: <?=$row["email"]?><br><br>
    </div>
</div>
</body>
</html>