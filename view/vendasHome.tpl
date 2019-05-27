<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" 
      id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<ul class="breadcrumb">
    <li><a href="{$GET_VENDAS}"></i> Incluir </a></li>
</ul>   
<h2>Vendas:</h2>

<table border="1" class="table table-bordered">
                <thead>
                    <tr>
                        <th> ID Venda </th>
                        <th> Vendedor </th>
                        <th> Email </th>
                        <th> Total Venda </th>
                        <th> Total Comissão </th>
                        <th> Data Venda </th>
                        <th>  </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$PRO item=P}
                    <tr>
                        <td>{$P.id}</td>
                        <td>{$P.nome}</td>
                        <td>{$P.email}</td>
                        <td>{$P.valor_venda}</td>
                        <td>{$P.comissao}</td>
                        <td>{formatarData($P.data_venda)}</td>
                        <td> <form name="deletar" action="{$GET_VENDASHOME}" method="POST"> 
                                        <input type="hidden" name="id" value="{$P.id}" /> 
                                        <button type="submit" class="btn btn-danger btn-block "> 
                                        <i class="glyphicon glyphicon-ok"></i> Excluir </button>
                             </form>
                        </td>
                    </tr>  
                    {/foreach}
                </tbody>
</table>            