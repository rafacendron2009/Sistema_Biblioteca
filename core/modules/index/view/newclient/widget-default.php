<div class="row">
	<div class="col-md-12">
	<h1>Novo Cliente</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=addclient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nome*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nome">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sobrenome</label>
    <div class="col-md-6">
      <input type="text" name="lastname"  class="form-control" id="lastname" placeholder="Sebrenome">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Endereço</label>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="address" placeholder="Endereço">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefone*</label>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefone">
    </div>
  </div>
  <p class="alert alert-info">* Campos obrigatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Adicionar Cliente</button>
    </div>
  </div>
</form>
	</div>
</div>