<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    if($_COOKIE["lang"]=="en")
    {
        echo "Welcome";
    }
    if($_COOKIE["lang"]=="th")
    {
        echo "ยินดีต้อนรับ";
    }
    ?>
</body>
</html>