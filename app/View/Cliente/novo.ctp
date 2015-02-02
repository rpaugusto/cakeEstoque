<h2>Cadastrando novo Cliente:</h2>

<?php
    echo $this->Form->Create('Cliente');
    echo $this->Form->input('nome');
    echo $this->Form->input('endereco');
    echo $this->Form->input('bairro');
    echo $this->Form->input('cidade');
    echo $this->Form->input('estado');
    echo $this->Form->input('cep');
    echo $this->Form->input('telefone');
    echo $this->Form->input('celular');
    echo $this->Form->input('cpf');
    echo $this->Form->input('rg');
    echo $this->Form->input('email');
    echo $this->Form->end('Salvar');
    echo '<br/>';
    echo '<br/>';
    echo $this->Html->link('Voltar', array('controller' => 'cliente', 'action' => 'index'));
?>