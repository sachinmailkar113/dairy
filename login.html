<?php
include("connection.php");

if(isset($_POST["submit"])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Assuming your connection is in $conn
    $sql = "SELECT * FROM login WHERE username=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1){
        header("Location: welcome.php");
        exit();
    } else {
        echo '<script>
            alert("Login failed. Invalid username or password.");
            window.location.href="index.php";
        </script>';
    }
}
?>
