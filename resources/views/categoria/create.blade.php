<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>
</head>

<body>
    <form action="{{route('categoria.store')}}" method="post">
        @csrf

        <label for="nomcat">Nome da categoria</label><br />
        <input type="text" name="nomcat" id="nomcat">
        <button type="submit">Adicionar</button>
    </form>
</body>

</html>
