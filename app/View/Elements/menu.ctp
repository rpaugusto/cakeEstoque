<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Nome do Sistema</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->html->link('Listar', array('controller' => 'usuario', 'action' => 'index')); ?></li>
                        <li><?php echo $this->html->link('Cadastrar', array('controller' => 'usuario', 'action' => 'novo')); ?></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar-fixed-top/">LogOut</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>





