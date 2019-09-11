<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Categoria</title>
</head>

<body>

    <h3> Editando a categoria {{$categoria->nomcat}}</h3>
    <form action="{{route('categoria.update', $categoria->codcat)}}" method="post">
        @csrf
        @method('patch')

        <label for="nomcat">Nome da categoria</label><br />
        <input type="text" name="nomcat" id="nomcat" value="{{$categoria->nomcat}}">
        <button type="submit">Atualizar</button>
    </form>
</body>

</html>
