@extends('templates.template')

@section('title')
Histórico
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-5">
            <h2 class="text-center">Histórico de Patrimonio</h2>
        </div>
        <div class="col-12">
            <div id="chart_div"></div>
        </div>        
    </div>
    <div class="row formulario bg-light pt-5">
        <div class="col-12 mb-4">
            <h4 class="text-center">Filtrar:</h4>
        </div>
        <div class="col-8 mx-auto d-flex justify-content-center">
          <div class="mb-5 text-center">
              <form class="centraliza" method="POST" action="/">
                  @csrf
                  <div class="form-group mb-3 row">
                      <div class="col-6">                                                 
                          <label class="mb-3" for="data-inicial">Data inicial:</label>                          
                          <input class="form-control mb-3" type="date" name="data-inicial" id="data-inicial" required> 
                          @error('data-inicial')
                              <em>{{ $message }}</em>
                          @enderror
                      </div>                                          
                      <div class="col-6">
                          <div>
                              <label for="data-final" class="mb-3">Data Final:</label>
                              <input class="form-control mb-3" type="date" name="data-final" id="data-final" required> 
                              @error('data-final')
                              <em>{{ $message }}</em>
                          @enderror
                          </div>                            
                      </div>     
                      <div class="col-6">
                        <div>
                            @foreach ($fundos as $fundo)

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="{{$fundo['name']}}" value="{{$fundo['id']}}">
                                <label class="form-check-label">
                                  {{$fundo['name']}}
                                </label>
                            </div>

                            @endforeach
                        </div>                            
                    </div>                                    
                  </div>                                        
                  <button type="submit" class="btn btn-primary mb-4">Filtrar</button>
                  
                  
                  
              </form>              
          </div>
      </div>
    </div>
    
</div>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        
        @foreach($historico as $x)
        ['Data', 'Patrimonio', 'Expenses'],        

        @endforeach
        ['2016',  1030,      540],
        ['2015',  0,      540],
        ['2018',  1030,      540],
        ['2020',  1030,      540]
      ]);

      var options = {        
        hAxis: {title: 'Período',  titleTextStyle: {color: '#333'}},
        vAxis: {title: 'Patrimonio',  titleTextStyle: {color: '#333'}}
      };

      var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
@endsection