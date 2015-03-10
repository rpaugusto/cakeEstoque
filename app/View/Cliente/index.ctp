<?php 
    $this->Paginator->Options(
            array(
                'update' => '#container-cliente',
                'before' => $this->Js->get('#probar')->effect('fadeIn',
                        array('buffer' => FALSE)),
                'complete' => $this->Js->get('#probar')->effect('fadeout',
                        array('buffer' => FALSE))
            ));
?>
<div class="container-cliente">

    <div class="page-header">
        <h1>Lista de Clientes</h1>
        <span>
            <?php
                echo $this->html->link('Novo Cliente',
                        array('controller' => 'cliente', 'action' => 'novo'),
                        array('class' => 'btn btn-xs btn-default'));
            ?>
        </span>
    </div>
    <div class="col-md-12">
        
        <!-- ./progress bar -->
        <div class="progress oculto" id="probar">
            <div class="progress-bar progress-bar-success progress-bar-striped active" 
                 role="progressbar" aria-valuenow="40" aria-valuemin="0" 
                 aria-valuemax="100" style="width: 100%">
                <span class="sr-only">100% Complete</span>
            </div>
        </div>
        <!-- ./progress bar -->
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <td><?php echo $this->Paginator->sort('CODIGO'); ?></td>
                    <td><?php echo $this->Paginator->sort('NOME'); ?></td>
                    <td><?php echo $this->Paginator->sort('TELEFONE'); ?></td>
                    <td><?php echo $this->Paginator->sort('CPF'); ?></td>
                    <td colspan="3"></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo h($cliente['Cliente']['id']); ?></td>
                        <td><?php echo h($cliente['Cliente']['nome']); ?></td>
                        <td><?php echo h($cliente['Cliente']['telefone']); ?></td>
                        <td><?php echo h($cliente['Cliente']['cpf']); ?></td>
                        <td>
                            <ul class="pagination-sm">
                                <?php
                            echo '<li>'.$this->Html->link(__('Ver'),
                                array('action' => 'ver', $cliente['Cliente']['id']),
                                array('class' => '')).'</li>';
                            echo '<li>'.$this->Html->link(__('Editar'),
                                array('action' => 'editar', $cliente['Cliente']['id']),
                                array('class' => '')).'</li>';
                            echo '<li>'.$this->Form->postlink(__('Excluir'),
                                array('action' =>'excluir', $cliente['Cliente']['id']),
                                array(
                                    'class' => '',
                                    __('Tem certeza que deseja excluir # %s', $cliente['Cliente']['id'])
                            )).'</li>';?>
                            </ul>    
                        </td>
                    </tr>
                 <?php } ?>
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
    <!-- ./ efeito na paginação -->
    <?php echo $this->Js->writeBuffer(); ?>
    <!-- ./ efeito na paginação -->
    
</div>