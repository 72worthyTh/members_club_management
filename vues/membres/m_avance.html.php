<div class="card">
<div class="card-header"><h1><?= $pagetitle?></h1></div>
<div class="card-body">
<form action="index.php?controller=membres&task=avance" method="POST">
   <div class="row">
   <div class="col-md-4">
   <div class="form-group">
   <label for="">Groupe</label>
   <select name="groupe" id="" class="form-control">
   <option value="">Choose groupe......</option>

   <?php foreach ($groupem as  $value) { ?>
     <option value="<?= $value['idg'] ?>"><?= $value['nomgroupe'] ?></option>
   <?php   } ?>
    
   </select>
   </div>
   </div>
   <div class="col-md-4">
   <div class="form-group">
   <label for="">Annee</label>
   <select name="anne" id="" class="form-control">
   <option value="">Choose year......</option>

   <?php foreach ($integrationn as  $value) { ?>
     <option value="<?= $value['anne'] ?>"><?= $value['anne'] ?></option>
   <?php   } ?>
    
   </select>
   </div>
   </div>
   
   </div>
   <div class="form-group">
   <input type="submit" class="btn btn-info" value="SEARCH">
   </div>
   </form>
  <form action="index.php?controller=membres&task=m_avance" method="post">
  <input type="hidden" name="idint" value="<?= @$idint ?>">
  <div class="col-md-4">
</div>
<table id="example2" class="table table-bordered table-striped">
    <thead>
<th>Nom</th>
<th>prenom</th>
<th>action</th>
    </thead>
    <tbody>

<?php 
if(isset($membres)){
$i=0; foreach($membres as  $m):?>
    <tr>
<td>
<input type="hidden" name="idint[]" value="<?= $m['idint']?>">
<?= $m['nomm'] ?></td>
<td><?= $m['prenom']?></td>
<td>
    <input type="checkbox" name="avance<?= $i ?>" value="<?= $m['idm']?>">
    <label>Avance</label>
</td>
    </tr>
    <?php $i++; endforeach; } ?>
    </tbody>

</table>
<div class="row">
   <div class="col-md-4">
   <div class="form-group">
   <label for="">Groupe</label>
   <select name="groupe" id="" class="form-control">
   <option value="">Choose groupe......</option>

   <?php foreach ($groupem as  $value) { ?>
     <option value="<?= $value['idg'] ?>"><?= $value['nomgroupe'] ?></option>
   <?php   } ?>
    
   </select>
   </div>
   </div>
   <div class="col-md-4">
   <div class="form-group">
   <label for="">Annee</label>
   <select name="anne" id="" class="form-control">
   <option value="">Choose year......</option>

   <?php foreach ($integrationn as  $value) { ?>
     <option value="<?= $value['anne'] ?>"><?= $value['anne'] ?></option>
   <?php   } ?>
    
   </select>
   </div>
   </div>
   
   </div>
<input type="submit" class="btn btn-info" value="save">
</form>
</div>
</div>