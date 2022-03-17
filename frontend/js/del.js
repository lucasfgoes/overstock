export default function(){
  const btnDel = document.querySelector('.btn_del');

  // deletar produtos
  const del1 = document.querySelector('#del1');
  const del2 = document.querySelector('#del2');

  btnDel.addEventListener('click',()=>deletaProduto());

  async function deletaProduto(){
    let [id, quantidade] = [del1.value ,del2.value];
    let response = await fetch(`http://localhost/overstock/backend/sell.php?id=${id}&quantidade=${quantidade}`);

    let dados = await response.json();
    console.log(dados);
    window.location.reload();
  }
}