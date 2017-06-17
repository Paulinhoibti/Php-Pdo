<?php

function getConexao(){
    $conexao = new PDO("mysql:host=localhost;dbname=crudzinho", "root", "");

    return $conexao;
}