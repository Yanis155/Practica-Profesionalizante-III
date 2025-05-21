<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Obras</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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

        
        <table border="2">
            <thead>
                <tr>
                    <th>Nombre de la obra</th> 
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>