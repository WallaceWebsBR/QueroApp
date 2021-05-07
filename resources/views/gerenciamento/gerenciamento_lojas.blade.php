@extends('adminlte::page')

@section('title', 'Lojas - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Gerenciamento ></b> Lojas</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-3">
        <label for="cars">FILTRAR POR :</label>
        <select name="cars" id="cars" class="form-control">
        <option value="volvo">CARAZINHO</option>
        <option value="saab">SARANDI</option>
        <option value="mercedes">ERECHIM</option>
        <option value="audi">IJUI</option>
        <option value="audi">PANAMBI</option>
        <option value="audi">SOLEDADE</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="fname">PESQUISAR :</label>
        <input type="text" id="fname" name="fname" class="form-control" />
    </div>
    <div class="col-sm-2"><br>
        <button id="btnBusca" class="btn btn-primary">Buscar</button>
    </div>
</div>
<br>
<div class="row">
        <table class="table table-bordered table-striped dataTable">
        <tr colspan="6" style="background-color:#FFD700;">
            <th>NOME DA LOJA</th>
            <th>CIDADE</th>
            <th>DATA DO CADASTRO</th>
            <th>TOTAL EM VENDAS</th>
            <th>CIDADE</th>
            <th></th>
        </tr>
        <tr style="background-color:white;">
            <td>LOJA</td>
            <td>CARAZINHO</td>
            <td>05/10/1990</td>
            <td>3.500.962,32</td>
            <td>ATIVO(desativar)</td>
            <td>ver cadastro</td>
        </tr>
        </table>
</div>
@stop