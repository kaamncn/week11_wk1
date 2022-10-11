<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    if($_GET["lang"] == "en")
    {
        setcookie("lang","en",time()+3600*24);
    }
    else if($_GET["lang"] == "th")
    {
        setcookie("lang","th",time()+3600*24);
    }
    ?>
</body>
</html>