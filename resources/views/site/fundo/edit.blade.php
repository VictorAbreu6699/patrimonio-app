@extends('templates.template')

@section('title')
Fundos
@endsection

@section('content')
<div class="container">        
    <div class="row formulario bg-light pt-5">
        <div class="col-12 mb-4">
            <h2 class="text-center">Editar {{$fundo['name']}}:</h2>
        </div>
        <div class="col-8 mx-auto d-flex justify-content-center">         

            <div class="mb-5 text-center">              
                <form class="centraliza" action="/fundo/{{$fundo['id']}}/edit" method="POST" >                  
                  @csrf  
                  <div class="form-group mb-3">
                      <label class="mb-3" for="Nome">Nome</label>
                      <input type="text" name="name" class="form-control" id="Nome" placeholder="Digite aqui o nome" required> 
                      <input type="hidden" name="id" value="{{$fundo['id']}}">
                      @error('name')
                        <em>{{ $message }}</em>
                      @enderror                     
                    </div>                                        
                    <button type="submit" class="btn btn-primary mb-4">Atualizar</button>
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