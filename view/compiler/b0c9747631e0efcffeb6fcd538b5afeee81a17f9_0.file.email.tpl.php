<?php
/* Smarty version 3.1.33, created on 2019-05-27 17:34:16
  from 'C:\xampp\htdocs\lojavirtual\view\email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec0378211198_77518471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c9747631e0efcffeb6fcd538b5afeee81a17f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojavirtual\\view\\email.tpl',
      1 => 1558971252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec0378211198_77518471 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul" action="envio">
        <fieldset>
        <legend>Relatório de Fechamento:</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Vendedor: </label>  
          <div class="col-md-8">
              <select name="id_vendedor" class="form-control input-md">
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
          <!--<input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" /> -->
          <span class="help-block">help</span>  
          </div>
        </div>        
        <!-- Button -->
        <section class="row" id="btngravar">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-lg "> 
                Enviar Relatorio </button>
        </div>
        <div class="col-md-4"></div>
        </section>
        
        </fieldset>
        </form>
        
	</div>
</div>
<?php }
}
