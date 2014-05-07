<?php
session_start();
$app->get('/materias/nova/', function ($novadisciplina) {

		$CadastraDisciplina = New Model\Disciplina();

		$app->render('materias/index.php');
		
	});

$app->post('/materias/Add', function ($novadisciplina) {
    $name = $app->request->post('nome');
    $descricao = $app->request->post('descricao');
});

?>