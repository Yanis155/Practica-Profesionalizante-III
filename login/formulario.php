<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");


$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data["email"]) && !empty($data["contraseña"])) {
    $email = $data["email"];
    $contraseña = $data["contraseña"];

}
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo json_decode('La contraseña es válida');
} else {
    echo json_decode ('La contraseña no es válida.');
}

?>
