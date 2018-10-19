
<div class = "start">
<?= $this->session->flashdata("crud_campanha");?>

    <div>
        <h1 class = "text-center primary-color title-font espaco-bottom">Campanhas</h1>
    </div>
    <form method = "POST" action = "campanha/add">
        <input type = "hidden" name = "tipo" value = "add">
        <div class = "collapse" id = "collapse-add-campanha">
            <div class = "row">
                <div class = "col-md-6">
                    <label>Informe um nome para sua campanha</label>
                    <input required name = "nome_campanha" class = "form-control" placeholder = "Nome da campanha">
                </div>
            </div>
            <div class = "row espaco-top">
                <div class = "col-md-10">
                    <label>Escreva sobre sua campanha</label>
                    <textarea required name  = "descricao_campanha" class = "form-control" rows = '10'></textarea>
                </div>
            </div>
            <div class = "espaco-top">
                <button class = "btn button-green">Criar campanha</button>
            </div>
        </div>
    </form>

    <?php if(!$campanhas){ ?>

    <div>
        <div class = "espaco-vertical">
            <p class =  "normal-font text-center">Você não possui nenhuma campanha cadastrada ainda.</p>
            <p class = "normal-font text-center"><a data-toggle = "collapse" data-target = "#collapse-add-campanha" class = "click primary-color">Clique aqui</a> para criar sua primeira campanha!</p>
        </div>
    </div>
    <?php }else{ ?>
        
        <p class = "normal-font text-center"><a data-toggle = "collapse" data-target = "#collapse-add-campanha" class = "click primary-color">Clique aqui</a> para criar outra campanha</p>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr class = "tr-estilo">
                        <th class="text-center">ID</th>
                        <th class="text-center">Nome campanha</th>
                        <th class="text-center">Sinopse</th>
                        <th class="text-center">Ir para campanha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        /* listando os dados */
                        foreach($campanhas as $campanha){
        
                            echo "<tr>";
                            echo "<td class = 'text-center'>#".$campanha['id_campanha']."</td>";
                            echo "<td class = 'text-center td-nome'>".$campanha['nome_campanha']."</td>";
                            echo "<td class = 'text-center td-nome'>".$campanha['descricao_campanha']."</td>";

                            echo "
                            <td class = 'text-center'>
                                <a href = 'detalhes/".$campanha['id_campanha']."'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
                            </td>";
        
                            echo "</tr>";
        
                        }
                    ?>
                </tbody>
            </table>
        </div>

    <?php } ?>
</div>


</div>

</div>
</div>
</body>

</html>