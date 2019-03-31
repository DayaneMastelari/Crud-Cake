<?php
App::uses('appModel', 'Model');

class Participante extends Model {

    public $validate = array(
        'nome' => array('rule' => 'notBlank', 'message' => 'Informe o nome'),
        'email' => array('rule' => 'notBlank', 'message' => 'Informe o email'),
        'cpf' => array('rule' => 'notBlank', 'message' => 'Informe o cpf'),
        'estado' => array('rule' => 'notBlank', 'message' => 'Informe o estado'),
        'cidade' => array('rule' => 'notBlank', 'message' => 'Informe o cidade'),
        'bairro' => array('rule' => 'notBlank', 'message' => 'Informe o bairro'),
        'endereco' => array('rule' => 'notBlank', 'message' => 'Informe o endereco'),
        'telefone' => array('rule' => 'notBlank', 'message' => 'Informe o telefone'),
        'nascimento' => array('rule' => 'notBlank', 'message' => 'Informe o nascimento'),
        'cep' => array('rule' => 'notBlank', 'message' => 'Informe o cep'),
    );
}


?>