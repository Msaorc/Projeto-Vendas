<?php
/* Smarty version 3.1.33, created on 2019-05-27 20:32:48
  from 'C:\xampp\htdocs\provapratica\view\vendedorAlterar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec2d500c1803_31539790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f201b3929c4849fe786d47bb8840f9215dc8394c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\provapratica\\view\\vendedorAlterar.tpl',
      1 => 1558805870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec2d500c1803_31539790 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VENDEDOR']->value, 'V');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['V']->value) {
?>
<h3>Vendedor:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" name="vend_nome" class="form-control" minlength="3" required 
            value="<?php echo $_smarty_tpl->tpl_vars['V']->value['nome'];?>
">
        </div>
        <div class="col-md-4">
            <label>Email:</label>
            <input type="text" name="vend_email" class="form-control"  minlength="3" required
            value="<?php echo $_smarty_tpl->tpl_vars['V']->value['email'];?>
">
        </div>
</section>
      <br>
      <br>
      <section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <button type="submit" class="btn btn-block btn-success"> 
               <i class="glyphicon glyphicon-ok"></i> Alterar </button>
       </div>
       <div class="col-md-4"></div>
</section>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</form><?php }
}
