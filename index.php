<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode(($lista));

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuário = new Usuario();
//$usuário->login("root","!@#$");
//echo $usuário;

//Criando um novo usuário
//$aluno = new Usuario(); //Usando o __construct

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();
//echo $aluno;

//Alterar um usuário
/*$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor", "98765");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;

?>