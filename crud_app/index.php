<?php
// Include database connection
include 'db_connection.php';

// Fetch tasks from the database
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

// Display tasks
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="create.php">Add New Task</a>
    <ul>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <li>
                <strong><?php echo $row['title']; ?></strong>
                <p><?php echo $row['description']; ?></p>
                <small>Created: <?php echo $row['created_at']; ?></small>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>

