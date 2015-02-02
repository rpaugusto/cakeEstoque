<?php
/**
 * Description of Pedido
 *
 * @author rui
 */
class Pedido extends AppModel{
    
    public $belongsTo = array(
        'Cliente' => array(
            'className' => 'Cliente',
            'ForeignKey' => 'cliente_id',
        )
    );
}
