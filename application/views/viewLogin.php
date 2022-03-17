    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>DEPENSE</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/ajax/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/style/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/ajax/jquery/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/css/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/w3.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles.css">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
        
    </head>
    <body style="font-family:arial;">
    <div class="container">

  <!-- Modal -->
          <form role="form" method="post" action="<?=base_url('login/identifier');?>">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nom d'usager</label>
              <input type="text" class="form-control" id="usrname" placeholder="Nom d'usager" name="login">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="password" class="form-control" id="psw" placeholder="Mot de passe" name="pw">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Connexion automatique</label>
            </div>
              <button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-off"></span> Connexion</button>
          </form>
</div>
 
<script>
$(document).ready(function(){
        $("#myModal").modal();
});
</script>
    </body>
    </html>