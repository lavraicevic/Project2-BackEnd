<?php

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$userId = $_SESSION['user']['id'];

$post = $db->query("select * from posts where id = :id", [
	'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] === $userId);

$errors = [];

if (! Validator::string($_POST['title'])) {
	$errors['title'] = 'Title is required';
}

if (! Validator::string($_POST['body'], 1)) {
	$errors['body'] = 'A body of no more that 10 characters is requried';
}

if (! empty($errors)) {
	view('posts/edit', [
		'heading' => 'Edit post',
		'errors' => $errors,
		'post' => $post
	]);
	
	die();
}

$db->query('update posts set title = :title, body = :body,  video_url = :video_url, category_id = :category_id where id = :id ', [
	'title' => $_POST['title'],
	'body' => $_POST['body'],
	'id' => $_POST['id'],
	'video_url' => $_POST['video_url'],
	'category_id' => $_POST['category_id']
]);


header('Location: /posts');