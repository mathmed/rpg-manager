
<div class = "start">
<?= $this->session->flashdata("crud_sessao");?>

    <div>
        <h1 class = "text-center primary-color title-font espaco-bottom">Sessões</h1>
    </div>
    <form method = "POST" action = "sessoes/add">
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

    <?php if(!$sessoes){ ?>

    <div>
        <div class = "espaco-vertical">
            <p class =  "normal-font text-center">Você não possui nenhuma sessão cadastrada ainda.</p>
            <p class = "normal-font text-center"><a data-toggle = "collapse" data-target = "#collapse-add-sessao" class = "click primary-color">Clique aqui</a> para criar sua primeira sessão!</p>
        </div>
    </div>

    <?php }else{ ?>

        <p class = "normal-font text-center"><a data-toggle = "collapse" data-target = "#collapse-add-sessao" class = "click primary-color">Clique aqui</a> para criar outra sessão!</p>
        <div class = "row">
            <div class = "col-md-1"></div>
            <div class = "col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr class = "tr-estilo">
                            <th class="text-center">ID</th>
                            <th class="text-center">Nome da sessão</th>
                            <th class="text-center">Sinopse</th>
                            <th class = "text-center">Data</th>
                            <th class="text-center">Ir para sessão</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            /* listando os dados */
                            foreach($sessoes as $sessao){
            
                                echo "<tr>";
                                echo "<td class = 'text-center'>#".$sessao['id_sessao']."</td>";
                                echo "<td class = 'text-center'><b>".$sessao['nome_sessao']."</b></td>";
                                echo "<td class = 'text-center td-nome'>".$sessao['descricao_sessao']."</td>";
                                echo "<td class = 'text-center td-nome'>".$sessao['data_sessao']."</td>";

                                echo "
                                <td class = 'text-center'>
                                    <a href = 'sessoes/".$sessao['id_sessao']."'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
                                </td>";
            
                                echo "</tr>";
            
                            }
                        ?>
                    </tbody>
                </table>

                <div class = "div-center">
                    <ul class="pagination">

                        <?php $a_ativo = ($pagina == 0) ? "disabled" : "" ?> 

                        <li class = 'page-item <?= $a_ativo ?>'><a href="">Anterior</a></li>

                        <?php for($i=1; $i <= ceil($qtd_reg/3); $i++){ ?>

                            <?php $active = ($i-1 == $pagina) ? "active" : ""; ?>

                            <li class = 'page-item <?= $active ?>'>
                                <a href="../pag/<?= $i ?>"><?= $i ?></a>
                            </li>
                        
                        <?php } ?>
  
                        <li class = 'page-item'><a href="">Próximo</a></li>

                    </ul>
                </div>
    
            </div>
            <div class = "col-md-1"></div>
        </div>

    <?php } ?>
</div>


</div>

</div>
</div>
</body>

</html>