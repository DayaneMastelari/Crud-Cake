<?php

$form = $this->Form->create('Participante');
$form .= $this->Form->hidden('Participante.id');
$form .= $this->Form->input('Participante.nome', array('required' => false));
$form .= $this->Form->input('Participante.email', array('required' => false));
$form .= $this->Form->input('Participante.cpf', array('required' => false));
$form .= $this->Form->input('Estado', array(
    'options' => array(
        'Acre',
        'Alagoas',
        'Amapá',
        'Amazonas',
        'Bahia',
        'Ceara',
        'Distrito Federal',
        'Espírito Santo',
        'Goiás',
        'Maranhão',
        'Mato Grosso',
        'Mato Grosso do Sul',
        'Minas Gerais',
        'Pará',
        'Paraíba',
        'Paraná',
        'Pernambuco',
        'Piauí',
        'Rio de Janeiro',
        'Rio Grande do Norte',
        'Rio Grande do Sul',
        'Rondônia',
        'Roraima',
        'Santa Catarina',
        'São Paulo',
        'Sergipe',
        'Tocantins'
    )
));
$form .= $this->Form->input('Participante.cidade', array('required' => false));
$form .= $this->Form->input('Participante.bairro', array('required' => false));
$form .= $this->Form->input('Participante.endereco', array('required' => false));
$form .= $this->Form->input('Participante.telefone', array('required' => false));
$form .= $this->Form->input('Participante.nascimento', array('required' => false));
$form .= $this->Form->input('Participante.cep', array('required' => false));
$form .= $this->Form->end('Alterar');

echo $this->Html->tag('h1', 'Alterar Participante');
echo $form;
echo $voltarLink = $this->Html->link('Voltar', '/participantes');

?>