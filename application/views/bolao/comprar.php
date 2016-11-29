<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped">
            <tr>
                <th>Grupo</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Lista de Jogos</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Valor das Cotas</th>
                <th><a href="http://pt-br.tinypic.com?ref=708bjk" target="_blank"><img src="http://i64.tinypic.com/708bjk.jpg" border="0" alt="Image and video hosting by TinyPic"></a>Total de Cotas</th>
                <th>Comprar Aqui!</th>
            </tr>
            
            <?php
            foreach ($bolao->result() as $boloes) {
                if($boloes->id == $idbolao){
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
                    echo $boloes->link;
                    echo '</td>';
                } else {
                    
                }
            }?>
        </table>
    </div>
</div>