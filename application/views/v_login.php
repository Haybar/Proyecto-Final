<?php include("header.php"); ?>



<div class="container">    
  <div class="row">
    <div class="col-sm-4 col-md-offset-4 ">
      <div class="panel panel-primary">
        <div class="panel-heading">login</div>
        <div class="panel-body">

        <?php
        //NOTIFIACIONES ERROR
        echo validation_errors('<div class="alert alert-warnig">','</div>');
        //NOTIFICACION

        if ($this->session->flashdata('warning')) {
                echo '<div class="alert alert-warning">';
                echo $this->session->flashdata('warning');
                echo '</div>';
        }
        //notificacion del login
        if($this->session->flashdata('sukses')){
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('sukses'); 
            echo '</div>';
        }
            // cambiamo la direccion de base url por login   admin/inputsekolah
        echo form_open(base_url('login'),'class="form-horizontal" entype="multipart/formdata"');
        ?>
        <!-- CREAMOS EL TEXBOX PARA EL USUARIO -->
        <div class="col-sm-12">
            <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" name="usuario" class="form-control" placeholder="usuario">
        </div>
       </div> 

       <!-- CREAMO EL PASSWORD PARA LA CONTRASEÑA -->
       <div class="col-sm-12">
            <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock "></i></span>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
       </div> 

       <!-- NUESTRO BOTON PARA REGISTRAR -->
       <div class="col-sm-12">
            <div class="form-group input-group">
            
            <button type="submit" class="btn btn-primary">Login</button>
            
        </div>
       </div> 

        <?php echo form_close(); ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>



<?php include("footer.php"); ?>