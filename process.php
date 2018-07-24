<?php include 'database.php';?>




<?php 
    
    $heading = $_POST['heading'];
    $content= $_POST['content'];
    $source = $_POST['source'];
    $image = $_FILES['fileToUpload']['name'];
    
  

    


mysqli_query ($connect,"INSERT INTO admin(heading , content, source, image)
				VALUES('$heading' , '$content', '$source', '$image')");
				
		
		
		
				

			

$target_dir = "blogimage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }




		

header("Location: submit.php");		



				
 // Moving Uploaded file





?>




