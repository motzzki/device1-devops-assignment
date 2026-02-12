<?php
// Database connection
$host = getenv('DB_HOST') ?: 'mysql';
$user = getenv('DB_USER') ?: 'appuser';
$pass = getenv('DB_PASS') ?: 'apppass';
$db = getenv('DB_NAME') ?: 'device_app';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create table if not exists
    $pdo->exec("CREATE TABLE IF NOT EXISTS health_checks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        check_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        status VARCHAR(50)
    )");
    
    // Insert health check
    $pdo->exec("INSERT INTO health_checks (status) VALUES ('healthy')");
    
    // Get count
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM health_checks");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "<h1>Device Application - Health Check</h1>";
    echo "<p>Status: <strong style='color: green;'>HEALTHY</strong></p>";
    echo "<p>Database Connection: <strong style='color: green;'>SUCCESS</strong></p>";
    echo "<p>Total Health Checks: " . $result['count'] . "</p>";
    echo "<p>PHP Version: " . phpversion() . "</p>";
    echo "<p>Server Time: " . date('Y-m-d H:i:s') . "</p>";
    
} catch(PDOException $e) {
    echo "<h1>Device Application - Health Check</h1>";
    echo "<p>Status: <strong style='color: red;'>UNHEALTHY</strong></p>";
    echo "<p>Database Connection: <strong style='color: red;'>FAILED</strong></p>";
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
?>
