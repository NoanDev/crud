<?php

require_once('db.php');

$site_dados = $pdo->query("SELECT * FROM site")->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php var_dump($site_dados) ?> 
    </pre>
    
</body>
</html>