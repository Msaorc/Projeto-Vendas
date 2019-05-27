<?php
/* Smarty version 3.1.33, created on 2019-05-27 20:51:59
  from 'C:\xampp\htdocs\provapratica\view\vendedoresHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec31cfad7fa4_92570403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f9db521d1d43f91f91af1ba1a0cd41978693d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\provapratica\\view\\vendedoresHome.tpl',
      1 => 1558982635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec31cfad7fa4_92570403 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" 
      id="bootstrap-css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>


<ul class="breadcrumb">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['INSERIR_VENDEDOR']->value;?>
"></i> Incluir </a></li>
</ul>   
    <h2>Vendedores:</h2>
    
    <table border="3" class="table table-bordered">
                <thead>
                    <tr >
                        <th> ID Vendedor</th>
                        <th> Nome </th>
                        <th> Email </th>
                        <th colspan="2"> Opções </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTA_VENDEDORES']->value, 'P');
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
                        <td>
                        <form name="deletar" action="<?php echo $_smarty_tpl->tpl_vars['ALTERAR_VENDEDOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
" method="POST"> 
                            <button type="submit" class="btn btn-warning btn-block "> 
                            <i class="glyphicon glyphicon-ok"></i> Alterar </button>
                        </form></td>
                        </td>
                        <td><form name="deletar" action="<?php echo $_smarty_tpl->tpl_vars['VOLTAR']->value;?>
" method="POST"> 
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
" /> 
                                <button type="submit" class="btn btn-danger btn-block "> 
                            <i class="glyphicon glyphicon-ok"></i> Excluir </button>
                        </form></td>
                    </tr>  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
</table>        
<?php }
}
