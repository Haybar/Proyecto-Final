<div class="container">


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

<?php echo $map['js']; ?>


<style> 
#formWrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100px;
  
       
      
  
}

textarea {
    height: 150px;
  transform-origin: 50% left;
    -webkit-transition: .35s ease-out;
    -moz-transition: .35s ease-out;
    -o-transition: .35s ease-out;
    transition: .35s ease-out;
}

textarea:focus {
 height: 150px;
}
</style>

<?php echo $map['js']; ?>




    <div class="col-sm-12">
        <div class="panel panel-primary two">
            <div class="panel-heading">
                <center><b>MODIFICAR  UBICACION DE LA INSTITUCIONs</b></center><br>
            </div>
            <div class="panel-body">
                <?php echo $map['html']; ?>
                <div class="form-group">
                        <div class=" col-sm-6 " ><label for=""> <b>LACTITUD</b></label>
                            <input type="text"  readonly="" name="latitude" class="form-control" placeholder="latitude" value="<?php echo $institucion->latitude; ?> " require>
                            </div>


                            <div class="col-sm-6"><label for=""><b>LONGITUD</b></label>
                            <input type="text" readonly=""  name="longitude" class="form-control" placeholder="longitude" value="<?php echo $institucion->longitude; ?>"   require>
                        </div>  </div>  
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">


            <div class="panel panel-primary two">
                <div class="panel-heading">
                    <center><b>MODIFICAR PARQUE</b></center>
                </div>
                <div class="panel-body">

                <?php 
         //NOTIFIACIONES ERROR
         echo validation_errors('<div class="alert alert-warnig">','</div>');
    
         //notificacion del login
         if($this->session->flashdata('sukses')){
             echo '<div class="alert alert-warning">';
             echo $this->session->flashdata('sukses'); 
             echo '</div>';
         }
        // para hacer el update cambiar esta direccion
        echo form_open(base_url('Admin/updateInsti/' .$institucion->idParque),'class="form-horizontal" entype="multipart/formdata"');
        ?>
<!-- -->

<form class="form-horizontal">
                      
                        <div class="form-group">
                            <div class="col-sm-6"> <label for="">Nombre Institucion</label>
                                <input type="text" name="Par_descripccion" class="form-control" placeholder="nombre" value="<?php echo $institucion->Par_descripccion; ?> ">
                            </div>



                            <div class="col-sm-6"><label for="">Nro Ficha</label>
                                <input type="text" name="Par_direccion" class="form-control" placeholder="Par_direccion" value="<?php echo $institucion->Par_direccion; ?> " >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6"><label for=""> Direccion</label>
                                <input type="text" name="Par_horarioAtencion" class="form-control" placeholder="Par_horarioAtencion" value="<?php echo $institucion->Par_horarioAtencion; ?> " >
                            </div>
                            <div class="col-sm-6"><label for="">Distrito</label>
                                <input type="text" name="Par_precioIngreso" class="form-control" placeholder="Par_precioIngreso" value="<?php echo $institucion->Par_precioIngreso; ?> " >
                            </div>
                        </div>

                       


                      




                      


                       
                       

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary ">MODIFICAR </button>
                                <button type="submit" class="btn btn-success">LIMPIAR</button>
            </div>
            </div>

                    </form>
                   
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>



