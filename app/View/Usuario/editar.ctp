<h2>Editar Usuario:</h2>
<?php

echo $this->Form->Create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('sobrenome');
echo $this->Form->input('email');
echo $this->Form->end('Salvar Alteração');

?>