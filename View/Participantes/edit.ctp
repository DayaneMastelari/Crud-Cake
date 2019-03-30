<?php

$form = $this->Form->create('Participante');
$form .= $this->Form->hidden('Participante.id');
$form .= $this->Form->input('Participante.nome');
$form .= $this->Form->input('Participante.email');
$form .= $this->Form->input('Participante.cpf');
$form .= $this->Form->input('Participante.estado');
$form .= $this->Form->input('Participante.cidade');
$form .= $this->Form->input('Participante.bairro');
$form .= $this->Form->input('Participante.endereco');
$form .= $this->Form->input('Participante.telefone');
$form .= $this->Form->input('Participante.nascimento');
$form .= $this->Form->input('Participante.cep');
$form .= $this->Form->end('Alterar');

echo $this->Html->tag('h1', 'Alterar Participante');
echo $form;
echo $voltarLink = $this->Html->link('Voltar', '/participantes');

?>