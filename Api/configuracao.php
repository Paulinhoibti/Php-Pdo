<?php

function getInfo($atributos){
    $dados = ['titulo' => 'Curso de PHP', 'descricao' => 'Programando com PHP'];
    return $dados[$atributos];
}
