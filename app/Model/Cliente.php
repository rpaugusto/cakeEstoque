<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author rui
 */
class Cliente extends AppModel {

    public $hasMany = array(
        'Pedido' => array(
            'className' => 'Pedido',
            'ForeingKey' => 'cliente_id',
            'Conditions' => '',
            'order' => '',
            'depend' => false,
            )
    );

}
