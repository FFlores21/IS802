function verificarRadios() {
    if (!document.querySelector('input[type="radio"][name="genero"]:checked') || !document.querySelector('input[type="radio"][name="candidato"]:checked') || !document.querySelector('input[type="radio"][name="edad"]:checked')){
        document.getElementById('msgLLenado').innerHTML = `* Se deben llenar todas las preguntas`;
    }else{
        document.getElementById('msgLLenado').innerHTML = ` `;
        var myModal = new bootstrap.Modal(document.getElementById('enviarEncuesta'), {
            keyboard: false
        });
        myModal.show();
        Add_Table3();
    };
};

