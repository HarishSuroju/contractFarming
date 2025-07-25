<?php
$db = new SQLite3('my.db');

// Create a table
//$db->exec('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, name TEXT)');

// Insert a sample user
//$db->exec("INSERT INTO users (name) VALUES ('Sujan')");

// Fetch all users
$result = $db->query('SELECT * FROM users');

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "User: " . $row['name'] . "<br>";
}

$db->close();
?>
