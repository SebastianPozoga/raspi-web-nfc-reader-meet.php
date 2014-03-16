<?php

define('APP_MODE', 'development');

require 'DB.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'debug' => TRUE,
    'mode' => 'development'
        ));

$app->get('/', function () {
    require 'main.php';
});

$app->get('/api/cards', 'getCards');

$app->run();

function getCards() {
    $sql = "select * FROM cards ORDER BY id desc";
    try {
        $db = getConnection();
        $stmt = $db->query($sql);
        $cards = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo '{"cards": ' . json_encode($cards) . '}';
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}
