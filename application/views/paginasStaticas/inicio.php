
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <h1>Mega Sena</h1>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th>Lista de Jogos</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                <th>Qtde desejadas</th>
                <th>Compre Aqui</th>
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if ($boloes->jogo == 'Mega Sena'):
                    echo '<tr>';
                    echo '<td>';
                    echo $boloes->grupo;
                    echo '</td>';
                    echo '<td>';
                    echo '<h3>***</h3>';
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
        echo '<a href="" class="btn btn-success btn-xs" role="button"> Comprar </a>';            
        echo '</td>';
                    echo '</tr>';
                    
                endif;
            }
            ?>

        </table>

        <h1>Loto Facil</h1>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th>Lista de Jogos</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                <th>Qtde desejadas</th>
                <th>Compre Aqui</th>

            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if ($boloes->jogo == 'Loto Fácil'):
                    echo '<tr>';
                    echo '<td>';
                    echo $boloes->grupo;
                    echo '</td>';
                    echo '<td>';
                    echo '<h3>***</h3>';
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
        echo '<a href="" class="btn btn-success btn-xs" role="button"> Comprar </a>';            
        echo '</td>';
                    echo '</tr>';
                endif;
            }
            ?>

        </table>

        <h1>Dupla Sena</h1>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th>Lista de Jogos</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                <th>Qtde desejadas</th>
                <th>Compre Aqui</th>

            </tr>
<?php
foreach ($bolao->result() as $boloes) {
    if ($boloes->jogo == 'Dupla Sena'):
        echo '<tr>';
        echo '<td>';
        echo $boloes->grupo;
        echo '</td>';
        echo '<td>';
        echo '<h3>***</h3>';
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
        echo '<a href="" class="btn btn-success btn-xs" role="button"> Comprar </a>';            
        echo '</td>';
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