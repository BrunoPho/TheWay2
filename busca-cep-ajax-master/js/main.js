let inputCep = document.querySelector('#cep');
inputCep.addEventListener('change', buscaCep);

function preencheCampos(json) {
  document.querySelector('#endereco').value = json.logradouro;
  document.querySelector('#bairro').value = json.bairro;
  document.querySelector('#complemento').value = json.complemento;
  document.querySelector('#cidade').value = json.localidade;
  document.querySelector('#estado').value = json.uf;
}

function buscaCep() {
  let inputCep = document.querySelector('#cep');
  let cep = inputCep.value.replace('-', '');
  let cepInvalido = document.querySelector('#cepInvalido');
  let url = `http://viacep.com.br/ws/${cep}/json`;
  let xhr = new XMLHttpRequest();

  if (cep.length == 8) {
    xhr.open('GET', url, true);

    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4) {
        if (xhr.status == 200) {
          preencheCampos(JSON.parse(xhr.responseText));
          cepInvalido.classList.add('invisible');
        }
      }
    }

    xhr.send();
  } else {
    cepInvalido.textContent = 'Cep inválido!';
    cepInvalido.classList.remove('invisible');
  }
}

