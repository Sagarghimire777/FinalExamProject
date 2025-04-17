<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Exam Project</title>

    <?php
    $path = (strpos($_SERVER['PHP_SELF'], 'php/') !== false) ? '../' : '';
    ?>
    <link rel="stylesheet" href="<?php echo $path; ?>css/style.css">

    <!-- Local Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $path; ?>img/image.png">

    <style>
        /* Simple Header Styling */
        .header {
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            border-bottom: 2px solid #a6192e;
            margin-bottom: 20px;
        }
        .header img {
            height: 40px;
            margin-right: 15px;
        }
        .header a {
            text-decoration: none;
            color: #a6192e;
            font-size: 22px;
            font-weight: bold;
        }
        .header a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="header">
    <img src="<?php echo $path; ?>img/image.png" alt="Algoma Logo">
    <a href="<?php echo $path; ?>index.php">Home</a>
</div>
