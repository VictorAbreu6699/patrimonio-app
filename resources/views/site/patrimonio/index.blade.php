@extends('templates.template')

@section('title')
Patrimonio
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center title">
        <div class="col-8 mx-auto">
            <div class="mb-5">
                <h2 class="text-center">Patrimonio Atual:</h2>
            </div>               
        </div>
    </div>
    <div class="row fundos">
        <div class="col-8 mx-auto d-flex justify-content-center">
            <div class="mb-5">
            @if($patrimonios)
                <table class="table table-striped">
                    <thead>
                      <tr>                                                
                        <th scope="col">Fundo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Data</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>                        
                        @foreach($patrimonios as $patrimonio)                                                
                        <tr>
                        @foreach($fundos as $fundo)
                            @if($fundo['id'] == $patrimonio['fundo_id'] )
                                <td>{{$fundo['name']}}</td>
                            @endif
                        @endforeach                        
                        <td>{{$patrimonio['value']}}</td>
                        <td>{{$patrimonio['date']}}</td>
                        <td><div class="options d-inline">
                            <div class="edit d-inline"><a href="/"><i class="fas fa-edit"></i></a></div>
                            <div class="delete d-inline"><a href="/"><i class="fas fa-trash-alt"></i></a></div>                        
                        </div></td>                        
                        </tr> 
                        @endforeach
                                           
                    </tbody>
                </table>
            @endif
            </div>                                            
        </div>        
    </div>
    <div class="row formulario bg-light pt-5">
        <div class="col-12 mb-4">
            <h2 class="text-center">Adicionar novo Patrimonio:</h2>
        </div>
        <div class="col-8 mx-auto d-flex justify-content-center">
            <div class="mb-5 text-center">
                <form class="centraliza" method="POST" action="/patrimonio">
                    @csrf
                    <div class="form-group mb-3 row">
                        <div class="col-6">                                                 
                            <label class="mb-3" for="fundo">Fundo:</label>
                            <select class="form-control text-center mb-3" name="fundo_id" id="fundo" required>
                                <option value="1">Fundo 1</option>
                                <option value="3">Fundo 2</option>                                
                            </select>
                            @error('fundo_id')
                                <em>{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="mb-3" for="valor">Valor:</label>
                            <input class="form-control mb-3 dinheiro" type="text" name="value" id="value" required>
                            @error('value')
                                <em>{{ $message }}</em>
                            @enderror                                                       
                        </div> 
                        <div class="col-6 mx-auto d-flex justify-content-center">
                            <div>
                                <label for="data" class="mb-3">Data:</label>
                                <input class="form-control mb-3" type="datetime-local" name="date" id="date" required> 
                                @error('date')
                                <em>{{ $message }}</em>
                            @enderror
                            </div>                            
                        </div>                                         
                    </div>                                        
                    <button type="submit" class="btn btn-primary mb-4">Salvar</button>
                </form>
                @if(session('sucess'))

                  <div class="message">
                    {{session('message')}}
                  </div>
                  
                @endif
            </div>
        </div>
    </div>
</div>
@endsection