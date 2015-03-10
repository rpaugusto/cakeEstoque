<?php

/**
 * Description of UsuarioController
 *
 * @author rui.penteado
 */
class UsuarioController extends AppController {

    public $helpers = array(
        'Html',
        'Form',
        'Time',
        'Js');
    
    public $components = array(
        'Session',
        'RequestHandler');
    
    public $paginate = array(
        'limit' => 2,
        'order' => array(
            'usuario.id' => 'asc' 
        )
    );

    public function index() {
        $this->Usuario->recursive = 0;
        $this->paginate['usuario']['limit'] = 3;
        $this->paginate['usuario']['order'] = array('usuario.id' => 'asc');
        
        $this->set('usuarios', $this->paginate());
    }

    public function ver($id = NULL) {
        //verifica se foi selecionado um ID
        if (!$id) {
            throw new NotFoundException('Codigo invalido');
        }
        //localiza id selecionado
        $usuario = $this->Usuario->findById($id);
        //verifica se existe o usuario referente a id selecionada
        if (!$usuario) {
            throw new NotFoundException('Usuario selecionado não existe!');
        }
        //retorna os detalhes do usuario referente a id selecionada
        $this->set('usuarios', $usuario);  
    }

    public function novo() {
        //confirmando a requisição via post
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash('Usuario criado com sucesso!', 'default', array('class' => 'success'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Erro ao criar novo Usuario!');
        }
    }

    public function editar($id = NULL) {
        if (!$id) {
            throw new NotFoundException('Codigo invalido');
        }
        //localiza id selecionado
        $usuario = $this->Usuario->findById($id);
        
        //verifica se existe o usuario referente a id selecionada
        if (!$usuario) {
            throw new NotFoundException('Usuario selecionado não existe!');
        }
        //processando a edição do usuario
        if ($this->request->is(array('post', 'put'))) {
            $this->Usuario->id = $id;
            if($this->Usuario->save($this->request->data)){
                $this->Session->setFlash('Usuario alterado com sucesso!', $elemet = 'default', $params = array('class' => 'success'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Usuario não pode ser alterado!');
        }
        
        if (!$this->request->data) {
            $this->request->data = $usuario;
        }            
        
    }
    
    public function excluir($id = NULL){
        if ($this->request->is('get')){
            throw new MethodNotAllowedException('Erro!');
        }
        if ($this->Usuario->delete($id)){
            $this->Session->setFlash('Usuario apagado com sucesso!', $element = 'default', $params = array('class' => 'success'));
            return $this->redirect(array('action' => 'index'));
        }
        
    }

}
