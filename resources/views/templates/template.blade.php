<!doctype html>
<html lang="pt-br">
  <head>
    <title>@yield('title') - Patrimonio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
  </head>
  <body>
    <header>
    <div class="bg-info p-2">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="/">Informações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/fundo">Fundos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/patrimonio">Patrimonio</a>
        </li>        
      </ul>
    </div>
    </header>
    <main>
      @yield('content')
    </main>
      <footer>
        <div class="row fixed-bottom bg-secondary">
          <div class="col-12 text-center">
            <div class="copyright p-4 text-white">
              Copyright © 2021 - Desenvolvido por <a class="text-white" href="https://www.linkedin.com/in/victor-abreu-b44b92199/" target="_blank" rel="noopener noreferrer">Victor Abreu</a> 
            </div>
          </div>
        </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>