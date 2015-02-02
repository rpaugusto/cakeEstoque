<?php

echo '<h2>Detalhes do Usuario</h2>';
    echo '<p>Nome: '.$clientes['Cliente']['nome'].'</p>';
    echo '<p>Tekefone: '.$clientes['Cliente']['telefone'].'</p>';
    echo '<p>Celular: '.$clientes['Cliente']['celular'].'</p>';
    echo '<p>CPF: '.$clientes['Cliente']['cpf'].'</p>';
    echo '<p>RG: '.$clientes['Cliente']['rg'].'</p>';
    echo '<p>Endereço: '.$clientes['Cliente']['endereco'].'</p>';
    echo '<p>Cidade: '.$clientes['Cliente']['cidade'].'</p>';
    echo '<p>Bairro: '.$clientes['Cliente']['bairro'].'</p>';
    echo '<p>CEP: '.$clientes['Cliente']['cep'].'</p>';
    echo '<p>Estado: '.$clientes['Cliente']['estado'].'</p>';
    echo '<p>E-mail: '.$clientes['Cliente']['email'].'</p>';
    echo 'Cadastado em: '.$this->time->format('d / m / Y - h:i A',$clientes['Cliente']['created']).'<br/>';
    echo 'Altualizado em: '.$this->time->format('d / m / Y - h:i A',$clientes['Cliente']['modified']).'<br/>';
    echo '<hr/>';
    echo '<pre>';
    print_r ($pedido);
    echo '</pre>';
    echo '<br/>';
    echo $this->Html->link('Voltar',array('controller' => 'cliente', 'action' => 'index' ));
?>

