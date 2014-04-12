<?php 


$app->get('/', function () use ($app){
        $app->render('home/index.php');

});

?>