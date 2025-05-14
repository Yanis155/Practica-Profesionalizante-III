<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
        <form action="{{route('machine.index')}}" method="get">
         <input type="name" placeholder="ingrese una maquina"> <br> <br>
        <input type="date" value=""> <br> <br>
        <input date="name" placeholder="ingrese un motivo de fin">
        <button type="submit">Enviar </button>
    </form>
</body>
</html>