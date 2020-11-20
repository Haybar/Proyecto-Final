

<div class="app-title">
      <div class="bs-component">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#home">INICIO</a></li>
                <li class="nav-item"><a class="nav-link"  href="<?php echo base_url(); ?>admin/insert">REGISTRAR PARQUE</a></li>                 
                <li class="nav-item"><a class="nav-link "  href="<?php echo base_url(); ?>admin/parque">LISTA DE PARQUES</a></li>                 
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">REPORTES</a></li>                 
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">VER CAMBIOS</a></li>                 
                  </div>
                </li>
              </ul>
               </div>



<form action="<?=base_url()?>home/tambah" method="post" enctype="multipart/form-data">
<input type="submit" name="submit" value="REGISTRAR ESTUDIANTE" class="btn btn-default">
</form>

<table id="example" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
<thead>
<tr>
<th class="th-sm">Par_descripccion
</th>
<th class="th-sm">Par_direccion
</th>
<th class="th-sm">Par_horarioAtencion
</th>
<th class="th-sm">Par_precioIngreso
</th>
<th class="th-sm">EDITAR
</th>
</tr>
</thead>
<tbody>

<?php
$indice=1;
foreach ($data as $data)  {
?>
<tr>

<td><?php echo $data->Par_descripccion; ?></td>
<td><?php echo $data->Par_direccion; ?></td>
<td><?php echo $data->Par_horarioAtencion; ?></td>
<td><?php echo $data->Par_precioIngreso; ?></td>


<td> <?php echo form_open_multipart('admin/EliminarParque'); ?>
<button type="submit" class="btn  btn-danger btn-sm" type="button" onclick="return confirm('desea eliminar')"><i class="fa fa-trash-o"></i>eliminar</button>
<input type="hidden" name="idParque" value="<?php echo $data->idParque; ?>"></input>
<?php echo form_close(); ?></td>
<td>
<a href="<?=base_url()?>admin/updateInsti/<?=$data->idParque?>" class="btn btn-info" role="button">Editar</a>
</td>
</tr>
<?php
$indice++;
}
?>
</tbody>

</table>