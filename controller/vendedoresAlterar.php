<?php

$smarty = new Template();
$vendedor = new Vendedores();

if (isset($_POST['vend_nome']) and isset($_POST['vend_email'])){
    $vend_nome = $_POST['vend_nome'];
    $vend_email = $_POST['vend_email'];
    
    $vendedor->PrepararVendedor($vend_nome, $vend_email);
    $vendedor->AlterarVendedor(Rotas::$pag[1]);
    
    echo '<div class="alert alert-sucess"> Vendedor alterado com Sucesso!! </div>';
    Rotas::Redirecionar(1, Rotas::get_VendedoresHome());
}

$vendedor->GetVendedorId(Rotas::$pag[1]);

$smarty->assign('VENDEDOR', $vendedor->GetItens());
$smarty->display('vendedorAlterar.tpl');
