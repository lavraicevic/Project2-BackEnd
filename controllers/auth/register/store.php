<?php

use Core\App;
use Core\Database;
use Core\Validator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(! Validator::email($email)){
	$errors['email'] = 'Please provide email that is valid';
}

if(! Validator::string($password, 7, 255)) {
	$errors['password'] = 'Password must be at least 7 characters';
}

if(! Validator::string($name, max: 255)) {
	$errors['name'] = 'Name is required';
}

if(! empty($errors)) {
	view('auth/register/create', [
		'errors' => $errors
	]);
	
	return;
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
	'email' => $email
])->find();


if($user) {
	header('Location: /');
} else {
	// create user and log in
	
	$db->query('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)', [
		'name' => $name,
		'email' => $email,
		'password' => password_hash($password, PASSWORD_DEFAULT)
	]);
	
	$_SESSION['user'] = [
		'name' => $name,
		'email' => $email
	];
	
	header('Location: /');
	exit();
}
	// if no -> create user and log him in
