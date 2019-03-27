<?php
    App::uses('AppController', 'Controller');

    class ParticipantesController extends AppController {

        public function index(){
            $participantes = array(
                array('Participante' => array('nome' => 'dayane', 'email' => 'dayane.mastelari@gmail.com', 'telefone' => '132134465')),
                array('Participante' => array('nome' => 'Miguel', 'email' => 'miguel.lacerda@gmail.com', 'telefone' => '786453164')),
            );

            $fields = array('nome', 'email', 'telefone');
            $participantes = $this->Participante->find('all', compact('fields'));

            $this->set('participantes', $participantes);
        }
    }
?>