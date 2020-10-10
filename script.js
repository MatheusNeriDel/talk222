/*  funções de formulário  */
function validarEmail(email) {
  var usuario = email.substring(0, email.indexOf("@"));
  var dominio = email.substring(email.indexOf("@") + 1, email.length);

  var valido = true;

  if (usuario.length < 1 || dominio.length < 3) valido = false;
  else if (
    usuario.indexOf("@") != -1 ||
    usuario.indexOf(" ") != -1 ||
    dominio.indexOf("@") != -1 ||
    dominio.indexOf(" ") != -1 ||
    dominio.indexOf(".") == -1 ||
    dominio.indexOf(".") == 0 ||
    dominio.lastIndexOf(".") == dominio.length - 1
  )
    valido = false;

  return valido;
}

function validarSenha(senha) {
  if (senha.length < 8) return false;

  return true;
}

function validarChecagemSenha(senha, confirmasenha) {
  if (senha != confirmasenha) return false;

  return true;
}

function mostrarMensagem(id, mensagem) {
  document.getElementById(id).innerHTML = mensagem;
}

function limparMensagens() {
  mensagens = document.getElementsByClassName("msg");
  for (const e of mensagens) e.innerHTML = "";
}

/* validação do formulário de cadastro */
function validarFormCadastro() {
  var email = document.forms["cadastro"]["email"].value;
  var senha = document.forms["cadastro"]["senha"].value;
  var confirmasenha = document.forms["cadastro"]["confirmasenha"].value;

  limparMensagens();

  if (!validarEmail(email)) {
    mostrarMensagem("msgemail", "O e-mail não é válido");
    return false;
  } else if (!validarSenha(senha)) {
    mostrarMensagem("msgsenha", "A senha deve ter pelo menos 8 caracteres");
    return false;
  } else if (!validarChecagemSenha(senha, confirmasenha)) {
    mostrarMensagem("msgconfsenha", "As senhas devem ser iguais");
    return false;
  }

  return true;
}

/* validação do formulário de login */
function validarFormLogin() {
  var email = document.forms["login"]["email"].value;
  var senha = document.forms["login"]["senha"].value;

  limparMensagens();

  if (!validarEmail(email)) {
    mostrarMensagem("msgemail", "O e-mail não é válido");
    return false;
  } else if (!validarSenha(senha)) {
    mostrarMensagem("msgsenha", "A senha deve ter pelo menos 8 caracteres");
    return false;
  }

  return true;
}

/* validação do formulário de feedback */
function validarFormFeedback() {
  var email = document.forms["feedback"]["email"].value;

  limparMensagens();

  if (!validarEmail(email)) {
    mostrarMensagem("msgemail", "O e-mail não é válido");
    return false;
  }

  return true;
}

/* validação do formulário de indicacao */
function validarFormIndicacao() {
  var email = document.forms["indique"]["email"].value;

  limparMensagens();

  if (!validarEmail(email)) {
    mostrarMensagem("msgemail", "O e-mail não é válido");
    return false;
  }

  return true;
}
