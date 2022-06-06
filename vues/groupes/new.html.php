

<?php
//edito
if(@$groupe){
  $id=$groupe['idg'];
  $nom=$groupe['nomgroupe'];
  $button='  <input type="submit" value="modifier" name="modifier" id="envoyer"class="btn btn-info">';
  $edit='   <input type="text" name="id" value=" '.$id.' "name="envoyer" id="envoyer"class="btn btn-info">';
  $action="index.php?controller=groupe&task=insert";
}else{
  $action="index.php?controller=groupe&task=insert";
   $button='  <input type="submit"  value="envoyer"name="envoyer" id="envoyer"class="btn btn-info">';
}
?>
<div class="card card-default">
          <div class="card-header">
            <h1>
          <?=$pagetitle?>
            </h1>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="POST" action="<?= $action ?>">
            <?php echo @$edit?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nomgroupe"value="<?= @$nom?>  " id="nomgroupe" class="form-control"placeholder="Nom groupe....">
              </div>
       
               
            </div>

            
          </div>

             <div class="form-group pull-right">
             <?= $button?>
              </div>    
            <!-- /.row -->
          </div>
     </form>

          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>