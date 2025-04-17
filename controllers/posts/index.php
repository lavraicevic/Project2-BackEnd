<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$name = 'My posts u';

$posts = $db->query("select * from posts where user_id = :user_id", [
	'user_id' => $_SESSION['user']['id']
])->get();

view('posts/index', [
	'heading' => $name,
	'posts' => $posts
]);