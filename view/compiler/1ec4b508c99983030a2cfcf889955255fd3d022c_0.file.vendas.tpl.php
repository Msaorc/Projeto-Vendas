<?php
/* Smarty version 3.1.33, created on 2019-05-27 19:46:21
  from 'C:\xampp\htdocs\provapratica\view\vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec226df2b3f1_46793241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec4b508c99983030a2cfcf889955255fd3d022c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\provapratica\\view\\vendas.tpl',
      1 => 1558979176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec226df2b3f1_46793241 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Realizar Venda:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Vendedor :</label>
            <select name="id_vendedor" class="form-control" required>
                  <option value="">Selecione um vendedor...</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</option>
                    <!--
                    <option value="sa">Santo André</option>
                    <option value="sbc">São Bernardo do Campo</option>-->
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col-md-4">
            <label>Valor Venda :</label>
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
