<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form action="/www/add.php" method="post" enctype="multipart/form-data">
        <label>Название:</label>
        <input type="text" name="title"/>
        <lable>Фото:</lable>
        <input type="file" name="image"/>
        <input type="submit" value="Добавить"/>
    </form>

</body>
</html>