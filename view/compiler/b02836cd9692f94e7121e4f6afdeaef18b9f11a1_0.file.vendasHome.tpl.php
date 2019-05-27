<?php
/* Smarty version 3.1.33, created on 2019-05-27 21:00:59
  from 'C:\xampp\htdocs\provapratica\view\vendasHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec33ebe48958_87338612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02836cd9692f94e7121e4f6afdeaef18b9f11a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\provapratica\\view\\vendasHome.tpl',
      1 => 1558982555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec33ebe48958_87338612 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" 
      id="bootstrap-css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>

<ul class="breadcrumb">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDAS']->value;?>
"></i> Incluir </a></li>
</ul>   
<h2>Vendas:</h2>

<table border="1" class="table table-bordered">
                <thead>
                    <tr>
                        <th> ID Venda </th>
                        <th> Vendedor </th>
                        <th> Email </th>
                        <th> Total Venda </th>
                        <th> Total Comissão </th>
                        <th> Data Venda </th>
                        <th>  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['valor_venda'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['comissao'];?>
</td>
                        <td><?php echo formatarData($_smarty_tpl->tpl_vars['P']->value['data_venda']);?>
</td>
                        <td> <form name="deletar" action="<?php echo $_smarty_tpl->tpl_vars['GET_VENDASHOME']->value;?>
" method="POST"> 
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
" /> 
                                        <button type="submit" class="btn btn-danger btn-block "> 
                                        <i class="glyphicon glyphicon-ok"></i> Excluir </button>
                             </form>
                        </td>
                    </tr>  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
</table>            <?php }
}
