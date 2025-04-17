<?php include '../includes/header.php'; ?>

<h2>Delete a Message</h2>

<form action="delete.php" method="POST">
    <input type="number" name="delete_id" placeholder="Enter String ID to delete" required>
    <button type="submit" name="delete">Delete Message</button>
</form>

<br>
<a href="showAll.php">Back to All Messages</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);

    $conn = new mysqli('localhost', 'root', '', 'final');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $delete_sql = "DELETE FROM messages WHERE string_id = $delete_id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "<h3>Message with String ID $delete_id deleted successfully!</h3>";
    } else {
        echo "Error deleting message: " . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>
