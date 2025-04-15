<?php

use Core\App;
use Core\Database;

$heading = 'Edit post';

$db = App::resolve(Database::class);

$userId = 1;
$post = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->findOrFail();




authorize($post['user_id'] === $userId);


view('posts/edit', [
	'heading' => $heading,
	'errors' => [],
	'post' => $post
]);