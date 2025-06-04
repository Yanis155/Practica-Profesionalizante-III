<!DOCTYPE html>
<html>
<head>
    <title>Nueva Máquina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Nueva Máquina</h2>

        <form action="{{ route('machines.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="type">Tipo: </label>
                <input type="text" name="type" id="type" required>
                @error('type')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" name="model" id="model" required>
                @error('model')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('machines.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>