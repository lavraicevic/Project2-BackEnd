<?php

use Core\App;
use Core\Database;

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

// Additional headers which may be sent along with the CORS request
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');

$db = App::resolve(Database::class);

$posts = $db->query('SELECT * FROM POSTS');

$data = $posts->get();

echo json_encode($data);

exit;
