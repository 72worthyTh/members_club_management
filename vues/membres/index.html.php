<div class="card">
<div class="card-header"><h1><?= $pagetitle?></h1></div>
<div class="card-body">

       <a href="index.php?controller=membres&task=new" class="btn-success btn-sm float-right "> 
   <span class="  fa fa-plus "></span>
   </a>
   <form action="index.php?controller=membres&task=index" method="POST">
   <div class="row">
   <div class="col-md-4">
   <div class="form-group">
   <label for="">Groupe</label>
   <select name="groupes" id="element" onchange="getelement()" class="form-control">
   <option value="">Choose Groupe......</option>

   <?php foreach ($groupem as  $value) { ?>
     <option value="<?= $value['idg'] ?>"><?= $value['nomgroupe'] ?></option>
   <?php   } ?>
    
   </select>
   </div>
   </div>
   <div class="col-md-4">
   <div class="form-group">
   <label for="">Annee</label>
   <select name="annes"  class="form-control">
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

<table id="example1" class="table table-bordered table-striped">
    <thead>
<th>Nom</th>
<th>prenom</th>
<th>frais</th>
<th>role</th>
<th>photo</th>
<th>action</th>
    </thead>
    <tbody>
<?php 
if (isset($membres)) {
 foreach($membres as $m):?>

    <tr >
<td><?= $m['nomm']?></td>
<td><?= $m['prenom']?></td>
<td><?= $m['frais_inscr']?></td>
<td><?= $m['role']?></td>
<td><img src="images/<?= $m['photo']?>" class="img-circle"  width="50px " heigh="30px"talt="" srcset=""></td>
<td>
    <a href="index.php?controller=membres&task=new&id=<?=$m['idm'] ?>" class="fas fa-edit w-25"></a>
    <a href="index.php?controller=membres&task=delete&id=<?= $m['idm'] ?> " class="fas fa-trash w-25"></a>
</td>
    </tr>
<?php endforeach; } ?>
    </tbody>

</table>
</div>
</div>
<script>
// alert("hello")
 function getelement(){ 
   var el=$("#element").val()
     alert(el)
 }
</script>