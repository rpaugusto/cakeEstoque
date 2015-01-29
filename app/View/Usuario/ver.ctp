<h2>Detalhes do Usuario</h2>
<?php
    echo ('Nome: '.$usuarios['Usuario']['nome'].' '.$usuarios['Usuario']['sobrenome'].'<br/>');
    echo ('E-mail: '.$usuarios['Usuario']['email'].'<br/>');
    echo 'Login: '.$usuarios['Usuario']['login'].'<br/>';
    echo 'Cadastado em: '.$usuarios['Usuario']['created'];
?>

