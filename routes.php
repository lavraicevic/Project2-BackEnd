<?php

/** Public routes */
$router->get('/', 'controllers/index.php');
$router->get('/contact', 'controllers/contact.php');

/** Authenticated routes */
$router->get('/posts', 'controllers/posts/index.php')->only('auth');
$router->get('/post', 'controllers/posts/show.php')->only('auth');
$router->delete('/post', 'controllers/posts/delete.php')->only('auth');

$router->get('/post/edit', 'controllers/posts/edit.php')->only('auth');
$router->patch('/post', 'controllers/posts/update.php')->only('auth');

$router->get('/post/create', 'controllers/posts/create.php')->only('auth');
$router->post('/post', 'controllers/posts/store.php')->only('auth');


$router->delete('/session', 'controllers/auth/session/destroy.php')->only('auth');

/** Guest routes */
$router->get('/register', 'controllers/auth/register/create.php')->only('guest');
$router->post('/register', 'controllers/auth/register/store.php')->only('guest');

$router->get('/login', 'controllers/auth/session/create.php')->only('guest');
$router->post('/session', 'controllers/auth/session/store.php')->only('guest');

// AUThenticated routes

$router->get('/posts', 'controllers/posts/index.php')->only('auth');

// API routes
$router->get('/api/posts', 'controllers/API/posts.php');
$router->get('/api/events', 'controllers/API/events.php');
// Singular post/event API
$router->get('/api/event', 'controllers/API/event.php');
$router->get('/api/post', 'controllers/API/post.php');





