<?php


function Sql_connect()
{
    $host = 'localhost';
    $db = 'articles';
    $link = mysqli_connect( $host, 'root', '', $db, 3306, 'TCP/IP');
    return   mysqli_select_db(  $link, $db);
}


function Sql_query($sql)
{
    $link = mysqli_connect( 'localhost', 'root', '', 'articles', 3306, 'TCP/IP');
//    $res = mysqli_query($link, $sql);
//
//    $ret = array();
//    while(false !== $row = mysqli_fetch_assoc($res)){
//        $ret = $row;
//    }
//    return $ret;
    if ($result = mysqli_query($link, $sql)) {
        // printf("Select returned %d rows.\n", mysqli_num_rows($result));
        $ret = array();
        while(false !== $row = mysqli_fetch_assoc($result)){
            $ret = $row;}
        return $ret;
    }
}
function Sql_addArticle()
{

    $link = mysqli_connect( 'localhost', 'root', '', 'articles', 3306, 'TCP/IP');
    $name = 'Новая новость';
    $text = 'Добавлен текст';
    $sql = 'INSERT INTO articles (name,text) VALUES ($name, $text)';
    $res = mysqli_query($link,$sql);

    $ret = array();
    while(false !== $row = mysqli_fetch_assoc($res)){
        $ret = $row;
    }
    return $ret;
}