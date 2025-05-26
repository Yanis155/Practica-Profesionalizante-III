<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Obras</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Gestión de Obras</title>
</head>
<body>
    <div class="container">
        <h2>Lista de Obras</h2>
        <hr>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('works.create') }}" class="btn btn-primary">Nueva Obra</a>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Nombre de la obra</th> 
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        @foreach ($works as $work)
                        <td>{{ $work->name }}</td> 
                        <td>{{ $work->start_date }}</td> 
                        <td>{{ $work->end_date }}</td>  

                         <td>
                            <form action="{{ route('works.destroy', $work->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta obra?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-danger btn-sm">Eliminar</button>     
                            </form>
                        </td>
                    </tr>


                @endforeach
            </tbody>

        </table>
    </div>
</body>
</html>