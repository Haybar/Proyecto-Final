<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> (title)</title>
	
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />  
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<style>
	.jumbotron2 {
    position: relative;
    background: #fff center center;
    width: 100%;
    height: 80px;
    background-size: cover;
    overflow: hidden;
	}

    .footer {
   position: button;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 55px;
   background-color: black;
   color: white;
   text-align: center;
	}
	</style>
</head>
<body>
<!-- ========================================================================================================================================================-->   

<div class="jumbotron2">
  <div class="container text-center">
    <h1> </h1>   
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Menu 1</a></li>
        <li><a href="#">menu 2</a></li>
        <li><a href="#">menu 3</a></li>
        <li><a href="#">menu 4</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=base_url('login')?>"><i class="fa fa-users"></i>login<span></span></a></li>
      </ul>
    </div>
  </div>
</nav>
