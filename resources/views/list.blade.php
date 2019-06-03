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
    <h1>Listar objetos</h1>
    <a href="/form-cadastrar">Novo objeto</a><br><br>
    <a href="/">Importar arquivo de texto</a><br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Linha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($objects as $object)
                <tr>
                    <td>{{$object->id}}</td>
                    <td>{{$object->line}}</td>
                    <td>
                    <a href="{{"/{$object->id}/form-editar"}}">Editar</a>
                    <a href="{{"/{$object->id}/excluir"}}">Excluir</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>