<?php
$book = BookData::getById($_GET["id"]);
$categories = CategoryData::getAll();
$authors = AuthorData::getAll();
$editorials = EditorialData::getAll();

?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $book->title; ?> <small>Editar livro</small></h1>
<form class="form-horizontal" role="form" method="post" action="./?action=updatebook" id="addbook">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ISBN</label>
    <div class="col-lg-10">
      <input type="text" name="isbn" class="form-control" value="<?php echo $book->isbn; ?>" id="inputEmail1" placeholder="ISBN">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" name="title" required class="form-control" value="<?php echo $book->title; ?>" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Subtitulo</label>
    <div class="col-lg-10">
      <input type="text" name="subtitle" class="form-control" value="<?php echo $book->subtitle; ?>" id="inputEmail1" placeholder="Subtitulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descrição</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="description" placeholder="Descrição"><?php echo $book->description; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Num. Paginas</label>
    <div class="col-lg-4">
      <input type="text" name="n_pag" class="form-control" id="inputEmail1" value="<?php echo $book->n_pag; ?>" placeholder="Num. Paginas">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">A&ntilde;o</label>
    <div class="col-lg-4">
      <input type="text" name="year" class="form-control" id="inputEmail1" value="<?php echo $book->year; ?>" placeholder="A&ntilde;o">
    </div>

  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
    <div class="col-lg-10">
<select name="category_id" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($categories as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($book->category_id!=null && $book->category_id==$p->id){ echo "selecionar"; }?>><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Editora</label>
    <div class="col-lg-10">
<select name="editorial_id" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($editorials as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($book->editorial_id!=null && $book->editorial_id==$p->id){ echo "selecionar"; }?>><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Autor</label>
    <div class="col-lg-10">
<select name="author_id" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($authors as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($book->author_id!=null && $book->author_id==$p->id){ echo "selecionar"; }?>><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>






  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $book->id; ?>">
      <button type="submit" class="btn btn-success">Atualizar livro</button>
      <button type="reset" class="btn btn-default" id="clear">Limpar campos</button>
    </div>
  </div>
</form>

</div>
</div>
