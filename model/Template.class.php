<?php

Class Template extends SmartyBC{
    function __construct(){
        parent:: __construct();
        
        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compiler/');
        $this->setCacheDir('view/cache/');
    }
}
