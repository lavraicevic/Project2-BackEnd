<?php

use Core\App;
use Core\Database;

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

// Additional headers which may be sent along with the CORS request
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');

$db = App::resolve(Database::class);

$id = $_GET['id'];

$post = $db->query('SELECT 
    p.*, 
    u.name AS user_name, 
    c.body AS comment_name 
    FROM posts p 
    INNER JOIN users u ON p.user_id = u.id 
    INNER JOIN comments c ON c.post_id = p.id    
    WHERE p.id = :id', ['id' => $id])->get();


echo json_encode($post);