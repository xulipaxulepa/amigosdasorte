
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        
        <h1>Mega Sena</h1>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if($boloes->jogo == 'Mega Sena'):
                echo '<tr>';
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
                endif;
                
                }
            ?>
            
        </table>
        
        <h1>Loto Facil</h1>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if($boloes->jogo == 'Loto Fácil'):
                echo '<tr>';
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
                endif;
                
                }
            ?>
            
        </table>
        
        <h1>Dupla Sena</h1>
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th>valor da cotas</th>
                <th>total de cotas</th>
                <th>cotas disponiveis</th>
                
            </tr>
            <?php
            foreach ($bolao->result() as $boloes) {
                if($boloes->jogo == 'Dupla Sena'):
                echo '<tr>';
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
                endif;
                
                }
            ?>
            
        </table>
        
    </div>
    
    <div class="col-md-2"></div>
</div>
