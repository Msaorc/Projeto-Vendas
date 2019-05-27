<?php
/* Smarty version 3.1.33, created on 2019-05-25 19:41:31
  from 'C:\xampp\htdocs\lojavirtual\view\vendedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce97e4b2b2eb0_93959046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8724fdc33f2ab2eccb12ce2fda7ae9b8e0fa98d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojavirtual\\view\\vendedores.tpl',
      1 => 1558744185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce97e4b2b2eb0_93959046 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Cadastro de Vendedores:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" name="vend_nome" class="form-control" minlength="3" required>
        </div>
        <div class="col-md-4">
            <label>Email:</label>
            <input type="text" name="vend_email" class="form-control"  minlength="3" required>
        </div>
</section>
      <br>
      <br>
<section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <button type="submit" class="btn btn-success btn-block "> 
               <i class="glyphicon glyphicon-ok"></i> Gravar </button>
       </div>
       <div class="col-md-4"></div>
</section>
</form><?php }
}
