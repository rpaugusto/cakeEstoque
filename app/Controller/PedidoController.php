<?php
/**
 * Description of PedidoController
 *
 * @author rui
 */
class PedidoController extends AppController {
    
    public $Helper = array('Html', 'Form', 'Time');
    public $Components = array('Session');
    
    public function ver($id){
        if (!$id){
            throw new NotFoundException('Codigo inexistente!');
        }
        $pedido = $this->Pedido->findById($id);
        if(!$pedido){
            throw new NotFoundException('Cliente selecionado não existe!');
        }
        $this->set('pedidos', $pedido);
    }
}

