

function validate(item){
	item.setCustomValidity('');
    item.checkValidity();

if (item == confirmacao){
	if(item.value === senha.value) item.setCustomValidity('');
	else item.CustomValidity('As senhas não são iguais');
}
}

senha.addEventListener('input', function () {validate(senha)});
confirmacao.addEventListener('input', function () {validate(confirmacao)});