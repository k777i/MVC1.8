<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="2">
    <tr>
        <th>Название</th>
        <th>Фото</th>
    </tr>
    <?php foreach ($items as $value): ?>
        <tr>
            <td> <?php echo $value['title']; ?></td>
            <td><img src="/www/<?php echo $value['path']; ?>" ></td>
        </tr>
    <?php endforeach; ?>

    <p><a href="/www/add.php">Добавить</a>(контроллер add.php)</p>
</table>
</body>
</html>