<h3>Realizar Venda:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Vendedor :</label>
            <select name="id_vendedor" class="form-control" required>
                  <option value="">Selecione um vendedor...</option>
                  {foreach from=$PRO item=P}
                    <option value="{$P.id}">{$P.nome}</option>
                    <!--
                    <option value="sa">Santo André</option>
                    <option value="sbc">São Bernardo do Campo</option>-->
                  {/foreach}
            </select>
        </div>
        <div class="col-md-4">
            <label>Valor Venda :</label>
            <input type="text" name="venda_valor" class="form-control"  minlength="3" required>
        </div>
</section>    
      <br>
      <br>
 <section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <button type="submit" class="btn btn-success btn-block "> 
               <i class="glyphicon glyphicon-ok"></i> Realizar Venda </button>
       </div>
       <div class="col-md-4"></div>
</section>
</form>