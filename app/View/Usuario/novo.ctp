<h2>Cadastrando novo Usuario:</h2>
<?php

echo $this->Form->Create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('sobrenome');
echo $this->Form->input('email');
echo $this->Form->input('login');
echo $this->Form->input('Senha',array('value'=>'','type' => 'password'));
echo $this->Form->end('Salvar');

?>