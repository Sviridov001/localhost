<!DOCTYPE html>
<html>

<head>
    <title>===Новости===</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<?php include __DIR__ . '/header.php' ?>

<div id="content">
    <!-- Заголовок -->
    <h1>Добро пожаловать на наш сайт!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Новостной сайт</h3>
    <p>
        Разработка новостного сайта
        Самый сложный в изготовлении сайт. В отличие от другого сложного сайта - Интернет магазина, управляемого как правило из 1С, новостной сайт должен быть удобным в администрировании и максимально автоматизирован. Экономия времени группы редакторов при работе с текстовыми и медиа-материалами позволяет уделить больше внимания качеству и количеству новостей.
    </p>
    <?php $i=1; foreach ($data as $line) { ?>
        <p>
            <?php echo $i; ?>  ===============================================
        </p>
        <article>
            <?php
            $tex = explode('.', $line->getNews());
            ?>
            <a href='article.php?id=<?php echo $i?>'>
                <?php
            echo $tex[0]; $i++
                ?>
            </a>

        </article>

    <?php } ?>
    <br />-----------------------------------<br />
    <form action='../index.php' method="post">
        <label>Введите свою новость:</label>
        <br />
       <!-- <input name='mess' type='text' />-->
        <p><textarea rows="10" cols="45" name="mess"></textarea></p>
        <br />
        <input type='submit' value='Отправить'>
    </form>
    <!-- Область основного контента -->
</div>

<?php include __DIR__ . '/menu.php' ?>

<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2017
    <!-- Нижняя часть страницы -->
</div>
</body>

</html>
