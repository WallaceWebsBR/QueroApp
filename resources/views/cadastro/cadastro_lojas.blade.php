@extends('adminlte::page')

@section('title', 'Lojas - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Cadastro ></b> Cadastro de Lojas</h1>
@stop

@section('content')
<form>
  <b>Dados</b>
  <div class="form-row">
    <div class="col-md-6">
            Nome da Loja: <input type="text" class="form-control" name="LojaNome">
    </div>
    <div class="col-md-4">
            CNPJ da Loja: <input type="text" class="form-control" name="CNPJ" id="cnpj">
    </div>
  </div>
    <div class="form-row">
      <div class="col-md-6">
            Razão Social: <input type="text" class="form-control" name="RazaoSocial">
      </div>
    </div>
    <br>
    <b>Endereço</b>
    <div class="form-row">
        <div class="col-md-8">
            Rua: <input type="text" class="form-control" name="Rua">
        </div>
        <div class="col-sm-2">
            Número: <input type="text" class="form-control" name="NumeroRua" maxlength="7">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3">
            Bairro: <input type="text" class="form-control" name="Bairro">
        </div>
        <div class="col-md-4">
            Complemento: <input type="text" class="form-control" name="Complemento">
        </div>
        <div class="col-md-3">
            Referência: <input type="text" class="form-control" name="Referencia">
        </div>
    </div>
    <br>
    <b>Contato</b>
    <div class="form-row">
        <div class="col-md-3">
            Telefone: <input type="text" class="form-control" name="Tel" id="tel">
        </div>
        <div class="col-md-5">
            Email: <input type="email" class="form-control" name="Email">
        </div>
        <div class="col-md-2">
            WhatsApp: <input type="email" class="form-control" name="WhatsApp" id="wpp">
        </div>
    </div>
    <br>
    <b>Responsável</b>
    <div class="form-row">
        <div class="col-md-5">
        Nome: <input type="text" class="form-control" name="NomeResponsavel">
        </div>
        <div class="col-md-2">
        RG: <input type="email" class="form-control" name="RG" id="rg">
        </div>
        <div class="col-md-3">
        CPF: <input type="email" class="form-control" name="CPF" id="cpf">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-2">
            Data de Nascimento: <input type="date" class="form-control" name="DataNasc">
        </div>
    </div>
    <br>
    <b>Quero Sistemas</b>
    <div class="form-row">
        <div class="col-sm-1">Prioridade: </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
            <label class="form-check-label" for="inlineRadio4">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5">
            <label class="form-check-label" for="inlineRadio5">5</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="6">
            <label class="form-check-label" for="inlineRadio6">6</label>
        </div>
    </div>
    <br>
    <b>Quero Sistemas</b>
        <div class="row">
            <div class="col-md-2">
                Serviços Contratados: 
            </div>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="servico1" value="QueroRoupas">
                    <label class="form-check-label" for="inlineCheckbox1">Quero Roupas (+5%)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="servico2" value="QueroMarketing">
                    <label class="form-check-label" for="inlineCheckbox2">Quero Marketing (+5%)</label>
                </div>
            </div>
        </div>
    <br>
    <b>Logo da Loja</b>
    <div class="row">
        <div class="col-sm-1">
           Selecionar:
        </div>
        <input type="file">
    </div>
    <br>
    <b>Observaçoes Internas</b>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="comentarios">Observações</label>
                <textarea class="form-control" id="comentarios" rows="4" style="resize: none;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;"></textarea>
            </div>
            <input type="submit" value="CADASTRAR" class="btn btn-primary">
        </div>
    </div>
    <br>
</form>
<script>

$(document).ready(function(){
      //TELEFONE FIXO
      $('#tel').mask('(00) 0000-0000');
      $('#wpp').mask('(00) 00000-0000');
      $('#cpf').mask('000.000.000-00', {reverse: true});
      $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
});
</script>
@stop