@extends('adminlte::page')

@section('title', 'Produtos - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Cadastro ></b> Cadastro de Produtos</h1>
@stop

@section('content')
<form>
    <h5><b>CADASTRAR NOVO PRODUTO</b></h5>
    <div class="row">
        <div class="col-md-4">
            <label for="fname">NOME DO PRODUTO:</label><br>
            <input class="form-control" type="text" id="fname" name="NomeProduto">
        </div>
        <div class="col-md-4">
            <label for="fname">TAMANHO DO PRODUTO:</label><br>
            <input class="form-control" type="text" id="fname" name="TamanhoProduto">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <br>
            <input type="submit" class="btn btn-primary" value="CADASTRAR">
        </div>
    </div>
</form>
@stop