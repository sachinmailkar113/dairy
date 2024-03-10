<?php
include("userloginconnection.php");

if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Assuming your connection is in $conn
    $sql = "SELECT * FROM signup WHERE username=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1){
        header("Location: userwelcome.php");
        exit();
    } else {
        echo '<script>
            alert("Login failed. Invalid username or password.");
            window.location.href="userlogin.php";
        </script>';
    }
}
?>
