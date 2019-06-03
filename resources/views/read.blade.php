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
    <h1>Importar arquivo de texto</h1>
    <form method="post" action="/ler" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo" id="arquivo"><br><br>
        <input type="submit" value="Importar"><br><br>
        <a href="/listar">Ver Lista</a>
    </form>
</body>
</html>