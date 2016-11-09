<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        if (validation_errors() != NULL):
            echo '<div class="alert alert-danger" role="alert">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            echo validation_errors();
            echo '</div>';
        endif;

        if ($this->session->flashdata('cadastrook')):
            echo '<div class="alert alert-success" role="alert">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            echo $this->session->flashdata('cadastrook');
            echo '</div>';
        endif;
        ?>
        <div class="panel panel-sucess">
            <div class="panel-body">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cadastro de Bolão</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $jogos = array(
                            'Mega Sena' => 'Mega Sena',
                            'Loto Fácil' => 'Loto Facil',
                            'Dupla Sena' => 'Dupla Sena',
                        );
                        echo "<br />";
                        echo form_open('index.php/bolao/cadastrar');
                        echo form_label('Jogo (*)') . "<br />";
                        echo form_dropdown('jogo', $jogos), set_value('jogo') . "<br />";

                        echo form_label('Grupo do jogo (*)') . "<br />";
                        echo form_input(array('id' => 'grupo', 'name' => 'grupo', 'class' => 'form-control'), set_value('grupo')) . "<br />";

                        echo form_label('Valor da cota (*)') . "<br />";
                        echo form_input(array('id' => 'valorcota', 'name' => 'valorcota', 'class' => 'form-control'), set_value('valorcota')) . "<br />";

                        echo form_label('Total de cotas (*)') . "<br />";
                        echo form_input(array('id' => 'totalcota', 'name' =>  'totalcota', 'class' => 'form-control'), set_value('totalcota')) . "<br />";
                        
                        ?>
                        <?php
                        echo '<span id="sumit" style="display: inline;float: right;">';
                        echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-success'), 'Cadastrar') . "<br />";
                        echo '</span>';
                        echo form_close();
                        ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
