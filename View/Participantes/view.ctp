<?php
    $view = $this->Html->tag('h4', 'Nome');
    $view .= $this->Html->para('', $this->request->data['Participante']['nome']);
    $view .= $this->Html->tag('h4', 'Email');
    $view .= $this->Html->para('', $this->request->data['Participante']['email']);
    $view .= $this->Html->tag('h4', 'CPF');
    $view .= $this->Html->para('', $this->request->data['Participante']['cpf']);
    $view .= $this->Html->tag('h4', 'Estado');
    $view .= $this->Html->para('', $this->request->data['Participante']['estado']);
    $view .= $this->Html->tag('h4', 'Cidade');
    $view .= $this->Html->para('', $this->request->data['Participante']['cidade']);
    $view .= $this->Html->tag('h4', 'Bairro');
    $view .= $this->Html->para('', $this->request->data['Participante']['bairro']);
    $view .= $this->Html->tag('h4', 'Endereco');
    $view .= $this->Html->para('', $this->request->data['Participante']['endereco']);
    $view .= $this->Html->tag('h4', 'Telefone');
    $view .= $this->Html->para('', $this->request->data['Participante']['telefone']);
    $view .= $this->Html->tag('h4', 'Nascimento');
    $view .= $this->Html->para('', $this->request->data['Participante']['nascimento']);
    $view .= $this->Html->tag('h4', 'CEP');
    $view .= $this->Html->para('', $this->request->data['Participante']['cep']);
    
    echo $this->Html->tag('h1', 'Visualizar Filme');
    echo $view;
    echo $voltarLink = $this->Html->link('Voltar', '/participantes');
?>