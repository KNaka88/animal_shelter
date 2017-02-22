<?php
    date_default_timezone_set ("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Animal.php";
    require_once __DIR__."/../src/Type.php";

    $app = new Silex\Application();

    $server = 'mysql:host=localhost:8889;dbname=animal_shelter';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);
    $app['debug'] = true;

     use Symfony\Component\HttpFoundation\Request;
     Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render("index.html.twig");
    });

    $app->post("/types", function() use ($app) {

        $animal_type = $_POST['type'];
        $new_type = new Type($animal_type);
        $new_type->save();
        return $app['twig']->render("types.html.twig", array("types"=>Type::getAll()));

    });


    return $app;
