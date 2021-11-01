@extends('templates.template')

@section('title')
Fundos
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center title">
        <div class="col-8 mx-auto">
            <div class="mb-5">
                <h2 class="text-center">Fundos Existentes:</h2>
            </div>               
        </div>
    </div>
    <div class="row fundos">
        <div class="col-8 mx-auto d-flex justify-content-center">
            <div class="mb-5">
              @if($fundos)                
                <table class="table table-striped">
                    <thead>
                      <tr>                        
                        <th scope="col">Nome</th>
                        <th scope="col">Ultima atualização</th>
                        <th scope="col">Criado em</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($fundos as $fundo)
                      <tr>                        
                        <td>{{$fundo['name']}}</td>
                        <td>{{$fundo['updated_at']}}</td>
                        <td>{{$fundo['created_at']}}</td>                        
                        <td><div class="options d-inline">
                            <div class="edit d-inline"><a href="/fundo/{{$fundo['id']}}/edit"><i class="fas fa-edit"></i></a></div>                            
                            <div class="delete d-inline"><a href="/fundo/{{$fundo['id']}}/delete"><i class="fas fa-trash-alt"></i></a></div>                        
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
            <h2 class="text-center">Adicionar novo Fundo:</h2>
        </div>
        <div class="col-8 mx-auto d-flex justify-content-center">         

            <div class="mb-5 text-center">              
                <form class="centraliza" action="/fundo" method="POST" >                  
                  @csrf  
                  <div class="form-group mb-3">
                      <label class="mb-3" for="Nome">Nome</label>
                      <input type="text" name="name" class="form-control" id="Nome" aria-describedby="emailHelp" placeholder="Digite aqui o nome" required> 
                      @error('name')
                        <em>{{ $message }}</em>
                      @enderror                     
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