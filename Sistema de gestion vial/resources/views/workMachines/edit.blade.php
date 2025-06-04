<!DOCTYPE html>
<html>
<head>
    <title>Editar Asignacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Editar asignaciones</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('.update', ) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="start_date">Fecha de Inicio: </label>
                <input type="date" name="start_date" id="start_date" required>
                @error('start_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="end_date">Fecha de Fin: </label>
                <input type="date" name="end_date" id="end_date">
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="final_reason">Razón Final: </label>
                <textarea name="final_reason" id="final_reason"></textarea>
                @error('final_reason')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('machines.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>