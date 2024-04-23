<?php
// Include database connection
include 'db_connection.php';

// Handle task deletion
$id = $_GET['id'] ?? '';
$sql = "DELETE FROM tasks WHERE id = $id";
mysqli_query($conn, $sql);

header('Location: index.php');
exit;
?>

