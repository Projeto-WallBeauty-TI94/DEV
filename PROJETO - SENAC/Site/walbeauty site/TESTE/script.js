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

function validarFormulario() {
  var nomeCompleto = document.getElementById('name').value;
  var email = document.getElementById('Email').value;
  var emailConfirmacao = document.getElementById('Email2').value;
  var senha = document.getElementById('senha').value;
  var senhaConfirmacao = document.getElementById('senha2').value;

  // Verificar se email e email de confirmação são iguais
  if (email !== emailConfirmacao) {
      alert('Os emails não coincidem. Por favor, verifique.');
      return false;
  }

  // Verificar se senha e senha de confirmação são iguais
  if (senha !== senhaConfirmacao) {
      alert('As senhas não coincidem. Por favor, verifique.');
      return false;
  }

  // Verificar se há pelo menos dois nomes no campo de nome
  var nomes = nomeCompleto.split(' ');
  if (nomes.length < 2) {
      alert('Por favor, digite seu nome e sobrenome separados por um espaço.');
      return false;
  }

  // Se tudo estiver válido, o formulário pode ser enviado
  return true;
}

///////////////HAMBURGUER
