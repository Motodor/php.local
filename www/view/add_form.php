<?php
require __DIR__.'/../model/bd.php';
$war = '';
if (isset($_POST['insert'])){
    $title = $_POST['title'];
    $text = $_POST['text'];
    $data = $_POST['data'];
    $about = $_POST['about'];
    if (!empty($title) and !empty($text)){
        Add_news($title, $text, $data, $about);
        $war = 'Новость добавлена, чтобы посомтреть результат перейдите на главную';
    }
    else
        $war = 'Поле названия или текста пусты!';
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title> Добавление </title>
    <body>
    <h2><a href="../index.php">На главную</a> </h2>
    <p><?php echo $war; ?></p>
    <h3>Добавление новой статьи</h3>
    <form method="post">
        <p>Название новости: <input type="text" name="title"> </p>
        <p>Тематика новости:</p>
        <p> Спорте<input type="radio" name="about" value="1">
            Политика <input type="radio" name="about" value="2">
            Игры <input type="radio" name="about" value="3">
            Кино <input type="radio" name="about" value="4"></p>
        <p>Дата и основной текст:</p>
        <p><input type="date" name="data"></p>
        <p><textarea cols="70" rows="20" wrap="hard" name="text"></textarea></p>
        <p><input type="submit" name="insert"></p>
    </form>
    </body>
    </head>
</html>
