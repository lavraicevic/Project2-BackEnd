<?php

use Core\App;
use Core\Database;

$heading = 'Edit post';

$db = App::resolve(Database::class);

$userId = 1;
$post = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->findOrFail();

$categories = $db->query("select * from categories")->get();


authorize($post['user_id'] === $userId);


view('posts/edit', [
	'heading' => $heading,
	'errors' => [],
	'post' => $post,
	'categories' => $categories
]);