<!DOCTYPE html>
<html>
<head>
    <title>Editar Obra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin-top: 40px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #343a40;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .table {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #dee2e6;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 15px;
        }

        .table td {
            padding: 15px;
            vertical-align: middle;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table-hover tbody tr:hover {
            background-color: #e9ecef;
            transition: background-color 0.2s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 8px 16px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            padding: 8px 16px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger:hover {
            background-color: #b02a37;
            transform: translateY(-2px);
        }

        .alert-success {
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Obra</h2>

        <form action="{{ route('works.update', $works->id) }}" method="POST">
            @csrf
            @method('PUT')

            <hr>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{old('name', $works->name)}}">
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
                <label for="end_date">Fecha de Fin: </label>
                <input type="date" name="end_date" id="end_date">
                @error('end_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div> <br>
            
            <div class="form-group">
                <label for="province_id">Provincia: </label>
                <select name="province" id="province_id">
                    <option value="">Selecciona: </option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{$province->name}}</option>              
                    @endforeach
                </select>
            </div> <br>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('works.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>