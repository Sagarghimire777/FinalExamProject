<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Exam Project</title>

    <?php
    $path = (strpos($_SERVER['PHP_SELF'], 'php/') !== false) ? '../css/style.css' : 'css/style.css';
    ?>
    <link rel="stylesheet" href="<?php echo $path; ?>">
</head>
<body>
