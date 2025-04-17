<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
	$errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
	$errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
	view('auth/session/create', [
		'errors' => $errors
	]);
	
	exit();
}

$user = $db->query('select * from users where email = :email', [
	'email' => $email
])->find();


if ($user) {
	if (password_verify($password, $user['password'])) {
		login([
			'email' => $email,
			'name' => $user['name'],
			'id' => $user['id']
		]);
		
		header('location: /');
		exit();
	}
}

view('auth/session/create', [
	'errors' => [
		'email' => 'No matching account found for that email address and password.'
	]
]);

die();