<?php
// Include database connection
include 'db_connection.php';

// Fetch task details
$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM tasks WHERE id = $id";
$result = mysqli_query($conn, $sql);
$task = mysqli_fetch_assoc($result);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";
    mysqli_query($conn, $sql);
    
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="" method="POST">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br>
        <label>Description:</label>
        <textarea name="description"><?php echo $task['description']; ?></textarea><br>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>

