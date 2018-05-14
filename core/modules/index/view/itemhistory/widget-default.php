<?php
$item = ItemData::getById($_GET["id"]);
$book = $item->getBook();
?>
<div class="row">
	<div class="col-md-12">
		<h1><i class='fa fa-clock-o'></i> <?php echo $item->code." - ".$book->title; ?> </h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="itemhistory">
<input type="hidden" name="id" value="<?php echo $item->id; ?>">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">INICIO</span>
		  <input type="date" name="start_at" required value="<?php if(isset($_GET["start_at"]) && $_GET["start_at"]!=""){ echo $_GET["start_at"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FIM</span>
		  <input type="date" name="finish_at" required value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){ echo $_GET["finish_at"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block">Processar</button>
    </div>

  </div>
</form>
<?php
$products = array();
if(isset($_GET["start_at"]) && $_GET["start_at"]!="" && isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){
if($_GET["start_at"]<$_GET["finish_at"]){
$products = OperationData::getAllByItemIdAndRange($item->id,$_GET["start_at"],$_GET["finish_at"]);
}
}else{
$products = OperationData::getAllByItemId($item->id);

}
if(count($products)>0){
?>
<br>
<table class="table table-bordered table-hover	">
	<thead>
		<th>Exemplar</th>
		<th>Livro</th>
		<th>Cliente</th>
		<th>Inicio</th>
		<th>Fim</th>
		<th>Voltar</th>
	</thead>
	<?php foreach($products as $sell):
$item = $sell->getItem();
$book = $item->getBook();
$client = $sell->getClient();
	?>
	<tr>
		<td style="width:30px;">
		<?php echo $item->code; ?>
		</td>
		<td>
		<?php echo $book->title; ?>
		</td>
		<td>
		<?php echo $client->name." ".$client->lastname; ?>
		</td>
		<td><?php echo $sell->start_at; ?></td>
		<td><?php echo $sell->finish_at; ?></td>
		<td><?php echo $sell->returned_at; ?></td>
	</tr>
<?php endforeach; ?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<p class="alert alert-danger">Não ha emprestimos</p>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>