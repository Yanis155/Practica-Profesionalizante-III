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
        <h1>Lista de Máquinas</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('machines.create') }}" class="btn btn-primary">Nueva Máquina</a>

        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Modelo</th>
                    <th>Obra</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($machines as $machine)
                    <tr>
                        <td>{{ $machine->type }}</td>
                        <td>{{ $machine->model }}</td>
                        <td>{{ $machine->obra->name }}</td>
                        <td>{{ $machine->start_date }}</td>
                        <td>{{ $machine->end_date ?? 'N/A' }}</td>
                        <td>
                            <form action="{{ route('machines.destroy', $machine->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta máquina?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>