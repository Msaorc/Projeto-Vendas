<?php

Class Rotas{
    
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';


    static function get_SiteHome(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }
    
    static function get_Vendedores(){
        return self::get_SiteHome().'/vendedores';
    }
    
    static function get_VendedoresHome(){
        return self::get_SiteHome().'/vendedoresHome';
    }
    
    static function get_VendedorAlterar(){
        return self::get_SiteHome().'/vendedoresAlterar';
    }
    
    static function get_Email(){
        return self::get_SiteHome().'/email';
    }
    
    static function get_Venda(){
        return self::get_SiteHome().'/vendas';
    }
    
    static function get_VendaHome(){
        return self::get_SiteHome().'/vendasHome';
    }
    
    static function get_SiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
    }
    
    static function get_SiteTema(){
        return self::get_SiteHome().'/'.self::$pasta_view;
    }
    
    static function pag_Carrinho(){
        return self::get_SiteHome().'/carrinho';
    }


    static function get_pagina(){                
        if(isset($_GET['pag'])){
            
            $pagina = $_GET['pag'];            
            self::$pag = explode('/', $pagina);
            /*echo '<pre>';  
            var_dump(self::$pag);       
            echo '<pre>'; */            
            $pagina = 'controller/'.self::$pag[0].'.php';
            
            if (file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
    
    static function Redirecionar($tempo, $pagina){
	$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='. $pagina .'">';
	echo $url;
    }
}
