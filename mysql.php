<?php
// MYSQL DATABASES - Connect to MySQL and list all databases
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test_db"; // Declare the database name as a variable

// MYSQL CONNECT
// $conn = mysqli_connect($server, $username, $password, $dbname);
$conn = mysqli_connect($server, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.<br>";


// // MYSQL DATABASES - Connect to MySQL and list all databases
// $server = "localhost";
// $username = "root";
// $password = "";

// // MYSQL CONNECT
// $conn = mysqli_connect($server, $username, $password);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully.<br>";



// MYSQL CREATE DATABASE
// $dbname = "test_db";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database
mysqli_select_db($conn, $dbname);

// MYSQL CREATE TABLE
$table = "users";
$sql = "CREATE TABLE IF NOT EXISTS $table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// MYSQL INSERT DATA
$name = "John Doe";
$email = "john.doe@example.com";
$sql = "INSERT INTO $table (name, email) VALUES ('$name', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully.<br>";
} else {
    echo "Error inserting record: " . mysqli_error($conn) . "<br>";
}

// MYSQL GET LAST ID
$last_id = mysqli_insert_id($conn);
echo "Last inserted ID: $last_id<br>";

// MYSQL INSERT MULTIPLE
$sql = "INSERT INTO $table (name, email) VALUES 
    ('Alice', 'alice@example.com'),
    ('Bob', 'bob@example.com')";
if (mysqli_query($conn, $sql)) {
    echo "Multiple records inserted successfully.<br>";
} else {
    echo "Error inserting multiple records: " . mysqli_error($conn) . "<br>";
}

// MYSQL PREPARED
$stmt = mysqli_prepare($conn, "INSERT INTO $table (name, email) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $prepared_name, $prepared_email);
$prepared_name = "Charlie";
$prepared_email = "charlie@example.com";
mysqli_stmt_execute($stmt);
echo "Prepared statement executed successfully.<br>";

// MYSQL SELECT DATA
$sql = "SELECT * FROM $table";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found.<br>";
}

// MYSQL WHERE
$sql = "SELECT * FROM $table WHERE name = 'Alice'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Found: " . $row["name"] . "<br>";
}

// MYSQL ORDER BY
$sql = "SELECT * FROM $table ORDER BY name ASC";
$result = mysqli_query($conn, $sql);
echo "Ordered list:<br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "<br>";
}

// MYSQL DELETE DATA
$sql = "DELETE FROM $table WHERE name = 'Alice'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully.<br>";
}

// MYSQL UPDATE DATA
$sql = "UPDATE $table SET email = 'newemail@example.com' WHERE name = 'Bob'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully.<br>";
}

// MYSQL LIMIT DATA
$sql = "SELECT * FROM $table LIMIT 2";
$result = mysqli_query($conn, $sql);
echo "Limited results:<br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "<br>";
}

// Close the connection
mysqli_close($conn);
?>