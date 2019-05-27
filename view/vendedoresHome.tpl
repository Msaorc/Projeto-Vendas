<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" 
      id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<ul class="breadcrumb">
    <li><a href="{$INSERIR_VENDEDOR}"></i> Incluir </a></li>
</ul>   
    <h2>Vendedores:</h2>
    
    <table border="3" class="table table-bordered">
                <thead>
                    <tr >
                        <th> ID Vendedor</th>
                        <th> Nome </th>
                        <th> Email </th>
                        <th colspan="2"> Opções </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$LISTA_VENDEDORES item=P}
                    <tr>
                        <td>{$P.id}</td>
                        <td>{$P.nome}</td>
                        <td>{$P.email}</td>
                        <td>
                        <form name="deletar" action="{$ALTERAR_VENDEDOR}/{$P.id}" method="POST"> 
                            <button type="submit" class="btn btn-warning btn-block "> 
                            <i class="glyphicon glyphicon-ok"></i> Alterar </button>
                        </form></td>
                        </td>
                        <td><form name="deletar" action="{$VOLTAR}" method="POST"> 
                                <input type="hidden" name="id" value="{$P.id}" /> 
                                <button type="submit" class="btn btn-danger btn-block "> 
                            <i class="glyphicon glyphicon-ok"></i> Excluir </button>
                        </form></td>
                    </tr>  
                    {/foreach}
                </tbody>
</table>        
