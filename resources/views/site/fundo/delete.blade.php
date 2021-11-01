@extends('templates.template')

@section('title')
Fundos
@endsection

@section('content')

    <form id="exclui" action="/fundo/{id}/delete" method="post">
        <input type="hidden" value="{{$id}}">
    </form>
    <script>
        jQuery(function() {            


            let resposta=confirm("Tem certeza que deseja excluir?");
            if (resposta==true)
            {
                $('#exclui').submit();   
            }
            else
            {
                $(location).attr('href', '/fundo');
            }
            
            });
    </script>
@endsection