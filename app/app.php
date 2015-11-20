<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Queen.php";

    $app = new Silex\Application();
    $app['debug'] = TRUE;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app)
    {
        return $app['twig']->render('queen.html.twig');
    });

    $app->get('attack', function() use($app)
    {
        $my_Queen = new Queen($_GET['xq'], $_GET['yq']);
        $attack = $my_Queen->canAttack($_GET['xp'], $_GET['yp']);
        return $app['twig']->render('attack.html.twig', array('coordinates' => $attack));
//do i need to be "rendering" an array here? is that what i'm sending to twig?
    });

    return $app;
 ?>
