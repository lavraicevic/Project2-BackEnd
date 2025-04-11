<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Note';

$userId = 1;
$post = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($post['user_id'] === $userId);

view('posts/show', [
    'heading' => $heading, 'post' => $post
]);   