
<div class = "start">
    <?= $this->session->flashdata("crud_sessao");?>

    <div>
        <a href = "/rpg-manager/sessoes"><button class = "btn button-red">Voltar para sessões</button></a>
    </div>

    <h1 class = "font-title text-center primary-color espaco-bottom"><?= $sessao['nome_sessao'] ?></h1>

    <form method = "POST" action = "/rpg-manager/sessoes/add">
        <input type = "hidden" name = "tipo" value = "att">
        <input type = "hidden" name = "id_sessao" value = "<?= $sessao['id_sessao'] ?>">
        <div class = "row espaco-top">
            <div class = "col-md-10">
                <label>Informe o nome da sua sessão</label>
                <input name = "nome_sessao" required class = "form-control" value = "<?= $sessao['nome_sessao'] ?>">
            </div>
        </div>
        <div class = "row espaco-top">
            <div class = "col-md-10">
                <label>Escreva sobre sua sessão</label>
                <textarea required name  = "descricao_sessao" class = "form-control" rows = '10'><?= $sessao['descricao_sessao'] ?></textarea>
            </div>
        </div>
        <div class = "row espaco-top">
            <div class = "col-md-10">
                <label>Informe a data que a sessão ocorreu ou irá ocorrer</label>
                <input type = "date" name = "data_sessao" required class = "form-control" value = "<?= $sessao['data_sessao'] ?>">
            </div>
        </div>
        <div class = "espaco-top">
            <button type = "submit" class = "btn button-green"><i class = "fa fa-check-circle icon-espaco"></i>Atualizar sessão</button>
            <button type = "button" data-toggle = "modal" data-target = "#modal-excluir-sessao" class = "btn button-red"><i class = "fa fa-info-circle icon-espaco"></i>Apagar sessão</button>
        </div>
    </form>

    <div class="modal" tabindex="-1" role="dialog" id = "modal-excluir-sessao">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atenção!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja apagar <?= $sessao['nome_sessao'] ?>? Após
                de apagada não poderá ser recuperada.</p>
            </div>
            <form method = "POST" action = "/rpg-manager/sessoes/del">
                <input type = "hidden" name = "id_sessao" value = "<?= $sessao['id_sessao'] ?>">
                <div class="modal-footer">
                    <button type="submit" class="btn button-red"><i class = "fa fa-info-circle icon-espaco"></i>Sim, quero apagar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>



</div>

</div>
</div>
</body>

</html>