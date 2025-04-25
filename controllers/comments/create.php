<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);


$errors = [];


if (! Validator::string($_POST['comment'], 10)) {
    $errors['comment'] = 'A comment of  more that 10 characters is requried';
}

if (! empty($errors)) {
    view('posts/create', [
        'heading' => 'Create Post', 'errors' => $errors
    ]);
}


$db->query('INSERT INTO comments(user_id, post_id, body) VALUES(:user_id, :post_id, :body)', [ 
    'user_id' => $_SESSION['user']['id'],
    'post_id' => $_POST['postID'],
    'body' => $_POST['comments']
]);



exit;

