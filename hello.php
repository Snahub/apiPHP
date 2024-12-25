<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the 'myname' field is set
    if (isset($_POST['myname'])) {
        // Retrieve the value and sanitize it
        $text = htmlspecialchars(trim($_POST['myname']));
        
        // Output the retrieved task
        echo "Task added: " . $text;
    } else {
        echo "No task provided.";
    }
} else {
    echo "Invalid request.";
}
?>