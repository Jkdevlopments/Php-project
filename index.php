<?php
// Check if the GET request parameters are set
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    // Display the values
    echo "<h2>User Details</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
} else {
    echo "Please provide both name and age.";
}
?>