{foreach from=$VENDEDOR item=V}
<h3>Vendedor:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" name="vend_nome" class="form-control" minlength="3" required 
            value="{$V.nome}">
        </div>
        <div class="col-md-4">
            <label>Email:</label>
            <input type="text" name="vend_email" class="form-control"  minlength="3" required
            value="{$V.email}">
        </div>
</section>
      <br>
      <br>
      <section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <button type="submit" class="btn btn-block btn-success"> 
               <i class="glyphicon glyphicon-ok"></i> Alterar </button>
       </div>
       <div class="col-md-4"></div>
</section>
{/foreach}
</form>