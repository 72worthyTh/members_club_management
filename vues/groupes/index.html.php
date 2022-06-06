<div class="card">
<div class="card-header"><h1><?= $pagetitle?></h1></div>
<div class="card-body">

       <a href="index.php?controller=groupe&task=new" class="btn-success btn-sm float-right "> 
   <span class="  fa fa-plus "></span>
   </a>

<table class="table table-bordered table-striped">
    <thead>
<th>Nom du groupe</th>
<th>action</th>
    </thead>
    <tbody>
<?php foreach($groupe as  $group):?>
    <tr>
      <td><?= $group['nomgroupe']?></td>
    <td>
    <a href="index.php?controller=groupe&task=new&id=<?= $group['idg'] ?>" class="fas fa-edit w-25"></a>
    <a href="index.php?controller=groupe&task=delete&id=<?= $group['idg'] ?> " class="fas fa-trash w-25"></a>
    </td>
    </tr>
    <?php endforeach?>
    </tbody>

</table>
</div>
</div>