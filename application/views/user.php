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
<div class="menu" id="main">
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
  <center><h1> <small>Liste des membres</small></h1></center>
</div>

<div class="messages"></div>

<button class="btn btn-default pull pull-left" data-toggle="modal" data-target="#addMember" onclick="">
  Créer Compte
</button>

<br /> <br />
<div class="w3-card-4">
<table class="table table-bordered" id="table">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th>Mot de passe</th>
      <th>Types</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody id="showdata" name="showdata" class="">
    					
	</tbody>
</table>
</div>
</div>

<!-- add member -->
<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" style="text-align:center">Ajouter</h4>
  </div>
  <form method="post" action="" id="forme">
  <div class="modal-body">        
    <div class="form-group">
      <label for="NomMemb">Nom </label>
      <input type="text" class="form-control" id="NomMemb" name="NomMemb" placeholder="nom">
    </div>
    <div class="form-group">
      <label for="PrenomMemb">Prenom</label>
      <input type="text" class="form-control" id="PrenomMemb" name="PrenomMemb" placeholder="Prenom">
    </div>	
    <div class="form-group">
      <label for="EmailMemb">E mail</label>
      <input type="email" class="form-control" id="EmailMemb" name="EmailMemb" placeholder="email">
    </div>	
    <div class="form-group">
      <label for="MotPass">Mot de Passe </label>
      <input type="text" class="form-control" id="MotPass" name="MotPass" placeholder="Mot de passe">
    </div>	
    <div class="form-group">
      <label for="Types">Types</label>
      <select name="Types"  class="form-control" id="Types">
        <option value="Admin">Admin</option>
        <option value="User">User</option>
      </select>
      
    </div>
    <div>	
    <input type="hidden" class="form-control" name="IdMemb" id="IdMemb">	
    <input type="hidden" class="form-control" name="hid" id="hid">
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
<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Edit Member</h4>
  </div>
  <form method="post" action="" id="editForm">
  <div class="modal-body">        
    <div class="form-group">
      <label for="editNomMemb">Nom </label>
      <input type="text" class="form-control" id="editNomMemb" name="editNomMemb" placeholder="nom">
    </div>
    <div class="form-group">
      <label for="editPrenomMemb">Prenom</label>
      <input type="text" class="form-control" id="editPrenomMemb" name="editPrenomMemb" placeholder="Prenom">
    </div>	
    <div class="form-group">
      <label for="editEmailMemb">E mail</label>
      <input type="text" class="form-control" id="editEmailMemb" name="editEmailMemb" placeholder="Age">
    </div>	
    <div class="form-group">
      <label for="editMotPass">Mot de Passe </label>
      <input type="text" class="form-control" id="editMotPass" name="editMotPass" placeholder="">
    </div>	
    <div class="form-group">
      <label for="editTypes">Types</label>
      <input type="text" class="form-control" id="editTypes" name="editTypes" placeholder="Types">
    </div>	
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</div>
</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="removeMemberBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- removeMember -->
        </div>
    </div>

	





 
	<!-- jquery -->
  <script type="text/javascript" src="<?=base_url('assets/jquery/jquery.min.js');?>"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<!-- datatables -->
	<script type="text/javascript" src="<?=base_url('assets/datatables/datatables.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/sweetalert.min.js"></script>
	<!-- custom js -->
  
	
  <script>
    $(document).ready(function(){

      function showAllMembre(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>user_c/showAllMembre',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                                    '<td>'+data[i].NomMemb+'</td>'+
                                    '<td>'+data[i].PrenomMemb+'</td>'+
                                    '<td>'+data[i].EmailMemb+'</td>'+
                                    '<td>'+data[i].MotPass+'</td>'+
                                    '<td>'+data[i].Types+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-success item-edit" data-id="'+data[i].IdMemb+'" data-NomMemb="'+data[i].NomMemb+'" data-PrenomMemb="'+data[i].PrenomMemb+'" data-EmailMemb="'+data[i].EmailMemb+'" data-MotPass="'+data[i].MotPass+'" data-Types="'+data[i].Types+'" id="btnEdit" data-toggle="modal" data-target="#addMember"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete" id="btnDelete" data-id="'+data[i].IdMemb+'"><span class="glyphicon glyphicon-remove"></span></a>'+
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

        showAllMembre();


   function addMembre(){
            var data = $('#forme').serialize();
            var notif = "";
            notif = "Enregistrement réussi avec succès";
                $.ajax({
                    type: 'ajax',
                    method: 'POST',
                    url: '<?php echo base_url() ?>user_c/addMembre',
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                            showAllMembre();
                            swal("Successful", notif, "success");
                    },
                    error: function(){
                        alert('Il y a une erreur');
                    }
                });
        }  
        
        $(document).on("click", "#btnEdit", function(){

          var nom=$(this).attr('data-NomMemb');
          var prenom=$(this).attr('data-PrenomMemb');
          var email=$(this).attr('data-EmailMemb');
          var motpass=$(this).attr('data-MotPass');
          var types=$(this).attr('data-Types');
          var id = $(this).attr('data-id');
          
          $("#NomMemb").val(nom);
          $("#PrenomMemb").val(prenom);
          $("#EmailMemb").val(email);
          $("#MotPass").val(motpass);
          $("#Types").val(types);
          $("#IdMemb").val(id);

          $("#hid").val("modifier");
          });


          $(document).on("click", "#btnDelete", function(){
            var id = $(this).attr('data-id');
                  $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>user_c/Delete',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                            showAllMembre();
                    },
                    error: function(){
                        alert('Error deleting');
                    }
                });
              
              });
 
     
        function updateMembre(){
            var data = $('#forme').serialize();
            var notif = "";
            notif = "Enregistrement réussi avec succès";
                $.ajax({
                    type: 'ajax',
                    method: 'POST',
                    url: '<?php echo base_url() ?>user_c/updateMembre',
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        
                        showAllMembre();
                    },
                    error: function(){
                        swal("Successful", notif, "success");
                        showAllMembre();
                    }
                });


          function vider(){
          $("#NomMemb").val("");
          $("#PrenomMemb").val("");
          $("#EmailMemb").val("");
          $("#MotPass").val("");
          $("#Types").val("");
          $("#IdMemb").val("");

        }    

        }
        $(document).on("click", "#btnSave", function(){
            var key=$("#hid").val();

                if(key=="modifier"){
                updateMembre();
                vider();
            }else{
                
                addMembre();
                vider();
            } 
        });
        




      });

  
  

$(document).ready(function() {
  var table;
	table = $("#table").DataTable({
		
	});	
});

  
  
  
  
  
  
  </script>




</body>
</html>