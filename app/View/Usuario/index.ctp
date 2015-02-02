<div class="usuario index">
    <h2>
        <?php echo __('Usuarios'); ?>
    </h2>

    <table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Nome</th>
            <th>login</th>
            <th class="actions"><?php echo __('Actions') ?></th>
        </tr>
        <?php
        foreach ($usuarios as $usuario) {
            echo ('<tr><td>');
            echo $usuario['Usuario']['id'];
            echo ('</td><td>');
            echo $usuario['Usuario']['nome'] . ' ' . $usuario['Usuario']['sobrenome'];
            echo ('</td><td>');
            echo $usuario['Usuario']['login'];
            echo ('</td><td>');
            echo $this->Html->link(__('Ver'), array('action' => 'ver', $usuario['Usuario']['id']));
            echo $this->Html->link(__('Editar'), array('action' => 'editar', $usuario['Usuario']['id']));
            echo $this->Form->postlink(__('Excluir'), array('action' =>'excluir', $usuario['Usuario']['id']), array('confirm' => 'Deseja realmente excluir o suario' . $usuario['Usuario']['login']));
            echo ('</td></tr>');
        }
        ?>
    </table>
</div>

<?php
echo $this->html->link('Cadastrar Novo Usuario', array('controller' => 'usuario', 'action' => 'novo'));
?>
    





