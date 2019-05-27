<?php

$emailTemplete = new Template();
$vendedores = new Vendedores();
$vendedores->GetVendedores();

$emailTemplete->assign('PRO', $vendedores->GetItens());

$emailTemplete->display('email.tpl');
        


