
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="menubar" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if ($this->session->isAdministrador == 1) { ?>
                <li><a href = "<?php echo base_url(""); ?>"> Home /</a></li>
                <li><a href="<?php echo base_url("bolao/cadastrar")?>">Cadastrar Bolão /</a></li>
                <li><a href="<?php echo base_url("upload/do_upload")?>">Cadastrar Bilhete Premiado /</a></li>
                <li><a href="<?php echo base_url("usuario/logout")?>">Sair /</a></li>
                <?php } else { ?>
                    <li><a href = "<?php echo base_url(""); ?>"> Home /</a></li>
                    <li><a href = "<?php echo base_url("Bolao/Consultar"); ?>"> Bolões Lotéricos /</a></li>
                    <li><a href = "<?php echo base_url("pagina/Premiacoes"); ?>"> Premiações /</a></li>
                    <li><a href = "<?php echo base_url("Usuario/Cadastrar"); ?>"> Cadastre-se /</a></li>
                    <li><a href = "<?php echo base_url("Usuario/login"); ?>"> Acessar Conta /</a></li>
                    
                <?php } ?>    
            </ul>

        </div><!--/.navbar-collapse -->
    </div><!--/.container-fluid -->
</nav>
