<?php

function getProdutos() {
    $dados = array(
      ["Titulo" => "PHP" , 'descricao' => 'Curso de PHP', 'valor' => '120.90'],
      ["Titulo" => "Docker" , 'descricao' => 'Curso de Docker', 'valor' => '149.90'],
      ["Titulo" => "Java" , 'descricao' => 'Curso de Java', 'valor' => '149.90'],
      ["Titulo" => "PHP Básico" , 'descricao' => 'Curso de PHP basico', 'valor' => '129.90']
    );


    $conexao = getConexao();

    var_dump($conexao);die;
    $sql= "SELECT * FROM produtos";

    $retorno = $conexao->query($sql);
    $produtos = $retorno->fetchAll();
    var_dump($produtos);die;

    return $dados;
}


function buscaProdutos($busca) {

    $produtos = getProdutos();
    $resultados = [];

    foreach ($produtos as $produto){
//        $existe = in_array($busca, $produto);
        $existe = in_array(strtolower($busca), array_map('strtolower',$produto));
        if ($existe){
            array_push($resultados, $produto);
        }
    }

    return $resultados;

}