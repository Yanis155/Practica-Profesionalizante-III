<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mantenimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Nuevo mantenimiento</h2>

        <form action="{{ route('maintenance.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="type">Tipo de mantenimiento</label>
                <input type="text" id="type" required>
                @error('type')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>
           
            <div class="form-group">
                <label for="start_date">Fecha de Inicio: </label>
                <input type="date" name="start_date" id="start_date" required>
                @error('start_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="end_date">Fecha de Fin:</label>
                <input type="date" name="end_date" id="end_date">
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="current_mileage">Kilometraje Actual</label>
                <input type="date" id="current_mileage">
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('maintenance.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>