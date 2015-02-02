<h1>Lista de Clientes</h1>
<?php
    echo $this->html->link('Cadastrar Novo Cliente',array('controller' => 'cliente', 'action' => 'novo'));
?>
<table>
    <tr>
        <td>Indice</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td colspan="3">Ações</td>
    </tr>
    
    <?php
        
        foreach ($clientes as $cliente) {
            echo ('<tr><td>');
            echo $cliente['Cliente']['id'];
            echo ('</td><td>');
            echo $cliente['Cliente']['nome'] ;
            echo ('</td><td>');
            echo $cliente['Cliente']['telefone'];
            echo ('</td><td>');
            echo $this->Html->link('Detalhe',array('controller' => 'cliente', 'action' => 'ver', $cliente['Cliente']['id'] ));
            echo ('</td><td>');
            echo $this->Html->link('Editar',array('controller' => 'cliente', 'action' => 'editar', $cliente['Cliente']['id'] ));
            echo ('</td><td>');
            echo $this->Form->postlink('Excluir',array('action' => 'excluir', $cliente['Cliente']['id']), array('confirm' => 'Deseja realmente excluir o suario'.$cliente['Cliente']['nome']));
            echo ('</td></tr>');
        }
    ?>
    
    
</table>

