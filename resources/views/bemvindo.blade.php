<h1>Página inicial</h1>
@if (auth()-> user())
    Olá {{ auth()->user()->name}}
    você está autenticado.
    
    <a href="{{ route ('logout') }}">sair</a>
@else
    você <strong>não</strong> está autenticado
@endif