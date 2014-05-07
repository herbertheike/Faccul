<?php 
namespace models;

session_start();
private $nome;
private $descricao;
private $dbserver = "127.0.0.1";
private $dbuser = "root";
private $dbpass = "123";
private $db = "faccul";

Class Disciplina{

	public function SetNome($nome){
		$this->nome = $nome;
	}
	public function GetNome(){
		return $this->$nome;
	}
	public function SetDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function GetDescricao(){
		return $this->descricao = $descricao;
	}
	public function AddDisciplina(){
		$dbconnect = mysql_connect($dbserver,$dbuser,$dbpass) or die (mysql_error());
		$dbselect = mysql_select_db($db, $dbconnect) or die(mysql_error());
 
		$$dbsql = mysql_query("INSERT INTO disciplinas (nome, descicao) VALUES ('$nome', '$descricao')") or die(mysql_error());
 
		mysql_close($dbconnect);
	}
	public function ListaDisciplina(){
		$dbsql = mysql_query("SELECT * FROM disciplinas ORDER BY nome") or die(mysql_error());
		while($array = mysql_fetch_array($dbsql))
		{
		  echo $array['nome']." ".$array['descricao']."<br />";
		}
	}

?>