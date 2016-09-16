<?php

    require_once __DIR__ . "/../vendor/autoload.php";
    require_once __DIR__ . "/../src/RepeatCounter.php";
    date_default_timezone_set("America/New_York");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
       'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("word_frequency.html.twig");
    });

    $app->post("/", function() use ($app) {
        $my_repeatCounter = new RepeatCounter;
        $word_count = $my_repeatCounter->CountRepeats($_POST["word"], $_POST["string"]);
        return $app["twig"]->render("word_count.html.twig", array("result" => $word_count));
    });

    return $app;

?>
