<?php

$detalhe = array();
foreach($participantes as $participante){
    $detalhe[] = array(
        $participante['Participante']['nome'],  
        $participante['Participante']['email'],  
        $participante['Participante']['telefone']
    );
}

echo $this->Html->tag('h1', 'Participantes');

$titulos = array('Nome', 'Email', 'Telefone');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);

echo $this->Html->tag('table', $header . $body);

?>