<h2>Editar Usuario:</h2>
<?php
    echo $this->Form->Create('Usuario');
    echo $this->Form->input('nome');
    echo $this->Form->input('email');
    echo $this->Form->end('Salvar Alteração');
    echo '<br/>';
    echo '<br/>';
    echo $this->Html->link('Voltar', array('controller' => 'usuario', 'action' => 'index'));
?>