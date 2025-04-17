<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$posts = $db->query('SELECT * FROM POSTS');

$data = [];

$data = $posts->get(MYSQLI_ASSOC);

echo json_encode($data);
