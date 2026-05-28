<h1 style ="color: Blue">
    Página INICIAL
</h1>

<h2>
    Bem Vindo(a) {{$nome}}!
</h2>
<hr>
<form action="" method="post">
    @csrf()
    <label>Nome</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>


