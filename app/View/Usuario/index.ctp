<div class="usuario index">
    <h2>
        <?php echo __('Usuarios'); ?>
    </h2>

    <table class="table table-striped">
        <tr>
            <th><?php echo $this->Paginator->sort('Codigo'); ?></th>
            <th><?php echo $this->Paginator->sort('Nome'); ?></th>
            <th><?php echo $this->Paginator->sort('Login'); ?></th>
            <th class="actions"><?php echo __('Actions') ?></th>
        </tr>
        <?php
        foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo h($usuario['Usuario']['id']); ?></td>
                <td><?php echo h($usuario['Usuario']['nome']); ?></td>
                <td><? echo h($usuario['Usuario']['login']); ?></td>
                <td><?php
                    echo $this->Html->link(__('Ver'),
                            array('action' => 'ver', $usuario['Usuario']['id']),
                            array('class' => 'btn btn-xs btn-default'));
                    echo $this->Html->link(__('Editar'),
                            array('action' => 'editar', $usuario['Usuario']['id']),
                            array('class' => 'btn btn-xs btn-default'));
                    echo $this->Form->postlink(__('Excluir'),
                            array('action' =>'excluir', $usuario['Usuario']['id']),
                            array('confirm' => 'Deseja realmente excluir o suario' . $usuario['Usuario']['login'],
                                'class' => 'btn btn-xs btn-default'));?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'btn prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'btn next disabled'));
        ?>
    </div>
    
</div>

<?php
echo $this->html->link('Novo Usuario',
        array('controller' => 'usuario', 'action' => 'novo'),
        array('class' => 'btn btn-xs btn-info'));
?>
    





