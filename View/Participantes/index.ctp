<?php

$detalhe = array();
foreach($participantes as $participante){
    $editLink = $this->Html->link('alterar', '/participantes/edit'. $participante['Participante']['id']);
    $detalhe[] = array(
        $participante['Participante']['nome'],  
        $participante['Participante']['email'],  
        $participante['Participante']['telefone'],
        $editLink
    );
}

echo $this->Html->tag('h1', 'Participantes');

$titulos = array('Nome', 'Email', 'Telefone');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);
$novoButton = $this->Html->link('Novo', '/participantes/add');

echo $this->Html->tag('table', $header . $body);

?>