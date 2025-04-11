<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$name = 'My posts u';

$posts = $db->query("select * from posts")->get();

view('posts/index', [
	'heading' => $name,
	'posts' => $posts
]);