function validar(){

var registro = formulario.registrof.value;
var nome = formulario.nomef.value;
var cpf = formulario.cpff.value;
var senha = formulario.senhaf.value;
var confirmasenha = formulario.senhaf.value;



if (registrof.length < 10) {
alert('Digite seu nome completo');
formulario.registrof.focus();
return false;
}
if (nomef == "") {
alert('Preencha o campo com o seu email');
formulario.nomef.focus();
return false;
}
if (cpff == "") {
alert('Preencha o campo com seu telefone');
formulario.cpff.focus();
return false;
}
if (senhaf == "") {
alert('Preencha o campo com seu estado');
formulario.senhaf.focus();
return false;
}


if (senhaf == "") {
alert("preencha o campo com o assunto");
formulario.senhaf.focus();
return false;
}
}
