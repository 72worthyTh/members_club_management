

<?php
// $anne=date('Y');
//edito
// if(@$membres){
//   $id=$membres['idm'];
//   $nom=$membres['nomm'];
//   $prenom=$membres['prenom'];
//   $frais=$membres['frais_inscr'];
//   $role=$membres['role'];
//   $niveau=$membres['niveau'];
//   $sexe=$membres['sexe'];
//   $phone=$membres['telephone'];
//   $carteEt=$membres['num_etudiant'];
//   $adresse=$membres['adress'];
//   $photo=$membres['photo'];

//   $button='  <input type="submit" value="modifier" name="modifier" id="envoyer"class="btn btn-info">';
//   $edit='   <input type="text" name="id" value=" '.$id.' "name="envoyer" id="envoyer"class="btn btn-info">';
//   $action="index.php?controller=membres&task=insert";
// }else{
  $action="index.php?controller=user&task=insert";
 
  $button='  <input type="submit"  value="envoyer"name="envoyer" id="envoyer"class="btn btn-info">';
// }

?>
<div class="card card-default">
          <div class="card-header">
            <h1>
            
            <?= $pageTitle?>
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
            <?php //echo @$edit?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>nom</label>
                <input type="text" name="nom"value="" class="form-control" placeholder="Nom..">
              </div>
                <div class="form-group">
                <label>prenom</label>
                <input type="text" name="prenom"value=""class="form-control"placeholder="Prenom..">
              </div>
             <div class="form-group">
                 <label>Telephone</label>
                <input type="text" name="telephone"value="" class="form-control"placeholder="Telephone">
              </div>
              <div class="form-group">
                <label>Etat</label>
                <input type="text" name="etat" value=""class="form-control"placeholder="Etat">
              </div>
            
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" id="photo"class="form-control"placeholder="photo">
                <div>
                 <div class="form-group">
                    <label>Username</label>
                <input type="username" name="username" value=""class="form-control"placeholder="Enter your username">
              </div>
            
             <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value=""class="form-control"placeholder="Enter your password">
              </div>
              <div class="form-group">
                <label>Role</label>
                <input type="text" name="role" value=""class="form-control"placeholder="Role">
              </div>

             
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