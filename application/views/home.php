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
	<link rel="stylesheet" type="text/css" href="<?=base_url('style/style1.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('style/w3.css');?>">
	<link rel="stylesheet" type="text/css" href="">
	<link href="<?php echo base_url();?>assets/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>assets/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->

</head>
<body>
<div class="" id="main">
		<nav>
			<img src="<?=base_url('assets/image/logo.jpg');?>" style="
			 width:90px ;margin-left:10px;border-radius:5px;height: 70px;position: absolute;top: 5px;" class="">
			 <ul style="position:absolute;">
				<li style="font-size: 20px;"><b><font color="white">Bibliothèque Numérique</font></b></li>
			    <li><a href="<?=base_url('welcome');?>">Ajouter Livre</a></li>
				<li><a href="<?=base_url('user_c');?>">Paramètre d'utilisateur </a></li>
				<li><a href="<?=base_url('c_chart');?>">Statistique</a></li>
                <button type="button" class="btn btn-danger" style="margin-top:-160px;margin-left:120%;"><span class="glyphicon glyphicon-off"></span><a href="<?=base_url('Login/Logout');?>">Deconnexion</a></button>
			</ul>
	    </nav>
	</div>
    <div class="container">
		<div class="page-header">
		  <center><h1><small>INSERER LIVRE</small></h1></center>
		</div>

		<div class="messages"></div>
        
		<button class="btn btn-success pull pull-left" data-toggle="modal" data-target="#addMember" onclick="addMemberModel()">
			Ajouter Livre
		</button>
		<div>
		<button class="btn btn-success pull pull-right" data-toggle="modal" data-target="#addCategorie" onclick="addMemberModel()">
			Ajouter Catégorie
		</button>
        </div>
		<br/><br/>
     <div>
		<table class="table table-bordered" id="manageMemberTable">
			<thead>
				<tr>
					<th>Titre</th>
					<th>Catégorie</th>
					<th>Auteur</th>
					<th>Edition</th>
					<th>Adresse</th>
					<th>Collection</th>
					<th>Note</th>
					<th>ISBN</th>
					<th>Page</th>
					<th>Fichier</th>
					<th>Options</th>
				</tr>
			</thead>
		</table>
	</div>

	<!-- add member -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:center">Formulaire</h4>
      </div>
	  
      <form method="post" action="index.php/welcome/create" id="createForm" enctype="multipart/form-data">
      <div class="modal-body">
		  <div class="row"> 
			  <div class="col-sm-6">     
			  <div class="form-group">
			    <label for="TitreLiv">Titre </label>
			    <input type="text" class="form-control" id="TitreLiv" name="TitreLiv" placeholder="Titre livre">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			  <div class="form-group">
			    <label for="CatLivre">Catégorie</label>
			    <select  class="form-control" id="CatLivre" name="IdCat" placeholder="Catégorie">
				</select>
			  </div>
			  </div>
			  <div class="col-sm-6"> 	
			  <div class="form-group">
			    <label for="AuteurLiv">Auteur </label>
			    <input type="text" class="form-control" id="AuteurLiv" name="AuteurLiv" placeholder="Auteur">
			  </div>
			  </div>
			  <div class="col-sm-6"> 	
			  <div class="form-group">
			    <label for="EditionLiv">Edition </label>
			    <input type="text" class="form-control" id="EditionLiv" name="EditionLiv" placeholder="Edition">
			  </div>
			  </div>	
			  <div class="col-sm-6"> 
			  <div class="form-group">
			    <label for="AdresseLiv">Adresse</label>
			    <input type="text" class="form-control" id="AdresseLiv" name="AdresseLiv" placeholder="Adresse">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			  <div class="form-group">
			    <label for="CollectionLiv">Collection</label>
			    <input type="text" class="form-control" id="CollectionLiv" name="CollectionLiv" placeholder="Collection">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			  <div class="form-group">
			    <label for="NoteLiv">Note</label>
			    <input type="text" class="form-control" id="NoteLiv" name="NoteLiv" placeholder="Note">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			   <div class="form-group">
			    <label for="NumIsbn">ISBN</label>
			    <input type="text" class="form-control" id="NumIsbn" name="NumIsbn" placeholder="ISBN">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			   <div class="form-group">
			    <label for="PageLiv">Pages</label>
			    <input type="text" class="form-control" id="PageLiv" name="PageLiv" placeholder="Page">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			   <div class="form-group">
			    <label for="ImageLivre">Fichier</label>
			    <input type="file" id="ImageLivre" name="ImageLivre" value="image">
			  </div>
			  </div>
			  <div class="col-sm-12"> 
			   <div class="form-group">
			    <label for="Resume">Resumer</label>
			    <textarea  id="Resume" name="Resume" class="form-control" placeholder=""></textarea>
			  </div>
			  </div>
			</div> 	
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <input type="submit" class="btn btn-primary" value="Enregister"/>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- /add mmebers -->

	<!-- edit member -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
	<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modifier Livre</h4>
      </div>
      <form method="post" action="index.php/welcome/edit" id="editForm">
      <div class="modal-body">  
	   <div class="row"> 
			  <div class="col-sm-6">     
			  <div class="form-group">
			    <label for="editTitreLiv">Titre </label>
			    <input type="text" class="form-control" id="editTitreLiv" name="editTitreLiv" placeholder="Titre livre">
			  </div>
			  </div>
			  <div class="col-sm-6"> 	
			  <div class="form-group">
			    <label for="editAuteurLiv">Auteur </label>
			    <input type="text" class="form-control" id="editAuteurLiv" name="editAuteurLiv" placeholder="Auteur">
			  </div>
			  </div>
			  <div class="col-sm-6"> 	
			  <div class="form-group">
			    <label for="editEditionLiv">Edition </label>
			    <input type="text" class="form-control" id="editEditionLiv" name="editEditionLiv" placeholder="Edition">
			  </div>
			  </div>	
			  <div class="col-sm-6"> 
			  <div class="form-group">
			    <label for="editAdresseLiv">AdresseLiv</label>
			    <input type="text" class="form-control" id="editAdresseLiv" name="editAdresseLiv" placeholder="Adresse">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			  <div class="form-group">
			    <label for="editResume">Resume</label>
			    <textarea  id="editResume" name="editResume" class="form-control" placeholder=""></textarea>
			  </div>
			  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
	  </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal 
	
	<!-- /edit mmebers -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addCategorie">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" align="center">Ajouter Catégorie</h4>
      </div>
      <form method="post" action="index.php/welcome/ajoutCategorie" id="createForm" enctype="multipart/form-data">
      <div class="modal-body">
		  <div class="row"> 
			  <div class="col-sm-6">     
			  <div class="form-group">
			    <label for="NomCat">Catégorie </label>
				
			    <input type="text" class="form-control" id="NomCat" name="NomCat" placeholder="Catégorie">
			  </div>
			  </div>
			</div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <input type="submit" class="btn btn-primary" value="Enregistrer"/>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!-- removeMember -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Etes vous sur supprimer?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="button" id="removeMemberBtn" class="btn btn-primary">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- removeMember -->
   </div>

	
	






	<!-- jquery -->
	<script type="text/javascript" src="<?=base_url('assets/jquery/jquery.min.js');?>"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<!-- datatables -->
	<script type="text/javascript" src="<?=base_url('assets/datatables/datatables.min.js');?>"></script>

	<!-- custom js -->
	<script type="text/javascript" src="custom/js/home.js"></script>
    <script>
	 $(document).ready(function(){
		//function
		showAllLivre();
        function showAllLivre(){
            $.ajax({
                type: 'ajax',
                url: 'http://localhost/biblio/index.php/welcome/getAllLivre',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
						html +='<option value = "'+data[i].IdCat+'">'+data[i].NomCat+'</option>';
                    }

                    $('#CatLivre').html(html);
                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
		}
	})
	</script>
</body>
</html>