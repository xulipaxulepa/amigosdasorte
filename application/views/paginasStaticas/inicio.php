
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <a href="http://pt-br.tinypic.com?ref=2d9hua" target="_blank"><img src="http://i66.tinypic.com/2d9hua.jpg" border="0" alt="Image and video hosting by TinyPic"></a>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Lista de Jogos</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Valor das Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Total de Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Cotas Disponiveis</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Quantidade Desejadas</th>
                <?php if ($this->session->isAdministrador == 1) {
                echo '<th>Registrar Ganhador</th>';
                echo '<th>Cadastrar Lista de Jogos</th>';
                } else{
                    echo '<th>Comprar Aqui!</th>';
                
                }?>
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if ($boloes->jogo == 'Mega Sena'):
                    echo '<tr>';
                    echo '<td>';
                    echo $boloes->grupo;
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="http://pt-br.tinypic.com?ref=r9n9eq" target="_blank"><img src="http://i67.tinypic.com/r9n9eq.jpg" border="0" alt="Image and video hosting by TinyPic"></a>';
                    echo '</td>';
                    echo '<td>';
                    echo $boloes->valorcota;
                    echo '</td>';
                    echo '<td>';
                    echo $boloes->totalcota;
                    echo '</td>';
                    echo '<td>';
                    echo $boloes->cotadisponivel;
                    echo '</td>';
                    echo '<td>';
                    echo '<select>';
                    for($i = 1;$i <= $boloes->cotadisponivel; $i++){ 
                    echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    echo '</select>' ;
                    echo '</td>';
                    echo '<td>';
                    if ($this->session->isAdministrador == 1) {
                        if($boloes->ganhador == 1){
                           echo 'Bolão ganhador';
                        } else{
                        echo '<a href="'. base_url('bolao/ganhador/'.$boloes->id).'" class="btn btn-success btn-xs" role="button"> Ganhador </a>';
                        }                        
                        } else {
        echo '<a href="'. base_url('bolao/comprar').'" class="btn btn-success btn-xs" role="button"> Comprar </a>';            
        echo '</td>';
                    }
                    if ($this->session->isAdministrador == 1) {
                    echo '<td>';
                    echo '<a href="'. base_url('upload/do_upload_texto/'.$boloes->grupo).'" class="btn btn-success btn-xs" role="button"> Registrar </a>';
                    echo '</td>';
                    }
                    echo '</tr>';
                    
                endif;
            }
            ?>

        </table>

        <a href="http://pt-br.tinypic.com?ref=npq1zr" target="_blank"><img src="http://i66.tinypic.com/npq1zr.jpg" border="0" alt="Image and video hosting by TinyPic"></a>
        <table class="table table-striped">
           <tr>
                <th>Grupo</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Lista de Jogos</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Valor das Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Total de Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Cotas Disponiveis</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Quantidade Desejadas</th>
                <?php if ($this->session->isAdministrador == 1) {
                echo '<th>Registrar Ganhador</th>';
                echo '<th>Cadastrar Lista de Jogos</th>';
                } else{
                    echo '<th>Comprar Aqui!</th>';
                
                }?>
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if ($boloes->jogo == 'Loto Fácil'):
                    echo '<tr>';
                    echo '<td>';
                    echo $boloes->grupo;
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="http://pt-br.tinypic.com?ref=r9n9eq" target="_blank"><img src="http://i67.tinypic.com/r9n9eq.jpg" border="0" alt="Image and video hosting by TinyPic"></a>';
                    echo '</td>';
                    echo '<td>';
                    echo $boloes->valorcota;
                    echo '</td>';
                    echo '<td>';
                    echo $boloes->totalcota;
                    echo '</td>';
                    echo '<td>';
                    echo $boloes->cotadisponivel;
                    echo '</td>';
                    echo '<td>';
                    echo '<select>';
                    for($i = 1;$i <= $boloes->cotadisponivel; $i++){ 
                    echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    echo '</select>' ;
                    echo '</td>';
                    echo '<td>';
                    if ($this->session->isAdministrador == 1) {
                        if($boloes->ganhador == 1){
                           echo 'Bolão ganhador';
                        } else{
                        echo '<a href="'. base_url('bolao/ganhador/'.$boloes->id).'" class="btn btn-success btn-xs" role="button"> Ganhador </a>';
                        }                        
                        } else {
        echo '<a href="'. base_url('bolao/comprar').'" class="btn btn-success btn-xs" role="button"> Comprar </a>';            
        echo '</td>';
                    }
                    if ($this->session->isAdministrador == 1) {
                    echo '<td>';
                    echo '<a href="'. base_url('upload/do_upload_texto/'.$boloes->grupo).'" class="btn btn-success btn-xs" role="button"> Registrar </a>';
                    echo '</td>';
                    }
                    echo '</tr>';
                    
                endif;
            }
            ?>

        </table>

        <a href="http://pt-br.tinypic.com?ref=2hh3eoy" target="_blank"><img src="http://i65.tinypic.com/2hh3eoy.jpg" border="0" alt="Image and video hosting by TinyPic"></a>
        <table class="table table-striped">
           <tr>
                <th>Grupo</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Lista de Jogos</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Valor das Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Total de Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Cotas Disponiveis</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Quantidade Desejadas</th>
                <?php if ($this->session->isAdministrador == 1) {
                echo '<th>Registrar Ganhador</th>';
                echo '<th>Cadastrar Lista de Jogos</th>';
                } else{
                    echo '<th>Comprar Aqui!</th>';
                
                }?>
            </tr>
<?php
foreach ($bolao->result() as $boloes) {
    if ($boloes->jogo == 'Dupla Sena'):
        echo '<tr>';
        echo '<td>';
        echo $boloes->grupo;
        echo '</td>';
        echo '<td>';
        echo '<a href="http://pt-br.tinypic.com?ref=r9n9eq" target="_blank"><img src="http://i67.tinypic.com/r9n9eq.jpg" border="0" alt="Image and video hosting by TinyPic"></a>';
        echo '</td>';
        echo '<td>';
        echo $boloes->valorcota;
        echo '</td>';
        echo '<td>';
        echo $boloes->totalcota;
        echo '</td>';
        echo '<td>';
        echo $boloes->cotadisponivel;
        echo '</td>';
        echo '<td>';
        echo '<select>';
        for($i = 1;$i <= $boloes->cotadisponivel; $i++){ 
        echo '<option value="'.$i.'">'.$i.'</option>';
        }
        echo '</select>' ;
        echo '</td>';
        echo '<td>';
                    if ($this->session->isAdministrador == 1) {
                        if($boloes->ganhador == 1){
                           echo 'Bolão ganhador';
                        } else{
                        echo '<a href="'. base_url('bolao/ganhador/'.$boloes->id).'" class="btn btn-success btn-xs" role="button"> Ganhador </a>';
                        }                        
                        } else {
        echo '<a href="'. base_url('bolao/comprar').'" class="btn btn-success btn-xs" role="button"> Comprar </a>';            
        echo '</td>';
                    }
                    if ($this->session->isAdministrador == 1) {
                    echo '<td>';
                    echo '<a href="'. base_url('upload/do_upload_texto').'" class="btn btn-success btn-xs" role="button"> Registrar </a>';
                    echo '</td>';
                    }
                    echo '</tr>';
                    endif;
}
?>

        </table>

    </div>

    <div class="col-md-2"></div>
</div>
<br>
<br>
<br>
<br>