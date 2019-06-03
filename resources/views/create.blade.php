<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Criar novo objeto</h1>
    <form method="post" action="/cadastrar">
        {!! csrf_field() !!}
        <label for="line">Linha</label>
        <input type="text" name="line" id="line"/>
        <button type="submit">Enviar</button><br><br>
        <a href="/listar">Voltar</a>
    </form>
</body>
</html>