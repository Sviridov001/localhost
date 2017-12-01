<?php
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "gb";
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysqli_connect_error());

mysqli_query($link, "CREATE DATABASE gb");
mysqli_select_db($link, 'gb');
mysqli_query($link, "CREATE TABLE items (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, content text)");
echo "it is OK!";

//CREATE TABLE `gb`.`items` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `content` TEXT NOT NULL , `gb_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() , PRIMARY KEY (`id`)) ENGINE = InnoDB;
//INSERT INTO `items` (`id`, `content`, `gb_time`) VALUES (NULL, 'первый пост', CURRENT_TIMESTAMP), (NULL, 'Второй пост', CURRENT_TIMESTAMP);
/*$sql_query = [ "CREATE DATABASE gb", "CREATE TABLE items (id int NOT NULL auto_increment, content text, PRIMARY KEY(id))" ];

foreach ($sql_query as $line){
    $sql = mysqli_real_escape_string($link, $line);
    mysqli_query($link, $sql);
}*/
