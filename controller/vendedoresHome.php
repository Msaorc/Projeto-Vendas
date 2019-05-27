<?php

$vendedoresTemplete = new Template();
$vendedores = new Vendedores();

if (isset($_POST['id'])){
    $vendedores->GetVendedoresVenda($_POST['id']);
    
    if ($vendedores->TotalDados() >= 1){
        echo '<div class="alert alert-sucess"> Vendedor com Venda realcionada, Verifique!! </div>';
        Rotas::Redirecionar(3, Rotas::get_VendedoresHome());
    }else
    {
        $vendedores->ExcluirVendedor($_POST['id']);
        Rotas::Redirecionar(0, Rotas::get_VendedoresHome());
    }
}

$vendedores->GetVendedores();
$vendedoresTemplete->assign('VOLTAR', Rotas::get_VendedoresHome());
$vendedoresTemplete->assign('LISTA_VENDEDORES', $vendedores->GetItens());
$vendedoresTemplete->assign('INSERIR_VENDEDOR', Rotas::get_Vendedores());
$vendedoresTemplete->assign('ALTERAR_VENDEDOR', Rotas::get_VendedorAlterar());

$vendedoresTemplete->display('vendedoresHome.tpl');

