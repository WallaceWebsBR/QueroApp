@extends('adminlte::page')

@section('title', 'Homepage - QueroApp')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-blue">
            <ion-icon name="people-outline" role="img" class="md hydrated" aria-label="people outline">
            </ion-icon>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Novos usuários</span>
              <span class="info-box-number">{{$count_users}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red">
            <ion-icon name="pricetag-outline" role="img" class="md hydrated" aria-label="pricetag outline"></ion-icon>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Ofertas Vendidas</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green">
            <ion-icon name="cart-outline" role="img" class="md hydrated" aria-label="cart outline"></ion-icon>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Total em vendas</span>
              <span class="info-box-number">R$ 72,460.00</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Bem vindo {{ Auth::user()->name }} !</p>
                </div>
            </div>
        </div>
    </div>
    <!-- SEGUNDA ROW -->
    <!-- SEGUNDA ROW -->
<div class="row">
    <div class="col-md-8">
    <div class="card">
              <div class="card-header">
                <h2 class="card-title" style="font-size:20px;">Vendas <b>por Lojas</b></h2>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="chart-responsive"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="pieChart" height="99" width="199" style="display: block; width: 199px; height: 99px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3">
                    <ul class="chart-legend clearfix">
                      <li><i class="far fa-circle text-danger"></i> Carazinho</li>
                      <li><i class="far fa-circle text-success"></i> Sarandi</li>
                      <li><i class="far fa-circle text-warning"></i> Erechin</li>
                      <li><i class="far fa-circle text-info"></i> Ijuí</li>
                      <li><i class="far fa-circle text-primary"></i> Panambi</li>
                      <li><i class="far fa-circle text-secondary"></i> Soledade</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                  <div class="pad box-pane-right bg-green" style="min-width:20%">
                    <div class="description-block margin-bottom">
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block margin-bottom">
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                </div>

                </div>
                <!-- /.row -->
            
              <!-- /.footer -->
               </div>
            </div>
          </div>
          <!-- 
           End da ROW -->
           <div class="col-md-2">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Top 3 Lojas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
            <div class="card-body">
              <h1>sdasdasd sdsa</h1>
            </div>
    </div>
  </div>
</div>


<div class="row" style="margin-top: 50px;">
  <div class="column" style="background-color:white; height: 300px; width: 1380px; margin-top:-20px;">
    <h2 style="font-size:20px;">ULTIMAS <b>OFERTAS VENDIDAS</b></h2>
    <table  class="table table-bordered table-striped dataTable">
  <thead>
    <tr>
      <th scope="col">ID DO PEDIDO</th>
      <th scope="col">OFERTA</th>
      <th scope="col">LOJA</th>
      <th scope="col">STATUS</th>
      <th scope="col">VALOR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">#1445</th>
      <td>TENIS NIKE</td>
      <td>LOJA DO POVO</td>
      <td style="color:green;">CONCLUIDO</td>
      <td>198.78</td>
      <td><a style="color:red;" href="#">VER PEDIDO</a></td>
    </tr>
    <tr>
    <th scope="row">#2845</th>
      <td>ROUPAS LACOSTE</td>
      <td>LOJA DO POVO</td>
      <td style="color:green;">CONCLUIDO</td>
      <td>205.89</td>
      <td><a style="color:red;" href="#">VER PEDIDO</a></td>
    </tr>
    <tr>
    <th scope="row">#3475</th>
      <td>TENIS MIZUNO</td>
      <td>LOJA DO POVO</td>
      <td style="color:green;">CONCLUIDO</td>
      <td>305.78</td>
      <td><a style="color:red;" href="#">VER PEDIDO</a></td>
    </tr>
  </tbody>
</table>
  </div>
</div>

        <script type="text/javascript">
$(function () {
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#pieChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Carazinho',
          'Sarandi',
          'Erechin',
          'Ijuí',
          'Panambi',
          'Soledade',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : true,
      responsive : true,
      legend: {
        display: false
      },
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    });
  });
    </script>
@stop
