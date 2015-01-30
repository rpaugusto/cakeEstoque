<h1>Lista de Usuarios</h1>
<?php
    echo $this->html->link('Cadastrar Novo Usuario',array('controller' => 'usuario', 'action' => 'novo'));
?>
<table>
    <tr>
        <td>Indice</td>
        <td>Nome</td>
        <td>login</td>
        <td colspan="3">Ações</td>
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
            echo ('</td><td>');
            echo $this->Html->link('Editar',array('controller' => 'usuario', 'action' => 'editar', $usuario['Usuario']['id'] ));
            echo ('</td><td>');
            echo $this->Html->link('Excluir',array('controller' => 'usuario', 'action' => 'excluir', $usuario['Usuario']['id'] ));
            echo ('</td></tr>');
        }
    ?>
    
    
</table>

