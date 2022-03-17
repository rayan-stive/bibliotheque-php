<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
    <!-- Bootstrap Styles-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('style/style1.css');?>">
    <link href="<?php echo base_url();?>assets/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>assets/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url();?>assets/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo base_url();?>assets/assets/css/custom-styles.css" rel="stylesheet" />

	
	
	<link rel="stylesheet" type="text/css" href="">
    
</head>

<body>
        <div>
			<div class="menu" id="main">
            <nav>
			<img src="<?=base_url('assets/image/logo.jpg');?>" style="
			 width:90px ;margin-left:10px;border-radius:5px;height: 72px;position: absolute;top: 5px;" class="">
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
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row" id="">
                    <div id="livre">
					</div>
					<div id="membre">
					</div>
					<div id="cat">
					</div>
                    
                </div>
                 <div class="row">
                 <div class="col-md-9 col-sm-12 col-xs-12" hidden="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

                
				</div>
				</div>
                <!-- /. ROW  -->

			</div>   
            <!-- /. PAGE INNER  -->
     
    <!-- JS Scripts-->
    <!-- jQuery Js -->
	
    <script src="<?php echo base_url();?>assets/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>assets/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>assets/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?php echo base_url();?>assets/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
	<script>
	/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
    "use strict";


    $(document).ready(function () {

        $('#main-menu').metisMenu();
            
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
            var tt;
            
        function count(){
            
            $.ajax({
                type: 'GET',
                url: 'http://localhost/biblio/index.php/c_chart/countLivre',
                async: false,
                dataType: 'json',
                success: function(data){
					tt=data;
					var html;
					html ='<div class="col-md-4 col-sm-12 col-xs-12">'+
                        '<div class="panel panel-primary text-center no-boder bg-color-green">'+
                            '<div class="panel-body">'+
                                '<i class="fa fa-bar-chart-o fa-5x"></i>'+
                                '<h3>'+data+'</h3>'+
                            '</div>'+
                            '<div class="panel-footer back-footer-green">Nombres des livres</div>'+
                         
                        '</div>'+
                    '</div>'
					$("#livre").html(html);
                    
                },
                complete : function(data){
                    
                },
                error: function(){
                    alert('Il y a une erreur');
                }
            });
        }
		count();
		var aa;
            
        function countMemb(){
            
            $.ajax({
                type: 'GET',
                url: 'http://localhost/biblio/index.php/user_c/countMembre',
                async: false,
                dataType: 'json',
                success: function(data){
                   
					aa=data;
					var html;
				html='<div class="col-md-4 col-sm-12 col-xs-12">'+
                        '<div class="panel panel-primary text-center no-boder bg-color-red">'+
                            '<div class="panel-body">'+
                                '<i class="fa fa-user fa-5x"></i>'+
                                '<h3>'+data+'</h3>'+
                            '</div>'+
                            '<div class="panel-footer back-footer-red">Nombres des Membres</div>'+
                         
                        '</div>'+
                    '</div>'
					$("#membre").html(html);
                },
                complete : function(data){
                    
                },
                error: function(){
                    alert('Il y a une erreur');
                }
            });
        }
		countMemb();
		var bb;
            
        function countCategorie(){
            
            $.ajax({
                type: 'GET',
                url: 'http://localhost/biblio/index.php/c_chart/countCategorie',
                async: false,
                dataType: 'json',
                success: function(data){
					bb=data;
					var html;
					html='<div class="col-md-4 col-sm-12 col-xs-12">'+
                        '<div class="panel panel-primary text-center no-boder bg-color-green">'+
                            '<div class="panel-body">'+
                                '<i class="fa fa-book fa-5x"></i>'+
                                '<h3>'+data+'</h3>'+
                            '</div>'+
                            '<div class="panel-footer back-footer-green">Nombres des catégories</div>'+
                         
                        '</div>'+
                    '</div>'
					$("#cat").html(html);
                },
                complete : function(data){
                    
                },
                error: function(){
                    alert('Il y a une erreur');
                }
            });
        }
		countCategorie();



            Morris.Bar({
                element: 'morris-bar-chart',
                data: [{
                    y: '2006',
                    a: 100,
                    b: 90
                }, {
                    y: '2007',
                    a: 75,
                    b: 65
                }, {
                    y: '2008',
                    a: 50,
                    b: 40
                }, {
                    y: '2009',
                    a: 75,
                    b: 65
                }, {
                    y: '2010',
                    a: 50,
                    b: 40
                }, {
                    y: '2011',
                    a: 75,
                    b: 65
                }, {
                    y: '2012',
                    a: 100,
                    b: 90
                }],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                hideHover: 'auto',
                resize: true
            });

            /* MORRIS DONUT CHART
            ----------------------------------------*/
            Morris.Donut({
                element: 'morris-donut-chart',
                data: [{
                    label: "Nombres des livres",
                    value: tt
                }, {
                    label: "Nombres des membres",
                    value: aa
                }, {
                    label: "Nombres des categories",
                    value: bb
                }],
                resize: true
            });

            /* MORRIS AREA CHART
            ----------------------------------------*/

            Morris.Area({
                element: 'morris-area-chart',
                data: [{
                    period: '2010 Q1',
                    iphone: 2666,
                    ipad: null,
                    itouch: 2647
                }, {
                    period: '2010 Q2',
                    iphone: 2778,
                    ipad: 2294,
                    itouch: 2441
                }, {
                    period: '2010 Q3',
                    iphone: 4912,
                    ipad: 1969,
                    itouch: 2501
                }, {
                    period: '2010 Q4',
                    iphone: 3767,
                    ipad: 3597,
                    itouch: 5689
                }, {
                    period: '2011 Q1',
                    iphone: 6810,
                    ipad: 1914,
                    itouch: 2293
                }, {
                    period: '2011 Q2',
                    iphone: 5670,
                    ipad: 4293,
                    itouch: 1881
                }, {
                    period: '2011 Q3',
                    iphone: 4820,
                    ipad: 3795,
                    itouch: 1588
                }, {
                    period: '2011 Q4',
                    iphone: 15073,
                    ipad: 5967,
                    itouch: 5175
                }, {
                    period: '2012 Q1',
                    iphone: 10687,
                    ipad: 4460,
                    itouch: 2028
                }, {
                    period: '2012 Q2',
                    iphone: 8432,
                    ipad: 5713,
                    itouch: 1791
                }],
                xkey: 'period',
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['iPhone', 'iPad', 'iPod Touch'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });

            /* MORRIS LINE CHART
            ----------------------------------------*/
            Morris.Line({
                element: 'morris-line-chart',
                data: [{
                    y: '2006',
                    a: 100,
                    b: 90
                }, {
                    y: '2007',
                    a: 75,
                    b: 65
                }, {
                    y: '2008',
                    a: 50,
                    b: 40
                }, {
                    y: '2009',
                    a: 75,
                    b: 65
                }, {
                    y: '2010',
                    a: 50,
                    b: 40
                }, {
                    y: '2011',
                    a: 75,
                    b: 65
                }, {
                    y: '2012',
                    a: 100,
                    b: 90
                }],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                hideHover: 'auto',
                resize: true
            });


    });

}(jQuery));

	</script>
    

</body>

</html>