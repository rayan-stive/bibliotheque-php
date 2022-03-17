<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

	<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<script type="<?=base_url('assets/jquery/jquery-2.1.4.min.js');?>"></script>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>
<div class="container">
	<div>
	 <div class="panel-group">
	 	
	 	
    <div class="panel panel-default" style="width: 1000px;margin-top: 90px;margin-left: 90px;height:400px;box-shadow :8px;">
      <div class="panel-heading" style="text-align: center;color:green;"><h3>Authentification</h3></div>
      <div class="row">
	 	<div class="col-md-6">
             <img style="width : 500px; weight :800px; " src="<?=base_url('assets/image/Rojo Logo.jpg');?>" alt="">
         </div>	


  <!-- Modal -->
       <div class="col-sm-6">
        <div class="modal-body" style="padding:40px 50px; ">
          <form role="form" method="">
            <div class="form-group">
              <label for="NomMemb"><span class="glyphicon glyphicon-user"></span> Nom d'utilisateur</label>
              <input type="text" class="form-control" id="NomMemb" placeholder="Nom d'utilisateur" name="login">
            </div>
            <div class="form-group">
              <label for="MotPass"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="password" class="form-control" id="MotPass" placeholder="Mot de passe" name="pw">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" onclick="swhowPass()" checked>Cacher le mot de passe</label>
            </div>
             <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Connexion</button>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>    
</div>
</div>
</div>
 
<script>
$(document).ready(function(){
        $("#myModal").modal();
});
function swhowPass(){
var x = document.getElementById("MotPass");
if(x.type === "password"){
x.type = "text"


} else{
  x.type = "password";
}

}
</script>

</body>
</html>