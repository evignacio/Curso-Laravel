@extends('layouts.app', ["current" => "clientes"])
<style>
body{
    background-image: url('/img/gerenta.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
#bg{
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.6;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4));

}

</style>
@section('body')
    
    <div class="card bg-transparent border" style="box-shadow: 2px 1px #E6E6E6;">
    <div id="bg">
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <form method="post" action="/dddddd">
                        <div class="form-group">
                            <label for="nmCliente" class="text-light">Nome</label>
                            <input type="text" class="form-control" id="nmCliente" aria-describedby="nomehelp" placeholder="Digite o nome completo do cliente por favor">
                        </div>
                        <div class="form-group">
                            <label for="idadeCliente" class="text-light">Idade</label>
                            <input type="text" class="form-control" id="idadeCliente" aria-describedby="idadeHelp" placeholder="Ex: 20">
                        </div>
                        <div class="form-group">
                            <label for="descricaoCliente" class="text-light">Descrição</label>
                            <textarea type="text" class="form-control" id="descricaoCliente" aria-describedby="descricaohelp" placeholder="Aqui você pode colocar um texto adicional sobre o cliente"></textarea>
                        </div>
                        <input type="button" class="btn btn-secundary" value="cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

@endSection
