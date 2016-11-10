
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
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if (isset($this->session->email) == "admin@admin.com") { ?>
                <li><a href="<?php echo base_url("bolao/cadastrar")?>">Cadastrar Bolão</a></li>
                
                <li><a href="<?php echo base_url("usuario/logout")?>">Sair</a></li>
                <?php } else { ?>
                    <li><a href = "<?php echo base_url(""); ?>"> Home /</a></li>
                    <li><a href = "<?php echo base_url("pagina/Atendimento"); ?>"> Atendimento /</a></li>                    
                    <li><a href = "<?php echo base_url("Pagina/Regulamento"); ?>"> Regulamento /</a></li>
                <?php } ?>    
            </ul>

        </div><!--/.navbar-collapse -->
    </div><!--/.container-fluid -->
</nav>
