<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Editar</h2>
        
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

        <form action="{{ route('maintenances.update', $maintenances->id) }}" method="POST">
            @csrf
            @method('PATCH')
            
            <hr>
            <div class="form-group">
                <label for="type">Tipo: </label>
                <input type="text" name="type" id="type" value="{{ old('type', $maintenances->type) }}">
                @error('type')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="start_date">Fecha de Inicio: </label>
                <input type="date" name="start_date" id="start_date" value="{{old('start_date', $maintenances->start_date)}}" required>
                @error('start_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="end_date">Fecha de Fin: </label>
                <input type="date" name="end_date" id="end_date" value="{{old('end_date', $maintenances->end_date)}}">
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="current_mileage">Kilometraje Recorrido: </label>
                <input type="number" name="current_mileage" id="current_mileage" value={{old('current_mileage', $maintenances->current_mileage)}}>
                @error('current_mileage')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <div class="form-group">
                <label for="machine_id">Maquina Asignada: </label>
                <select type="name" id="machine_id">
                    <option value="">Seleccionar:</option>
                    @foreach ($machines as $machine=>$name)
                        <option value="{{ $machine }}">{{$machine}}</option>         
                    @endforeach
                </select>
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('maintenances.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>