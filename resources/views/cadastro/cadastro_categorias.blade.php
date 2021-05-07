@extends('adminlte::page')

@section('title', 'Categorias - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Cadastro ></b> Cadastro de Categorias</h1>
@stop

@section('content')
<form>
    <h5><b>CADASTRAR NOVA CATEGORIA</b></h5>
    <div class="row">
        <div class="col-md-4">
            <label for="fname">NOME DA CATEGORIA:</label><br>
            <input class="form-control" type="text" id="fname" name="Categoria">
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