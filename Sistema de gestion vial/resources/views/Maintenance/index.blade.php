<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Maquinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Gestión de mantenimiento</title>
     
</head>
<body>
    <div class="container">
        <h2>Gestión de mantenimiento</h2>
        <hr>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('maintenance.create') }}" class="btn btn-primary">Nuevo mantenimiento</a>
       
        <hr>
        <table table-striped>
            <thead>
                <tr>
                    <th>Tipo</th> 
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Kilometraje actual</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        @foreach ($maintenances as $maintenance)
                        <td>{{ $maintenance->type }}</td> 
                        <td>{{ $maintenance->start_date }}</td> 
                        <td>{{ $maintenance->end_date }}</td> 
                        <td>{{ $maintenance->current_mileage }}</td> 
                        <td></td> 
                        
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Editar</a>
                        </td>  
                        <td>
                            <form action="{{ route('maintenances.destroy', $maintenance->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta máquina?');">
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