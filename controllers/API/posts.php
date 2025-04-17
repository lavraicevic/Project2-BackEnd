<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$posts = $db->query('SELECT * FROM POSTS');

$data = $posts->get();

echo json_encode($data);
