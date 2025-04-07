

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




