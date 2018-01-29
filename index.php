<?php

require __DIR__.'/vendor/autoload.php';

$app = new Silex\Application;

$app->register(new Silex\Provider\ServiceControllerServiceProvider);

$app['posts.repository'] = function() {
    return new PostsRepository;
};

$app['posts.controller'] = function() use ($app) {
    return new PostsController($app['posts.repository']);
};

$app->get('/posts', "posts.controller:indexAction");

$app->run();