import register_prod from './register_prod.js';
import del from "./del.js";
import edit from "./edit.js";
import read from "./read.js";
import add from './add.js';

// tabela
const tabelaEstoque = document.querySelector('.tabela-estoque');

/* FUNÇÕES DO CRUD DA INTERFACE */
read(tabelaEstoque);
register_prod();
add();
del();
edit();




