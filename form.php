<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "my-protfolio";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}
else{
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['Name'];
    $user_email = $_POST['Email'];
    $message = $_POST['Message'];
    $sql = "INSERT INTO `contact` ( `Name`, `Email`, `Message`) VALUES ('$username', '$user_email', '$message')";
    $result = mysqli_query($conn, $sql);
    
    if($result)
    {
        $showAlert = true;
        header("Location: /subham/My-Protfolio/#contact");
        // header("Location: /subham/My-Protfolio/#contact?signupsuccess=true");
        exit();
    }
    }
}
//     else{
//                 $showError = "You message cannot submit.....there is som problem "; 
    
//         }
// }
// header("Location:/subham/My-Protfolio/#contact?signupsuccess=false&error=$showError");

// }

    //     else{
    //         $showError = "Passwords do not match"; 
            
    //     }
    // }
    // header("Location:/subham/forum/index.php?signupsuccess=false&error=$showError");

?>