<?php

function getUsuario(){

$dados = [
['nome' => 'Paulo Henrique', 'email' => 'paulo.mendes00@hotmail.com'],
['nome' => 'Erika', 'email' => 'erika.298@hotmail.com'],
['nome' => 'Uania', 'email' => 'uania@gmail.com']
];
return $dados;
}

function exibeUsuario(){
$usuarios = getUsuario();
$html = '';

foreach ($usuarios as $key => $user){
$nome = $user['nome'];
$email = $user['email'];

$html .= "<p>Nome: $nome -- Email: $email</p>";
}
return $html;



}