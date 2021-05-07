@extends('adminlte::page')

@section('title', 'Cidades - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark"><b>Gerenciamento ></b> Cidades</h1>
@stop

@section('content')

<div class="card">
            <div class="card-header">
              <h3 class="card-title">Ofertas <b>Cidade</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                          <div class="dataTables_length" id="example1_length">
                              <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Cidade</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219px;">Estado</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194px;">Ativar Cidade</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 143px;">Áreas</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 121px;">Taxa de Entrega</th>
                </tr>
                </thead>
                <tbody>
                
                <tr role="row" class="odd">
                    <td class="sorting_1">CARAZINHO</td>
                    <td>RIO GRANDE DO SUL</td>
                    <td><span style="color: green;">(Ativo)</span> <a href="#" style="color:red">Desativar Oferta</a></td>
                    <td>1.7KM</td>
                    <td>9.99</td>
                    </tr>
                </tbody>
                <tfoot>
                <tr>           
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Cidade</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219px;">Estado</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194px;">Ativar Cidade</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 133px;">Áreas</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Taxa de Entrega</th>
                </tfoot>
              </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Exibindo de 1 até 10 de 57 resultados</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                            <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                    </li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Proximo</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
            </div>
            <!-- /.card-body -->
          </div>

@stop