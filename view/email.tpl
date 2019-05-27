<div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul" action="envio">
        <fieldset>
        <legend>Relatório de Fechamento:</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Vendedor: </label>  
          <div class="col-md-8">
              <select name="id_vendedor" class="form-control" required>
                  <option value="">Selecione um vendedor...</option>
                  {foreach from=$PRO item=P}
                    <option value="{$P.id}">{$P.nome}</option>
                    <!--
                    <option value="sa">Santo André</option>
                    <option value="sbc">São Bernardo do Campo</option>-->
                  {/foreach}
              </select>
          <!--<input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" /> -->
          <span class="help-block">help</span>  
          </div>
        </div>        
        <!-- Button -->
        <section class="row" id="btngravar">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-lg "> 
                Enviar Relatorio </button>
        </div>
        <div class="col-md-4"></div>
        </section>
        
        </fieldset>
        </form>
        
	</div>
</div>
