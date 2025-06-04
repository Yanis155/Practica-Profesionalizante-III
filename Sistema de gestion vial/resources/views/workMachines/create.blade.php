<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Maquinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin-top: 40px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #1a3c6d;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e0e4e8;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 16px;
        }

        .table td {
            padding: 16px;
            vertical-align: middle;
            color: #333;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8fafc;
        }

        .table-hover tbody tr:hover {
            background-color: #e6f0fa;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 8px 18px;
            font-weight: 500;
            border-radius: 6px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            padding: 8px 18px;
            font-weight: 500;
            border-radius: 6px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger:hover {
            background-color: #b02a37;
            transform: translateY(-2px);
        }

        .alert-success {
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #d4edda;
            color: #155724;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            .table th,
            .table td {
                min-width: 120px;
            }
        }
    </style>
</head>

<body>
    <div class="container py-4">

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('workMachines.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="machine_id" class="form-label">Máquina</label>
                    <select name="machine_id" id="machine_id" class="form-select" required>
                        <option value="">Seleccione una máquina</option>
                        @foreach ($machines as $machine)
                            <option value="{{ $machine->id }}">{{ $machine->type }} ({{ $machine->model }})</option>
                        @endforeach
                    </select>
                    @error('machine_id')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="work_id" class="form-label">Obra</label>
                    <select name="work_id" id="work_id" class="form-select" required>
                        <option value="">Seleccione una Obra</option>
                        @foreach ($works as $work)
                            <option value="{{ $work->id }}">{{ $work->name }}
                                ({{ $work->province ? $work->province->name : 'Sin Provincia' }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Fecha inicio</label>
                    <input type="date" name="start_date" id="start_date" value="{{ now()->format('Y-m-d') }}"
                        class="form-select">
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Fecha Fin</label>
                    <input type="date" name="start_date" id="start_date" value="{{ now()->format('Y-m-d') }}"
                        class="form-select">
                </div>
                <div class="mb-3">
                    <label for="final_reason" class="form-label">Motivo de fin</label>
                    <input type="text" name="final_reason" id="final_reason" value=""
                        class="form-select">
                </div>
                <div class="form-group">
                    <label for="current_mileage">Kilometraje recorrido: </label>
                    <input type="number" id="current_mileage"
                      class="form-select">
                </div> <br>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Asignar</button>
                </div>

            </form>
</body>
</html>