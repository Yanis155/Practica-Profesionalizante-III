<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinas con asignaciones activas</title>
</head>
<body>
    <div class="container py-4">

        @if ($activeAssignments->isEmpty())
         <div class="alert alert-info">No hay máquinas asignadas actualmente.</div>
        @else

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Máquina</th>
                    <th>Tipo</th>
                    <th>Modelo</th>
                    <th>Obra asignada</th>
                    <th>Fecha de inicio</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($activeAssignment as $Assignment)
             <tr>
                    <td>{{ $assignment->machine->name }}</td>
                    <td>{{ $assignment->machine->type }}</td>
                    <td>{{ $assignment->machine->model }}</td>
                    <td>{{ $assignment->work->name }}</td>
                    <td>{{ date('d/m/Y', strtotime($assignment->start_date)) }}</td>
                </tr>
                @endforeach
        </tbody>
    </table> 
    <div>       
</body>
</html>