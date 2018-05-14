<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=neweditorial" class="btn btn-default"><i class='fa fa-th-list'></i> Nueva Editorial</a>
</div>
		<h1>Editores</h1>
<br>
		<?php

		$users = EditorialData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nome</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name; ?></td>
				<td style="width:130px;"><a href="index.php?view=editeditorial&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=deleditorial&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}?>
</table>
			<?php
		}else{
			echo "<p class='alert alert-danger'>Não ha editores</p>";
		}


		?>


	</div>
</div>