<h1>Cartas</h1>

<p>tem certecza que deseja excluir a carta{{ $carta->nome }}?</p>
  
<form action="{{ route('cartas.deletar', $carta->id) }}"method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Sim, excluir">
    <a href="{{ route('cartas.index') }}">cancelar</a>

    </form>