<?php

require './lib/autoload.php';

$smarty = new Template();
//Valores para utilizar dentro do template, pareciso com o strings do android;
$smarty->assign('NOME', 'MARCOS AUGUSTO PINTO');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('GET_VENDEDORESHOME', Rotas::get_VendedoresHome());
$smarty->assign('GET_EMAIL', Rotas::get_Email());
$smarty->assign('GET_VENDAHOME', Rotas::get_VendaHome());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

// Metodo utilizado para carregar o template;
$smarty->display('index.tpl');



