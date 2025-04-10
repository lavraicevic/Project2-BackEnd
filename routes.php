<?php

/** Public routes */
$router->get('/', 'controllers/index.php');
$router->get('/contact', 'controllers/contact.php');

/** Authenticated routes */
$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/note', 'controllers/notes/show.php')->only('auth');
$router->delete('/note', 'controllers/notes/delete.php')->only('auth');

$router->get('/note/edit', 'controllers/notes/edit.php')->only('auth');
$router->patch('/note', 'controllers/notes/update.php')->only('auth');

$router->get('/note/create', 'controllers/notes/create.php')->only('auth');
$router->post('/note', 'controllers/notes/store.php')->only('auth');

/** Guest routes */
$router->get('/register', 'controllers/auth/register/create.php')->only('guest');
$router->post('/register', 'controllers/auth/register/store.php')->only('guest');

$router->get('/login', 'controllers/auth/session/create.php')->only('guest');
$router->post('/session', 'controllers/auth/session/store.php')->only('guest');
$router->delete('/session', 'controllers/auth/session/destroy.php')->only('auth');


