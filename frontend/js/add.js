export default function (){
  const btnAdd = document.querySelector('.btn_add');

  // add produtos
  const add1 = document.querySelector('#add1');
  const add2 = document.querySelector('#add2');
  const add3 = document.querySelector('#add3');
  const add4 = document.querySelector('#add4');

  // botão adicionar
  btnAdd.addEventListener('click',async ()=>{
    if(!add1.value.length || !add2.value || !add3.value || !add4.value) return alert('Por favor preencha os campos!');

    const form = new FormData();
    form.append('id', add1.value);
    form.append('custo', add2.value);
    form.append('preco', add3.value);
    form.append('quantidade', add4.value);

    const response = await fetch(`http://localhost/overstock/backend/add.php`,{
      method:'POST',
      body: form
    });
    
    const dados = await response.text();
    console.log(dados);
  
    window.location.reload();
  });
}

