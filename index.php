<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

  

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generico</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>

	
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand"><span>Generico</span> Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	
		
	<div class="row">
	   <div class="col-lg-12">
		<button type="button" class="btn btn-primary"><a href = "#upload" style = "color:black;" class="page-header">Upload here </a> </button>
		<button type="button" class="btn btn-primary"><a href = "data.php"  style = "color:black;" class="page-header">Delete </a> </button>
	   </div>		
	</div><!--/.row-->
	<br>

		
				<div class="panel panel-default" id="upload">
					<div class="panel-body" id="submitform">
					 <form class="form-horizontal" action="process.php" method="post" enctype="multipart/form-data">
							<fieldset>
												
								
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="heading" >Heading</label>
									<div class="col-md-6">
									 
									<input type="text" name="heading" id="heading" class="form-control" required>
									</div>
								</div>
								
								<!-- Email input-->
							 	<div class="form-group">
									<label class="col-md-3 control-label" for="file" >Image</label>
									<div class="col-md-6">
									 
								<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
									</div>
								</div> 
								
								<!-- content-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="source" >Source</label>
									<div class="col-md-6">
									 
									<input type="text" name="source" id="source" class="form-control" >
									</div>
								</div>
								
								
							
								
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="content">Content</label>
									<div class="col-md-6">
										<textarea class="form-control" id="content" name="content" placeholder="Please describe about the event/campaign in brief here..." rows="5" ></textarea>
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button name = "submit" type="submit" class="btn buttonsubmit btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
						
						
						
						
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
       
</body>
</html>
