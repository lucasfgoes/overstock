export default function(){
  const btnEdit = document.querySelector('.btn_edit');

  // editar produtos
  const edit1 = document.querySelector('#edit1');
  const edit2 = document.querySelector('#edit2');
  const edit3 = document.querySelector('#edit3');
  const edit4 = document.querySelector('#edit4');

  btnEdit.addEventListener('click',()=>editaProduto());

  async function editaProduto(){
    const form = new FormData();
    form.append('id',  edit1.value);
    form.append('produto', edit2.value);
    form.append('marca', edit3.value);
    form.append('preco', edit4.value);

    if(!edit2.value.length || !edit4.value.length) return alert('Por favor preencha os campos!');

    let response = await fetch(`http://localhost/overstock/backend/edit.php`,{
      method:'POST',
      body:form
    });

    let dados = await response.text();
    console.log(dados);
    edit2.value = '';
    edit3.value = '';
    edit4.value = '';
    window.location.reload();
  }
}