<?php
// Include database connection
include 'db_connection.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    mysqli_query($conn, $sql);
    
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>
    <form action="" method="POST">
        <label>Title:</label>
        <input type="text" name="title" required><br>
        <label>Description:</label>
        <textarea name="description"></textarea><br>
        <button type="submit">Create Task</button>
    </form>
</body>
</html>

