<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Welcome to CodeIgniter</title>
	<!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/paging.css');?>">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/datatables/datatables.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('style/index.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('style/w3.css');?>">
<style>

</style>


</head>
<body>
	  
	   <div class="row w3-container">
      <img src="<?=base_url('assets/image/menuPrinc.jpg');?>" alt="" style=" height:140px;width:100%;">
      <button type="button" class="btn btn-success" style="margin-top:-180px;margin-left:88%;"><span class="glyphicon glyphicon-off"></span><a href="<?=base_url('Login/Logout');?>">Deconnexion</a></button>
      
     </div>
     <div class="col-sm-2" style="border-right: solid 1px rgb(236,225,255);"  >
        <div class="sidenav shadow" >
            <form class="search">
                <input type="text" placeholder="Rechercher des catégories..." id="myInput" class="form-control " style="width: 210px;margin-left: 10px;">
            </form>
            <div class="title-main text-center">
                <h3>

    <b>CATEGORIES DES LIVRES</b></h3>
           
            </div><br/><br/>
            <div id="menu" style="border-left:;">
                <a href="http://localhost/biblio/index.php/c_accueil">
                <b> <img src="<?=base_url('assets/image/menu2.jpg');?>" style="width: 50px;height: 50px;position: absolute;left: 85px;top: 105px;border-radius: 50%;"></b> </a>
                <ul class="menu" id="ulcherche">

                </ul>
           </div>
        </div>
      </div>
    <div class="" id="mena">
		   	<div class="col-md-3" style="margin-left:350px;">
		   		<div class="form-group" >
				    <label class="control-label" for="search-input">Recherche</label>
				       <div class="input-group">

				         <input class="form-control" type="search" placeholder="Recherche par titre des livres..." 
                 name="search-input" id="recher" style="border-radius: 20px;height: 25px;width: 300px;text-align: center;" />
				       </div>
          </div>
          <div id="my" style="text-align:center">

          </div>
		  </div>
 </div>
<div class="col-md-8" id="content">
  <div id="view">

  </div>
  <div>
   <ul id="ulmenu" class="list-group">

   </ul>
   </div>
  
<div class="col-md-8">
  
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:1080px;height:450px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?=base_url('assets/image/menu1.jpg');?>" alt="Los Angeles" style="width:800px;height:450px;margin-left:130px;">
        <div class="carousel-caption">
          <h1>BIENVENUE</h1>
          <p>A la bibliothèque Numérique</p>
        </div>
      </div>

      <div class="item">
        <img src="<?=base_url('assets/image/menu3.png');?>" alt="Chicago" style="width:800px;height:450px;margin-left:130px;">
        <div class="carousel-caption">
        <h1>BIENVENUE</h1>
          <p>A la bibliothèque Numérique</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?=base_url('assets/image/livre.png');?>" alt="New York" style="width:800px;height:450px;margin-left:130px;">
        <div class="carousel-caption">
          <h1>BIENVENUE</h1>
          <p>A la bibliothèque Numérique</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
	<!-- jquery -->
  
	<script type="text/javascript" src="<?=base_url('assets/jquery/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/jquery/pdfobject.min.js');?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/jquery/paginate.js');?>"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<!-- datatables -->
	<script type="text/javascript" src="<?=base_url('assets/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.11.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/pdf/jquery.media.js"></script>
  <script src="<?php echo base_url();?>assets/js/pdf/pdf-active.js"></script>

	<!-- custom js -->
  <script type="text/javascript" src="custom/js/home.js"></script>

  
  
    <script>
	 $(document).ready(function(){
		//function
        function filterCat(idCat){
            $.ajax({
                type: 'POST',
                url: 'http://localhost/biblio/index.php/welcome/getAllCat',
                async: false,
                data: {id: idCat},
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    
                    for(i=0; i<data.length; i++){
                        

						html +='<li class="list-group-item"><div class="col-md-12"  id="titre"><div class="w3-card-4" ><div class="row"><div class="col-md-2"> <header class="container">'+
    '<h3 class="text-center"><img src="<?php echo base_url() ?>'+data[i].ImageLivre+'" class="w3-round" width="120" height="120"  align="left"> </h3>'+

            '</header>'+
            '</div>'+
            '<div class="col-md-10 w3-container">'+
            '<div class="w3-container" style="background-color: #dcdde1!important">'+
            '<h3 style="font-family:times;color:#c81616;">'+data[i].TitreLiv+' </h3>'+
            '<h5 style="font-family:italique;">Auteur :'+data[i].AuteurLiv+'</h5>'+
            '<h5 style="font-family:italique;">Edition :'+data[i].EditionLiv+'</h5>'+
            '<h5 style="font-family:italique;">Pages :'+data[i].PageLiv+'</h5>'+
            '<details>'+
            '<h5 style="font-family:times;">RESUME : '+data[i].Resume+' </h5>'+
            '</details>'+
            '</div>'+
            
            '</div></div></div></div>'+
            '<div class="row">'+
            '<div class="col-md-2">'+
            '<button type="button" id="consult"  class="btn btn-success" style="margin-left:45px;"><a href="<?php echo base_url() ?>'+data[i].ImageLivre+'">'+
            'Consulter</a></button>'+
           
            '</div>'+
            '<div class="col-md-10">'+
             
            '</div>'+
            '</div></li>';
                    }

                    $('#content').html(html);
                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
        }
        function recherche(){
          var ti = $('#recher').val();
            $.ajax({
                type: 'GET',
                url: 'http://localhost/biblio/index.php/welcome/recherche',
                data: {titre: ti},
                async: false,
                
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    
                    for(i=0; i<data.length; i++){
                        

						html +='<li class="list-group-item"><div class="col-md-12"  id="titre"><div class="w3-card-4" ><div class="row"><div class="col-md-2"> <header class="container">'+
    '<h3 class="text-center"><img src="<?php echo base_url() ?>'+data[i].ImageLivre+'" class="w3-round" width="120" height="120"  align="left"> </h3>'+

            '</header>'+
            '</div>'+
            '<div class="col-md-10 w3-container">'+
            '<div class="w3-container" style="background-color: #dcdde1!important">'+
            '<h3 style="font-family:times;color:#c81616;">'+data[i].TitreLiv+' </h3>'+
            '<h5 style="font-family:italique;">Auteur :'+data[i].AuteurLiv+'</h5>'+
            '<h5 style="font-family:italique;">Edition :'+data[i].EditionLiv+'</h5>'+
            '<h5 style="font-family:italique;">Pages :'+data[i].PageLiv+'</h5>'+
            '<details>'+
            '<h5 style="font-family:times;">RESUME : '+data[i].Resume+' </h5>'+
            '</details>'+
            '</div>'+
            
            '</div></div></div></div>'+
            '<div class="row">'+
            '<div class="col-md-2">'+
            '<button type="button" id="consult"  class="btn btn-success" style="margin-left:45px;"><a href="<?php echo base_url() ?>'+data[i].ImageLivre+'">'+
            'Consulter</a></button>'+
           
            '</div>'+
            '<div class="col-md-10">'+
             
            '</div>'+
            '</div></li>';
                    }

                    $('#content').html(html);
                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
        }
         $("#recher").on("keyup", function() {
          recherche();
         });

        
        
		
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
                        html +=
                        '<li style="text-align:center;" data-id="'+data[i].IdCat+'">  <a id="counte" class="cate" data-id="'+data[i].IdCat+'"><span>'+data[i].NomCat+'</span> </a></li>';
                                
                        
                    }

                    $('.menu').html(html);
                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
        }
        showAllLivre();
        $(".cate").on("click", function(){
            filterCat($(this).attr('data-id'));
            count($(this).attr('data-id'));
        })

        function count(cat){
            
            $.ajax({
                type: 'GET',
                url: 'http://localhost/biblio/index.php/welcome/count',
                data : {cat:cat},
                async: false,
                dataType: 'json',
                success: function(data){
                    var html;
                    html ="<h4>Les Nombres d'un categorie ("+data+")</h4>"
                    $("#my").html(html);
                },
                complete : function(data){
                    
                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
        }

    

        function showCount(){
            $.ajax({
                type: 'GET',
                url: 'http://localhost/biblio/index.php/welcome/select',
                async: false,
                dataType: 'json',
                success: function(data){
                    var i;
                    for(i=0; i<data.length; i++){
                            count(data[i].IdCat);

                    }
                },
                complete : function(){

                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
		}
       function showAllCat(){
            $.ajax({
                type: 'ajax',
                url: 'http://localhost/biblio/index.php/welcome/getAllCat',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    
                    for(i=0; i<data.length; i++){
                        
						html +='<div class="col-md-12"><div class="w3-card-4"><div class="row"><div class="col-md-2"> <header class="container">'+
    '<h3 class="text-center"><img src="<?php echo base_url() ?>'+data[i].ImageLivre+'" class="w3-round" width="120" height="120"  align="left"> </h3>'+

            '</header>'+
            '</div>'+
            '<div class="col-md-10">'+
            '<div class="w3-container" style="background-color: #dcdde1!important">'+
            '<h3>'+data[i].TitreLiv+' </h3>'+
            '<p>Auteur :'+data[i].AuteurLiv+'</p>'+
            '<p>Edition :'+data[i].EditionLiv+'</p>'+
            '<h4>RESUME : '+data[i].Resume+'</h4>'+
            '</div>'+
            
            '</div></div></div></div>';
                    }

                    $('#content').html(html);
                },
                error: function(){
                    alert('Il y a une erreur');
                }
			});
		}
	})
	</script>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#ulcherche li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  
});
$(document).ready(function(){
  $("#myInputCat").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#titre").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
 


});



</script>


</body>
</html>     