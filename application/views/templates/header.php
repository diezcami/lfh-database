
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<?php
		$this->load->helper('url');
		$this->load->helper('html');
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>">
	<title>Lights For Hope 2016 Database</title>
</head>
<body>

	<div class="navbar-default" role="navigation">

			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a href="<?php echo base_url('index.php')?>">
				  <?php
				  $logo = array(
				          'src'   => 'images/gangstar.png',
				          'width' => '50',
				          'height'=> '50',
						  'style' => 'margin-left:10px;'
				  );

				  echo img($logo);
				   ?>
			  </a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('index.php')?>">Lights For Hope 2016 Database</a>
				</div>


			  <ul class="nav navbar-nav navbar-right">
			  	<?php
			  		foreach($NavigationArray as $entry){
			  			echo "<li><a href='".$entry[1]."'>".ucfirst($entry[0])."</a></li>";
			  		}
			  	?>
			  </ul>

			</div><!-- /.navbar-collapse -->
	</div>
	<P>
