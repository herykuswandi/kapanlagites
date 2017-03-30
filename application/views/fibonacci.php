<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hery Kuswandi - Fibonacci</title>
 

	 <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />

</head>
<body>

<div id="container">
	<h1>Deretan Fibonacci</h1>
	<div class="hr-content" id="content">
		

	</div>

	<div class="hr-nav">
		<button class="btn btn-primary" id="prev">
				Prev			
		</button>
		<button class="btn btn-primary" id="next">
				Next			
		</button>

	</div>

<h4>* Catatan : program harus dijalankan di link http://localhost/hery_tes/<br/>jika Program tidak bisa jalan, pastikan  nama folder di htdocs anda adalah "hery_tes" atau sesuaikan nama folder di config/config.php pada line 26 : 
$config['base_url']
</h4>
 
</div>

</body>
   
<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
   
    <script type="text/javascript">
    	
    	var page=1;
    	function next_fibonacci(){
    		   $.ajax({
		        url: 'index.php/fibonacci/content/?page='+page,
		        type: "get",
		        success: function(data){
		           $("#content").append(data);
		           page++;
		        }
		      });

    	}

    	function remove_fibonacci(){
			$(".hr-ul").last().remove();
			   page--;
		}

    	$(function(){  
    		next_fibonacci();

		   $("#next").click(function(e){
		      e.preventDefault();   
				next_fibonacci();
		   });

		   $("#prev").click(function(e){
		      e.preventDefault();   
		      remove_fibonacci();
		   });
		});  


    </script>
</html>