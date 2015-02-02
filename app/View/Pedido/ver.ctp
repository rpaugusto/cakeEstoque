<?php
    echo '<h2>Detalhes do Pedido</h2>';
    echo '<p>Cliente: '.$pedidos['Pedido']['cliente_id'].'</p>';
    echo '<p>Valor Total: '.$pedidos['Pedido']['total'].'</p>';
    echo 'Cadastado em: '.$this->time->format('d / m / Y - h:i A',$pedidos['Pedido']['created']).'<br/>';
    echo '<hr/>';
    echo '<h3>Itens</h3>';
    echo '<hr/>';
    echo '<br/>';
    echo $this->Html->link('Voltar',array('controller' => 'cliente', 'action' => 'index' ));
?>

