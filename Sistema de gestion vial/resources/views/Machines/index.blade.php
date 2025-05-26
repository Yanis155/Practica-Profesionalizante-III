<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Maquinas</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    </head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Gestión de Máquinas</title>
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Lista de Máquinas</h2>
        <hr>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('machines.create') }}" class="btn btn-primary">Nueva Máquina</a>
       
        <hr>
        <table table-striped>
            <thead>
                <tr>
                    <th>Tipo</th> 
                    <th>Modelo</th>
                    <th> Provincia Actual</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        @foreach ($machines as $machine)
                        <td>{{ $machine->type }}</td> 
                        <td>{{ $machine->model }}</td> 
                        <td></td> 
                        
                        <td>
                            <a href="{{ route('machines.edit', $machine->id) }}" class="btn btn-primary btn-sm">Editar</a>        
                        </td>  
                        <td>
                            <form action="{{ route('machines.destroy', $machine->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta máquina?');">
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