<?php
$smarty = new Template();
$venda = new Venda();
$vendedor = new Vendedores();
$vendedor->GetVendedores();    
    
if (isset($_POST['id_vendedor']) and isset($_POST['venda_valor'])){
    $id_vendedor = $_POST['id_vendedor'];
    $valor_venda = $_POST['venda_valor'];    
    $comissao = $venda->gerarComissão($valor_venda);
    
    $venda->PrepararVenda($id_vendedor, $valor_venda, $comissao);
    $venda->RealizarVenda();
    
    echo '<div class="alert alert-sucess"> Venda efetuada com sucesso!! </div>';
    Rotas::Redirecionar(1, Rotas::get_VendaHome());
}

$smarty->assign('PRO', $vendedor->GetItens());
$smarty->assign('VENDA', 'VALORES DA PAGINA DE REALIZAR VENDA');

$smarty->display('vendas.tpl');




