<?= $this->session->flashdata("crud_campanha");?>

<div class = "start">
    <div>
        <h1 class = "text-center primary-color title-font">Campanhas</h1>
    </div>

    <div class = "espaco-vertical">
        <p class =  "normal-font text-center">Você não possui nenhuma campanha cadastrada ainda.</p>
        <p class = "normal-font text-center"><a data-toggle = "collapse" data-target = "#collapse-add-campanha" class = "click primary-color">Clique aqui</a> para criar sua primeira campanha!</p>
    </div>

    <form method = "POST" action = "/rpg-manager/campanha/add">
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
</div>


</div>

</div>
</div>
</body>

</html>