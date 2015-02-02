<?php

/**
 * Description of ClienteController
 *
 * @author rui
 */

class ClienteController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Time');
    public $components = array('Session');

    
    public function index(){
        $this->set('clientes', $this->Cliente->find('all'));
    }
    
    public function novo(){
        if ($this->request->is('post')){
            $this->Session->setFlash('passeia aqui!', 'default', array('class' => 'success'));
            $this->Cliente->Create();
            if ($this->Cliente->save($this->request->data)){
                $this->Session->setFlash('Cliente cadastrado com sucesso!', 'default', array('class' => 'success'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Erro ao cadastrar Cliente!');
        }
    }
    
    public function ver($id = NULL){
        if (!$id){
            throw new NotFoundException('Codigo inexistente!');
        }
        $cliente = $this->Cliente->findById($id);
        if(!$cliente){
            throw new NotFoundException('Cliente selecionado não existe!');
        }
        $this->set('clientes', $cliente);
    }
    
}
