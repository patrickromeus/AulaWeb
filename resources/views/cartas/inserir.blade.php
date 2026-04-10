<h1>Cartas</h1>

<form action="{{ route('cartas.gravar') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <br>
    <select name="tipo">
        <option value="fogo">Fogo</option>
        <option value="elétrico">Elétrico</option>
    </select>
    <input type="file" name="foto">
    <br>
    <input type="submit" value="gravar">
   <br>
   <input name="numero" placeholder="numero">

</form>