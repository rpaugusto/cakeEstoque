<div class="row">
    <div class="col-md-10">
        <?php
        echo $this->Form->Create('Cliente');
        ?>
        <fieldset>
            <legend><?php echo __('Novo Cliente'); ?></legend>

            <?php
            echo $this->Form->input('nome',
                    array(
                        'class'=>'form-control',
                        'before'=>'<div class="col-sm-12">',
                        'after'=>'</div>'));
            echo $this->Form->input('endereco',
                    array(
                        'class'=>'form-control',
                        'before'=>'<div class="col-sm-12">',
                        'after'=>'</div>'));
            echo $this->Form->input('bairro',
                    array(
                        'class'=>'form-control',
                        'before'=>'<div class="col-sm-5">',
                        'after'=>'</div>'));
            echo $this->Form->input('cidade',
                    array(
                        'class'=>'form-control',
                        'before'=>'<div class="col-sm-6">',
                        'after'=>'</div>'));
            echo $this->Form->input('estado',
                    array(
                        'class'=>'form-control',
                        'before'=>'<div class="col-sm-1">',
                        'after'=>'</div>',
                        'label'=>array(
                            'text'=>'UF'
                        )));
            echo $this->Form->input('cep');
            echo $this->Form->input('telefone');
            echo $this->Form->input('celular');
            echo $this->Form->input('cpf');
            echo $this->Form->input('rg');
            echo $this->Form->input('email');
            echo $this->Form->end('Salvar');
            echo $this->Html->link('Voltar', array('controller' => 'cliente', 'action' => 'index'), array('class' => 'btn btn-default'));
            ?>
        </fieldset>
    </div>
</div>
