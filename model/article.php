<?php

require_once __DIR__ . '/../functions/sql.php';

function get_allArticles()
{

  $sql = 'SELECT * FROM articles';
    return Sql_query($sql);
     //  return $set = array(
   //     array('id' => 1, 'name'=>'поезд', 'text'=> 'вчера приехал поезд'), array('id' => 2, 'name'=>'поезд2', 'text'=> 'вчера приехал поезд2'),    );
}

