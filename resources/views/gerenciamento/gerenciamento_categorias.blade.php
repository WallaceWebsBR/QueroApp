@extends('adminlte::page')

@section('title', 'Categorias - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Gerenciamento ></b> Categorias</h1>
@stop

@section('content')
<br>
<div class="column" style="background-color:white;">
    <table class="table table-bordered table-striped dataTable">
  <thead>
    <tr>
      <th>#ID</th>
      <th scope="col">CATEGORIAS</th>
      <th scope="col" style="margin-top:5px;">ATIVAR CATEGORIA</th>
      <th scope="col">EDITAR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <th scope="row">CAMISETA</th>
      <td><a style="color:green;">ATIVADO</a></td>
      <td><button type="button" class="btn btn-success">EDITAR</button> / <button type="button" class="btn btn-danger">APAGAR</button></td>
    </tr>
    <tr>
      <th>2</th>
      <th scope="row">TENIS</th>
      <td><a href="#" style="color:red;">DESATIVAR</a></td>
      <td><button type="button" class="btn btn-success">EDITAR</button> / <button type="button" class="btn btn-danger">APAGAR</button></td>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
  </div>
@stop