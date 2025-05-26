<!DOCTYPE html>
<html>
<head>
    <title>Nueva Obra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Nueva Obra</h2>

        <form action="{{ route('') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" required>
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
                <label for="end_date">Fecha de Fin: (opcional)</label>
                <input type="date" name="end_date" id="end_date">
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('works.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>