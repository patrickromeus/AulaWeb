<h1>Cartas</h1>

<div>
    <a href="{{ route('cartas.inserir') }}">➕ Adicionar Cartas</a>
</div>
<div>
    Aqui fica a lista de cartas
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
             <th>foto</th>
             <th>Numero</th>

        </tr>
        @foreach ($cartas as $carta )
        <tr>
            <td>{{ $carta['id'] }}</td>
            <td>{{ $carta['nome'] }}</td>
            <td><img src="{{asset('storage/energias/'.$carta['tipo'].'.png') }}"width="22"></td>
            <td><img src="{{ asset('storage/'.$carta['foto']) }}"width="40"></td>
            <td>{{ $carta['numero'] }}</td>
            
        </tr>
        
        @endforeach
        
    </table>

</div>                                                                                                                                                                                                                                                                                              