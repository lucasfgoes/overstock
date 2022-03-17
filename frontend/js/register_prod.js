export default function (){
  const btnRegister = document.querySelector('.btn_register');

  // add produtos
  const register1 = document.querySelector('#register1');
  const register2 = document.querySelector('#register2');

  // botão adicionar
  btnRegister.addEventListener('click',async e=>{
    if(!register1.value.length && !register2.value) return alert('Por favor preencha os campos!');

    const form = new FormData();
    form.append('produto', register1.value);
    form.append('marca', register2.value);
    form.append('custo', 0);
    form.append('preco', 0);
    form.append('quantidade', 0);

    const response = await fetch(`http://localhost/overstock/backend/register_prod.php`,{
      method:'POST',
      body: form
    });
    
    const dados = await response.text();
    console.log(dados);
  
    window.location.reload();
  });
}

