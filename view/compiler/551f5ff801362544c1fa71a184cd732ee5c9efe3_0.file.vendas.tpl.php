<?php
/* Smarty version 3.1.33, created on 2019-05-25 02:34:01
  from 'C:\xampp\htdocs\lojavirtual\view\vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce88d79b2b853_10216175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551f5ff801362544c1fa71a184cd732ee5c9efe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojavirtual\\view\\vendas.tpl',
      1 => 1558744436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce88d79b2b853_10216175 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Realizar Venda:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Nome Vendedor:</label>
            <input type="text" name="nome_vendedor" class="form-control" minlength="1" required>
        </div>
        <div class="col-md-4">
            <label>Valor Venda:</label>
            <input type="text" name="venda_valor" class="form-control"  minlength="3" required>
        </div>
</section>    
      <br>
      <br>
 <section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <button type="submit" class="btn btn-success btn-block "> 
               <i class="glyphicon glyphicon-ok"></i> Realizar Venda </button>
       </div>
       <div class="col-md-4"></div>
</section>
</form><?php }
}
