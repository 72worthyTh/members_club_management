<div class="card">
<div class="card-header"><h1><?= $pagetitle?></h1></div>
<div class="card-body">
<form action="index.php?controller=presence&task=new" method="POST">
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
  <form action="index.php?controller=presence&task=insert" method="post">
  <div class="col-md-4">
<input type="date" name="date" class="form-control" value="<?php echo date('d/m/Y') ?>">
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
<td> <input type="hidden" name="idmembre[]" value="<?= $m['idm']?>">
<td><?= $m['nomm']?></td>
<td><?= $m['prenom']?></td>
<td>
    <input type="radio" name="presence<?= $i ?>" value="present">
    <label>Present</label>
    <input type="radio" name="presence<?= $i ?>" value="absent">
    <label>Absent</label>

</td>
    </tr>
    <?php $i++; endforeach; } ?>
    </tbody>

</table>
<input type="submit" class="btn btn-info" value="save">
</form>
</div>
</div>