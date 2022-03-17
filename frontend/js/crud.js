import add from "./add.js";
import del from "./del.js";
import edit from "./edit.js";
import read from "./read.js";

// tabela
const tabelaEstoque = document.querySelector('.tabela-estoque');

/* FUNÇÕES DO CRUD DA INTERFACE */
add(tabelaEstoque);
del(tabelaEstoque);
edit(tabelaEstoque);
read(tabelaEstoque);




