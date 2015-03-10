<?php

/**
 * Description of ClienteController
 *
 * @author rui
 */

class ClienteController extends AppController {
    
    public $helpers = array(
        'Html',
        'Form',
        'Time');
    
    public $components = array(
        'Session',
        'RequestHandler');
    
    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'cliente.id' => 'asc'
        )
    );

    
    public function index(){
        $this->Cliente->recursive = 0;
        $this->paginate['cliente']['limit'] = 10;
        $this->paginate['cliente']['order'] = array('usuario.id' => 'asc');
        
        $this->set('clientes', $this->paginate());
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
