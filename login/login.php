<?php

// Leer el cuerpo de la solicitud
$rawData = file_get_contents("php://input");

$data = json_decode($rawData, true);

$email = $data["email"] ?? "";
$password = $data["password"] ?? "";

if (!empty($data["email"]) && !empty($data["password"])) {
    $email = $data["email"];
    $password = $data["password"];

}
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) { 
    echo json_encode([
        "Mensaje"=>"Login exitoso", 
        "Email" => $email, //Retorna el email recibido
        "Password: " => $password]); //retorna la contraseña recibida
} else {
    echo json_encode(["mensaje" => "Credenciales inválidas"]);
}

?>
