<?php
require __DIR__.'/../model/bd.php';
$id = $_GET['id'];

$news = Get_news($id);
//var_dump($news);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <body>
    <h1><?php echo $news[0]['title'];?></h1>
    <h3><?php echo $news[0]['text'];?></h3>
    <p><a href="../index.php"> На главную </a> </p>
    </body>
    </head>
</html>
