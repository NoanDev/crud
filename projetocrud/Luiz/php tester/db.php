<?php

$pdo = new PDO('sqlite:bancodedados.sqlite');

$pdo->exec('CREATE TABLE IS NOT EXISTS site (
            titulo TEXT,
            banner TEXT,
            sobre TEXT');
if (!$pdo->query("SELECT * FROM site")->fetch()) {
    $pdo->exec("INSERT INTO site (titulo,banner,sobre)
                VALUES ('Meu Site', 'Bem Vindo Ao meu Site', 'Texto da Area SOBRE')");
}
