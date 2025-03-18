<script>

function login() {
   
    let email= document.getElementById("email").value;
    let contraseña= document.getElementById("contraseña").value;
 

    fetch("login.php", {
    method: "POST",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify({ email: email, contraseña: contraseña })
    })
    .then(response => response.json()) // Convertir respuesta a JSON
    .then(data => {
    document.getElementById("mensaje").innerText = data.mensaje;
    })
    

};



</script>