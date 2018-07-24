<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

  

?>

<?php
$db_host = 'localhost'; // Server Name
$db_user = ''; // Username
$db_pass = ''; // Password
$db_name = ''; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM admin';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


function runMyFunction($id) {

$db_host = 'localhost'; // Server Name
$db_user = 'betaform'; // Username
$db_pass = 'prem@123'; // Password
$db_name = 'betaform'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$sql = "DELETE FROM admin WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header('Location: data.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


  
}

  if (isset($_GET['id'])) {
    runMyFunction($_GET['id']);
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
	<style>
           table, th, td {
               border: 1px solid black;
               border-collapse: collapse;
          }
          
          th, td {
               padding: 5px;
               text-align: left;
          }
       </style>
</head>

<body>
   <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><span>Generico</span> Admin</a>	
			</div>
		</div>
   </nav>
	
		
   <div class="row">
	   <div class="col-lg-12">
		<button type="button" class="btn btn-primary"><a href = "index.php" style = "color:black;" class="page-header">Upload here </a> </button>
		<button type="button" class="btn btn-primary"><a href = "#upload"  style = "color:black;" class="page-header">Delete </a> </button>
	   </div>		
   </div>
   <br>


		
				
					
					
<input  style="width:100%;padding:10px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for heading.." title="Type in a name">
<br><br>
			           
<table style="width:100%" id="myTable">
  
  <thead>
    <tr>
      <th scope="col">Heading</th>
      <th scope="col">Content</th>
      <th scope="col">Source</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
   <?php foreach($query as $r): ?>
  <tbody>
    <tr>
      <td><?php echo $r['heading'];?></td>
       <td><?php echo $r['content'];?></td>
      <td><?php echo $r['source'];?></td>
      <td><?php echo $r['image'];?></td>
      <td><a href='data.php?id=<?php echo $r['id'];?>'>Delete</a></td>
    </tr>
   
  </tbody>
   <?php endforeach; ?>
</table>	    
					 
					
			                  
			          
				       
			
	  </div>
     </div>
</div>
	
	
	
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
	
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
