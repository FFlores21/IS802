var candidatos = [
    {
        id: 4,
        nombreJunta:'COESYS',
        urlImagen: 'img/Ejemplo1.jpeg',
        propuesta: 'La educacion es lo más importante Se regalara Pizza el ultimo jueves de cada mes',
        presidente: 'José Zelaya',
        vicepresidente: 'Billi Joe',
        secretarioGeneral: 'Fausto Flores',
        tesorero: 'Esdras Escoto',
        fiscal: 'Erick Montoya',
        vocal1: 'Hayley Nichole Williams',
        vocal2: 'Francisca Paz',
        vocal3: 'Brock Ansiolitiko'
    },
    {
        id: 3,
        nombreJunta:'SYSTEAM',
        urlImagen: 'img/Ejemplo2.jpeg',
        propuesta: 'Juntos venceremos el Covid Se realizarán jornadas deporte al final de cada período académico',
        presidente: 'José Zelaya',
        vicepresidente: 'Billi Joe Armstrong',
        secretarioGeneral: 'Fausto Flores',
        tesorero: 'Esdras Escoto',
        fiscal: 'Erick Montoya',
        vocal1: 'Hayley Williams',
        vocal2: 'Francisca Paz',
        vocal3: 'Brock Ansiolitiko'
    },
    {
        id: 2,
        nombreJunta:'AJAX IS',
        urlImagen: 'img/Ejemplo3.jpeg',
        propuesta: 'Aseguramos la construcción de Hopital Universitario. Se regalaran cupones de Bigos por Indice en el PAC',
        presidente: 'José Zelaya',
        vicepresidente: 'Billi Joe',
        secretarioGeneral: 'Fausto Flores',
        tesorero: 'Esdras Escoto',
        fiscal: 'Erick Montoya',
        vocal1: 'Goog Dye Young',
        vocal2: 'Francisca Paz',
        vocal3: 'Brock Ansiolitiko'
    },
    {
        id: 1,
        nombreJunta:'AJAX ISv2.0',
        urlImagen: 'img/Ejemplo3.jpeg',
        propuesta: 'Aseguramos la construcción de Hopital Universitario. Se regalaran cupones de Bigos por Indice en el PAC',
        presidente: 'José Zelaya',
        vicepresidente: 'Billi Joe',
        secretarioGeneral: 'Fausto Flores',
        tesorero: 'Esdras Escoto',
        fiscal: 'Erick Montoya',
        vocal1: 'Hayley Williams',
        vocal2: 'Francisca Paz',
        vocal3: 'Brock Ansiolitiko'
    }
];


function generarCardsCandidatos(){

    candidatos.forEach(function(cand){
        document.getElementById('candidatos').innerHTML += 
        `<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card">
            <img class="card-img-top" src="${cand.urlImagen}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">${cand.nombreJunta}</h5>
              <p class="card-text">${cand.propuesta}</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal${cand.id}">
                        Ver detalles
                </button> 
        </div>
        </div>
              `;
    });


}


generarCardsCandidatos();


