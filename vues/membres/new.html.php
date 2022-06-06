

<?php
$anne=date('Y');
//edito
if(@$membres){
  $id=$membres['idm'];
  $nom=$membres['nomm'];
  $prenom=$membres['prenom'];
  $frais=$membres['frais_inscr'];
  $role=$membres['role'];
  $niveau=$membres['niveau'];
  $sexe=$membres['sexe'];
  $phone=$membres['telephone'];
  $carteEt=$membres['num_etudiant'];
  $adresse=$membres['adress'];
  $photo=$membres['photo'];

  $button='  <input type="submit" value="modifier" name="modifier" id="envoyer"class="btn btn-info">';
  $edit='   <input type="text" name="id" value=" '.$id.' "name="envoyer" id="envoyer"class="btn btn-info">';
  $action="index.php?controller=membres&task=insert";
}else{
  $action="index.php?controller=membres&task=insert";
 
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
            <form method="POST" action="<?= $action ?>" enctype="multipart/form-data">
            <?php echo @$edit?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>nom</label>
                <input type="text" name="nommembre"value="<?= @$nom?>  " id="nommebre" class="form-control" placeholder="Nom..">
              </div>
                            <div class="form-group">
                            <label>prenom</label>
                <input type="text" name="prenommembre"value="<?= @$prenom?>  " id="prenommebre"class="form-control"placeholder="Prenom..">
              </div>
                            <div class="form-group">
                            <label>frais_inscription</label>
                <input type="text" name="frais_inscr"value="<?= @$frais ?>  " id="frais_inscr"class="form-control"placeholder="Frais inscription...">
              </div>
                            <div class="form-group">
                            <label>Role</label>
                <select  class="form-control"name="role" id="">
                  <option value="">select...</option>
                  <option value="membre"   <?php if(@$role==='membre') echo'selected' ?>>membre</option>
                  <option value="formateur" <?php if(@$role==='formateur') echo'selected' ?>>formateur</option>
                </select>
              </div>
                            <div class="form-group">
                            <label>Groupe</label>
               <select class="form-control" name="niveau" id="">
                 <?php foreach($groupe as $group):
                 ?>
                 <option value="<?=$group['idg']?>" <?php if(@$niveau==$group['idg']) echo'selected' ?>  ><?=$group['nomgroupe']?></option>
                 <?php endforeach ?>
               </select>
              </div>
               
            </div>
            <div class="col-md-6">
                          <div class="form-group">
                          <label>Annee</label>
                <input type="number" name="anne" value="<?= @$anne?>  "id="anne"class="form-control"placeholder="anne">
              </div>
            
                          <div class="form-group">
                          <label>SEXE</label>
                <input type="text" name="sexe" value="<?= @$sexe?>  "id="sexe"class="form-control"placeholder="sexe">
              </div>
                      <div class="form-group">
                      <label>Telephone</label>
                <input type="text" name="telephone"value="<?= @$phone?>  " id="telephone"class="form-control"placeholder="telephone">
              </div>
                      <div class="form-group">
                      <label>Numero carte d'etudiant</label>
                <input type="text" name="numeroetu"value="<?= @$carteEt ?> " id="numeroetu"class="form-control"placeholder="Numero etudiant">
              </div>
                      <div class="form-group">
                      <label>Addresse</label>
                <input type="text" name="address" value="<?= @$adresse?>  "id="address"class="form-control"placeholder="Addresse">
              </div>
                      <div class="form-group">
                      <label>Photo</label>
                <input type="file" name="photo" id="photo"class="form-control"placeholder="photo">
                <div>
                <img src="images/<?= @$photo?>"  width="100px" height="120px" alt="" srcset="">
                </div>
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
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>