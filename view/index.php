<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table>
    <tr>
      <th> Название</th>
    </tr>
  <?php foreach ($articles as $article) ?>
    <tr>
        <td> <?php echo $article['name'] . '</br>' . $article['text'] ; ?> </td>
    </tr>
<endforeach; ?>
    </table>


<a href="add.php"> Добавить новость</a>
<a href="/delete.php">Удалить новость</a>

</body>
</html>