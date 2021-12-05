
const $grafica = document.querySelector("#grafica");
const etiquetas = [junta1, junta2, junta3]

const datosIngresos = {
    data: [conteo_junta1, conteo_junta2, conteo_junta3], 
    backgroundColor: [
        '#D7001A',
        '#F2CB00',
        '#0000F1',
    ],
    borderColor: [
        'rgba(163,221,203,1)',
        'rgba(232,233,161,1)',
        'rgba(230,181,102,1)',
    ],
    borderWidth: 1,// Ancho del borde
};



    new Chart($grafica, {
        type: 'pie',
        data: {
            labels: etiquetas,
            datasets: [
                datosIngresos,
                
            ]
        },
});

