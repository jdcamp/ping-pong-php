<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    session_start();
    if (empty($_SESSION['ping-pong-session'])) {
        $_SESSION['ping-pong-session'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('ping-pong.html.twig');
    });

    $app->post("/number", function() use ($app) {
        $newNumber = new PingPongGenerator();
        $newNumber->generatePingPongArray($_POST['number-input']);
        $newNumber->save();
        return $app['twig']->render('number.html.twig', array('newArray' => $newNumber->getOutputString()));
    });

    return $app;
?>
