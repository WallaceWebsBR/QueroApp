@extends('adminlte::page')

@section('title', 'Cidades - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Cadastro ></b> Cadastro de Cidades</h1>
@stop

@section('content')
<form>
<h5><b>CADASTRAR NOVA CIDADE:</b></h5>
    <div class="row">
            <div class="col-md-4">
                <label for="fname">NOME DA CIDADE:</label><br>
                <input class="form-control" type="text" id="fname" name="Cidade">
            </div>
            <div class="col-md-4">
                <label for="estados">ESTADO:</label>
                <select name="Estado" id="estados" class="form-control">
                    <option value="riograndedosul">RIO GRANDE DO SUL</option>
                    <option value="santacatarina">SANTA CATARINA</option>
                    <option value="parana">PARANA</option>
                    <option value="saopaulo">SÃO PAULO</option>
                    <option value="riodejaneiro">RIO DE JANEIRO</option>
                    <option value="espiritosanto">ESPIRITO SANTO</option>
                    <option value="minasgerais">MINAS GERAIS</option>
                    <option value="matogrossodosul">MATO GROSSO DO SUL</option>
                    <option value="matogrosso">MATO GROSSO</option>
                    <option value="goias">GOIAS</option>
                    <option value="maranhao">MARANHÃO</option>
                    <option value="piaui">PIAUI</option>
                    <option value="ceara">CEARA</option>
                    <option value="riograndedonorte">RIO GRANDE DO NORTE</option>
                    <option value="paraiba">PARAIBA</option>
                    <option value="pernambuco">PERNAMBUCO</option>
                    <option value="alagoas">ALAGOAS</option>
                    <option value="sergipe">SERGIPE</option>
                    <option value="salvador">SALVADOR</option>
                    <option value="acre">ACRE</option>
                    <option value="amazonas">AMAZONAS</option>
                    <option value="rondonia">RONDONIA</option>
                    <option value="tocantins">TOCANTINS</option>
                    <option value="para">PARA</option>
                    <option value="roraima">RORAIMA</option>
                    <option value="amapa">AMAPA</option>
                    <option value="distritofederal">DISTRITO FEDERAL</option>
                </select>
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