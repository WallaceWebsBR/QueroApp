@extends('adminlte::page')

@section('title', 'Produtos - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Gerenciamento ></b> Produtos</h1>
@stop

@section('content')

<br>
<div class="column" style="background-color:white;">
    <table class="table table-bordered table-striped dataTable">
  <thead>
    <tr>
      <th>#ID</th>
      <th scope="col">CATEGORIAS</th>
      <th scope="col" style="margin-top:5px;">MEDIDA</th>
      <th scope="col">EDITAR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <th scope="row">CAMISETA</th>
      <td>M</td>
      <td><button type="button" class="btn btn-success">EDITAR</button> / <button type="button" class="btn btn-danger">APAGAR</button></td>
    </tr>
    <tr>
      <th>2</th>
      <th scope="row">TENIS</th>
      <td>40</td>
      <td><button type="button" class="btn btn-success">EDITAR</button> / <button type="button" class="btn btn-danger">APAGAR</button></td>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
  </div>
@stop