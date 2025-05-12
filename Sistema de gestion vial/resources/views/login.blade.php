<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Profesionalizante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Iniciar sesión</h3>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="example@correo.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Contraseña">
        </div>
        <div class="d-grid mb-3">
            <button class="btn btn-primary" onclick="login()">Entrar</button>
        </div>
        <div id="mensaje" class="text-center fw-bold"></div>
    </div>
</body>
<script>
    function login() {
   
    let email= document.getElementById("email").value;
    let password= document.getElementById("password").value;
 
    fetch("login.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({ email: email, password: password })
      })
        .then(response => response.json()) // Convertir respuesta a JSON
        .then(data => {
          document.getElementById("mensaje").innerText = data.mensaje;
        });
};
</script>
</html>