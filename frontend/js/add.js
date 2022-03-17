export default function add(tabelaEstoque){
  const btnAdd = document.querySelector('.btn_add');

  // add produtos
  const add1 = document.querySelector('#add1');
  const add2 = document.querySelector('#add2');
  const add3 = document.querySelector('#add3');
  const add4 = document.querySelector('#add4');
  const add5 = document.querySelector('#add5');

  // botão adicionar
  btnAdd.addEventListener('click',async e=>{
    if(!add1.value.length || !add2.value.length || !add3.value.length) return alert('Por favor preencha os campos!');
    if (!Number(add2.value) || !Number(add3.value)) return alert('Campo inválido!');

    const form = new FormData();
    form.append('produto', add1.value);
    form.append('marca', add5.value);
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

