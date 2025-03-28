<?php
require_once 'databaseConfig.php'; //access the login values
try {
$connection = new PDO($dsn, $username, $password, $options);
echo 'DB connected';
} catch (\PDOException $e) {
throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>