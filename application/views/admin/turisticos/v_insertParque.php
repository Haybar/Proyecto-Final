<div class="container">

<div class="app-title" >
      <div class="bs-component ">
              <ul class="nav nav-tabs ">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#home">INICIO</a></li>
                <li class="nav-item"><a class="nav-link"  href="<?php echo base_url(); ?>admin/insert">REGISTRAR USUARIO</a></li>                 
                <li class="nav-item"><a class="nav-link "  href="<?php echo base_url(); ?>admin/parque">LISTA DE USUARIO</a></li>                 
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">REPORTES</a></li>                 
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">VER CAMBIOS</a></li>                 
                  </div>
                </li>
              </ul>
               </div>

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

    <div class="row">
    <div class="col-12">
        <div class="panel panel-primary two">
            <div class="panel-heading">
                <center><b>REGISTRAR UBICACION DE LA INSTITUCION </b></center>
            </div>
            <div class="panel-body">
                <?php echo $map['html']; ?>
            </div>
        </div>
    </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="panel panel-primary two">
                <div class="panel-heading">
                   <h5> <center><b>LLENE LOS CAMPOS DEL PARQUE</b></center></h5>
                </div>
                <div class="panel-body">
                </div>
                </div>
                

                    <?php
                    //NOTIFIACIONES ERROR
                    echo validation_errors('<div class="alert alert-warnig">', '</div>');

                    //notificacion del login
                    if ($this->session->flashdata('sukses')) {
                        echo '<div class="alert alert-success">';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';
                    }
                    // cambiamo la direccion de base url por login   admin/inputsekolah
                    echo form_open(base_url('admin/insert'), 'class="form-horizontal" entype="multipart/formdata"');
                    ?>

                    <form class="form-horizontal">

                    <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Subscribe</h3>
            <div class="tile-body">
              <form class="row">
                             
                        <div class="form-group">
                        <div class="col-sm-6"><label for="">latitude</label>
                            <input type="text" name="latitude" class="form-control"  placeholder="latitude" value="<?php echo set_value('latitude') ?>" required >
                        </div>

                        <div class="form-group">
                        <div class="col-sm-6"><label for="">longitude</label>
                            <input type="text" name="longitude" class="form-control" placeholder="longitude" value="<?php echo set_value('longitude') ?>" required>
                        </div>
                        </div>
                        <div class="form-group col-6">
                  <label class="control-label">Descripcion Del Parque</label>
                     <textarea class="form-control" rows="4" placeholder="Enter your Texto" name="Par_descripccion"></textarea>
                </div>
                <div class="form-group col-6">
                  <label class="control-label">Direccio Del Parque</label>
                  <input type="text" class="form-control" name="Par_direccion" type="text" placeholder="Enter your email">
                </div>

                <div class="col-sm-6"><label for="">Par_horarioAtencion</label>
                            <input type="text" name="Par_horarioAtencion" class="form-control" placeholder="Par_horarioAtencion" value="<?php echo set_value('latitude') ?>" required>
                        </div>

                        <div class="form-group">
                        <div class="col-sm-6"><label for="">Par_precioIngreso</label>
                            <input type="text" name="Par_precioIngreso" class="form-control" placeholder="Par_precioIngreso" value="<?php echo set_value('longitude') ?>" required>
                        </div>
                      
                       <br>
                       <br>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary ">REGISTRAR </button>
                                <button type="submit" class="btn btn-success">LIMPIAR</button>
            </div>
            </div>

                    </form>
                    <?php echo form_close(); ?>
        </div>
    </div>

</div>
</div>
</div>

