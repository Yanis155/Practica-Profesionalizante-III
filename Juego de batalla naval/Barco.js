var tablero = []; //creo un arreglo llamado tablero

var i, j = 1;

for (i=0; i<=9; i++){ //recorro cuantas posiciones tiene el tablero
    tablero[i]=[];
    for (j=0; j<=9; j++){
      tablero[i][j]=0;
    }
}



document.getElementById("barco").innerHTML= text;

function agregarBarco(x,y){
    x.innerHTML= 1;
}

function quitarBarco(quitar){
    quitar.innerHTML= quitar;
    quitar.classList.removeAtributte('barco');
    quitar.removeAtributte('estilos');
    var casillas = casillas_alrededor();
       for (k in casillas[quitar.id]){
      casillas[alr[o.id][k]].innerHTML = 2;
       }
      if (b==1) {
       quitar.removeAttribute('style');
    }
}


