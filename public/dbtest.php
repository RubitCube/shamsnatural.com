<?php
// Simple MySQL connection test

$servername = "localhost";
$username = "shamsgiz_dealeruser";
$password = "QwedsA@@123";
$database = "shamsgiz_dealer_stock_management";

echo "<h3>🔍 Testing MySQL Connection...</h3>";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("<b style='color:red;'>❌ Connection failed:</b> " . $conn->connect_error);
} else {
    echo "<b style='color:green;'>✅ Connected successfully to:</b> $database<br>";

    // Try to fetch table list
    $result = $conn->query("SHOW TABLES");
    if ($result) {
        echo "<b>Tables:</b><br><ul>";
        while ($row = $result->fetch_array()) {
            echo "<li>" . htmlspecialchars($row[0]) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<b>No tables found or no privileges to list tables.</b>";
    }
}
$conn->close();
?>
