<?php

$smarty = new Template();
$vendedor = new Vendedores();

if (isset($_POST['vend_nome']) and isset($_POST['vend_email'])){
    $vend_nome = $_POST['vend_nome'];
    $vend_email = $_POST['vend_email'];
    
    $vendedor->PrepararVendedor($vend_nome, $vend_email);
    $vendedor->GravarVendedor();
    
    echo '<div class="alert alert-sucess"> Vendedor cadastrado com Sucesso!! </div>';
    Rotas::Redirecionar(1, Rotas::get_VendedoresHome());
}

$smarty->assign('VENDEDORES', 'VALORES DA PAGINA VENDEDORES');
$smarty->display('vendedores.tpl');

?>



