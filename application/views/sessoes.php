<?= $this->session->flashdata("crud_sessao");?>

<div class = "start">
    <div>
        <h1 class = "text-center primary-color title-font espaco-bottom">Sessões</h1>
    </div>

    <?php if(!$sessoes){ ?>

    <div>
        <div class = "espaco-vertical">
            <p class =  "normal-font text-center">Você não possui nenhuma sessão cadastrada ainda.</p>
            <p class = "normal-font text-center"><a data-toggle = "collapse" data-target = "#collapse-add-sessao" class = "click primary-color">Clique aqui</a> para criar sua primeira sessão!</p>
        </div>

        <form method = "POST" action = "/rpg-manager/sessoes/add">
            <input type = "hidden" name = "tipo" value = "add">
            <div class = "collapse" id = "collapse-add-sessao">
                <div class = "row espaco-top">
                    <div class = "col-md-10">
                        <label>Informe o nome da sua sessão</label>
                        <input name = "nome_sessao" required class = "form-control">
                    </div>
                </div>
                <div class = "row espaco-top">
                    <div class = "col-md-10">
                        <label>Escreva sobre sua sessão</label>
                        <textarea required name  = "descricao_sessao" class = "form-control" rows = '10'></textarea>
                    </div>
                </div>
                <div class = "row espaco-top">
                    <div class = "col-md-10">
                        <label>Informe a data que a sessão ocorreu ou irá ocorrer</label>
                        <input type = "date" name = "data_sessao" required class = "form-control">
                    </div>
                </div>
                <div class = "espaco-top">
                    <button class = "btn button-green">Criar sessão</button>
                </div>
            </div>
        </form>
    </div>
    <?php }else{ ?>

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
                            echo "<td class = 'text-center td-nome'>".$campanha['descricao_campanha']."%</td>";

                            echo "
                            <td class = 'text-center'>
                                <a href = '/rpg-manager/detalhes/".$campanha['id_campanha']."'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
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