<!DOCTYPE html>
<html>
<head>
    <title>Nueva Máquina</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Nueva Máquina</h1>

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

            <div class="form-group">
                <label for="works_id">Obra: </label>
                <select name="works_id" id="works_id" required>
                    <option value="">Selecciona una obra:</option>
                @if (isset($works) && !$works->isEmpty())
                    @foreach ($works as $work)
                        <option value="{{ $work->id }}">{{ $work->name }}</option>
                    @endforeach
                @endif
                    @error('work_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </select>
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

            <div class="form-group">
                <label for="final_reason">Razón Final: (opcional)</label>
                <textarea name="final_reason" id="final_reason"></textarea>
                @error('final_reason')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="mileage_traveled">Kilometraje Recorrido: (opcional)</label>
                <input type="number" name="mileage_traveled" id="mileage_traveled">
                @error('mileage_traveled')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('machines.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>