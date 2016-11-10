
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 class="text-center"> Bolões Cadastradas </h2>
        <table class="table table-striped">
            <tr>
                <th>Jogo</th>
                <th>Grupo</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                echo '<tr>';
                echo '<td>';
                echo $boloes->jogo;
                echo '</td>';
                echo '<td>';
                echo $boloes->grupo;
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
                }
            ?>
            
        </table>
        
    </div>
    
    <div class="col-md-2"></div>
</div>
