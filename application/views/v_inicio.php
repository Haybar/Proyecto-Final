<!-- Hero Section end -->
<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">
						<h1>Inicia tu aventura</h1>
						<p>Recorre la ciudad mas bella de Bolivia de la manera mas sencilla y comoda</p>
						<!--<a href="#" class="site-btn sb-dark">Find out more</a>-->
					</div>
				</div>

				<div class="col-lg-6">
					<div class="container-form">
						<form class="llajta-form" method="POST" action="login.php">
							<img src="<?php echo base_url();?>assets/Llajta/img/logoBC.png" class="logo" alt="">
							<input type="usuario" name="Login" placeholder="&#xf2bd; Usuario">
          					<input type="password" name="Password" placeholder="&#xf023; Contraseña">
          					<input type="submit" class="btn" name="ingresar" value="&#xf090; Ingresar">
          					<h5>¿Olvido su contraseña? &nbsp;<a class="link" href=" <?php echo base_url();?>assets/Llajta/registrarUsuario.php">&nbsp;Click Aqui&nbsp;</a></h5>
          					<?php ?>
          				</form>
          				<form class="llajta-form-reg" method="POST" action="registrarUsuario.php">
          					<input type="submit" class="btn" name="registrarse" value="&#xf064; Registrarse">
          					<button type="button" class="btn btn-outline-light"><i class="fab fa-google"></i>&nbsp;Gmail</button>
          					<button type="button" class="btn btn-outline-light"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url();?>assets/Llajta/img/hero-slider/cochabamba.jpg"></div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url();?>assets/Llajta/img/hero-slider/alalay1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url();?>assets/Llajta/img/hero-slider/Angostura.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->