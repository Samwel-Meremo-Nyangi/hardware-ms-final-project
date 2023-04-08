<?php
// Get user input for username and password
$username = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
<?php
$host = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='hardwareproductsmanagementsystem';

try {
    $pdo = new PDO("localhost=$host;hardwareproductsmanagementsystem=$dbname",$dbuser,$dbpass);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}

// Execute a SQL query to check if the entered username and password match any record
$stmt = $pdo->prepare("SELECT * FROM registration WHERE email = $email AND password = $password");
$stmt->execute([$email, $password]);

// If a record is found, print "Welcome", otherwise print "Retry"
if ($stmt->fetch()) {
    echo "Welcome";
} else {
    echo "Retry";
}
?>
