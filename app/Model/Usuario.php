<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author rui.penteado
 */
class Usuario extends AppModel {
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty'
        ),
        'login' => array(
            'rule' => 'notEmpty'
        ),
        'senha' => array(
            'rule' => 'notEmpty'
        ),
    );
    
}
