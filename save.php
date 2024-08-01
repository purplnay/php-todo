<?php

// Make sure the `text` field is available
if (isset($_POST['text'])) {
    // Get the text
    $text = $_POST['text'];

    // Remove any HTML from the text
    $text = htmlspecialchars($text);

    // Add the new todo to the todos.txt file
    file_put_contents('todos.txt', "$text\n", FILE_APPEND);
}

// Redirect to index.php
header('Location: /index.php');
