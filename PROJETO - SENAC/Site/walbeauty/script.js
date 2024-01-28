document.addEventListener("DOMContentLoaded", function() {
  const heroSection = document.querySelector('.hero-section');
  //const section = document.querySelector('.fazemos');

  // Adiciona a classe para ativar a animação depois que a página é carregada
  setTimeout(function() {
    heroSection.style.opacity = 1;
    //section.style.opacity = 1;
  }, 100); // Espera 100ms antes de ativar a animação para garantir a transição
});

////////////////////VALIDAR FORMULARIO DE CADASTRO

//  function validarFormulario() {
//   var nomeCompleto = document.getElementById('name').value;
//   var email = document.getElementById('Email').value;
//   var emailConfirmacao = document.getElementById('Email2').value;
//   var senha = document.getElementById('senha').value;
//   var senhaConfirmacao = document.getElementById('senha2').value;

//  //Verificar se email e email de confirmação são iguais
//    if (email !== emailConfirmacao) {
//       alert('Os emails não coincidem. Por favor, verifique.');
//       return false;
//   } else{
//     alert('O e-mail já consta em nosso banco de dados!')
//   }

//   // Verificar se senha e senha de confirmação são iguais
//   if (senha !== senhaConfirmacao) {
//       alert('As senhas não coincidem. Por favor, verifique.');
//       return false;
//   }

//   // Verificar se há pelo menos dois nomes no campo de nome
//   var nomes = nomeCompleto.split(' ');
//   if (nomes.length < 2) {
//       alert('Por favor, digite seu nome e sobrenome separados por um espaço.');
//       return false;
//   }

   // Se tudo estiver válido, o formulário pode ser enviado
  // return true;
//}

function validarSenha() {
  var senha1 = document.getElementById("senha");
  var senha2 = document.getElementById("senha2");

  var s1 = senha1.value;
  var s2 = senha2.value;

  var mensagemErro = "As senhas não coincidem.";

  if (s1 !== s2) {
    document.getElementById("msg").innerHTML = mensagemErro;  
    return false;
  } else {
    document.getElementById("msg").innerHTML = "";
    return true;
  }
};

function validarEmail() {
  var email1 = document.getElementById("email");
  var email2 = document.getElementById("email2");

  var e1 = email1.value;
  var e2 = email2.value;

  var mensagemErro = "Os e-mails não coincidem.";

  if (e1 !== e2) {
    document.getElementById("msg2").innerHTML = mensagemErro + "<br>&nbsp;";
    return false;
  } else {
    document.getElementById("msg2").innerHTML = "";
    return true;
  }
};

function validarLogin() {
  var email = document.getElementById("email");
  var senha = document.getElementById("senha");
};