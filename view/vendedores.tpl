<h3>Cadastro de Vendedores:</h3>
<!--- dados do cadastro -->

<hr>
 <form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro">
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" name="vend_nome" class="form-control" minlength="3" required>
        </div>
        <div class="col-md-4">
            <label>Email:</label>
            <input type="text" name="vend_email" class="form-control"  minlength="3" required>
        </div>
</section>
      <br>
      <br>
<section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <button type="submit" class="btn btn-success btn-block "> 
               <i class="glyphicon glyphicon-ok"></i> Gravar </button>
       </div>
       <div class="col-md-4"></div>
</section>
</form>