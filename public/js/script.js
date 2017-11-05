function enviarEmail() {
    var nome = document.getElementById('nome');
    var email = document.getElementById('email');
    var telefone = document.getElementById('telefone');
    var texto = document.getElementById('texto');

    if (nome.value == '') {
        alert('O nome não foi preenchido!');
    }
    if (email.value == '') {
        alert('O email não foi preenchido!');
    }
    if (telefone.value == '') {
        alert('O telefone não foi preenchido!');
    }
    if (texto.value == '') {
        alert('Digite a sua mensagem!');
    }
}

function apenasLetras(input){
	var regex = /[^A-z]/;
	input.value = input.value.replace(regex, "");
}
