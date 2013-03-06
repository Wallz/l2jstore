<?php

try {
    $dbh = new PDO($config['database']['driver'].':dbname='.$config['database']['dbname'].';host='.$config['database']['host'], $config['database']['user'], $config['database']['password']);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>