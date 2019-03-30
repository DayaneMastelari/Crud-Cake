<?php
$detalhe = array();
foreach($participantes as $participante){
    $editLink = $this->Html->link('Alterar', '/participantes/edit/'. $participante['Participante']['id']);
    $deleteLink = $this->Html->link('Deletar', '/participantes/delete/' . $participante['Participante']['id']);
    $novoLink = $this->Html->link('Novo', '/participantes/add');
    $detalhe[] = array(
        $participante['Participante']['nome'],  
        $participante['Participante']['email'],  
        $participante['Participante']['telefone'],
        $editLink . ' ' . $deleteLink
    );
}

echo $this->Html->tag('h1', 'Participantes');
echo $novoLink;

$titulos = array('Nome', 'Email', 'Telefone');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);
$novoButton = $this->Html->link('Novo', '/participantes/add');

echo $this->Html->tag('table', $header . $body);

?>