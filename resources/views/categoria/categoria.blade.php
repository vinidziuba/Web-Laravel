<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>

    <script>
        window.onload = function() {
            @if(session()->get('msg'))
            alert('{{session()->get('msg')}}');
            @endif
        };
    </script>
</head>

<body>
    <a href="{{route('categoria.create')}}"> Adicionar Categoria</a>
    <table>
        <thead>
            <tr>
                <td>Cod</td>
                <td>Nome</td>
                <td>Açãos</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $c)
            <tr>
                <td>{{$c->codcat}}</td>
                <td>{{$c->nomcat}}</td>
                <td>
                    <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                    <form action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>

</html>
