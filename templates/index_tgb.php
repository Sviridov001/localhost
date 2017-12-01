<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css" />
    <title>Гостевая</title>
    <style>
        article {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px double darkseagreen;
        }
    </style>
</head>
<body>

<?php include __DIR__ . '/header.php' ?>

<div id="content">
<h1>Записи:</h1>

<hr>

<?php foreach ($data as $line) { ?>
    <article> <?php echo $line;?></article>
     <p>
   ==========================================
    </p>
<?php } ?>
<br />=================================<br />
<form action='../index_gb.php' method="post">
    <label>Введите свое сообщение:</label>
    <br />
    <input name='mess' type='text' />
    <br />
    <input type='submit' value='Отправить'>
</form>
</div>

<?php include __DIR__ . '/menu.php' ?>

</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2017
    <!-- Нижняя часть страницы -->
</div>

</body>
</html>