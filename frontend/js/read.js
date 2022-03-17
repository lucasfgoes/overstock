export default function(tabelaEstoque){
  window.onload = async ()=>{
    const response = await fetch('http://localhost/overstock/backend/read.php');

    const dados = await response.json();
    console.log(dados);

    for(let produto of dados){
      let [id,qtd,prod,marca,cust,prec] = [
        produto.id,
        produto.quantidade,
        produto.produto,
        produto.marca,
        produto.custo,
        produto.preco
      ];
     const tr = adicionaProduto(id,qtd,prod,marca,cust,prec);
     tabelaEstoque.appendChild(tr);
    }


  }

  function adicionaProduto(id,qtd,prod,marca,cust,prec){
    
    const tr =  document.createElement('tr');
    tr.innerHTML = 
    `
    <td>${id}</td>
    <td>${qtd}</td>
    <td>${prod}</td>
    <td>${marca}</td>
    <td>R$${Number(cust).toFixed(2).replace('.',',')}</td>
    <td>R$${Number(prec).toFixed(2).replace('.',',')}</td>
    `
    return tr;
  }
  
}