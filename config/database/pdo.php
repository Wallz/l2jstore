<?php

try {
    $dbh = new PDO(DB_DRIVER.':dbname='.DB_DATABASE_NAME.';host='.DB_HOST, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>