<h2>Detalhes do Usuario</h2>
<?php
    echo '<p>Nome: '.$usuarios['Usuario']['nome'].' '.$usuarios['Usuario']['sobrenome'].'</p>';
    echo 'E-mail: '.$usuarios['Usuario']['email'].'<br/>';
    echo 'Login: '.$usuarios['Usuario']['login'].'<br/>';
    echo 'Cadastado em: '.$this->time->format('d / m / Y - h:i A',$usuarios['Usuario']['created']).'<br/>';
    echo 'Altualizado em: '.$this->time->format('d / m / Y - h:i A',$usuarios['Usuario']['modified']).'<br/>';
    echo '<br/>';
    echo $this->Html->link('Voltar',array('controller' => 'usuario', 'action' => 'index' ));
?>

