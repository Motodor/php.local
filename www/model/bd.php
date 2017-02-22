<?php
    function mysql_conn(){
        mysql_connect('localhost', 'root', '');
        mysql_selectdb('phplocal');
    }
    function Get_from_bd($sql){
        $result = mysql_query($sql);
        $news = [];
        while ($row = mysql_fetch_assoc($result)){
            $news [] = $row;
        }
        return $news;

    }
    function Get_all_news(){
        mysql_conn();
        $sql = 'SELECT * FROM news';
        return Get_from_bd($sql);
    }
    function Get_news($id){
        mysql_conn();
        $sql = "SELECT *
        FROM news
        WHERE news_id = $id";
        return Get_from_bd($sql);

    }

    function Add_news($title, $text, $data, $about){
        mysql_conn();
        $sql = "INSERT INTO news (title, text, data, about)
                VALUES ('".$title."', '".$text."','".$data."','".$about."')";
        $r = mysql_query($sql);
        return $r;
    }
