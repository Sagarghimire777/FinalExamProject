<?php include 'includes/header.php'; ?>

<h2>Enter a New Message</h2>

<form action="index.php" method="POST">
    <input type="text" name="message" placeholder="Enter your message" required>
    <button type="submit">Submit</button>
</form>

<?php
// Connect to database
$conn = new mysqli('localhost', 'root', '', 'final');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    $message = $conn->real_escape_string($_POST['message']);
    $sql = "INSERT INTO string_info (message) VALUES ('$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Message saved successfully!</h3>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<br>
<a href="php/showAll.php">Show All Messages</a>

</body>
</html>
