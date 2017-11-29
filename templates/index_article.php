<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css" />
    <title>Страница новости</title>
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
    <h1>
        <?php echo "Новость номер $id " ?>
        <br />-----------------------------------<br />
    </h1>
    <h3>

        <?php echo $data ?>
    </h3>
    <hr>
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