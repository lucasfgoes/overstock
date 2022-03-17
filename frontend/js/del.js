export default function(tabelaEstoque){
  let posicao = null;
  const btnDel = document.querySelector('.btn_del');

  // deletar produtos
  const del1 = document.querySelector('#del1');
  const del3 = document.querySelector('#del3');
  const del2 = document.querySelector('#del2');

  btnDel.addEventListener('click',()=>deletaProduto());

  async function deletaProduto(){
    let [produto, marca, quantidade] = [del1.value ,del3.value,del2.value];
    let response = await fetch(`http://localhost/overstock/backend/sell.php?produto=${produto}&marca=${marca}&quantidade=${quantidade}`);

    let dados = await response.json();
    console.log(dados);
    window.location.reload();
  }
}