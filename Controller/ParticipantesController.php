<?php
    App::uses('AppController', 'Controller');

    class ParticipantesController extends AppController {

        public function index() {
            $participantes = array(
                array('Participante' => array('nome' => 'dayane', 'email' => 'dayane.mastelari@gmail.com', 'telefone' => '132134465')),
                array('Participante' => array('nome' => 'Miguel', 'email' => 'miguel.lacerda@gmail.com', 'telefone' => '786453164')),
            );

            $fields = array('Participante.nome', 'Participante.email', 'Participante.telefone', 'Participante.id');
            $participantes = $this->Participante->find('all', compact('fields'));

            $this->set('participantes', $participantes);
        }

        public function add(){
            if (!empty($this->request->data)) {
                $this->Participante->create();
                if ($this->Participante->save($this->request->data)) {
                    $this->Flash->set("Participante cadastrado com sucesso");
                    $this->redirect('/participantes');
                }
            }
        }

        public function edit($id = null){
            if (!empty($this->request->data)) {
                if ($this->Participante->save($this->request->data)) {
                    $this->Flash->set("Participante alterado com sucesso");
                    $this->redirect('/participantes');
                }else {
                    $fields = array('Participante.nome', 'Participante.email', 'Participante.telefone', 'Participante.id');
                    $condicions = array('Participante.id' => $id);
                    $this->request->data = $this->Participante->find('firts', compact('fields', 'conditions'));
                }
            }
        }
    }
?>