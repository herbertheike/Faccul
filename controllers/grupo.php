
<?php 

$app->get('grupo/busca/', function($busca){

	$grupobusca = New model\GrupoBusca(); 

	$grupobusca = pesquisar($busca);

	$app->render('grupo/busca.php');

});


$app->get('grupo/novo', function($busca){

	

});

$app->post('grupo/novo', function($busca){

	

});

$app->delete('grupo/novo', function($busca){

	

});
?>