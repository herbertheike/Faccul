<?php 

require 'vendor/autoload.php';

/* Defini os novos routes e views */
define('CONTROLLERS_PATH', './controllers/');
define('VIEWS_PATH', './views/');
define('MODELS_PATH', './models/');

/* Usa o nova views */
$app = new \Slim\Slim(array(
    'templates.path' => VIEWS_PATH
));

/* Cria o Controllers */
$controllerDir = opendir(CONTROLLERS_PATH);
while ($controller = readdir($controllerDir)) {
  if($controller != '.' && $controller != '..')
      require CONTROLLERS_PATH . $controller;
  		$app = \Slim\Slim::getInstance();
}

/* Cria o Models */
$modelsDir = opendir(MODELS_PATH);
while ($models = readdir($modelsDir)) {
  if($models != '.' && $models != '..')
      require MODELS_PATH . $models;
}


/* Executa o $app */
$app->run();

?>
