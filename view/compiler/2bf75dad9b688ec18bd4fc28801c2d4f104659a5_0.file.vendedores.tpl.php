<?php
/* Smarty version 3.1.33, created on 2019-05-27 19:39:27
  from 'C:\xampp\htdocs\provapratica\view\vendedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec20cf453c12_65206106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf75dad9b688ec18bd4fc28801c2d4f104659a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\provapratica\\view\\vendedores.tpl',
      1 => 1558744185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec20cf453c12_65206106 (Smarty_Internal_Template $_smarty_tpl) {
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
