    <header> 
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Desplegar / ocultar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <?= $this->Html->link('Personal', ['controller' => 'users', 'action' => 'index'],['class'=>'navbar-brand']) ?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active">
                  <?= $this->Html->link('Listar usuarios', ['controller' => 'users', 'action' => 'index']) ?>
                </li>
                <li>
                  <?= $this->Html->link('Agregar usuario', ['controller' => 'users', 'action' => 'add']) ?>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <?= $this->Html->link('Salir', ['controller' => 'users', 'action' => 'logout']) ?>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
    </header>