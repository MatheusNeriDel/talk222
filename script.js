/*  funções de formulário  */

function alertarSenhaInvalida()
{
	document.forms['cadastro']['senha'].setCustomValidity('Senha muito pequena!');
}

function alertarSenhaDiferente()
{
	document.forms['cadastro']['confirmasenha'].setCustomValidity('As senhas devem ser iguais');
}

function validarFormulario()
{
	var senha = document.forms['cadastro']['senha'].value;
	var confirmasenha = document.forms['cadastro']['confirmasenha'].value;

	if(senha.length < 8)
	{
		alertarSenhaInvalida();
		return false;
	}

	if(senha != confirmasenha)
	{
		alertarSenhaDiferente();
		return false;
	}

	return true;
}