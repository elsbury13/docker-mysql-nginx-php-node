<?php

$user = 'root';
$password = 'example';

$dsn = 'mysql:dbname=users;host=mysql-service';

$dbh = new PDO($dsn, $user, $password);

$sth = $dbh->prepare('SELECT * FROM users');

$sth->execute();
$userList = $sth->fetchAll(PDO::FETCH_BOTH);

foreach ($userList as $user) {
    echo '<br>';
    echo $user['name'] . ' ' . $user['fav_color'];
    echo '<br>';
}