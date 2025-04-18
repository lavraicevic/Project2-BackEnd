<?php

use Core\App;
use Core\Database;

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

// Additional headers which may be sent along with the CORS request
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');

$db = App::resolve(Database::class);

$posts = $db->query('SELECT p.*, u.name as author_name, c.name as category_name FROM posts p INNER JOIN users u ON p.user_id = u.id LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.created_at DESC');


$data = $posts->get();

echo json_encode($data);

exit;
