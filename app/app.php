<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->get('/anagramming', function() use ($app) {
        $newAnagram = new Anagram();
        $input_array = array($_GET['word1'], $_GET['word2'], $_GET['word3'], $_GET['word4']);
        $results = $newAnagram->anagramCheck($_GET['input1'], $input_array);
        return $app['twig']->render('results.html.twig', array('results'=>$results));
    });

    return $app;
?>
