<?php include('connection.php'); ?>

<?php

// Starting a session
session_start();

// Log In & Sign Up form variables
$nameErr = '';
$emailErr = '';
$passwordErr = '';
$confPassErr = '';

$errors = [];
$success = [];

// Register logic
if(isset($_POST['register'])){
    $userName = $_POST['userName'];
    $yourEmail = $_POST['email'];
    $password = $_POST['password'];
    $confPassword = $_POST['confPassword'];

    if(empty($userName)){
        $nameErr = 'Empty username!';
    }
    if(empty($yourEmail)){
        $emailErr = 'Empty email!';
    }
    if(empty($password)){
        $passwordErr = 'Empty password!';
    }

    if($password !== $confPassword){
        $confPassErr = 'Password not match!';
    }

    if(!empty($userName) && !empty($password) && !empty($password)){
        $register = "INSERT INTO users (username, email, password) VALUES ('$userName', '$yourEmail', '$password')";
        if(mysqli_query($conn, $register)){
            array_push($success, 'Successfully added data!'); 
        } else {
            array_push($errors, mysqli_error($conn));
        }
    }
}

// Login logic
if(isset($_POST['login'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if(empty($userName)){
        $nameErr = 'Empty username!';
    }

    if(empty($password)){
        $passwordErr = 'Empty password!';
    }

    if(!empty($userName) && !empty($password)){
        $login = "SELECT * FROM users WHERE username = '$userName' AND password = '$password'";
        $result = mysqli_query($conn, $login);

        $data = mysqli_fetch_assoc($result);

        if($data['status'] == 'admin'){
            $_SESSION['admin'] = $userName;
            $_SESSION['success'] = 'Login success!';
            header('Location: admin-page.php'); 
        } 
        if($data['status'] == 'user') {
                $_SESSION['userName'] = $userName;
                $_SESSION['success'] = 'Login success!';
                header('Location: ../index.php');
        } 
        if($data == FALSE){
            $nameErr = 'Wrong username!';
            $passwordErr = 'Wrong password!';
        }
    }
}

// if ($userName == 'admin' && $password == 12345){
//     $login = "SELECT * FROM users WHERE username = 'admin' AND password = 12345";
//     $result = mysqli_query($conn, $login);
//         if (mysqli_num_rows($result) > 0) {
//             $_SESSION['admin'] = $userName;
//             $_SESSION['success'] = 'Login success!';
//             header('Location: ../admin-page.php');
// }
    

if(isset($_POST['addItems'])){
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $image = $_POST['image'];

    if(!empty($itemName) && !empty($itemPrice) && !empty($image)){
        $addItem = "INSERT INTO items (itemName, itemPrice, image) VALUES ('$itemName', '$itemPrice', '$image')";
        if(mysqli_query($conn, $addItem)){
            array_push($success, 'Successfully added data!'); 
        } else {
            array_push($errors, mysqli_error($conn));
        }
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM items WHERE id = $id";
    if(mysqli_query($conn, $delete) == TRUE){
        echo 'Items deleted successfully';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['userName']);
    header('location: login.php');
}

?>