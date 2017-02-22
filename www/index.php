<?php
require __DIR__.'/model/bd.php';
mysql_conn();
$news = Get_all_news();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title> Новостная лента </title>
        <body>
        <p><a href="./view/add_form.php">Добавить новость</a> </p>
        <?php
        foreach ($news as $vn ){
        foreach ($vn as $key => $value){
        ?>

            <p><?php if ($key == 'data') {echo $vn['data'];} ?> </p>
            <h1><?php if ($key == 'title') {echo $vn['title'];} ?></h1>
            <p><?php if ($key == 'text') {echo $vn['text'];} ?> </p>

        <?php
        }
        ?>
            <p><a href="view/news.php?id=<?php echo $vn['news_id'];?>">Подробнее</a></p>
        <?php
    }
    ?>
        </body>
    </head>
</html>
