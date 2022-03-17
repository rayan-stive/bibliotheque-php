<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Welcome to CodeIgniter</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/datatables/datatables.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('style/index.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('style/w3.css');?>">

</head>
<body>
	<div class="sidenav shadow">
        <div class="side-header">
            <h3 class="text-center"> <img src="assets/image/logo.jpg" class="w3-round" width="120" height="100" alt=""></h3>
        </div>
        <div class="navigation">
            <form class="search">
                <input type="text" placeholder="Taper ici pour rechercher..." id="exampleForm2" class="form-control">
            </form>
            <div class="title-main text-center">
                <h3><b>Menu de Navigation</b></h3>
            </div>
            <ul class="menu">
            <li>
            <a href="<?=site_url('Droit');?>">
                        <i class="fa fa-money"></i>
                        <span>DROIT</span>
                    </a>
                </li> 
                
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>REVUE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>LIVRE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>JOURNAL</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>MAGAZINE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-download"></i>
                        <span>MEMOIRE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>ENCYCLOPEDIE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>SCIENCES</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>ECONOMIE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>POLITIQUE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>LOI</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>DECISION</span>
                    </a>
                </li>

                
            </ul>
        </div>
    </div>
    <div class="main">
	<div class="w3-container w3-green">
  <h1 style="text-align:center">Bibliothèque Numérique</h1>
    </div>
    <div class="container" id="mena">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
				    <label class="control-label" for="search-input">Recherche</label>
				    <div class="input-group">
				        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
				        <input class="form-control" type="search" placeholder="" name="search-input" id="search-input" />
				    </div>
				</div>
				<span id="erreur" class="help-block"></span>
			</div>
		</div>
		<div class="row" id="content">
        
    	<div class="col-md-12">
        	<h5 class="concession">Catégorie</h5>
            <ul class="list-group">
    

                <li class="list-group-item">
                    <ul>
                        <div> <img src=""></div>
                    </ul>
                     <ul>
                        <li><span style="text-decoration:underline;">Titre :</span></li>
                        <li><span style="text-decoration:underline;">Catégorie:</span> </li> 
                        <li><span style="text-decoration:underline;">Auteur:</span> </li> 
                        <li><span style="text-decoration:underline;">Page:</span> </li> 
                    </ul>
                <li class="list-group-item"><a href="<?php ?>" class="btn btn-success" target="_blank">Consulter</a></li> 
            </li>
            </ul>
        </div>
    <div class="row" id="page" style="font-size:x-large;"><div class="col-md-12 text-center"></div></div>
    </div> 




 



	<!-- jquery -->
	<script type="text/javascript" src="<?=base_url('assets/jquery/jquery.min.js');?>"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- datatables -->
	<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

	<!-- custom js -->
	<script type="text/javascript" src="custom/js/home.js"></script>
    

</body>
</html>