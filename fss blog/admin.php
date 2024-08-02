<?php

session_start();

// Check if the admin is logged in
if (!isset($_SESSION['username'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch the article content based on the ID (You'd use a database here)
$articleId = $_GET['id']; // Get the article ID from URL
// Fetch article content based on $articleId

// Update the article content based on the form submission (You'd use a database here)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newTitle = $_POST['title']; // Get the updated title from form
    $newContent = $_POST['content']; // Get the updated content from form

    // Update the article content in the database using $articleId, $newTitle, and $newContent
    // Perform database operations here

    // Redirect back to admin panel after updating
    header('Location: admin_panel.php');
    exit();
}
?>