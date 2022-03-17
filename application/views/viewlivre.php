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
    <script type="text/javascript" src="<?=base_url('assets/jquery/jquery.min.js');?>"></script>
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
    
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
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>Enregistrement</span>
                    </a>
                </li>
				<li>
                    <a href="">
                        <i class="fa fa-money"></i>
                        <span>Statistique</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-download"></i>
                        <span>Paramétre compte</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
      
    <!-- Page content -->
    <div class="main">
	<div class="w3-container w3-green">
  <h1 style="text-align:center">Bibliothèque Numérique</h1>
    </div>
        <div class="container-fluid contenu">
        <div class="container">
		<div class="page-header">
		  <center><h1><small>INSERER LIVRE</small></h1></center>
		</div>

		<div class="messages"></div>

		<button class="btn btn-success pull pull-left" data-toggle="modal" data-target="#addMember" onclick="">
			Ajouter Livre
		</button>

		<br/> <br/>

		<table class="table table-bordered" id="">
			<thead>
				<tr>
					<th>Titre</th>
					<th>Categorie</th>
					<th>Auteur</th>
					<th>Edition</th>
					<th>Adresse</th>
					<th>Collection</th>
					<th>Note</th>
					<th>ISBN</th>
					<th>Page</th>
					<th>Image</th>
					<th>Fichier</th>
					<th>Options</th>
				</tr>
			</thead>
            <tbody id="showdata" name="showdata" class="">
    					
    		</tbody>
		</table>
	</div>

	<!-- add member -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" align="center">Ajouter Livre</h4>
      </div>
      <form method="post" action="" id="Forme" enctype="multipart/form-data">
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
			    <input type="text" class="form-control" id="CatLivre" name="CatLivre" placeholder="Catégorie">
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
			    <label for="AdresseLiv">AdresseLiv</label>
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
			    <label for="PageLiv">Page</label>
			    <input type="text" class="form-control" id="PageLiv" name="PageLiv" placeholder="Page">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			   <div class="form-group">
			    <label for="ImageLivre">Select Image</label>
			    <input type="text" class="form-control" id="ImageLivre" name="ImageLivre" placeholder="Image">
			  </div>
			  </div>
			  <div class="col-sm-6"> 
			   <div class="form-group">
			    <label for="NumeLivre">version num</label>
			    <input type="text" class="form-control" id="NumeLivre" name="NumeLivre" placeholder="numerique">
			  </div>
			  </div>
			</div> 	
        </div>
      <div class="modal-footer">
      <button class="btn btn-success btn-block" id="btnSave"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>ENREGISTRER</button><br>
                <button type="reset" class="btn btn-danger btn-block" id="btnAnnule"><span class="glyphicon glyphicon-refresh">&nbsp;&nbsp;</span>ANNULER</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- /add mmebers -->

	<!-- edit member -->
	
	<!-- /edit mmebers -->

<!-- removeMember -->
<script type="text/javascript">
        $(document).ready(function() {
	
        //function
        function showAllLivre(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Livre/showAllLivre',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                                    '<td>'+data[i].TitreLiv+'</td>'+
                                    '<td>'+data[i].CatLivre+'</td>'+
                                    '<td>'+data[i].AuteurLiv+'</td>'+
                                    '<td>'+data[i].EditionLiv+'</td>'+
                                    '<td>'+data[i].AdresseLiv+'</td>'+
                                    '<td>'+data[i].CollectionLiv+'</td>'+
                                    '<td>'+data[i].NoteLiv+'</td>'+
                                    '<td>'+data[i].NumIsbn+'</td>'+
                                    '<td>'+data[i].PageLiv+'</td>'+
                                    '<td>'+data[i].ImageLivre+'</td>'+
                                    '<td>'+data[i].NumeLivre+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data-TitreLiv="'+data[i].TitreLiv+'" data-CatLivre="'+data[i].CatLivre+'" data-AuteurLiv="'+data[i].AuteurLiv+'" data-EditionLiv="'+data[i].EditionLiv+'" data-AdresseLiv="'+data[i].AdresseLiv+'" data-CollectionLiv="'+data[i].CollectionLiv+'" data-NoteLiv="'+data[i].NoteLiv+'" data-NumIsbn="'+data[i].NumIsbn+'" data-PageLiv="'+data[i].PageLiv+'" data-ImageLivre="'+data[i].ImageLivre+'" data-NumeLivre="'+data[i].NumeLivre+'"   id="btnEdit"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete" id="btnDelete" data-nif="'+data[i].nif+'"><span class="glyphicon glyphicon-remove"></span></a>'+
                                    '</td>'+
                                '</tr>';
                    }

                    $('#showdata').html(html);
                },
                error: function(){
                    alert('Il y a une erreur');
                }
            });
        }

        showAllLivre();


        function addLivre(){
            var data = $('#forme').serialize();
            var notif = "";
            notif = "Enregistrement réussi avec succès";
                $.ajax({
                    type: 'ajax',
                    method: 'POST',
                    url: '<?php echo base_url() ?>Livre/addLivre',
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                            showAllLivre();
                            swal("Successful", notif, "success");
                    },
                    error: function(){
                        alert('Il y a une erreur');
                    }
                });
        }
        $(document).on("click", "#btnSave", function(){ 
            addLivre();
        });

        
    });
    

    </script>



	<!-- jquery -->
	
	<!-- bootstrap js -->
	
	<!-- datatables -->
	

	<!-- custom js -->
	

</body>
</html>