const $grafica = document.querySelector("#grafica");
const etiquetas = ["José", "Fausto", "Esdras", "Erick"]

const datosIngresos = {
    data: [1500, 400, 2000, 7000], 
    backgroundColor: [
        '#D7001A',
        '#F2CB00',
        '#0000F1',
        '#F29100',
    ],
    borderColor: [
        'rgba(163,221,203,1)',
        'rgba(232,233,161,1)',
        'rgba(230,181,102,1)',
        'rgba(229,112,126,1)',
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