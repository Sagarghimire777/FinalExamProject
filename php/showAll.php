<?php include '../includes/header.php'; ?>

<h2>All Messages</h2>

<?php
$conn = new mysqli('localhost', 'root', '', 'final');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Corrected table name to "string_info"
$sql = "SELECT * FROM string_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li><strong>String ID: " . $row['string_id'] . "</strong> - " . htmlspecialchars($row['message']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No messages found.";
}

$conn->close();
?>

<h3>Delete a Message</h3>
<form action="showAll.php" method="POST">
    <input type="number" name="delete_id" placeholder="Enter String ID to delete" required>
    <button type="submit" name="delete">Delete Message</button>
</form>

<br>
<a href="../index.php">Enter New Message</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);

    $conn = new mysqli('localhost', 'root', '', 'final');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Corrected table name "string_info"
    $delete_sql = "DELETE FROM string_info WHERE string_id = $delete_id";

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
