<?php 
    $this->Paginator->Options(
            array(
                'update' => '#container-usuario',
                'before' => $this->Js->get('#probar')->effect('fadeIn', array('buffer' => false)),
                'complete' => $this->Js->get('#probar')->effect('fadeOut', array('buffer' => false))
            ));
?>
<div id="container-usuario">
<div class="page-header">
    <h2>
        <?php echo __('Usuarios'); ?>
    </h2>
    
    <div class="col-md-12">
        
        <div class="progress oculto" id="probar">
            <div class="progress-bar progress-bar-success progress-bar-striped active" 
                 role="progressbar" aria-valuenow="40" aria-valuemin="0" 
                 aria-valuemax="100" style="width: 100%">
                <span class="sr-only">100% Complete</span>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Codigo'); ?></th>
                <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                <th><?php echo $this->Paginator->sort('Login'); ?></th>
                <th class="actions"><?php echo __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
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
                                array(
                                    'class' => 'btn btn-xs btn-default',
                                    __('Tem certeza que deseja excluir # %s', $usuario['Usuario']['id'])
                                    ));?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>  
    <!-- paginação -->
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Pagina {:page} de {:pages}, Mostrando {:current} registros de {:count} no total')
        ));
        ?>
    </p>
    <ul class="pagination">
        <li>
        <?php
            echo $this->Paginator->prev('< '.__('Anterior'),
                    array('tag'=> FALSE), NULL,
                    array('class' => 'prev disable'));
        ?>
        </li>
        <li>
        <?php
            echo $this->Paginator->numbers(
                    array('separator' => '',
                        'tag'=>'li',
                        'currentTag' => 'a', 
                        'currentClass' => 'active'));
        ?>
        </li>
        <li>
        <?php
            echo $this->Paginator->next(__('Proximo'.' >'),
                    array('tag'=> FALSE), NULL,
                    array('class' => 'next disable'));
        ?>
        </li>
    </ul>
    <!-- paginação -->
    
    <?php echo $this->Js->writeBuffer(); ?>
    
</div>

<?php
echo $this->html->link('Novo Usuario',
        array('controller' => 'usuario', 'action' => 'novo'),
        array('class' => 'btn btn-xs btn-info'));
?>
</div>