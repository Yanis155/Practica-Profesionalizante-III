
function getRndInteger(max, min) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
    


function intervalos(){
    let start = Date.now();
    let times = [];

    setTimeout(function run() {
    times.push(Date.now() - start); // recuerda el retraso de la llamada anterior

    if (start + 100 < Date.now()) alert(times); // mostrar los retrasos después de 100 ms
     else setTimeout(run); // de lo contrario replanificar
    });
}
function contadorMax(index){
    i= i + 1;
    var cant = document.getElementById(`$index`)
    cant.value= i
    if (cant.value === 1){
        i=1
        cant.value=1
    }
}
function contadorMenos(index){

    if(i >= 2){
        i= i -1
        var cant = document.getElementById(`$index`)
        cant.value= i
    }
    if (cant.value===1){
        i=1
        cant.value=1
    }
}
}


