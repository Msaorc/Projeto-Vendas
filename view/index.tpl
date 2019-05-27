<!DOCTYPE html>

<html>
    <head>
        <title>{$TITULO_SITE}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/vendedores/vendedores.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/vendedores/vendedores.js" type="text/javascript"></script>
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>
    <body>
        
        <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="{$GET_TEMA}/imagens/logo5.png" alt=""> 
                       
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
                                <li><a href="{$GET_HOME}"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                               
                                <li><a href="{$GET_VENDEDORESHOME}"><i class="glyphicon glyphicon-user"></i> Vendedores </a> </li>
                                <li><a href="{$GET_VENDAHOME}"><i class="glyphicon glyphicon-shopping-cart"></i> Vendas </a> </li>
                                <li><a href="{$GET_EMAIL}" ><i class="glyphicon glyphicon-envelope"></i> Relatorio de Fechamento </a> </li>                             
                                
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
                    
                    <a href="{$GET_VENDEDORESHOME}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Vendedores</a> 
                    <a href="{$GET_VENDAHOME}" class="list-group-item"><i class="glyphicon glyphicon-menu-right"></i> Vendas </a> 
                    
                    <a href="{$GET_EMAIL}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Enviar Email de Fechamento</a>                     
                    
                </div><!--fim da list group-->              
                              
                </div> <!-- finm coluna esquerda -->  
                
                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                    <!-- MARCAO , ONDE COLOCAR AS PAGINAS PARA CADASTRO E MOSTRAR VALORES -->
                    {php}
                    Rotas::get_Pagina();                    
                    {/php}
                </div>  <!--fim coluna direita-->  
            
            </div>  
            </div><!-- fim DIV conteudo-->
            
            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <center>
                    <h4>{$TITULO_SITE}</h4>
                    <p> Marcos Augusto - Obrigado pela oportunidade</p>    
                </center>
            </div><!-- fim div rodape-->
           </div> <!-- fim do container geral -->
    </body>
</html>
