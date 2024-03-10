<?php
include("connectionforsearch.php");

if(isset($_GET['search_query'])) {
    // Retrieve the search query from the form
    $search_query = $_GET['search_query'];

    // Perform database query
    // Example:
    $sql = "SELECT * FROM admin_clients WHERE name LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);
   // Replace "users" with your actual table name and "name" with the column containing user names

    //Example for printing results

    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Id: " . $row['id'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        // Add other fields you want to display
        echo "<br>";
    }


mysqli_close($conn);
}
?>
