<?php
/* Smarty version 3.1.33, created on 2019-05-23 23:45:08
  from 'C:\xampp\htdocs\lojavirtual\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce71464bed8d5_30049458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd122cd9724384a88f4602e19c98e69f79cf8e2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojavirtual\\view\\index.tpl',
      1 => 1558647820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce71464bed8d5_30049458 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendedores/vendedores.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendedores/vendedores.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    </head>
    <body>
        
        <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/logo5.png" alt=""> 
                       
                </div>    
            
            </div><!-- fim da div topo -->
            
            <!-- começa a barra MENU-->
            <div class="row" id="barra-menu">
                
                <!--começa navBAR-->
                <nav class="navbar navbar-inverse">
                    
                    <!-- container navBAr-->
                    <div class="container">
                        <!-- header da navbar-->
                        <div class="navbar-header">
                           <!-- botao que mostra e esconde a navbar--> 
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                        </div><!--fim header navbar-->  
                        
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                               
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDEDORESHOME']->value;?>
"><i class="glyphicon glyphicon-user"></i> Vendedores </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDAHOME']->value;?>
"><i class="glyphicon glyphicon-shopping-cart"></i> Vendas </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_EMAIL']->value;?>
" ><i class="glyphicon glyphicon-envelope"></i> Relatorio de Fechamento </a> </li>                             
                                
                            </ul>                            
                         </div><!-- fim navbar collapse--> 
                    </div> <!--fim container navBar-->                    
                </nav><!-- fim da navBar-->     
            </div> <!-- fim barra menu--> 
            
            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo">
            
            <div class="container"> 
              
                <!-- coluna da esquerda -->
                <div class="col-md-2" id="lateral">
                    
                <div class="list-group">
                    <span class="list-group-item active"> Menu </span>
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDEDORESHOME']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Vendedores</a> 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDAHOME']->value;?>
" class="list-group-item"><i class="glyphicon glyphicon-menu-right"></i> Vendas </a> 
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_EMAIL']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Enviar Email de Fechamento</a>                     
                    
                </div><!--fim da list group-->              
                              
                </div> <!-- finm coluna esquerda -->  
                
                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                    <!-- MARCAO , ONDE COLOCAR AS PAGINAS PARA CADASTRO E MOSTRAR VALORES -->
                    <?php 
                    Rotas::get_Pagina();                    
                    ?>
                </div>  <!--fim coluna direita-->  
            
            </div>  
            </div><!-- fim DIV conteudo-->
            
            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <center>
                    <h4><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</h4>
                    <p> Marcos Augusto - Obrigado pela oportunidade</p>    
                </center>
            </div><!-- fim div rodape-->
           </div> <!-- fim do container geral -->
    </body>
</html>
<?php }
}
