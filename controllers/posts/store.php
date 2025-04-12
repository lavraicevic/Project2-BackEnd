<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);


$errors = [];

if (! Validator::picture($_FILES['picture']['name'])) {
    $errors['picture'] = 'Picture is required';
}

if (! Validator::string($_POST['title'])) {
    $errors['title'] = 'Title is required';
}

if (! Validator::string($_POST['link'])) {
    $errors['link'] = 'A link is required';
}

if (! Validator::string($_POST['body'], 10)) {
    $errors['body'] = 'A body of no more that 10 characters is requried';
}

if (! empty($errors)) {
    view('posts/create', [
        'heading' => 'Create Post', 'errors' => $errors
    ]);
}

$db->query('INSERT INTO posts(title, user_id, body) VALUES(:title, :user_id, :body)', [
    'title' => $_POST['title'], 
    'user_id' => 1,
    'body' => $_POST['body'],
    'category_id' => $_POST['category'],
    'video_url' => $_POST['link'],
    'picture' => $_FILES['picture']['name']
]);

header('Location: /');

exit;

