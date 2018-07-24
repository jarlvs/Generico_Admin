<?php 
    session_start();

    // variable declaration
    $username = "";
   


    $errors = array(); 
    $_SESSION['success'] = "";

    // connect to database
    $db = mysqli_connect('localhost', '', '', '');

   

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        

        if (count($errors) == 0) {
           
           
            $getdataquery ="SELECT * FROM admin";
            $data = mysqli_query($db, $getdataquery);
            $row = mysqli_fetch_assoc($data);
   
            if ($username == "generico" && $password == "admin") { 
              
                $_SESSION['username'] = $username;
                $_SESSION['heading'] = $row['heading'];
                $_SESSION['content'] = $row['content'];
                $_SESSION['source'] = $row['source'];
                $_SESSION['image'] = $row['image'];
                
                header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
?>