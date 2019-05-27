<?php

function formatarData($data){
$array = explode("-", $data);
return $array[2]."/".$array[1]."/".$array[0];

}

$vendaTemplate = new Template();
$venda = new Venda();

if (isset($_POST['id'])){
    $venda->ExcluirVenda($_POST['id']);
}

$venda->GetVendas();
$vendaTemplate->assign('GET_VENDAS', Rotas::get_Venda());
$vendaTemplate->assign('GET_VENDASHOME', Rotas::get_VendaHome());
$vendaTemplate->assign('PRO', $venda->GetItens());
$vendaTemplate->display('vendasHome.tpl');



