<?php
    


    $conn = mysqli_connect("localhost: 3308","root","root01","registration");

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * from user where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){

                $email = $row["email"];
                session_start();
                $_SESSION['email'] = $email;
            }
            header("Location: homepage.html");
        }
        else{

            echo "Invalid username or password";
       }


//     session_start(); 
//     include "register.php";

   
    
//     if (isset($_POST['email']) && isset($_POST['password'])) {
    
//         function validate($data){
//            $data = trim($data);
//            $data = stripslashes($data);
//            $data = htmlspecialchars($data);
//            return $data;
//         }
    
//         $email = validate($_POST['email']);
//         $password = validate($_POST['password']);


//         $sql = "SELECT * FROM user WHERE user_name='$email' AND password='$password'";

// 		$result = mysqli_query($conn, $sql);

// 		if (mysqli_num_rows($result) === 1) {
// 			$row = mysqli_fetch_assoc($result);
//            // if ($row['email'] === $email && $row['password'] === $password) {
//             	$_SESSION['user_name'] = $row['user_name'];
//             	$_SESSION['name'] = $row['name'];
//             	$_SESSION['id'] = $row['id'];
//             	header("Location: homepage.php");
// 		        exit();
//             // else{
// 			// 	header("Location: login.php?error=Incorect User name or password");
// 		    //     exit();
// 			 }
// 		// }
//         else{
// 			header("Location: login.php?error=Incorect User name or password");
// 	        exit();
// 		}
	
	
// }else{
// 	header("Location: login.php");
// 	exit();
// }

    
?>











