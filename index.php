<?php

require __DIR__.'/vendor/autoload.php';

use Silex\Application;

$app = new Application([
  'debug' => true,
]);

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', function() use($app) {
  return $app['twig']->render('global.twig.html');
});
