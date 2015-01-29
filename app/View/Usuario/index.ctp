<h1>Lista de Usuarios</h1>
<?php
    echo $this->html->link('Cadastrar Novo Usuario',array('controller' => 'usuario', 'action' => 'novo'));
?>
<table>
    <tr>
        <td>Indice</td>
        <td>Nome</td>
        <td>login</td>
        <td>Ações</td>
    </tr>
    
    <?php
        
        foreach ($usuarios as $usuario) {
            echo ('<tr><td>');
            echo $usuario['Usuario']['id'];
            echo ('</td><td>');
            echo $usuario['Usuario']['nome'].' '.$usuario['Usuario']['sobrenome'] ;
            echo ('</td><td>');
            echo $usuario['Usuario']['login'];
            echo ('</td><td>');
            echo $this->Html->link('Detalhe',array('controller' => 'usuario', 'action' => 'ver', $usuario['Usuario']['id'] ));
            echo ('</td></tr>');
        }
    ?>
    
    
</table>

